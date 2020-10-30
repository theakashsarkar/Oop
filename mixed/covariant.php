<?php
/*class ParentType{};
class ChildType extends ParentType {};

class  A extends ParentType{
    public function covariantReturnType():ParentType{}
}
class B extends A{
    public function covariantReturnType():ChildType{}
}
*/
abstract class Animal{
    protected string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    abstract public function speak();
}

class Dog extends Animal{
    public  function speak()
    {
       echo $this->name ." braks"; // TODO: Implement speak() method.
    }
}

class Cat extends Animal{
    public function speak()
    {
       echo $this->name . " meows"; // TODO: Implement speak() method.
    }
}
interface AnimalShelter
{
    public function adopt(string $name):Animal;
}
class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
       return new Cat($name); // TODO: Implement adopt() method.
    }
}
class  DogShelter implements AnimalShelter
{
    public function adopt(string $name): Animal
    {
       return new Dog($name); // TODO: Implement adopt() method.
    }
}
$kitty = (new CatShelter)->adopt('hello');
$kitty->speak();
echo "\n";

$doggy = (new DogShelter)->adopt('tomy');
$doggy->speak();
echo PHP_EOL;