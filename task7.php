<?php
class Dog{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct(string $name, string $sex, ?string $mother = "", ?string $father = "")
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getSex() : string
    {
        return $this->sex;
    }
    public function setName($name) : void
    {
        $this->name = $name;
    }
    public function setSex($sex) : void
    {
        $this->sex = $sex;
    }
    public function getMother() : string
    {
        return $this->mother;
    }
    public function fathersName(string $father) : string
    {
        if ($this->father === null){
            $this->father = "Unknown";
        }
        return $this->father = $father;
    }
    public function setMother(string $mother) : void
    {
        $this->mother = $mother;
    }

}

class DogTest{
    private array $dogs;
    public function  __construct(array $dogs)
    {
        foreach ($dogs as $dog){
            $this->addDog($dog);


        }
    }

    public function addDog(Dog $dog)
    {
        $this->dogs[] = $dog;
    }


}



$dogs = [
    new Dog("Max", "male"),
    new Dog("Rocky", "male"),
    new Dog("Sparky", "male"),
    new Dog("Buster", "male"),
    new Dog("Sam", "male"),
    new Dog("Lady", "female"),
    new Dog("Molly", "female"),
    new Dog("Coco", "female")
];




foreach ($dogs as $key => $dog){


        if ($dog->getName() === "Max"){
            $dog->setMother("Lady");
            $dog->fathersName("Rocky");

        }
        if ($dog->getName() === "Coco"){
            $dog->setMother("Molly");
            $dog->fathersName("Buster");
        }
        if ($dog->getName() === "Rocky"){
            $dog->setMother("Molly");
            $dog->fathersName("Sam");
        }
        if ($dog->getName() === "Buster"){
            $dog->setMother("Lady");
            $dog->fathersName("Sparky");
        }

}
var_dump($dogs);


















