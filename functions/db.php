<?php 

$con = mysqli_connect('localhost', 'root', '', 'login_db');

//
function row_count($result){


return mysqli_num_rows($result);

}



function escape($string) {
	global $con;
			// real escape string function will remove \x00, \n, \r, \, ', " and \x1a. To prevent SQL injecton attacks
	return mysqli_real_escape_string($con, $string);


}


function confirm($result) {

	global $con;

	if(!$result) {

		die("QUERY FAILED" . mysqli_error($con));

	}

}



function query($query) {

	global $con;

	$result =  mysqli_query($con, $query);

	confirm($result);

	return $result;


}




//getting all the data
function fetch_array($result) {

	global $con;


	return mysqli_fetch_array($result);



}









 ?>