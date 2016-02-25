<?php 
	//echo "Wait a few, this site is under construction";
	#print_r($_POST);
	$amt = $_POST["amount"];
	echo "<br/>";
	if($amt == 70){
		header("Location: /TheHackademic/challenge_3/false.php");
	}
	else if($amt > 70 || $amt == 0){
		header("Location: /TheHackademic/challenge_3/almost.php");
	}
	else if($amt < 70){
	 	header("Location: /TheHackademic/challenge_3/true.php");
	}
	#exit;
?>


