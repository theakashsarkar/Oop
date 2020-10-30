<?php
interface IColor{
    public function mix();
}
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
    public function __construct($width, $height, IColor $color)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->color  = $color;
    }
}
class Color implements IColor
{
    public ?int $red;
    public ?int $green;
    public ?int $blue;

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

class oilColor implements IColor {
    public ?int $red;
    public ?int $green;
    public ?int $blue;
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