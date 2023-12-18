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

        public function selectUsers(){
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

        public function insertUser($name, $life_span, $description) {
            $mysqli = $this->connect();
            if($mysqli) {
                $mysqli->query("INSERT INTO species (species_name, species_avg_lifespan, species_description) VALUES ('$name', '$life_span', '$description')");
                $mysqli->close();
                return true;
            } else {
                return false;
            }
        }
    }
    

?>