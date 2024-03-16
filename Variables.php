<?php 

/*


================================================= 

------------= Variables Naming Rules =----------- 

=> Start with Dollar Sign $ 
=> Name start with A letter from A-Z upperCase OR small and underscore 
=> Case sensitive 
=> cant start with number , you can add  Numbers to the name  everywhere but  not at the begining 

============================================== 
--------------= Variable Variable=----------- 

=> take the value of variable and assign it as a name to another var 
============================================== 
Assign variable by reference 
-------------------->Constants<--------------- 
the value of const cant be change during execution 
alaway upper case

 */


 $txt = "Good Tidesa"; //Decleaer a Var 
 $txt ="Far on the horizon"; // RE Decleare a Var 

 $_Name1 = 'Jack macch'; //  start the name with underscore its valid 

 echo $txt; 
 echo '<br>'; 
 echo $_Name1; 
 echo '<br>'; 


    $Fname = " mico" ;
    $$Fname = "Takaherio"; // variable variabl the value of $Fname is now  the name of the var  
    $$$Fname = "Kin"; // and so on..

 echo $$Fname; 
 echo '<br>';   
 echo  $Takaherio ; // you can test the variable by writing the name of var which is value of other var
 echo '<br>'; 
 echo "My Name is ${$Fname}"; // Print $$Fname through ${} you can use it for other varvar $$$ $$$ $$$$$.. 
 echo '<br>';


    $a ="rock"; 
    $b =&$a ; // assign the variabel b  by reference --- And Sign---
    echo $b;  
    echo '<br>';

 define("COMPANY_NAME","ProTechWeb.com");  
 define("RANDOM_NUM",10); 

    echo COMPANY_NAME; 
    echo'<br>'; 
    echo RANDOM_NUM;



?>
