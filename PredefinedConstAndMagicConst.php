<?php

/*

============================================= 
----------- PreDefined Consts---------   
its just list of consts that help you get info
 Used of access information about your code system server etc.
=>CASE SENSITIVE
=> PHP_VERSION 
=> PHP_OS_FAMILY  
=> PHP_INT_MAX 
=>DEFAULT_INCLUDE_PATH

------------ Magic Consts--------------- 
=> Case Insensitive
=> __LINE__ 
=> __DIR__ 
=>__FILE__ 

-------Reserved Keywords----------- 

 => switch 
 => use 
 => function 
 => break 
 => final 
 => Full list in php manual

*/

echo PHP_VERSION;
echo '<br>';  
echo __FIle__;
echo '<br>'; 

    echo  __LINE__ ;
    echo '<br>';  
    echo __DIR__ ;
    echo '<br>';

// function without reserved word execute normally
function Hello(){

return "hello";

}; 

echo Hello(); 

// function with reserved word generate error syntax error
function Break(){

    return "hello";
    
    }; 
    
    echo Break(); 
    














?>