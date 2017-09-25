<?php
print '<h1> count character string function </h1>'; 
$test = 'This is just a test'; 
foreach (count_chars($test, 1) as $i => $val) {
   echo "There are $val instance(s) of \"" , chr($i) , "\" in the string.\n</br> ";
print '<hr />';
                                               }

print '<hr />';


print '<h1> This is the echo string function </h1>';

echo 'Hello Professor Williams, how are you today?</br> ';
$name = 'Garrin';
$lastname = 'Saccento';

echo "I am in your lecture, my name is $name,$lastname"; 

echo '<hr />'; 


print '<h1> This is the explode function </h1>';

$soda = "pepsi coke mountainDew SevenUp DrPepper";
$sodas = explode (" ", $soda);
echo "My favorite soda is, $sodas[0] </br>";
echo "I do not like $sodas[2] whatsoever </br>";

echo '<hr />';











?>
