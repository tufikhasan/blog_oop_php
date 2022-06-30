<?php
include('db.php');

$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email_address = $_POST['email-address'];
$re_email_address = $_POST['re-email_address'];
$birthday = $_POST['birthday'];
$password = md5($_POST['password']);

$profile_picture = $_FILES['profile-picture']['name'];
$tmp_profile_picture = $_FILES['profile-picture']['tmp_name'];
move_uploaded_file($tmp_profile_picture,'../img/'.$profile_picture);

$gender = $_POST['gender'];

//get user-email from database
$user_email = mysqli_query($conn,"SELECT * FROM user_info WHERE email='$email_address'");
//fetch user email
$user_email_index = mysqli_num_rows($user_email);


if ($firstname || $lastname || $email_address || $re_email_address || $birthday || $password || $profile_picture || $gender) {
    if ($email_address == $re_email_address) {
        if ($user_email_index == 1) {
            header('location: ../index.php?result=exist');
        } else {
            mysqli_query($conn,"INSERT INTO user_info(`firstname`,`lastname`,`email`,`birthday`,`profile_picture`,`gender`,`user_password`) VALUES('$firstname','$lastname','$email_address','$birthday','$profile_picture','$gender','$password')");
                    header('location: ../login.php?result=successful');
        }
    } else {
        header('location: ../index.php?result=not-match');
    }
} else {
    header('location: ../index.php?result=blank');
}
