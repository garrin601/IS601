<?php 



$term = '/';
$position = strpos ($date, $term);
echo $position;

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";

//Question 2


$date = str_replace("-","/",$date);
echo $date;
echo "<br>";

//question 3

if (strcmp($date, $tar)> 0)
{
	echo "The Future";

}

elseif (strcmp($date, $tar)< 0)
{
	echo "The Past";
}

else
{
	echo "oops";
}

// question 4

$pos = 0;

while (($pos = strpos($date, "/", $pos)) !== false){
	echo ("<br> The symbol / was found at position : $pos");
	$pos++;

	}

//question 5

echo "<br> total number of words in date are: ",str_word_count($date);


//question 6

echo "<br> total length of tar is: ", strlen($tar);



//question 7

if (ord($tar{0}) == 50)

{
	print "<br> the value of the first letter in the tar string is 50<br>";

 }

else
{
	print "The value of the first letter is not 50";
 }




//question 8



print substr($date,-2,2); 




// question 9
print "<br>";
print_r(explode('/', $date,3));





//question 10


//first option using foreach loop and switching statements


print "<br><br><br> ";

foreach ($year as $years) 
{
	$value = $years%400;
		switch ($value)
		{
	case 0 :
		echo $years . ":True";
		break;
	
	default: 
		$value = $years%100;
		switch($value)
			{case 0:
		echo $years . ":False";
			break;
	
	default:
		$value = $years%4;
		switch($value)
			{ case 0 :
		echo $years . ":True";
			break;
	default:
		echo $years . ":False";}}
	        }
}




echo "<br>";


// second option for loop using switch statements

for ($i = 0; $i < count($year); $i++)
{
        $value = $year[$i]%400;
	        switch ($value)
		        {
			 case 0:
			 
			 echo $year[$i]. ":True";
				break;

			default:
    				 $value = $year[$i]%100;
		                	switch ($value)
				                {
						  case 0:
						  echo $year[$i] .":False";
						  break;

			default:
               			 $value = $year[$i]%4;
		                	switch ($value)
				             	 {
							 case 0:
							 echo $year[$i]	.":True";
								break;
			default:
				echo $year[$i] .":False";
				break;
				}
			}
		}
}




?>
