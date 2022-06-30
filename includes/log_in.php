<?php
	session_start();
	
	include('db.php');
	
	$uemail = $_POST['user-email'];
	
	$password = md5($_POST['user-password']);
	
	$user_login = mysqli_query($conn,"SELECT * FROM user_info WHERE email='$uemail' AND user_password='$password'");
	
	$user_num = mysqli_num_rows($user_login);
	
	$user_tukra = mysqli_fetch_array($user_login);

	if($user_num ==1){
		$_SESSION['first'] = $user_tukra['firstname'];
		$_SESSION['last'] = $user_tukra['lastname'];
		$_SESSION['image'] = $user_tukra['profile_picture'];
		$_SESSION['email'] = $user_tukra['email'];
		header('location: ../home.php');
	}else{
        header('location: ../login.php?result=wrong-credentials');
	}
