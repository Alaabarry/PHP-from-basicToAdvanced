<?php

/*
================ 
= Data Type
= --------------
= Type Juggling and Automatic Type Conversion 
================
*/

echo 1 + "3"; //4
echo '<br>';  
echo gettype(1 + "3");
echo '<br>';  
echo true; // 1
echo '<br>'; 
echo true + true ; // 2
echo '<br>';  
echo gettype(true + true);  //Integer
echo '<br>'; 
echo  10 + " 5 Meals"; // 15 + warning 
echo '<br>';   
echo gettype(10 + " 5 Meals"); // integer=> 15 + non numeric val warning
echo '<br>'; 
echo 10 + 13.5;  // 23.5
echo '<br>';  
echo gettype(10 + 13.5); //double
echo '<br>';   
echo false;
echo '<br>'; 
echo "hello" ."||" ."world";
echo '<br>'; 








?>