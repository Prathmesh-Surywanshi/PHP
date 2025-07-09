<?php
    
    class Human{
        public $name;
        public $age;
        public function info($gender){
            echo "Name : ".$this->name." Age : ".$this->age." Gender : ".$gender;
        }
    }

    class Male extends Human{
        public function info($gender="Male") {
            parent::info($gender); // Calls the parent class's info() method
        }
        // $this->info("Male");
    }

    class Female extends Human{
        public function info($gender="Female"){
            parent::info($gender);
        }
    }

    $p1=new Male();
    $p1->name="Prathmesh";
    $p1->age=24;
    $p1->info();
?>