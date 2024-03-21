<?php

/*
=========================================
-------------Array operators------------- 
+  => union 
== => equal same key and value. 
===  => identical same key , value , dataType and same order
<> => not equal 
!= => not equal  
!== => not identical 
==========================================

Error control operator 

 .....-> @ 

*/ 

$List_ggo =[ 1 =>"Apex",2 => "the finals", 3 =>"for honor", 4 =>"SWOT" ];
$List_ddo =[ 5 =>"Battlefield",6 => "TowerOf fantasy", 7 =>"warframe", 8 =>"god of war" ]; 

echo '<pre>'; 
    print_r($List_ggo + $List_ddo);
        echo '</pre>';
echo'<br>'; 


//equal same key and value without the same dataType 


$arra1 = [1 => "10", 2 => "20"]; 
$arra2 =[1 => 10, 2 => 20]; 

var_dump($arra1 ==$arra2); 

// not equal
echo '<br>'; 
    var_dump($arra1 <> $arra2); 

//identical  same order key=>value dataType

$arra3 = [1 => 100, 2 => 20]; 
$arra4 =[1 => 100, 2 => 20];  

echo '<br>'; 
var_dump($arra3 === $arra4); 

//not identical  
$arra5 = [1 => "100", 2 => 100]; 
$arra6 =[2 => 100, 1 => 55];   

echo'<br>'; 
var_dump($arra5 !== $arra6); 

//error control operator
echo'<br>';
$a = 10; 
$b =@$a or die("variable not found");//@  if variable not found use die function to stop the script and display custom error msg 
echo $b;

echo '<br>';
$txt =@file("dummy.txt") or die("file not found"); // control file not found error
echo $txt;

echo '<br>';
(@include("msg.php"))or die("include file not found");




























?>