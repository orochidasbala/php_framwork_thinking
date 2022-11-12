<?php 

class Person {

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function sleep() {
        echo $this->name." is sleeping";
    }
}

$p = new Person("Kaungmyat");
$p->sleep();