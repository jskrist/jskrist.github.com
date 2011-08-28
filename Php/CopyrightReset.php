<?php
$time = time ();
//This line gets the current time off the server
$year= date("Y",$time) . "<br>";
//This line formats it to display just the year
echo "Copyright " . $year;
//this line prints out the copyright date range, you need to edit 2002 to be your opening year
?>
