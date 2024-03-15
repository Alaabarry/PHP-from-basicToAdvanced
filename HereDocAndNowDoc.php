<?php

/* 

========================= 

= Heredoc => Escaping block of code,
  block of strings and for other uses 

  Start with <<< " Identifire" new line The string itself follows, 
  and then the same identifier again to close the quotation. 
  Identifire ;
  

= Nowdoc =>
  ouput the string as it is only
  write any character no need to use escape char to escape them 
  if you put variable inside the nowdoc its will print its name not the value   
  only Escaping string ,php parser do not operate here

*/
$txt = "Canada";
echo <<<"here"
Hi There , i code Server Side web application 
special character $$$ @@@ %%% ...  \\\\
<br> 
<h3> $txt</h3>
here; 

echo <<<'nowdoc'
Line one 
Line two  
Hi There , i code Server Side web application 
special character $$$ @@@ %%% ...  \\\\
<br> 
<h3> $txt</h3>
nowdoc;  

echo <<<"LINKS"
<ul>
<li>$txt </li> 
<li>$txt</li> 
<li>$txt </li> 
<li>$txt </li>
</ul>
LINKS; 



 







