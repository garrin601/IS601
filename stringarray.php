<?php

//Number  1/10

print '<h1> count character string function </h1>'; 
$test = 'This is just a test'; 
foreach (count_chars($test, 1) as $i => $val) {
   echo "There are $val instance(s) of \"" , chr($i) , "\" in the string.\n</br> ";
print '<hr />';
                                               }

print '<hr />';

// Number 2/10

print '<h1> This is the echo string function </h1>';

echo 'Hello Professor Williams, how are you today?</br> ';
$name = 'Garrin';
$lastname = 'Saccento';

echo "I am in your lecture, my name is $name,$lastname"; 

echo '<hr />'; 

// Number 3/10

print '<h1> This is the explode function </h1>';

$soda = "pepsi coke mountainDew SevenUp DrPepper";
$sodas = explode (" ", $soda);
echo "My favorite soda is, $sodas[0] </br>";
echo "I do not like $sodas[2] whatsoever </br>";

echo '<hr />';

// Number 4/10

print '<h1> This is the add slash string function</h1>';

$question = "Hello, how are you today Mr. O'Shea?";

echo addslashes ($question);

echo '<hr />';

// Number 5/10

print '<h1> This is the chop string function  </h1>';

$testtext = 'Kalamazoo';
echo  "<pre>";
echo chop ("    kala      ");
echo chop ("$testtext", "a..z");
echo "</pre>";


echo '<hr />';

// Number 6/10

print '<h1> This is the hex2bin string function </h1>';


$hex = hex2bin("68656c6c6f2070726f666573736f722077696c6c69616d73");
var_dump($hex);

echo '<hr />';

//number 7/10

Print '<h1> This is the join string function </h1>';

$firstarray = array('a', 'b', 'c', 'd', 'e', 'f', 'g');

echo join ('<br>', $firstarray);

echo '<hr />';

// Number 8/10

print '<h1> This is the lcfirst string function </h1>';


$example1 = "GARRINSACCENTO";
$example1[0] = strtolower($example1[0]);
echo "$example1";

echo '<hr />';

// Number 9/10

print '<h1> This is the metaphone string function </h1>';


$metatest1 = 'hunter';
$metatest2 = 'hunting';
var_dump(metaphone($metatest1, 5 ));
print '</br>';
var_dump(metaphone($metatest2, 5));

echo '<hr />';


// Number 10/10

print '<h1> This is the sprintf string function  </h1>';

$number = 10;
$place = 'offices';
$format = 'The majority of the company has %d small %s all around New Jersey';
echo sprintf ($format, $number, $place);


                      











































?>
