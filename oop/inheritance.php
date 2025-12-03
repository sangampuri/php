<?php 

class Employee {
    public $name,$age,$salary;

    function  __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function showDetails() {
        echo "<h1>Employee Profile:</h1>";
        echo "<p>Employee Name : $this->name</p>";
        echo "<p>Employee age : $this->age</p>";
        echo "<p>Employee salary : $this->salary</p>";
    }


}

class Manager extends Employee {
    public $ta = 1000;
    public $tele = 2000;
    public $totalsalary;
     

    function showDetails() {
    $this->totalsalary  = $this->ta + $this->tele + $this->salary ; 
        echo "<h1>Manager Profile:</h1>";
        echo "<p>Employee Name : $this->name</p>";
        echo "<p>Employee age : $this->age</p>";
        echo "<p>Employee salary : $this->totalsalary</p>";
    }
}

$employee1 = new Employee("sangam",20,250000);
$employee1->showDetails();


$employee2 = new Manager("John",40,500000);
$employee2->showDetails();