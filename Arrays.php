<?php

/*

=========================================== 

= Arrays 
= Index Array store a collection of values that can be accessed using a numeric index
= associative array key => value an array with strings as an index 
= array value overrive example 

--------- 
Print_r() function provide info  about array or variable etc that readable by human..

*/

$list = array ("Usa","Canada","Uk","Germany","Jordan","Africa"); 

// override array value by accessing their index
$list[0]="China";  
$list[1]="Japan";  
$list[2]="Saudi";

print_r($list);

echo '<br>'; 

echo '<pre>'; 
print_r([

"A"=>"S7n", 
"B"=> "William",  
"Rachel",// it will start with index 0 because the values above thier string is their index 
0=>" mike", // override the value by set up the their index   
9=> "Jordamarikcah", // index resume count after last index is set meaning if you assigned two indexes 2 and 9 it will continue after 9  
"Ommar"
]);

echo '</pre>'; 

echo '<br>';  
echo '<pre>'; 
print_r([

"F"=> "Ferrarei", 
"D"=> "Dodoge", 
"Lambo", 
true =>"Playmoth roadRunner", // the value of true is 1 it will assign the index ONE with [the True Value which is "Playmoth RoadRunner"]
"My Games Library"=>[
  "Apex Legends",
  "The finals",
  "Dragon Dogma"=>["DDO ONe","DDO Two"],
]
]);
echo '</pre>'; 


















?>