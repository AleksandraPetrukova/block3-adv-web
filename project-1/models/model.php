<?php

    class connectionObject {
        public function __construct(public $host, public $username, public $password, public $database) {
        }
    }

    class userModel {
        private $mysqli;
        private $connectionObject;
        public function __construct ($connectionObject) {
            $this->connectionObject = $connectionObject;
        }

        public function connect() {
            try {
                $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
                if ($mysqli->connect_error) {
                    throw new Exception('Could not connect: ' . $mysqli->connect_error);
                }
                return $mysqli;
            } catch (Exception $e) {
                // Log the exception or echo a detailed error message for debugging.
                error_log($e->getMessage());
                return false;
            }
        }

        public function selectSpecies(){
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM species");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function insertSpecies($name, $life_span, $description) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("INSERT INTO species (species_name, species_avg_lifespan, species_description) VALUES ('$name', '$life_span', '$description')");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }

        public function getSpeciesById($species_id) {
            $mysqli = $this->connect();
            if ($mysqli) {
                $result = $mysqli->query("SELECT * FROM species WHERE species_id = '$species_id'");
                $species = $result->fetch_assoc();
                $mysqli->close();
                return $species;
            } else {
                return false;
            }
        }

        public function updateSpecies ($species_id, $name, $life_span, $description) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("UPDATE species SET species_name = '$name', species_avg_lifespan = '$life_span', species_description = '$description' WHERE species_id = '$species_id'");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }
    }
    
    class petModel {
        private $mysqli;
        private $connectionObject;
        public function __construct ($connectionObject) {
            $this->connectionObject = $connectionObject;
        }

        public function connect() {
            try {
                $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
                if ($mysqli->connect_error) {
                    throw new Exception('Could not connect: ' . $mysqli->connect_error);
                }
                return $mysqli;
            } catch (Exception $e) {
                // Log the exception or echo a detailed error message for debugging.
                error_log($e->getMessage());
                return false;
            }
        }

        public function selectBreed(){
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM breeds");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function selectGender() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM gender");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function selectPets(){
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT pets.*, breeds.breed_name, species.species_name, gender.gender_name, maintenance.maintenance_name
                            FROM pets
                            NATURAL JOIN breeds
                            NATURAL JOIN species
                            NATURAL JOIN gender
                            NATURAL JOIN maintenance;");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function insertPet($pet_name, $breed_id, $pet_price, $pet_age, $gender_id, $pet_dob, $pet_health) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("INSERT INTO pets (pet_name, breed_id, pet_price, pet_age, gender_id, pet_dob, pet_health_info) VALUES ('$pet_name', '$breed_id', '$pet_price', '$pet_age', '$gender_id', '$pet_dob', '$pet_health')");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }

        public function deletePet($pet_id) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("DELETE FROM pets WHERE pet_id = '$pet_id'");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }

        public function getPetById($pet_id) {
            $mysqli = $this->connect();
            if ($mysqli) {
                $result = $mysqli->query("SELECT * FROM pets WHERE pet_id = '$pet_id'");
                $pet = $result->fetch_assoc();
                $mysqli->close();
                return $pet;
            } else {
                return false;
            }
        }

        public function updatePet($pet_id, $pet_name, $breed_id, $pet_price, $pet_age, $gender_id, $pet_dob, $pet_health) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("UPDATE pets 
                                SET pet_name = '$pet_name', breed_id = '$breed_id', pet_price = '$pet_price', 
                                    pet_age = '$pet_age', gender_id = '$gender_id', pet_dob = '$pet_dob', 
                                    pet_health_info = '$pet_health' 
                                WHERE pet_id = '$pet_id'");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }
    }

    class breedModel {
        private $mysqli;
        private $connectionObject;
        public function __construct ($connectionObject) {
            $this->connectionObject = $connectionObject;
        }

        public function connect() {
            try {
                $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
                if ($mysqli->connect_error) {
                    throw new Exception('Could not connect: ' . $mysqli->connect_error);
                }
                return $mysqli;
            } catch (Exception $e) {
                // Log the exception or echo a detailed error message for debugging.
                error_log($e->getMessage());
                return false;
            }
        }

        public function selectBreeds() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT breeds.*, species.species_name, maintenance.maintenance_name, avg_size.avg_size_name
                                            FROM breeds
                                            NATURAL JOIN avg_size
                                            NATURAL JOIN species
                                            NATURAL JOIN maintenance;");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function selectAvgSize() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM avg_size");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function selectSpecies(){
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM species");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function selectMaintenance() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM maintenance");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function insertBreed($breed_name, $avg_size_id, $species_id, $maintenance_id, $breed_description) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("INSERT INTO breeds (breed_name, avg_size_id, species_id, maintenance_id, breed_description) VALUES ('$breed_name', '$avg_size_id', '$species_id', '$maintenance_id', '$breed_description')");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }

        public function getBreedById($breed_id) {
            $mysqli = $this->connect();
            if ($mysqli) {
                $result = $mysqli->query("SELECT * FROM breeds WHERE breed_id = '$breed_id'");
                $breed = $result->fetch_assoc();
                $mysqli->close();
                return $breed;
            } else {
                return false;
            }
        }

        public function updateBreed($breed_id, $breed_name, $avg_size_id, $species_id, $maintenance_id, $breed_description) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("UPDATE breeds 
                                SET breed_name = '$breed_name', avg_size_id = '$avg_size_id', species_id = '$species_id', 
                                maintenance_id = '$maintenance_id', breed_description = '$breed_description' 
                                WHERE breed_id = '$breed_id'");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }
    }

    class toyModel {
        private $mysqli;
        private $connectionObject;
        public function __construct ($connectionObject) {
            $this->connectionObject = $connectionObject;
        }

        public function connect() {
            try {
                $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
                if ($mysqli->connect_error) {
                    throw new Exception('Could not connect: ' . $mysqli->connect_error);
                }
                return $mysqli;
            } catch (Exception $e) {
                // Log the exception or echo a detailed error message for debugging.
                error_log($e->getMessage());
                return false;
            }
        }

        public function selectToys() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM toys");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results;
            } else {
                return false;
            }
        }

        public function selectSpecies() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT * FROM species");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results; 
            } else {
                return false;
            }
        }

        public function selectToySpecies() {
            $mysqli = $this->connect();
            if($mysqli) {
                $result = $mysqli->query("SELECT *
                                    FROM toys
                                    NATURAL JOIN toy_species
                                    NATURAL JOIN species");
                while($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                $mysqli->close();
                return $results; 
            } else {
                return false;
            }
        }

        public function insertToySpecies($toy_name, $toy_price, $toy_description, $toy_amount, $species_id) {
            $mysqli = $this->connect();
        
            if ($mysqli) {
                // Insert into toys table
                $mysqli->query("INSERT INTO toys (toy_name, toy_price, toy_description, toy_amount) 
                                VALUES ('$toy_name', '$toy_price', '$toy_description', '$toy_amount')");
        
                // Get the last inserted toy_id
                $toyId = $mysqli->insert_id;
        
                // Insert into toy_species table
                $mysqli->query("INSERT INTO toy_species (toy_id, species_id) 
                                        VALUES ('$toyId', '$species_id')");
        
                $mysqli->close();
        
                return true;
            } else {
                return false;
            }
        }

        public function getToySpeciesById($toy_id) {
            $mysqli = $this->connect();
            if ($mysqli) {
                $result = $mysqli->query("SELECT toys.*, toy_species.species_id
                                            FROM toys
                                            NATURAL JOIN toy_species
                                            WHERE toys.toy_id = '$toy_id'");
                $toySpecies = $result->fetch_assoc();
                $mysqli->close();
                return $toySpecies;
            } else {
                return false;
            }
        }

        public function updateToySpecies($toy_id, $toy_name, $toy_price, $toy_description, $toy_amount, $species_id) {
            $mysqli = $this->connect();
    
            if ($mysqli) {
                // Update toys table
                $updateToyQuery = "UPDATE toys 
                                    SET toy_name = '$toy_name', toy_price = '$toy_price', 
                                        toy_description = '$toy_description', toy_amount = '$toy_amount' 
                                    WHERE toy_id = '$toy_id'";
                $mysqli->query($updateToyQuery);
    
                // Update toy_species table
                $updateSpeciesQuery = "UPDATE toy_species 
                                        SET species_id = '$species_id' 
                                        WHERE toy_id = '$toy_id'";
                $mysqli->query($updateSpeciesQuery);
    
                $mysqli->close();
    
                return true;
            } else {
                return false;
            }
        }

        public function deleteToySpecies($toy_id) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("DELETE FROM toy_species WHERE toy_id = '$toy_id'");
                $mysqli->query("DELETE FROM toys WHERE toy_id = '$toy_id'");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }
    }
?>