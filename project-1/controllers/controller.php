<?php

    include_once ("models/model.php");

    class Controller {
        private $model;
        private $petModel;
        private $breedModel;
        private $toyModel;

        public function __construct($connection) {
            $this->model = new userModel($connection);
            $this->petModel = new petModel($connection);
            $this->breedModel = new breedModel($connection);
            $this->toyModel = new toyModel($connection);
        }

        public function showSpecies () {
            $users = $this->model->selectSpecies();
            include 'views/home.php';
        }

        public function showForm () {
            include 'views/form.php';
        }

        public function add() {
            $name = $_POST['name'];
            $life_span = $_POST['life_span'];
            $description = $_POST['description'];
            if (!$name || !$life_span || !$description) {
                echo "<p>Fill all the fields!</p>";
                $this->showForm();
                return;
            }
            else if ($this->model->insertSpecies($name, $life_span, $description)) {
                echo "<p>Successfully added: $name, $life_span, $description!</p>";
            }
            else {
                echo "<p>Failed to add!</p>";
            }
            // $this->showSpecies();
        }

        public function updateSpeciesForm() {
            $species_id = $_POST['species_id'];
            $species = $this->model->getSpeciesById($species_id); // Add a method to fetch a species by ID
            include 'views/editSpecies.php';
        }

        public function updateSpecies() {
            if(isset($_POST['updateSpecies'])) {
                $species_id = $_POST['species_id'];
                $name = $_POST['species_name'];
                $avg_lifespan = $_POST['species_avg_lifespan'];
                $species_description = $_POST['species_description'];
        
                if ($this->model->updateSpecies($species_id, $name, $avg_lifespan, $species_description)) {
                    echo "<p>Successfully updated species with ID: $species_id</p>";
                } else {
                    echo "<p>Failed to update species with ID: $species_id</p>";
                }
            }
            $this->showSpecies();
        }

        public function showPets() {
            $pets = $this->petModel->selectPets();
            include 'views/pets.php';
        }

        public function showFormPet() {
            $breeds = $this->petModel->selectBreed();
            $genders = $this->petModel->selectGender();
            include 'views/formPet.php';
            
        }

        public function showControlPanel() {
            include 'views/controlPanel.php';
        }

        public function addPet() {
            $pet_name = $_POST['pet_name'];
            $breed_id = $_POST['breed_id'];
            $pet_price = $_POST['pet_price'];
            $pet_age = $_POST['pet_age'];
            $gender_id = $_POST['gender_id'];
            $pet_dob = $_POST['pet_dob'];
            $pet_health = $_POST['pet_health'];
            if ($this->petModel->insertPet($pet_name, $breed_id, $pet_price, $pet_age, $gender_id, $pet_dob, $pet_health)) {
                echo "<p>Successfully added: $pet_name, $breed_id, $pet_price, $pet_age, $gender_id, $pet_dob, $pet_health!</p>";
            }
            else {
                echo "<p>Failed to add!</p>";
            }
        }

        public function deletePet() {
            if(isset($_POST['deletePet'])) {
                $pet_id = $_POST['pet_id'];
                if ($this->petModel->deletePet($pet_id)) {
                    echo "<p>Successfully deleted pet with ID: $pet_id</p>";
                } else {
                    echo "<p>Failed to delete pet with ID: $pet_id</p>";
                }
            }
            // $this->showPets();
        }

        public function updatePet() {
            if(isset($_POST['updatePet'])) {
                $pet_id = $_POST['pet_id'];
                $pet_name = $_POST['pet_name'];
                $breed_id = $_POST['breed_id'];
                $pet_price = $_POST['pet_price'];
                $pet_age = $_POST['pet_age'];
                $gender_id = $_POST['gender_id'];
                $pet_dob = $_POST['pet_dob'];
                $pet_health = $_POST['pet_health'];
        
                if ($this->petModel->updatePet($pet_id, $pet_name, $breed_id, $pet_price, $pet_age, $gender_id, $pet_dob, $pet_health)) {
                    echo "<p>Successfully updated pet with ID: $pet_id</p>";
                } else {
                    echo "<p>Failed to update pet with ID: $pet_id</p>";
                }
            }
            // $this->showPets();
        }

        public function updatePetForm() {
            $pet_id = $_POST['pet_id'];
            $pet = $this->petModel->getPetById($pet_id); // Add a method to fetch a pet by ID
            $breeds = $this->petModel->selectBreed(); // Fetch breeds for the dropdown
            $genders = $this->petModel->selectGender();
            include 'views/editPet.php';
        }

        public function showBreed() {
            $breeds = $this->breedModel->selectBreeds();
            include 'views/breeds.php';
        }

        public function showFormBreed() {
            $species = $this->breedModel->selectSpecies();
            $avg_sizes = $this->breedModel->selectAvgSize();
            $maintenances = $this->breedModel->selectMaintenance();
            include 'views/formBreed.php';
        }

        public function addBreed() {
            $breed_name = $_POST['breed_name'];
            $species_id = $_POST['species_id'];
            $avg_size_id = $_POST['avg_size_id'];
            $breed_description = $_POST['breed_description'];
            $maintenance_id = $_POST['maintenance_id'];
            if ($this->breedModel->insertBreed($breed_name, $avg_size_id, $species_id, $maintenance_id, $breed_description)) {
                echo "<p>Successfully added: $breed_name, $species_id, $avg_size_id, $breed_description, $maintenance_id!</p>";
            }
            else {
                echo "<p>Failed to add!</p>";
            }
        }

        public function updateBreedForm() {
            $breed_id = $_POST['breed_id'];
            $breed = $this->breedModel->getBreedById($breed_id); // Add a method to fetch a breed by ID
            $species = $this->breedModel->selectSpecies(); // Fetch species for the dropdown
            $avg_sizes = $this->breedModel->selectAvgSize();
            $maintenances = $this->breedModel->selectMaintenance();
            include 'views/editBreed.php';
        }

        public function updateBreed() {
            if(isset($_POST['updateBreed'])) {
                $breed_id = $_POST['breed_id'];
                $breed_name = $_POST['breed_name'];
                $species_id = $_POST['species_id'];
                $avg_size_id = $_POST['avg_size_id'];
                $breed_description = $_POST['breed_description'];
                $maintenance_id = $_POST['maintenance_id'];
        
                if ($this->breedModel->updateBreed($breed_id, $breed_name, $avg_size_id, $species_id, $maintenance_id, $breed_description)) {
                    echo "<p>Successfully updated breed with ID: $breed_id</p>";
                } else {
                    echo "<p>Failed to update breed with ID: $breed_id</p>";
                }
            }
            // $this->showBreeds();
        }

        public function showToySpecies() {
            $toys = $this->toyModel->selectToySpecies();
            include 'views/toys.php';
        }

        public function showFormToy() {
            $species = $this->toyModel->selectSpecies();
            include 'views/formToy.php';
        }

        public function addToySpecies() {
            $toy_name = $_POST['toy_name'];
            $species_id = $_POST['species_id'];
            $toy_description = $_POST['toy_description'];
            $toy_price = $_POST['toy_price'];
            $toy_amount = $_POST['toy_amount'];
            if ($this->toyModel->insertToySpecies($toy_name, $toy_price, $toy_description, $toy_amount, $species_id)) {
                echo "<p>Successfully added: $toy_name, $species_id, $toy_description, $toy_price, $toy_amount!</p>";
            }
            else {
                echo "<p>Failed to add!</p>";
            }
        }

        public function updateToySpeciesForm() {
            $toy_id = $_POST['toy_id'];
            $toy = $this->toyModel->getToySpeciesById($toy_id); // Add a method to fetch a toy by ID
            $species = $this->toyModel->selectSpecies(); // Fetch species for the dropdown
            include 'views/editToy.php';
        }

        public function updateToySpecies() {
            if(isset($_POST['updateToy'])) {
                $toy_id = $_POST['toy_id'];
                $toy_name = $_POST['toy_name'];
                $species_id = $_POST['species_id'];
                $toy_description = $_POST['toy_description'];
                $toy_price = $_POST['toy_price'];
                $toy_amount = $_POST['toy_amount'];
        
                if ($this->toyModel->updateToySpecies($toy_id, $toy_name, $toy_price, $toy_description, $toy_amount, $species_id)) {
                    echo "<p>Successfully updated toy with ID: $toy_id</p>";
                } else {
                    echo "<p>Failed to update toy with ID: $toy_id</p>";
                }
            }
            // $this->showToys();
        }

        public function deleteToySpecies() {
            if(isset($_POST['deleteToy'])) {
                $toy_id = $_POST['toy_id'];
                if ($this->toyModel->deleteToySpecies($toy_id)) {
                    echo "<p>Successfully deleted toy with ID: $toy_id</p>";
                } else {
                    echo "<p>Failed to delete toy with ID: $toy_id</p>";
                }
            }
            // $this->showToys();
        }
    }

    include_once ("controllers/connection.php");
    $connection = new connectionObject($host, $username, $password, $database);
    $controller = new Controller($connection);

    // if (isset($_POST['submit'])) {
    //     $controller->add();
    // }
    // else {
    //     $controller->showForm();
    // }
    // $controller->showPets();
    // $controller->showFormPet();

    $controller->showControlPanel();
    
    if (isset($_POST['submitPet'])) {
        $controller->addPet();
    }
    elseif (isset($_POST['submit'])) {
            $controller->add();
    }
    elseif (isset($_POST['deletePet'])) {
        $controller->deletePet();
    }
    elseif (isset($_POST['editPet'])) {
        $controller->updatePetForm();
    } 
    elseif (isset($_POST['updatePet'])) {
        $controller->updatePet();
    }
    elseif (isset($_POST['submitBreed'])) {
        $controller->addBreed();
    }
    elseif (isset($_POST['editBreed'])) {
        $controller->updateBreedForm();
    }
    elseif (isset($_POST['updateBreed'])) {
        $controller->updateBreed();
    }
    elseif (isset($_POST['submitToy'])) {
        $controller->addToySpecies();
    }
    elseif (isset($_POST['editToy'])) {
        $controller->updateToySpeciesForm();
    }
    elseif (isset($_POST['updateToy'])) {
        $controller->updateToySpecies();
    }
    elseif (isset($_POST['deleteToy'])) {
        $controller->deleteToySpecies();
    }
    

    if (isset($_POST['editSpecies'])) {
        $controller->updateSpeciesForm();
    } elseif (isset($_POST['updateSpecies'])) {
        $controller->updateSpecies();
    }

    if(isset($_GET['page'])) {
        if($_GET['page'] == 'species') {
            $controller->showSpecies();
        }
        elseif($_GET['page'] == 'pets') {
            $controller->showPets();
        }
        elseif($_GET['page'] == 'breeds') {
            $controller->showBreed();
        }
        elseif($_GET['page'] == 'addpet') {
            $controller->showFormPet();
        }
        elseif($_GET['page'] == 'addspecie') {
            $controller->showForm();
        }
        elseif($_GET['page'] == 'addbreed') {
            $controller->showFormBreed();
        }
        elseif($_GET['page'] == 'toys') {
            $controller->showToySpecies();
        }
        elseif($_GET['page'] == 'addtoy') {
            $controller->showFormToy();
        }
    }

    if(isset($_GET['action'])) {
        if($_GET['action'] == 'showpets') {
            $controller->showPets();
        }
        elseif($_GET['action'] == 'showbreeds') {
            $controller->showBreed();
        }
        elseif($_GET['action'] == 'showspecies') {
            $controller->showSpecies();
        }
    }

?>