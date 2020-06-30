<?php
#logical grouping of my code
namespace src\Contollers;

#the file with the class
require_once '../Models/Store.php';

#aliasing
use \src\Models\Store as Thito;

class Student{
  //class body

  //within the class
  private $admission_number;

  //to all (within the class and outside the class)
  public $name;

  //within the class and to [child classes]: Inheritance
  protected $age;

  public $store;

  //special methods
  //this is the constructor
  function__construct($name){
    $this->store = new Thito();
  }
  #get all students
  function getAllStudents(){
    return $this->store->getAll();

  }

  static function getTotalStudents(){
    return (new Thito())->getCount();
    //echo "172";
  }

  //this is not a constructor
  function__construct(){
  //echo " Fake Instantiated";

  }

  //methods/behaviour
  //see the student
  private function getName(){

  }
  public function getDetails($index)
  {
    return $this->store->getOne($index)
  }

  function gpa(){
    echo "your gpa";
  }
  static function updatList($listOfStudents){
    return (new Thito ())->update($listOfStudents)
  }
}

$lumadi = new Student();
$api_2020_students = $lumadi -> getAllStudents();
//var_dump($api_2020_students);
echo "<br>Total Number of Students :" ".Student::getTotalStudents()"."<br>";

$lumie = new Student();
$details = $lumie -> getDetails(1);
var_dump($details);

$new_students =[
  [110079, "Mirambo"],
  [111270, "Christine"],
  [103933, "Stacy"]
];

Student ::updateList($new_students);
var_dump ($lumadi-> getAllStudents());
