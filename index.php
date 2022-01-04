<?php

function nextChar($character){
   
    $next_char = ++$character; 

if (strlen($next_char) > 1) 
{
 $next_char = $next_char[0];
 }
echo $next_char;
}
nextChar('z');
?>