<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


	<?php

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll




	*/

	class Dog {
		var $legs = 3;
		var $eyes = 2;
		var $blind = true;
		var $ears = 1.5;
		var $deaf = true;

		function fart() {
			echo "that's a stinker";
		}

		function bark() {
			print_r(get_class_vars('dog'));
			echo '<br/>';
			print_r(get_class_methods('dog'));
		}
	}

	$rogi = new Dog();

	$rogi->bark();

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
