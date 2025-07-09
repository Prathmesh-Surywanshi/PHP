<?php
    class Fruit{//class
        // properties-
        public $name;

        // methods-
        function set_name($name)//setter
        {
            $this->name=$name;//this
        }

        function get_name()//getter
        {
            return $this->name; //$ used before this keyword
            // return $name;  ERROR
        }
    }

    $apple = new Fruit();//object
    $banana = new Fruit();

    $apple->set_name("Apple");
    $banana->set_name("Banana");

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";

    var_dump($apple instanceof Fruit); //instanceof

?>