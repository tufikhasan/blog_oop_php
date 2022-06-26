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

<!---Alert system start--->
<div class="alert-message">
<?php
    if(isset($_GET['result'])){
		if($_GET['result'] == 'blank'){
			echo '<span class="hide-alert">&#10526; Fill all input</span>';
		}elseif($_GET['result'] == 'not-match'){
			echo '<span class="hide-alert">&#10526; Check email</span>';
		}if($_GET['result'] == 'exist'){
			echo '<span class="hide-alert">&#10526; Already have an account</span>';
		}if($_GET['result'] == 'successful'){
			echo '<span class="hide-alert">&#10526; Welcome to Codebook</span>';
		}
	}
?>
</div>
<style>
.alert-message{
  width: fit-content;
  position: fixed;
  top: 100px;
  left: 1.5rem;
}
.alert-message span{
  padding: 10px;
  text-align: center;
  font-size: 0.8rem;
  color: white;
  background: #27ae60;
  font-weight: bold;
}
.hide-alert {
  -webkit-animation: hideAlert 3s forwards;
  animation: hideAlert 3s forwards;
}
@keyframes hideAlert {
    0% {opacity: 1;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}
@-webkit-keyframes hideAlert {
    0% {opacity: 1;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}
</style>
<!---Alert system end--->