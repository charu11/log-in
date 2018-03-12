<?php 
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'charun' && $password == 'pass'){
		echo "log in successful";
	}else{
		echo "invalid access";
	}	
	}

	
 ?>