<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>


		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">


<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative


		*/
		$number1 = 10;
		$number2 = 20;

		$numberList1 = array(30, 40);
		$numberList2 = array("number1" => 50, "number2" => 60);

		echo $number1 + $number2 . "<br />";

		echo $numberList1[0] + $numberList1[1] . "<br/>";

		echo $numberList2['number1'] + $numberList2["number2"] . "<br/>";

		?>



		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
