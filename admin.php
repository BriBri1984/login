<?php include("includes/header.php") ?>

  
  <?php include("includes/nav.php") ?>



	<div class="jumbotron">
		<h1 class="text-center"><?php 
		//function from line 554 if email is set
		if(logged_in()){

			echo "Logged in";

		} else {


			redirect("index.php");
		}




		?></h1>
	</div>

<?php include("includes/footer.php") ?>