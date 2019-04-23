
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<form action="6.php" method="post">
		<input type="text" name='neato' placeholder="put something neat here pls" />
		<input type="submit" name="submit" value="SEND IT!!!">
	</form>
	<?php

	/*  Step1: Make a form that submits one value to POST super global


	*/
	if (isset($_POST['submit'])){
		$neato = $_POST['neato'];
		if (strlen($neato) > 1) {
			echo '<br/>Wooooo!<br/>';
		}
	}
	?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
