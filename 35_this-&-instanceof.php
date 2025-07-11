<?php
    class Animal{
        public $name;
        function setName($name){
            $this->name=$name;
        }
    }

    $dog = new Animal();
    $dog->setName('Dog1');

    // echo $dog->name,"<br>",$dog instanceof Animal;
    echo $dog->name,"<br>";
    var_dump($dog instanceof Animal);
?>