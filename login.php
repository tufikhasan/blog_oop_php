<?php include('./template-part/header.php') ?>
<!---form section start--->
<!---form area start--->
<section class="main-content">
    <div class="form-area flex align-items-center justify-content-center">
        <form action="includes/log_in.php" method="POST">
            <h2>Login your account</h2>
            <div class="input-box">
                <label for="email_address">Enter e-mail address <span>*</span></label>
                <input type="email" name="user_email" id="email_address" placeholder="Enter your e-mail"
                        style="width: 100%" required />
            </div>
            <div class="input-box">
                <label for="password">Enter Your password <span>*</span></label>
                <input name="user_password" type="password" placeholder="New password" id="password" style="width: 100%"
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
<!---form section end--->
<?php include('./template-part/footer.php') ?>