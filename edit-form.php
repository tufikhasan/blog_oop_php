<?php
session_start();
if(!isset($_SESSION['first'])){
	header('location: ./login.php');
}
include('./template-part/main_header.php') ?>
<!---form section start--->
<!---form area start--->
<section class="main-content">
    <div class="form-area flex align-items-center justify-content-center">
        <form action="includes/log_in.php" method="POST">
            <h2>Update your post</h2>
            <div class="input-box">
                <label for="postTitle">Post title</label>
                <input type="text" name="postTitle" id="postTitle" placeholder="Enter post title" style="width: 100%">
            </div>
            <div class="input-box">
                <label for="post-desc">Post Description</label>
                <textarea name="postcont" id="post-desc" cols="30" rows="10" style="width: 100%"
                    placeholder="Enter post Description"></textarea>
            </div>
            <div class="input-box">
                <label for="post-img">Post image</label>
                <input type="file" id="post-img" style="width: 100%" name="post_ima" />
            </div>
            <div class=" flex align-items-center justify-content-center">
                <img src="img/post/christin-hume-Hcfwew744z4-unsplash.jpg" alt="" width="100px" height="auto"/>
            </div>
            <div class=" flex justify-content-space-between">
                <input class="primary_btn" type="submit" value="Add new post" />
                <button class="primary_btn" type="reset">&circlearrowright;</button>
            </div>
        </form>
    </div>
</section>
<!---form area end--->
<!---form section end--->
<?php include('./template-part/main_footer.php') ?>