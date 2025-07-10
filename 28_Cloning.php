<?php
    //1. Shallow Cloning - if change in ovj1 also changed in 2nd copy one cause its copy of obj1 address
    //2. Deep Cloning - if change in ovj1 dont changed in 2nd copy one cause both are separate address
    // __clone()

    /* 1. SHALLOW CLONING : 
    class MyClass{
        public $amount;
    }

    $value=5;
    $obj = new MyClass();
    $obj->amount=&$value;

    //clone
    $copy = clone $obj;
    print_r($copy);
    $obj->amount=6;

    print_r($copy);
    print("<br>");

    $copy->amount=7;
    print_r($copy);
    print_r($obj);

    // SIMILAR ADDRESS SO CHANGED IN BOTH  */

    //2. DEEP CLONING : 
    class MyClass{
        public $amount;
        public function __clone(){
            $value = $this->amount; 
            unset($this->amount);//unset
            $this->amount = $value;
        }
    }

    $value=5;
    $obj = new MyClass();
    $obj->amount=&$value;

    //clone
    $copy = clone $obj;
    print_r($copy);
    
    $obj->amount=6;
    print_r($obj);

    print("<br>");

    $copy->amount=7;
    print_r($obj);
    print_r($copy);
?>