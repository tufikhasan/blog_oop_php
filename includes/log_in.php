<?php
include('db.php');

$user_email = $_POST['user_email'];
$user_password = md5($_POST['user_password']);

$user = mysqli_query($conn,"SELECT * FROM user_info WHERE email='$user_email' AND user_password='$user_password'");
$user_num = mysqli_num_rows($user);
$user_fetch_array = mysqli_fetch_array($user_num);

if ($user_num == 1) {
    $_SESSION['first'] = $user_fetch_array['firstname'];
    $_SESSION['last'] = $user_fetch_array['lastname'];
    $_SESSION['picture'] = $user_fetch_array['profile_picture'];
    header("location: ../home.html");
} else {
    header("location: ../login.php?result=wrong-credentials");
}
