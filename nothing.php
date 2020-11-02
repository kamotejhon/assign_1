<?php
    class Fruit{
        public $name;
        public $color;
        public $weight;

        function set_name($name){
            $this->name = $name;
        }
        function get_name()
        {
            return $this -> $name;
        }
        

    }

    $apple = new Fruit();
    $apple->set_name('apple');

    echo $apple -> get_name();
?>
    