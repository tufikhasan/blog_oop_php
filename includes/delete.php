<?php
session_start();
include('db.php');

if (isset($_GET['delete'])) {
    $del_post_by_id = $_GET['delete'];
    $query = "DELETE FROM user_post WHERE id='$del_post_by_id'";
    mysqli_query($conn,$query);
    //echo '<script type="text/javascript">alert("Your Post has been deleted successfully")</script>';
    //echo '<script type="text/javascript">window.open("../profile.php","_self")</script>';
    header('location: ../profile.php?result=post-deleted-successfully');
    
}
