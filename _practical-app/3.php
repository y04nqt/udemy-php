<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if(2 > 3) {
	echo "almost";
}elseif (2 > 4) {
	echo "closer";
}else{
	echo "I love PHP";
}

echo "<br/>";

for ($ticker = 0; $ticker < 10; $ticker++) {
	echo $ticker . "<br/>";
}

switch ($ticker) {
	case 1:
		echo 'nothing';
		break;
	case 2:
		echo 'nothing';
		break;
	case 5:
		echo 'nothing';
		break;
	case 8:
		echo 'nothing';
		break;
	case 10:
		echo 'something';
		break;
	default:
		echo "defaulted";
		break;
}


?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
