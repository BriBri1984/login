<?php include("includes/header.php") ?>

  
  <?php include("includes/nav.php") ?>




	<div class="jumbotron">

		<?php display_message(); ?>
		<h1 class="text-center"> Home </h1>
	</div>



<!-- <?php 

$sql = "SELECT * FROM users";
$result = query($sql);

confirm($result);

$row = fetch_array($result);

echo $row['username'];

// Just to see if there was any problem pulling information from the data base
//everything seems fine

 ?> -->

<?php include("includes/footer.php") ?>