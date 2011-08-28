<Div class="greeting">
<?php
$b = time(); 
$hour = date("g",$b);
$m = date ("A", $b);

if ($m == "AM"){
	if ($hour == 12){
		echo "Good Evening!";
	}
	elseif ($hour < 4){
		echo "Good Evening!";
	}
	elseif ($hour > 3){
		echo ("Good Morning!");
	}
}
elseif ($m == "PM"){
	if ($hour == 12){
		echo "Good Afternoon!";
	}
	elseif ($hour < 7){
		echo "Good Afternoon!";
	}
	elseif ($hour > 6){
		echo "Good Evening!";
	}
}
?></Div>
