<?php  
	$db = mysqli_connect("localhost", "root", "", "employeecrud");
	if ($db) {
		// echo "Ok";
	}
	else {
		die("mysql Error!" . mysqli_error($db));
	}
?>