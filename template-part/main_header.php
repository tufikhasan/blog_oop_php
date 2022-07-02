<?php include('head.php'); ?>
<body class="dark">
    <!---Header area start--->
    <header class="header-area">
        <div class="main-content flex align-items-center justify-content-space-between">
            <div class="logo-area">
                <a href="index.php"><img src="./img/logo.png" alt="Logo" width="120px"></a>
            </div>
            <div class="flex align-items-center">
                <ul class="main-menu flex align-items-center">
                    <li><?php if($_SESSION['image']): ?>
                        <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="<?php echo $_SESSION['first'] ?>">
                    <?php else: ?>
                        <img class="autor-img" src="./img/avatar.png" alt="<?php echo $_SESSION['first'] ?>">
                    <?php endif; ?><a href="profile.php">Profile</a></li>
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
    <!---Alert system start--->
<?php include('alert.php'); ?>
<!---Alert system end--->
    <!---style_switcher system start--->
    <?php include('style_switcher.php'); ?>
    <!---style_switcher system end--->