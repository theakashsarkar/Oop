<?php
class Food
{
    public static $name;
    const FOODNAME = "Food Name";
  static function showFood()
  {
      echo "new food".self::$name."\n";
  }
}
Food::showFood();
echo Food::FOODNAME;
?>