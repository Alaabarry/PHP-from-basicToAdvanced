<?php 

/*

======================= 
Type Casting  

bool 
int 
string 
array 
object 
null 
others

var_dump() function provide detailed info about variable dataType and value.
=========================

*/

echo  7 + (int)"7 Meals";
echo '<br>'; 
 echo 7 + (integer)"7 Meals";
echo '<br>'; 
echo gettype(7 + (int)"7 Meals");
echo '<br>'; 
echo 12 +(int) 10.5; 
echo '<br>';  
echo gettype(12 +(int) 10.5); 
echo '<br>';
echo 13 + (int)12.7;
echo '<br>'; 
echo gettype((int)13 + 12.7);
echo '<br>'; 
echo (int)(13.5 + 7) ;
echo '<br>'; 
echo gettype((int)(13.5 + 7));
echo '<br>'; 
var_dump((bool) "");
echo '<br>'; 
var_dump((bool) "0");
echo '<br>'; 
var_dump((bool) "1");
echo '<br>'; 
var_dump((bool) "String");  
echo '<br>';  
var_dump((bool)array());  
echo '<br>';  
var_dump((bool)[1]); // array short syntax [] 
echo '<br>';  
var_dump((bool) 100);  
echo '<br>';  
var_dump((bool) -100);  
echo '<br>';  
var_dump((bool) -32.5);  
echo '<br>';  
var_dump((bool) 0.9);  
echo '<br>'; 
echo '<br>'; 
echo '<br>'; 







?>