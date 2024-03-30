<?php 

  /*
    Control Structure
    - Ternary Operator => Short If
  */

  $a = 25;

  if ($a >4) {

    echo "good";

  } else {

    echo "bad";

  }

  // Condition ? True : False;

  echo $a > 8 ? "Good" : "Bad";

  echo '<br>';

  echo "I Love PHP Because Its A ";

  if ($a > 8) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo " Language";

  echo '<br>';

  echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";

  echo '<br>';

  $result = $a > 8 ? "Good" : "Bad";

  echo "I Love PHP Because Its A $result Language";



?>