<?php

/*

====================================== 
-------- arithemetic operator-------- 

=> + addition 
=> - subtraction 
=> / division 
=> * multiplacation 
=> % modulus
=> ** exponentiation
=> +$Var identity 
=> -$Var negation

========================================
--------Assignment operators------- 
=> +=  $a =$a + number => $a += number (addition)
=> -=  $a =$a - number => $a -= number (subtraction)
=> /=  $a =$a /number => $a /= number (division)
=> *=  $a =$a * number => $a *= number (multiplacation)
=> **= $a =$a ** number => $a **= number (exponen) 
=> %=  $a =$a % number => $a %= number (modulus)

===========================================
---------Comparison operator-------------- 

=> == equal 
=> === identical 
=> != not equal 
=> <> not equal 
=> !== not identical  
---------------------------------- 
=> > greater than 
=> < smaller than 
=> >= greater or equal 
=> <= smaller than or equal  
=< <=> less or equal or greater than 
----------------------------------- 
increment $x++ or ++$x  
decrement $x-- or --$x

--------------------------------------   
logical operator
  and => And => Two Are True
    &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    !   => Not => Not True
----------------------------------- 
string operator 
concatnate string with dote 
=> . dote 
=> .= concatanate the vaiable itself with another variable of type string

*/  

/*     --------  arithemetic operator--------   */ 

var_dump(100 === 100);
echo '<br>';  
var_dump(100 ==="100"); 
echo '<br>';  

echo 20 + 10;
echo '<br>';  
echo (24 + 12.4);  
echo '<br>';  

    echo 30 - 10;
    echo '<br>';  
    echo (50 - 9.3);  
    echo '<br>';   

echo 10 /2 ; 
echo '<br>'; 
echo 3*(45-30+10); 
echo '<br>';   

    echo 21 % 10 ; 
    echo '<br>'; 
    echo 24 % 10; 
    echo '<br>';  

echo 2 ** 4 ; 
echo '<br>'; 
echo 9 ** 2; 
echo '<br>';  

    echo " 100 ";  
    echo '<br>'; 
    echo gettype("100");
    echo '<br>'; 
    echo +"100";  
    echo gettype(+"100"); 
    echo '<br>';  

echo "- 100 ";  
echo '<br>'; 
echo gettype("-100"); 
echo '<br>';  
echo -"-100";  
echo '<br>';   
echo gettype(-"-100"); 
echo '<br>';  

/*     --------  end of arithemetic operator--------   */ 


/*     -------- --------Assignment operators-------  --------   */
    $a=20;
    $a +=20; 
    echo $a; 
    echo '<br>';

$b = 35;
$b -= 10; 
echo $b;  
echo '<br>'; 

    $z=29;
    $z *=20; 
    echo $z; 
    echo '<br>';

$k = 20;
$k /= 10; 
echo $k; 
echo '<br>';  


    
$t=2;
$t **=4; 
echo $t; 
echo '<br>';
  
    $h = 23;
    $h %= 10; 
    echo $h; 
    echo '<br>';  

/*     -------- end of Assignment operators-------  --------   */

/*     -------- Comparison operator--------   */ 

//Test equal
var_dump(100 == 100);
echo '<br>';  
var_dump(100 =="100"); 
echo '<br>'; 
var_dump(100.0==100);
echo '<br>'; 
// test not equal
var_dump(100 != 45);
echo '<br>';  
var_dump(100 !="100"); 
echo '<br>'; 
var_dump(-100 != 100);
echo '<br>'; 
//test identical  
var_dump(100 === 100);
echo '<br>';  
var_dump(100 ==="100"); 
echo '<br>';  
// test not identical 
var_dump(100 !== 100);
echo '<br>';  
var_dump(100 !=="100"); 
echo '<br>';  

//Greater than or equal test 
var_dump(100 > 70); 
echo '<br>'; 
var_dump(100 >= 100); 
echo'<br>';  

//smaller than or equal test 
var_dump(100 < 200); 
echo '<br>'; 
var_dump(45 <= 45 ); 
// spaceship test 
echo '<br>'; 
var_dump(45 <=> 100);  
echo '<br>'; 
var_dump(90 <=> 30);  
echo '<br>'; 
var_dump(30 <=> 30);  
echo'<br>'; 
echo'<hr>';

//test increment 

$likes = 0 ; 
$likes ++ ;
$likes ++ ;
$likes ++ ; 

echo $likes ; 
echo '<br>'; 

$a =0 ; 
echo $a ++; // 0 the value of a sill 0 cuz the increment is post it means get the value then increment
echo '<br>'; 
echo $a;  
echo '<br>'; 

$b =0 ; 
echo ++$b; // 1 pre increment the value before print it  
echo '<br>';
// test decrement 
$z =10; 
echo $z--; // post decrement still the value 10  
echo '<br>';
echo $z; //the decrement  applied 

// same thing with pre decrement .......... 


/** ---------------logical operator--------------- */ 

var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
echo '<br>';
var_dump(100 > 50 && 100 > 80 && 100 > 100); // False
echo '<br>';
var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
echo '<br>';
var_dump(100 > 50 xor 100 > 80); 

//concatanate strings 
echo'<br>';
echo "hello"."world"."From"."canada";  
echo '<br>'; 

$fname = "Alaa"; 
$fname .="Barry"; 
echo $fname; 
echo '<br>'; 

$PlayerID ="2049KIN";  
$Fps=" "."The FInals"; 

$PlayerID .= $Fps; 

echo $PlayerID;

























?>