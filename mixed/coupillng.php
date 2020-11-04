<?php
interface Icolor {
    public function mix();
}
class Canvas
{
    public $width;
    public $height;
    public Icolor $color;

    public function __construct($width,$height, IColor $color)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->color  = $color;
    }
}
class Color implements Icolor
{
    public $green;
    public $red;
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
class OilColor implements Icolor
{
    public $green;
    public $red;
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
class AryColor implements Icolor
{
    public $green;
    public $red;
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
$myColor = new AryColor(50, 50, 100);
$myCanvas = new Canvas(500, 100, $myColor);