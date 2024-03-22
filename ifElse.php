<?php

/*
=========================  
control struture 

--> if ,else, elseif  

The if-else statement is used to execute both the true part and the false part of a given condition.
 If the condition is true, the if block code is executed and if the condition is false, the else block code is executed. 

 if(condition) {

if its true => run, execute


 } 

 else{

    if the condition is false run , execute
 }

*/


$phoneNumber=106789547 ;  

if($phoneNumber == 106789547){

    echo 'your number is correct :'.$phoneNumber;
} 
else {

    echo 'your number not correct';
}    
    echo '<br>';

    if( 100 > 69){
        echo ' first num is bigger than num 2 so its true'."&nbsp;"."True comparison";
    } 
    else{
        echo'if the first num is not bigger than num 2 so its false'."&nbsp;"."false comparison";
    } 
    echo '<br>';

    if( 100 > 250){
        echo 'first condition';
    } 
    elseif(100 >= 100){

        echo 'second condition';

    } 
    else{

        echo 'third condition';
    } 
    // language if condition test 

    echo '<br>';

    $lang_test ="Spanish";

    if($lang_test == "Arabic"){

        echo 'مرحبا';
    } 
    elseif($lang_test == "English"){
        echo ' Hello';
    } 
    elseif($lang_test =="Spanish"){
        echo 'Hola';
    } 
    else {

        echo 'unkown language';
    }






















?>