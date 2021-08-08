<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

$numRand = rand(1,10);

echo($numRand);

$text = "Hello I'm Juliet";

$count = strlen($text);

echo($text." ".$count);

$touchMe = array(34,45,56,67,78,12,109);

// $touchMax = max($touchMe);

echo(max($touchMe));

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>