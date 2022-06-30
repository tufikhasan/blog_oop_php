<?php 
	
	session_start();
	
	include('db.php');
	
	date_default_timezone_set('Asia/Dhaka');
	
	$user_nam = $_SESSION['first'].' '.$_SESSION['last'];

	$user_email_address = $_SESSION['email'];
	
	$user_pic = $_SESSION['image'];
	
	$postdate = date('F d, Y h:i a');
	
	$posttitle = $conn->real_escape_string($_POST['postTitle']);

    $postcont = $conn->real_escape_string($_POST['postcont']);
	
	$post_image = $_FILES['post_ima']['name'];
	
			$post_tmp_n = $_FILES['post_ima']['tmp_name'];


	move_uploaded_file($post_tmp_n,'../img/post/'.$post_image);
	
	if($postcont || $post_image ){
		try{
			$query = 'INSERT INTO user_post(user_name,user_email,user_picture,post_date,post_title,post_content,post_image) VALUES("'.$user_nam.'","'.$user_email_address.'","'.$user_pic.'","'.$postdate.'","'.$posttitle.'","'.$postcont.'","'.$post_image.'")';
			
			mysqli_query($conn,$query);

			if (isset($_GET['profile'])) {
				header('location: ../profile.php?result=post-added-successful');
			} else {
				header('location: ../home.php?result=post-added-successful');
			}
		}catch (mysqli_sql_exception $e) {
			var_dump($e);
      		exit; 
		}
		
	}else{
		if (isset($_GET['profile'])) {
			header('location: ../profile.php?result=unable-to-create-post');
		} else {
			header('location: ../home.php?result=unable-to-create-post');
		}
	}
	














