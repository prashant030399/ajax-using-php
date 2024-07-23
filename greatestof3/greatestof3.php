<?php

$a = $_POST['t1'];
$b = $_POST['t2'];

$c=$_POST['t3'];

if($a>$b  && $a>$c){
    echo" a is greatest";
}
else if($b>$a &&  $b>$c ){
    echo"  b is greatest";
} 
else{
    echo" c is greatest ";
}



?>