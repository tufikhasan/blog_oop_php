<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript, Blog, Code, Php">
    <meta name="description" content="This is a coder bloging website">
    <link rel="shortcut icon" href="/img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Code Blog</title>
</head>

<body>
    <!---Header area start--->
    <header class="header-area">
        <div class="main-content flex align-items-center justify-content-space-between">
            <div class="logo-area">
                <a href="index.php"><img src="./img/logo.png" alt="Logo" width="120px"></a>
            </div>
            <div>
                <a href="login.php" class="primary_btn">Login</a>
            </div>
        </div>
    </header>
<!---Header area end--->
<div class="alert-message" style="width: fit-content;position: fixed;top: 100px;left:1.5rem;">
<?php
    if(isset($_GET['result'])){
		if($_GET['result'] == 'blank'){
			echo '<span style="color:#2c3e50;background:#bdc3c7;padding:10px;text-align:center;font-size: 0.8rem;">&#10526; Fill all input</span>';
		}elseif($_GET['result'] == 'not-match'){
			echo '<span style="color:white;background:#2c3e50;padding:10px;text-align:center;font-size: 0.8rem;">&#10526; Check email</span>';
		}if($_GET['result'] == 'exist'){
			echo '<span style="color:white;background:#e74c3c;padding:10px;text-align:center;font-size: 0.8rem;">&#10526; Already have an account</span>';
		}if($_GET['result'] == 'successful'){
			echo '<span style="color:#2c3e50;background:green;padding:10px;text-align:center;font-size: 0.8rem;">&#10526; Welcome to Codebook</span>';
		}
	}
?>
</div>