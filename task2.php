<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    
<?php
/*
    Write a PHP interface called 'Resizable' with a method 'resize()',
    Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.
*/

interface Resizable {
    public function resize($percentage);
}

class Square implements Resizable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function resize($percentage) {
        $this->side = $this->side * ($percentage / 100);
    }

    public function getArea() {
        return pow($this->side, 2);
    }

    public function getSide() {
        return $this->side;
    }
}

$square = new Square(15);
echo "Initial Side Length: " . $square->getSide() . "</br>";

$square->resize(60); // Resize the square to 60% of its original size
echo "Resized Side Length: " . $square->getSide() . "</br>";

echo "Area: " . $square->getArea() . "</br>";
?>


</body>
</html>