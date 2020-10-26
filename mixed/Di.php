<?php
class Canvas {
    public $width;
    public $height;
    public $color;
    public function __construct($width, $height, Color $color)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->color  = $color;
    }
}
class Color {
    public $green;
    public $red;
    public $blue;

    public function __construct($green, $red, $blue)
    {
        $this->green = $green;
        $this->red   = $red;
        $this->blue  = $blue;
    }
}
$myColor = new Color(50,50,100);
$myCanvas = new Canvas(500, 500, $myColor);