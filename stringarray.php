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

echo '<hr />';

// Number 1/10 array functions


print '<h1> This begings the Array Section of this homework </h1>';

print '<h2> This is the Array Chunk array function </h2>';

$new_array = array('g', 'a', 'r', 'r', 'i', 'n');
print_r (array_chunk($new_array, 2 ));

echo '<hr />';

// Number 2/10

print '<h1> This is the Array Column array function </h1>';

$fields1 = array(

array(

'id' => 2555,
'first_name' => 'James',
'Last_name' => 'Kennedy',
),

array(
'id' => 1555,
'first_name' => 'Garrin',
'Last_name' => 'Saccento',
)

);


$first_names = array_column($fields1, 'first_name');
print_r ($first_names);

echo '<hr />';

// Number 3/10

print '<h1> This is the Array Diff array function </h1>';

$array31 = array("a" => "tuna", "salmon", "Trout", "Catfish");
$array32 = array("b" => "tuna", "salmon", "Swordfish", "Catfish");
$show = array_diff($array31, $array32);

print_r($show);

echo '<hr />';

// Number 4/10

print '<h1> This is the Array Fill Keys array function</h1>';

$newkeys = array('1key', '2key', '3key', '4key');
$addkeys = array_fill_keys($newkeys, 'i am the same</br>');
print_r($addkeys);

echo '<hr />';

//number 5/10

print '<h1> This is the array filter array function</h1>';

function odd($var)

{
	Return ($var & 1);
	}

function even($var)
{
	Return(!($var & 1));
	}

$array51 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array52 = array(6, 7, 8, 9, 10, 11, 12);

echo"Odd :\n</br> ";
print_r(array_filter($array51, "odd"));
echo "</br> even :\n</br>";
print_r(array_filter($array52, "even"));

echo '<hr />';

?>
