<?php
include('db.php');

$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email_address = $_POST['email-address'];
$re_email_address = $_POST['re-email_address'];
$birthday = $_POST['birthday'];
$password = md5($_POST['password']);

$gender = $_POST['gender'];


