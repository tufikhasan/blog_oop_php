<?php
session_start();
include('db.php');

$user_nam = $_SESSION['first'].' '.$_SESSION['last'];
$user_picture = $_SESSION['image'];

$comments = $_POST['comment'];
$post_id = $_POST['comment-postid'];

if ($comments) {
    $query = "INSERT INTO user_comment(user_name,user_pic,comment,comment_post_id) VALUES('$user_nam','$user_picture','$comments','$post_id')";
    mysqli_query($conn,$query);
    header('location: ../home.php?result=comment-successful');
}