<html>
<body>
<?php

print "<h1> Challenge 99 Bottles of Beer</h1>";
 
$bottles = 99;

	while ($bottles > -1) 
	{
	echo "$bottles bottles of beer on the wall ,";
	echo "$bottles bottles of beer,";
	echo "take one down and pass it around,<br>";
	$bottles--; 
	echo "$bottles of beer on the wall!<br>";
	}
	
	


print "<h1> Challenge 99 Bottles of Beer</h1>";
 
$inputNum = 4;

	while ($inputNum > -1) 
	{
	echo "$inputNum bottles of beer on the wall ,";
	echo "$inputNum bottles of beer,";
	echo "take one down and pass it around...<br>";
	$inputNum--; 
	}
	
	
	
		
print "<h1> Challenge: Correct Change</h1>";

$amount = 159;
$penny = 1;
$nickel = 5;
$dime = 10;
$quarter = 25;
$dollar = 100;
$dollarchange = 0;
$quarterchange = 0;
$dimechange = 0;
$nickelchange = 0;
$cents = 0;

$dollarchange = (int) ($amount / $dollar);
print "You get this many dollar(s) back:".$dollarchange;
$amount = $amount - ($dollarchange * $dollar);


$quarterchange = (int) ($amount / $quarter);
print ", quarter(s):" .$quarterchange;
$amount = $amount - ($quarterchange * $quarter);


$dimechange = (int) ($amount / $dime);
print ", dime(s):" .$dimechange;
$amount = $amount - ($dimechange * $dime);


$nickelchange = (int) ($amount / $nickel);
print ", nickel(s):" .$nickelchange;
$amount = $amount - ($nickelchange * $nickel);

$cents = (int) ($amount / $penny);
print ", and cent(s):" .$cents;

 


?>
</body>
</html>