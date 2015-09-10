<!DOCTYPE html>
<html>
<body>
<?php

$speed = "78";
$birthday = "0904";
$currentdate = date("md");

if ($speed >= 60)
{
	echo "No Ticket";
}
if ($speed >= 61 OR <= 80)
{
	echo "Small Ticket";
}
if($speed >= 81)
{
	echo "Big Ticket";
}
else
{
	$birthday == $currentdate;
	$speed ++ 5;
}







?>
</body>
</html>
