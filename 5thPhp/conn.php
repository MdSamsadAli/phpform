<?php 
		if (isset($_POST['btn'])) {
			$name = $_POST['name'];
			$address = $_POST['addr'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];

			echo "Name : " .$name;
			echo "<br>";

			echo "Address : " .$address;
			echo "<br>";

			echo "Contact : " .$contact;
			echo "<br>";

			echo "Email : " .$email;
		}
	?>
