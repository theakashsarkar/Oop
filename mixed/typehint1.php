<?php

abstract class AbsColor{
   abstract public function mix();
}
class Brush{
    public ? string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Canvas {
    public ?int $width;
    public ?int $height;
    public ?object $color;
    public function __construct($width, $height, AbsColor $color)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->color  = $color;
    }
}
class Color extends AbsColor
{
    public $red;
    public $green;
    public $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function mix()
    {

    }
}

class oilColor extends AbsColor {
    public $red;
    public $green;
    public $blue;
    public function __construct($red, $green, $blue)
    {
        $this->red   = $red;
        $this->green = $green;
        $this->blue  = $blue;
    }
    public function mix()
    {

    }
}
$brush = new Brush('soft');
$color = new Color(125,100,230);
$myColor = new oilColor(125, 100, 230);
$oilPaint = new Canvas(500, 100, $myColor);