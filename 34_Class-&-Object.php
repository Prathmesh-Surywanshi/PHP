<?php
    class Fruit{
        //Properties
        public $name;
        public $color;

        //Methods
        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
        
        function set_color($color){
            $this->color=$color;
        }
        function get_color(){
            return $this->color;
        }
    }

    //Objects
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    $apple->set_color('Red');
    $banana->set_color('Yellow');

    echo "Name : ".$apple->get_name().", Color : ".$apple->get_color() ."<br>";
    echo "Name : ".$banana->get_name().", Color : ".$banana->get_color();
?>