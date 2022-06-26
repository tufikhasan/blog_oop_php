<?php include('./template-part/header.php') ?>
<!---form section start--->
<section class="main-content">
    <div class="form-area flex align-items-center justify-content-center">
        <form>
            <h2>Create a new account</h2>
            <div class="input-box flex justify-content-space-between">
                <div style="width:49%">
                    <label for="first_name">First Name <span>*</span></label>
                    <input type="text" name="first-name" id="first_name" placeholder="First Name"
                            style="width: 100%" required>
                </div>
                <div style="width:49%">
                    <label for="last_name">Last Name <span>*</span></label>
                    <input type="text" name="last-name" id="last_name" placeholder="Last Name" style="width: 100%"
                            required>
                </div>
            </div>
            <div class="input-box">
                <label for="email_address">Enter e-mail address <span>*</span></label>
                <input type="email" name="email-address" id="email_address" placeholder="Enter your e-mail"
                        style="width: 100%" required>
            </div>
            <div class="input-box">
                <label for="re-email_address">Re-enter your e-mail <span>*</span></label>
                <input type="email" name="re-email_address" id="re-email_address" placeholder="Re-enter your e-mail"
                        style="width: 100%" required>
            </div>
            <div class="input-box">
                <label>Birthday :</label>
                <input type="date" id="birthdaytime" name="birthday">
            </div>
            <div class="input-box">
                <label for="password">Create Your password <span>*</span></label>
                <input name="password" type="password" placeholder="New password" id="password" style="width: 100%"
                        required />
            </div>
            <div class="input-box">
                <label for="pp">Profile Picture</label>
                <input type="file" id="pp" style="width: 100%" name="profile-picture" />
            </div>
            <div class="input-box">
                <input type="radio" id="female" name="gender" />
                <label for="female">Female</label>
                <input type="radio" id="male" name="gender" />
                <label for="male">Male</label>
            </div>
            <div class=" flex justify-content-space-between">
                <input class="primary_btn" type="submit" value="Create an account" />
                <button class="primary_btn" type="reset">&circlearrowright;</button>
            </div>
        </form>
    </div>
</section>
<!---form section end--->
<?php include('./template-part/footer.php') ?>