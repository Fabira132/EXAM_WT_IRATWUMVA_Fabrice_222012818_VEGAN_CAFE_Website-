<?php
$con=new mysqli('localhost','root','','crudoperation');
if($con){
    //echo"connection successfull";
}else{
    die(mysqli_error($con));
}

?>  