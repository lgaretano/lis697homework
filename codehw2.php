<html>
<body>
<?php


print "<h2>Challenge ISBN Validation</h2>";

$isbn = "0747532699";
function validation ($isbn)
{
	# 0747532699 example of an isbn
	
	$sum = ( substr($isbn, 0, 1) * 10 ) + ( substr($isbn, 1, 1) * 9 )
	+ (substr($isbn, 2, 1) *8) + (substr($isbn,3,1) *7) + (substr($isbn,4,1) *6) + (substr($isbn,5,1) *5)
	+ (substr($isbn,6,1) *4) + (substr($isbn,7,1) *3) + (substr($isbn,8,1) *2);

	# handle the last digit which can be X sometimes
	$lastDigit = substr($isbn,9,1);
	# conditional to test what the last digit is
	if ($lastDigit=="X") {
		# multiply 1 by 10 = 10
		$sum = $sum + 10;
	} else {
		# multiply 1 by lastDigit
		$sum = $sum + $lastDigit;
	}
	
	$remainder = $sum % 11;
	echo "Checking $isbn for validity...<br>";
	if ($remainder==0) {
		# this is valid!
		return TRUE;
	} else {
		# this is not valid
		return FALSE;
	}
}

$valid = validation($isbn);
if ($valid) {
	print "This is a valid ISBN!";
} else {
	print "This is not a valid ISBN!";
}

# $valid2 = validation("123292"); # example of calling it again


echo "<h2> Challenge Coin Toss!</h2>";

# first part of problem
function flipCoins ($numFlips)
{
for ($counter=0;$counter<$numFlips;++$counter) {
	$currentFlip = mt_rand(0,1);
	if ($currentFlip==0) {
		print "you got heads!<br>";
	} else {
		print "you got tails!<br>";
	}	
}
}
print "Flipping a coin 1 time....<br>";
flipCoins (1);

print "<br>Flipping a coin 3 times...<br>";
flipCoins(3);

print "<br> Flipping a coin 5 times...<br>";
flipCoins(5);

print "<br> Flipping a coin 7 times...<br>";
flipCoins(7);

print "<br> Flipping a coin 9 times...<br>";
flipCoins(9);


# second part, where we compare current flip to previous looking for two heads

echo "<h2>Second part - coin flip</h2>";

$previousFlip = 9;
$numTosses = 0;
print "Beginning the coin flipping....<br>";
while(1) {
	#print "NEW LOOP<br>Coming into the loop, prev flip is $previousFlip <br>";
	$currentFlip = mt_rand(0,1);
	$numTosses++;
	if ($currentFlip==0) {
		print "you got heads!<br>";
	} else {
		print "you got tails!<br>";
	}
	# checking if currentFlip is the same as previousFlip
	if (($currentFlip==0) && ($previousFlip==0)){
		print "Flipped 2 heads in a row, in $numTosses flips!";
		break;
	}
		
	# set previous flip, before we leave the loop
	$previousFlip = $currentFlip;	
}


?>

</body>
</html>