<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript, Blog, Code, Php">
    <meta name="description" content="This is a coder bloging website">
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Code Blog | Home</title>
</head>

<body>
    <!---Header area start--->
    <header class="header-area">
        <div class="main-content flex align-items-center justify-content-space-between">
            <div class="logo-area">
                <a href="index.php"><img src="./img/logo.png" alt="Logo" width="120px"></a>
            </div>
            <div class="flex align-items-center">
                <div class="avatar">
                    <a href="profile.php"><img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="<?php echo $_SESSION['first'] ?>"><span
                            class="author-title">Profile</span></a>
                </div>
                <ul class="main-menu flex">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="./includes/logout.php">Log out</a></li>
                </ul>
                <div class="mobile-menu">
                    <button class="menu-bar primary_btn">&#9776;</button>
                </div>
            </div>
        </div>
    </header>
    <!---Header area end--->