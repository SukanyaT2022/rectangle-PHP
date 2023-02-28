
<?php
include "class.php";
$length =$_POST["len"];
$width =$_POST["wid"];

//create new object
$newObject = new rectangle();
//below line call function
$newObject->setWidth($w);
$newObject->setLength($l);

//then we call area function
echo "the area of rectangle is ".$newObject->findArea();

?>


