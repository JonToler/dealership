<?php
    class Car
    {
        private $make;
        private $model;
        private $price;
        private $color;

        function __construct($make = 'Chevy', $model = 'Silverado', $price = 10000, $color = 'blue')
        {
            $this->make = $make;
            $this->model = $model;
            $this->price = $price;
            $this->color = $color;
        }

        function getMake()
        {
            return $this->make;
        }

        function setMake($new_make)
        {
            $this->make = $new_make;
        }

        function getModel()
        {
            return $this->model;
        }

        function setModel($new_model)
        {
            $this->model = $new_model;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setPrice($new_price)
        {
            $this->price = $new_price;
        }

        function getColor()
        {
            return $this->color;
        }

        function setColor($new_color)
        {
            $this->color = $new_color;
        }

        static function getAll()
        {
            return $_SESSION['cars'];
        }

        static function clear()
        {
            $_SESSION['cars'] = array();
        }
    }
?>
