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


print '<h1> This is the add slash string function</h1>';

$question = "Hello, how are you today Mr. O'Shea?";

echo addslashes ($question);

echo '<hr />';

print '<h1> This is the chop string function  </h1>';

$testtext = 'Kalamazoo';
echo  "<pre>";
echo chop ("    kala      ");
echo chop ("$testtext", "a..z");
echo "</pre>";


echo '<hr />';


print '<h1> This is the hex2bin string function </h1>';


$hex = hex2bin("68656c6c6f2070726f666573736f722077696c6c69616d73");
var_dump($hex);

echo '<hr />';





















?>
