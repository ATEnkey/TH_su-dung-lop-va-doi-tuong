<?php
class Person
{
    private $name;
    private $age;
    private $gender;
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getInfo()
    {
        return "{$this->name}, {$this->age} years old, {$this->gender}";
    }
}
$person = new Person("John Doe", 30, "male");
echo $person->getInfo();
