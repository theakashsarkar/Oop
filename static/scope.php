<?php
class Father
{
    public $name = "Parent";
    public function show()
    {
        echo "the from Parent\n";
    }
}
 class Son extends Father
 {
     public $name = "chail";
     public function show()
    {
        parent::show();
        echo "the from chail";
    }

 }
 $Akash = new Son;
 $Akash->show();
?>