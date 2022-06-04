<?php 
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$mobileno = $_POST['mobileno'];
		$address = $_POST['address'];
		$password = $_POST['country'];

		if (empty($firstname) or empty($lastname) or empty($gender) or empty($email) or empty($mobileno) or empty($address) or empty($country)) {
			echo "please fill up the form properly";
		}
		else {
			echo "Registration Successful";
		}

	}

	else {

		echo "Request Rejected";
	}
?>