<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'codeblog';
// Create connection
$conn =  new mysqli($server,$username,$password,$database);

if ($conn->connect_error) {
    die('Connection error: ' .$conn-connect_error());
}