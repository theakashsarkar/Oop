<?php
class Canvas {
    public $width;
    public $height;
    public $color;
    public function __construct($width, $height, $color)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->color  = $color;
    }
}
class Color {
    public $red;
    public $green;
    public $blue;
    public function __construct($red, $green, $blue)
    {
        $this->red   = $red;
        $this->green = $green;
        $this->blue  = $blue;
    }
}
$oilColor = new Color(125, 100, 230);
$oilPaint = new Canvas(500, 100, $oilColor);
$anotherOilPrint = clone $oilPaint;
$oilPaint->width = 1000;
$oilPaint->color->red = 200;
print_r($oilPaint);
print_r($anotherOilPrint);