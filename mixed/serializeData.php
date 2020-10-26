<?php
class User {
    public $name;
    public $age;
    private $email  = "defualt email";
    protected $number = "default number";

    public function __construct($name, $age)
    {
        $this->name  = $name;
        $this->age = $age;
    }
    // public function __sleep()
    // {
    //     return['name', 'age','number'];
    // }
    public function __wakeup()
    {
        // echo "I am wakeup";
    }
    public function __serialize(): array
    {
        return [
            "prob_name"   => $this->name,
            "prob_second" => $this->age,
            "prob_third"  => $this->email,
            "porb_four"   => $this->number,
            "prob_five"   => "some extra value",
        ];
    }
    public function __unserialize($data){
        $this->name = $data['prob_name'];
        $this->age  = $data['prob_second'];
        $this->email = $data['prob_third'];
        $this->number = $data['prob_four'];
    }
}
$use = new User('Akash','39');
// var_dump($use);
$strObj = serialize($use);
// echo 'I am done';
echo $strObj;
echo "\n";
$newObj = unserialize($strObj);
// var_dump($strObj);
