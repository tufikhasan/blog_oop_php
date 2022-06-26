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
    <title>Code Blog | Login</title>
</head>

<body>
    <!---Header area start--->
    <header class="header-area">
        <div class="main-content flex align-items-center justify-content-space-between">
            <div class="logo-area">
                <a href="home.html"><img src="./img/logo.png" alt="Logo" width="120px"></a>
            </div>
            <div>
                <a href="index.html" class="primary_btn">Sign Up</a>
            </div>
        </div>
    </header>
    <!---Header area end--->
    <!---form area start--->
    <section class="main-content">
        <div class="form-area flex align-items-center justify-content-center">
            <form action="">
                <h2>Login your account</h2>
                <div class="input-box">
                    <label for="email_address">Enter e-mail address <span>*</span></label>
                    <input type="email" name="email_address" id="email_address" placeholder="Enter your e-mail"
                        style="width: 100%" required />
                </div>
                <div class="input-box">
                    <label for="password">Enter Your password <span>*</span></label>
                    <input name="password" type="password" placeholder="New password" id="password" style="width: 100%"
                        required />
                </div>
                <div class=" flex justify-content-space-between">
                    <input class="primary_btn" type="submit" value="Log in" />
                    <button class="primary_btn" type="reset">&circlearrowright;</button>
                </div>
            </form>
        </div>
    </section>
    <!---form area end--->
    <!---footer area start--->
    <footer class="footer-area">
        <div class="main-content flex align-items-center justify-content-center">
            <p>All right reserved by <span>&copy;Tufik hasan</span> | 2022</p>
        </div>
    </footer>
    <!---footer area end--->
</body>

</html>