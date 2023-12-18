<?php

    include_once ("models/model.php");

    class Controller {
        private $model;

        public function __construct($connection) {
            $this->model = new userModel($connection);
        }

        public function showUser () {
            $users = $this->model->selectUsers();
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
            else if ($this->model->insertUser($name, $life_span, $description)) {
                echo "<p>Successfully added: $name, $life_span, $description!</p>";
            }
            else {
                echo "<p>Failed to add!</p>";
            }
            $this->showUser();
        }
    }

    $connection = new connectionObject('','','','');
    $controller = new Controller($connection);

    if (isset($_POST['submit'])) {
        $controller->add();
    }
    else {
        $controller->showForm();
    }

?>