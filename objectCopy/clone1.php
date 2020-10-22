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
    public function __clone()
    {
        // $green = $this->color->green;
        // $red   = $this->color->red;
        // $blue  = $this->color->blue;
        // // $this->color = new Color($red, $green, $blue);
        // $this->color  = clone $this->color;
        foreach($this as $attr_name => $attr_value)
        {
            if(is_object($this->$attr_name))
            {
                $this->$attr_name = clone $this->$attr_name;
            }else if(is_array($this->$attr_name)){
                foreach($this->$attr_name as &$val)
                {
                    if(is_object($val))
                    {
                        $val = clone $val;
                    }
                    unset($val);
                }
            }
        }
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