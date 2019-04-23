<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->



	<article class="main-content col-xs-8">


	<?php

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/

	$mytext = "hello,iwillbeencrypted";

	$hash = "$2y$10$";
	$salt = "uhsda91A121JSA0kjakjc921";

	$hashNSalt = $hash . $salt;

	$hashedNSalted = crypt($mytext, $hashNSalt);

	echo $hashedNSalted;
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
