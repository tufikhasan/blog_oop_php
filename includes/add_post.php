<?php 
	
	session_start();
	
	include('db.php');
	
	$user_nam = $_SESSION['first'].' '.$_SESSION['last'];
	
	$user_pic = $_SESSION['image'];
	
	$postdate = date('F, d Y');
	
	$posttitle = $_POST['postTitle'];

    $postcont = $_POST['postcont'];
	
	$post_image = $_FILES['post_ima']['name'];
	
			$post_tmp_n = $_FILES['post_ima']['tmp_name'];


	move_uploaded_file($post_tmp_n,'../img/post/'.$post_image);
	
	if($postcont || $post_image ){
		
		mysqli_query($conn,"INSERT INTO user_post(user_name,user_picture,post_date,post_title,post_content,post_image) VALUES('$user_nam','$user_pic','$postdate','$posttitle','$postcont','$post_image')");
		
		header('location: ../home.php?result=post-added-successful');
		
	}else{
		header('location: ../home.php?result=unable-to-create-post');
	}
	














