<html>
<head>
<style>
tr:first-child td {
    background-color: #66cccc;
}

p {
border-radius: 5px;
background-color: #66cccc;
width: 200px;
height: 20px;
text-align: center;
}

</style>
<body>
<?php

print "<h2>Challenge: Book Lists</h2><br>";
//items in arrays need to include: title, author, number of pages, type of book, and price
$books = array(
		array("Title", "First Name", "Last Name", "Number of Pages", "Type", "Price"),
		array("PHP and MySQL Web Development", "Luke", "Welling", "144", "paperback", "$31.63"),
		array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon", "Duckett", "135", "paperback", "$41.23"),
		array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David", "Sklar", "14", "paperback", "$40.88"),
		array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon", "Duckett", "251", "paperback", "$22.09"),
		array("Modern PHP: New Features and Good Practices", "Josh", "Lockhart", "7", "paperback", "$28.49"),
		array("Programming PHP", "Kevin", "Tatroe", "26", "paperback", "$26.96"),
	);


//create a table that displays all the books, authors, pages and prices

echo "<table border=\"1\">";
foreach($books as $row) {
	echo ('<tr>');
	foreach ($row as $cell) {
	echo ('<td>' .$cell. '</td>');
	}
	echo ('</tr>');
	}
echo "</table>";

echo "<br>";

//include the total of all the book to purchase
echo "<p>";
$price = array (31.63, 41.23, 40.88, 22.09, 28.49, 26.96); 
echo "Your total price is: $" .array_sum($price);
echo "</p>";

print "<h2>Challenge: Coin Toss Continued</h2>";
function flipCoin ($numHeadsinaRow) {
	# we need to keep track of number of tosses it takes
	$numTosses = 0;
	# we also need to create an empty array to hold all our flips
	# this will serve the purpose of our previousflip in the last exercise
	# but give us more room to store what could be a lot of flips!
	$listOfFlips = array();

	while(1) {
		# make a flip
		$currentFlip = mt_rand(0,1);
		# keep track of how many flips have happened
		$numTosses++;
		# tell the user what they have flipped
		if ($currentFlip==0) {
			print "you got heads!<br>";
		} else {
			print "you got tails!<br>";
		}
		# add our flip to the storage array
		array_push($listOfFlips, $currentFlip);
		# now we need to check our array and see if we have seen exactly the number of
		# heads in a row that we need!
		# so we need to look at just the last $numHeadsinaRow, e.g. 6, elements of the array and see if they are all 0 
		# which means we just saw the right number of heads not the entire array
		# array_slice is a function kind of like substr but for arrays
		# we can use it to slice off just the last bit of the array to look at
		# http://php.net/manual/en/function.array-slice.php
		#										get the last X elements of the array which corresponds to our 
		#										most recent flips
		$endOfArray = array_slice($listOfFlips,-$numHeadsinaRow,$numHeadsinaRow);

	    # this tells you if a value is in an array - in_array("Glenn", $people)
		# so we can use this to check if the array has a 1 in it which means a tails was seen
		# so we should keep flipping
		# here we will check if we've done enough tosses to even get to the number of heads in a row we need
		# and secondly make sure we dont see any "1" or tails in those recent flips

		if ( ($numTosses >= $numHeadsinaRow) && !in_array(1, $endOfArray) ) {
				print "<br>Flipped $numHeadsinaRow heads in a row, in $numTosses flips!<br>";
				break;
			}
		# otherwise just keep flipping until we meet the conditions!
	}

}

# variable for number of heads we want to pass to the flipCoin function
$numHeadsinaRow = 3;

# call the function asking for a number of heads in a row
flipCoin ($numHeadsinaRow);








?>
</body>
</head>
</html>