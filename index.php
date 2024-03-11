<?php 

echo 'Test'; //Single comment Built in function to print output display content. 
echo '<br>'; 
echo '<hr>';

/* 
    Multiple comments
    1-LIne one
    2-Line Two  

*/ 

/*
    =====================
    Data Types 
    =-------------- 
    = int =>  Integer  
    = bool => Boolean 
    = float => Floating point number | Double  
    = String 
    = Array() 
    = object 
    = null 
    = other data types.
 
    gettype() function return data type of variable

*/ 

echo gettype(true); 
echo '<br>'; 
echo gettype(false); 
echo '<br>'; 
echo gettype(27); 
echo '<br>'; 
echo gettype(15.7); 
echo '<br>';  
echo gettype(-59.3); 
echo '<br>'; 
echo gettype("Hello World !"); 
echo '<br>'; 
$List = array("Canada","USA","UK"); 
echo gettype($List);  
echo '<br>'; 
echo gettype(array("Web Dev"=>"PHP","Software Dev"=>"C sharp")); 
echo '<br>'; 





























?>










