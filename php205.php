<?php
    $x = 5;
    $y = 10;
    $z = 0;
    function MyTest(){
      $GLOBALS ['z']= $GLOBALS ['x'] + $GLOBALS ['y'] ;
    }
    
    mytest();
    echo $z;
?> 