<?php
//Global Variable Scope
 $message = "Hello Word ";
 echo $message;
 
 function mytest(){
     $message = "Milk";  //Local scope
     echo "<br />$message<br />";
}
    mytest();//Calling function
    echo $message;
 ?>