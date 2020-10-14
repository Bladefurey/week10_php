<?php
class Employee{
public $firstName;
public $lastName;
private $eid;
public $address;
private $salary;
static public $count=0;// class variables
private $count1=0; //obj variable
function showInfo()
{
    echo $this->firstName. "<br>";
    echo $this->lastName. "<br>";
    echo $this->eid. "<br>";
    echo $this->address. "<br>";
}
function __construct($firstName,$lastName)
{
self::$count++;
$this->count1++;
$this->firstName=$firstName;
$this->lastName=$lastName;

}
function set_eid($eid)
{
$this->eid=$eid;
}
function get_eid()
{
    return $this->eid;
}
function set_salary($salary)
{
    $this->salary=$salary;
}
function get_salary()
{
    return $this->salary;
}
static function showCount()
{
    echo "number of employees are ".self::$count;
    
}
function showCount1()
{
    echo "showcount1 <br>";
    echo "number of employees are ". $this->count1;
    $this->count1++;
    echo "number of employees are ". $this->count1;
    echo "id ". $this->eid;
}
}
//outside class
$emp1=new Employee("David","Clorie");
$emp1->set_eid("0098");
$emp1->set_salary(250000);

if($emp1->get_salary()>200000)
{
    echo "greater than";
}
echo $emp1->get_eid();
$emp1->address="mandalay";
$emp1->showInfo();
echo Employee::$count;
$emp2=new Employee("David","Clorie");
$emp2->set_eid("0098");
$emp2->set_salary(250000);
echo Employee::$count;
Employee::showCount();
$emp1->showCount1();
$emp2->showCount1();
$emp1->showCount1();
?>