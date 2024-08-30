<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    
<?php
/*
Write a PHP class called 'Shape' with an abstract method 'calculateArea()'.
 Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
 */

abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$triangle = new Triangle(6, 8);
echo "Triangle Area: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(2, 8);
echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";

?>


</body>
</html>