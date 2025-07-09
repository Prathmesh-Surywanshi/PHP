<?php
// Multilevel,Heirarchical,.,..

    class car{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;
        }

        public function intro(){
            echo "TATA MOTORS FAMOUS IN WORLD.";
        }
    }

    class maruti extends car{
        public function message(){
            echo "Maruti is an INDIAN company.<br>";
        }
    }

    $d = new maruti("SWIFT","RED");
    $d->message();
    $d->intro();
?>