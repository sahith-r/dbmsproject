<html>
<?php

	$u = $_POST['username'];
	$p = $_POST['password'];
	if($u=='vardhaman') {
		header("Location: correct-login.php");
 
exit;
	}
	else {
		echo "Invalid Credentials";
	}

?>
</html>