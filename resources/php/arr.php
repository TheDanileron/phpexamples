<?php 
	$ages = [
		"Thomas"=>"13",
		"Boris"=>"18",
		"Ivan"=>"32"
	];

$age_of_thomas = $ages['Thomas'];
echo "Возраст Томаса : $age_of_thomas <br >";
	foreach ($ages as $key => $value) {
		echo "$key $value <br >";
	}

?>