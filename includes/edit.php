<?php
session_start();
include('db.php');
	
if(isset($_GET['update'])){
		
	$update_id =$_GET['update'];
	$edit_post_title = $conn->real_escape_string($_POST['edit-post-title']);
    $edit_post_desc = $conn->real_escape_string($_POST['edit-post-desc']);
	
	$edit_post_image = $_FILES['edit-post-img']['name'];
	$edit_post_tmp_n = $_FILES['edit-post-img']['tmp_name'];
	
	if($edit_post_title== '' || $edit_post_desc== ''){
		//echo '<script type="text/javascript">alert("Don\'t change anything")</script>';	
		//echo'<script type="text/javascript">window.open("../profile.php","_self")</script>';
        header('location: ../profile.php?result=can-not-update-blank-post');	
		exit();	
	}else{
		move_uploaded_file($edit_post_tmp_n,'../img/post/'.$edit_post_image);	
		mysqli_query($conn,"UPDATE user_post SET `post_title`='".$edit_post_title."',`post_content`='".$edit_post_desc."',post_image='$edit_post_image' WHERE id='$update_id'");
		//echo '<script type="text/javascript">alert("post update successfully")</script>';	
		//echo'<script type="text/javascript">window.open("../profile.php","_self")</script>';
        header('location: ../profile.php?result=post-update-successfully');		
	}
}	

