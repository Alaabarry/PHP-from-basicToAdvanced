<?php

/*

====================================== 

= String  
=------------------
= Double quote str
=----------------- 
= Single quote str 
=-----------------
= Concatenate  str  perform with concatenation operator DOTE ( . )
=----------------------
= new line function nl2br() 
=-------------------
= Escaping char 

=====================================

*/

echo '<br>'; 
echo "Hello World"; 
echo '<br>'; 
echo 'Hi Friends';
echo '<br>'; 
echo "Best Brand in my opinion for computers is " . ":"."ASUS"; //Concatenate multi strings
echo '<br>'; 
echo nl2br("The History of the earth begins 
 with the first human being is
 Adam Created by God ");
echo '<br>'; 
echo "CSGO 'Best Fps Game'"; //can print single quote in double quote => both ways --single inside double ||double inside single---
echo '<br>'; 
echo 'I love \'PHP\'';// print single quote char inside a single quote echo require Escaping char \
echo '<br>';
echo "I love \"PHP\"";
echo '<br>'; 


?>