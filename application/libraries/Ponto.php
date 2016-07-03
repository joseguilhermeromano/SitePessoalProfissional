<?php

class Ponto{
    private $x;
    private $y;
    
    function Ponto(array $args = null){
        $this->x=$args['x'];
        $this->y=$args['y'];
    }
    
    function set_x($num){
        $this->x=$num;
    }
    
    function get_x(){
        return $this->x;
    }
    
     function set_y($num){
        $this->y=$num;
    }
    
    function get_y(){
        return $this->y;
    }
    
    function normaliza(){
        if($this->x>$this->y){
            $this->y=$this->x;
        }else{
            $this->x=$this->y;
        }
    }
}

