<?php

// --- 1. Basic OOP (Class & Object) ---
echo "<h3>1. Basic OOP</h3>";

class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!<br>";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo "Car 2 Brand: " . $car2->brand . "<br>";
echo "<hr>";


// --- 2. Inheritance ---
echo "<h3>2. Inheritance</h3>";

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says meow!<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();
$cat->meow();
$dog->bark();
echo "<hr>";


// --- 3. Polymorphism ---
echo "<h3>3. Polymorphism</h3>";

interface ShapePoly // Renamed to avoid conflict
{
    public function calculateArea();
}

class CirclePoly implements ShapePoly // Renamed
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class RectanglePoly implements ShapePoly // Renamed
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

function printArea(ShapePoly $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new CirclePoly(5);
$rectangle = new RectanglePoly(4, 6);

printArea($circle);
printArea($rectangle);
echo "<hr>";


// --- 4. Encapsulation ---
echo "<h3>4. Encapsulation</h3>";

class CarEncapsulation // Renamed from Car
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$carEncap = new CarEncapsulation("Toyota", "Blue");

echo "Model: " . $carEncap->getModel() . "<br>";
echo "Color: " . $carEncap->getColor() . "<br>";

$carEncap->setColor("Red");
echo "Updated Color: " . $carEncap->getColor() . "<br>";
echo "<hr>";


// --- 5. Abstraction ---
echo "<h3>5. Abstraction</h3>";

abstract class ShapeAbstract // Renamed from Shape
{
    abstract public function calculateArea();
}

class CircleAbstract extends ShapeAbstract
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class RectangleAbstract extends ShapeAbstract
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circleAbs = new CircleAbstract(5);
$rectangleAbs = new RectangleAbstract(4, 6);

echo "Area of Circle: " . $circleAbs->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangleAbs->calculateArea() . "<br>";
echo "<hr>";


// --- 6. Interface ---
echo "<h3>6. Interface</h3>";

interface ShapeInterface // Renamed
{
    public function calculateArea();
}

interface ColorInterface // Renamed
{
    public function getColor();
}

class CircleInterface implements ShapeInterface, ColorInterface
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

$circleInt = new CircleInterface(5, "Blue");

echo "Area of Circle: " . $circleInt->calculateArea() . "<br>";
echo "Color of Circle: " . $circleInt->getColor() . "<br>";
echo "<hr>";


// --- 7. Constructor & Destructor ---
echo "<h3>7. Constructor & Destructor</h3>";

class CarConstruct // Renamed from Car
{
    private $brand;

    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

$carConst = new CarConstruct("Toyota");
echo "Brand: " . $carConst->getBrand() . "<br>";
echo "<hr>";


// --- 8. Access Modifiers ---
echo "<h3>8. Access Modifiers</h3>";

class AnimalAccess // Renamed from Animal
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$animalAcc = new AnimalAccess("Dog", 3, "Brown");

echo "Name: " . $animalAcc->name . "<br>";
echo "Age: " . $animalAcc->getAge() . "<br>";
echo "Color: " . $animalAcc->getColor() . "<br>";

?>