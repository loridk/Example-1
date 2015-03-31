<?php
/**
 * Created by PhpStorm.
 * User: Lori DK
 * Date: 3/24/2015
 * Time: 8:24 PM
 */

abstract class person {

    protected $name;
    protected $age;
    protected $weight;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __set($name, $value){
        return $this->name;
    }

    public function __get($name){
        return $this->name;
    }

//    abstract function manageEmployee();
//    abstract function getEmployeesManaged();
//    abstract function superviseEmployee();
}

class manager extends person
{

    protected $title;
    protected $salary = 80000;
    protected $managedEmployees = array();



    function manageEmployee($employee)
    {
        array_push($this->managedEmployees, $employee);
    }

    public function getEmployeesManaged() {
        echo '<strong>' . self::__get($this->name) . ' Manages:</strong><br />';

        foreach ($this->managedEmployees as $employee) {
            echo $employee->__get($employee) . "<br />";

        }
    }
}

class supervisor extends person{

    protected $title;
    protected $salary = 40000;
    protected $supervisedEmployees = array();

    function superviseEmployee ($employee) {
        array_push($this->supervisedEmployees, $employee);
    }

    public function getEmployeesSupervised() {
        echo '<strong>' . self::__get($this->name) . ' Supervises:</strong><br />';

        foreach ($this->supervisedEmployees as $employee) {
            echo $employee->__get($employee) . "<br />";

        }
    }

}

class generalLabourer extends person{

    protected $title;
    protected $salary = 20000;

}





