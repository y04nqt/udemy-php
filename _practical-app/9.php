<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php
		session_start();
		if (isset($_GET['findme'])) {
			$name = "cookie";
			$value = $_GET['findme'];
			$expiration = (60*60*24*7);
			setcookie($name, $value, $expiration);
			$_SESSION['found'] = $value;

			echo $_SESSION['found'];
			echo '<br/>';
			print_r($_COOKIE);
		}
	/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	?>
	<a href="9.php?findme=found">CLICK HERE</a>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
