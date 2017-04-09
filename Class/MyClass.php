<?php
    class Member{
        //-----поля класса-----
        public $name;
        public $age;
        public $image;
        public $desc;
        public $game;
       
        //-----конструктор класса-----
        public function __construct($name, $age, $image, $desc, $game) {
            $this->name = $name;
            $this->age = $age;
            $this->image = $image;
            $this->desc = $desc;
            $this->game = $game;
          
        }
        //-----методы кдласса-----
        public function getName(){
            $text ='<div><h3>'.$this->name.'</h3><br>';
            $text.='<img src="images/'.$this->image.'">';
            $text.='<h4>Age: '.$this->age.'yesr</h4>';
            $text.='<p><b>Curriculum vitae: </b>'.$this->desc.'</p>';
            $text.='<h5>Known games: '.$this->game.'</h5></div><hr><br>';
            return $text;
        }
    }
?>

