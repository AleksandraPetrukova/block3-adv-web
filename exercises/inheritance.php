<?php

//Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.

class Animal {
    public function makeSound() {
        echo "Generic Animal Sound";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow";
    }
}

$animal = new Animal();
$cat = new Cat();

$animal->makeSound();
echo "<br>";
$cat->makeSound();
echo "<br>";
echo "<br>";

//Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".

class Vehicle {
    public function drive() {
        echo "Driving a vehicle";
    }
}

class Car extends Vehicle {
    public function drive() {
        echo "Repairing a car";
    }
}

$vehicle = new Vehicle();
$car = new Car();

$vehicle->drive();
echo "<br>";
$car->drive();
echo "<br>";
echo "<br>";

//Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

class Shape {
    public function getArea() {
        echo "Generic Area";
    }
}

class Rectangle extends Shape {
    public function getArea() {
        echo "Area of a rectangle";
    }
}

$shape = new Shape();
$rectangle = new Rectangle();

$shape->getArea();
echo "<br>";
$rectangle->getArea();
echo "<br>";
echo "<br>";

//Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

class Employee {
    public function work() {
        echo "Working";
    }
    public function getSalary() {
        echo "Salary";
    }
}

class HRManager extends Employee {
    public function work() {
        echo "Working as an HR Manager";
    }
    public function addEmployee() {
        echo "Adding an employee";
    }
}

$employee = new Employee();
$hrmanager = new HRManager();

$employee->work();
echo "<br>";
$employee->getSalary();
echo "<br>";
$hrmanager->work();
echo "<br>";
$hrmanager->addEmployee();
echo "<br>";
echo "<br>";

//Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.

class BankAccount {

    //Constructor method to set the initial balance
    public function __construct( protected $balance) {
        $this->balance = $balance;
    }

    public function deposit() {
        echo "Deposit";
    }

    public function withdraw() {
        echo "Withdraw";
    }
}

class SavingsAccount extends BankAccount {
    public function withdraw() {
        if ($this->balance < 100) {
            echo "Cannot withdraw";
        } else {
            echo "Withdraw";
        }
    }
}

$bankaccount = new BankAccount(100);
$savingsaccount101 = new SavingsAccount(101);
$savingsaccount99 = new SavingsAccount(99);

$bankaccount->withdraw();
echo "<br>";
$savingsaccount101->withdraw();
echo "<br>";
$savingsaccount99->withdraw();
echo "<br>";
echo "<br>";

//Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.

class AnimalNew {
    public function move() {
        echo "Generic Animal Movement";
    }
}

class Cheetah extends Animal {
    public function move() {
        echo "Running";
    }
}

$animalnew = new AnimalNew();
$cheetah = new Cheetah();

$animalnew->move();
echo "<br>";
$cheetah->move();
echo "<br>";
echo "<br>";

//Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.

class Person {

    public function __construct (protected $firstName, protected $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        echo $this->firstName;
    }

    public function getLastName() {
        echo $this->lastName;
    }
}

class EmployeeNew extends Person {

    public function __construct (protected $firstName, protected $lastName, protected $employeeId) {
        parent::__construct($firstName, $lastName);
    }

    public function getEmployeeId() {
        echo $this->employeeId;
    }

    public function getLastName() {
        echo $this->lastName . " - Employee ID: " . $this->employeeId;
    }
}

$person = new Person("John", "Doe");
$employee = new EmployeeNew("Jane", "Doe", 123);

$person->getFirstName();
echo "<br>";
$person->getLastName();
echo "<br>";
$employee->getFirstName();
echo "<br>";
$employee->getLastName();
echo "<br>";
echo "<br>";

//Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.

class ShapeNew {
    public function getPerimeter() {
        echo "Generic Perimeter";
    }
    public function getArea() {
        echo "Generic Area";
    }
}

class Circle extends ShapeNew {
    public function getPerimeter() {
        echo "Perimeter of a circle";
    }
    public function getArea() {
        echo "Area of a circle";
    }
}

$shapenew = new ShapeNew();
$circle = new Circle();

$shapenew->getPerimeter();
echo "<br>";
$shapenew->getArea();
echo "<br>";
$circle->getPerimeter();
echo "<br>";
$circle->getArea();
echo "<br>";
echo "<br>";

//Write a php cehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

class VehicleNew {
    public function __construct (protected $make, protected $model, protected $year, protected $fuelType) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->fuelType = $fuelType;
    }
    public function fuelEfficiency() {
        echo "Fuel Efficiency";
    }
    public function distanceTraveled() {
        echo "Distance Traveled";
    }
    public function maxSpeed() {
        echo "Maximum Speed";
    }
}

class Truck extends VehicleNew {
    public function fuelEfficiency() {
        parent::fuelEfficiency();
        echo " Truck";
    }
    public function distanceTraveled() {
        parent::distanceTraveled();
        echo " Truck";
    }
    public function maxSpeed() {
        parent::maxSpeed();
        echo " Truck";
    }
}
class CarNew extends VehicleNew {
    public function fuelEfficiency() {
        parent::fuelEfficiency();
        echo " Car";
    }
    public function distanceTraveled() {
        parent::distanceTraveled();
        echo " Car";
    }
    public function maxSpeed() {
        parent::maxSpeed();
        echo " Car";
    }
}
class Motorcycle extends VehicleNew {
    public function fuelEfficiency() {
        parent::fuelEfficiency();
        echo " Motorcycle";
    }
    public function distanceTraveled() {
        parent::distanceTraveled();
        echo " Motorcycle";
    }
    public function maxSpeed() {
        parent::maxSpeed();
        echo " Motorcycle";
    }
}

$vehiclenew = new VehicleNew("Ford", "F150", 2021, "Gas");
$truck = new Truck("Ford", "F150", 2021, "Gas");

$vehiclenew->fuelEfficiency();
echo "<br>";
$vehiclenew->distanceTraveled();
echo "<br>";
$vehiclenew->maxSpeed();
echo "<br>";
$truck->fuelEfficiency();
echo "<br>";
$truck->distanceTraveled();
echo "<br>";
$truck->maxSpeed();
echo "<br>";
echo "<br>";

//Write a php ca class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.

class NewEmployee {
    public function __construct (protected $name, protected $address, protected $salary, protected $jobTitle) {
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
        $this->jobTitle = $jobTitle;
    }
    public function calculateBonus() {
        echo "Calculate Bonus";
    }
    public function performanceReport() {
        echo "Performance Report";
    }
    public function manageProjects() {
        echo "Manage Projects";
    }
}

class Manager extends NewEmployee {
    public function calculateBonus() {
        parent::calculateBonus();
        echo " Manager";
    }
    public function performanceReport() {
        parent::performanceReport();
        echo " Manager";
    }
    public function manageProjects() {
        parent::manageProjects();
        echo " Manager";
    }
}

class Developer extends NewEmployee {
    public function calculateBonus() {
        parent::calculateBonus();
        echo " Developer";
    }
    public function performanceReport() {
        parent::performanceReport();
        echo " Developer";
    }
    public function manageProjects() {
        parent::manageProjects();
        echo " Developer";
    }
}

class Programmer extends NewEmployee {
    public function calculateBonus() {
        parent::calculateBonus();
        echo " Programmer";
    }
    public function performanceReport() {
        parent::performanceReport();
        echo " Programmer";
    }
    public function manageProjects() {
        parent::manageProjects();
        echo " Programmer";
    }
}

$newemployee = new NewEmployee("John Doe", "123 Main St", 100000, "Manager");
$manager = new Manager("John Doe", "123 Main St", 100000, "Manager");

$newemployee->calculateBonus();
echo "<br>";
$newemployee->performanceReport();
echo "<br>";
$newemployee->manageProjects();
echo "<br>";
$manager->calculateBonus();
echo "<br>";
$manager->performanceReport();
echo "<br>";
$manager->manageProjects();
echo "<br>";
echo "<br>";

?>