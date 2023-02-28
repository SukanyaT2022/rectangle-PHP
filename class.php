
<?php

class rectangle{
    public $width = 10;
    public $length = 20;


// change value below--set let or allow someone to change the properties width 
//if back account we donot use set coz we not allow anyone to change properties 
function setWidth($w){
    $this->width = $w;
}
function setLength($l){
    $this->length = $l;
}
//return value-- get allow someone to see the properties such as width

function getWidth(){
    return $this-> width;
}
function getLength(){
    return $this-> length;
}
//return area of rectangle
function findArea(){
    return $this-> width * $this-> length;
}
}
?>
