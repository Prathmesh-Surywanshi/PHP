<?php
    class Foo{
        public function __call($method,$args){
            if($method=='findSum'){
                echo 'Sum is '.$this->getSum($args)."<br>";
            }else{
                echo "Called method $method<br>";
            }
        }
        private function getSum($args){
            $sum=0;
            foreach($args as $arg){
                $sum+=$arg;
            }
            return $sum;
        }
    }
    $f = new Foo();
    $f->findSum(10,20,30);
    $f->bar(10,20,30);
    $f->getSum(10,20,30);
    $f->__call(10,20,30);
?>