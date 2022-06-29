<?php
session_start();
include('./includes/db.php');
if(!isset($_SESSION['first'])){
	header('location: ./login.php');
}
include('./template-part/main_header.php') ;
$full_name = $_SESSION['first'].' '.$_SESSION['last'];
$login_user_pic = $_SESSION['image'];
?>
<!---Add post section start--->
<button class="primary_btn add_post_form_open_btn">&plus;</button>
<section class="add-post-form-area">
    <button class="primary_btn add_post_form_close_btn">&cross;</button>
    <div class="main-content">
        <div class="form-area flex align-items-center justify-content-center" style="height: 100vh;">
            <form action="./includes/add_post.php?profile=<?php echo $_SESSION['first']; ?>" method="POST" enctype="multipart/form-data">
                <h2>Create a new post your</h2>
                <div class="input-box">
                    <label for="postTitle">Post title</label>
                    <input type="text" name="postTitle" id="postTitle" placeholder="Enter post title"
                        style="width: 100%">
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
                <div class=" flex justify-content-space-between">
                    <input class="primary_btn" type="submit" value="Add new post" />
                    <button class="primary_btn" type="reset">&circlearrowright;</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!---Add post section end--->
<!---profile main section start--->
<section>
    <div class="main-content flex justify-content-center post-area">
        <?php
            $all_post = mysqli_query($conn,"SELECT * FROM user_post WHERE user_name='$full_name' ORDER BY id DESC");
            $post_num = mysqli_num_rows($all_post);
            if($post_num > 0):
            while ($post = mysqli_fetch_array($all_post)):
                $post_id = $post['id'];
            ?>
        <div class="post">
            <div class="autor-info flex align-items-center" style="position: relative;">
                <img class="autor-img" src="./img/<?php echo $post['user_picture'] ?>"
                    alt="<?php echo $post['user_name'] ?>">
                <div>
                    <h4 class="author-title"><span class="author-title">
                            <?php echo $post['user_name'] ?>
                        </span></h4>
                    <p>
                        <?php echo $post['post_date'] ?>
                    </p>
                </div>
                <div class="action-buttons">
                    <a href="edit-form.php?edit=<?php echo $post_id; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="includes/delete.php?delete=<?php echo $post_id; ?>"><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
            <img src="img/post/<?php echo $post['post_image'] ?>" alt="<?php echo $post['post_title'] ?>">
            <h2 class="title">
                <?php echo $post['post_title'] ?>
            </h2>
            <p class='slice'>
                <?php echo $post['post_content'] ?>
            </p>
            <a href="single.php?post-id=<?php echo $post_id; ?>" class="primary_btn">Read more</a>
            <div class="comment-form flex align-items-center">
                <img class="autor-img" src="./img/<?php echo $login_user_pic; ?>" alt="<?php echo $full_name; ?>">
                <form class="flex" style="width: 100%"
                    action="includes/comment.php?profile=<?php echo $_SESSION['first']; ?>" method="POST">
                    <input type="text" name="comment" placeholder="Leave a comment" style="width: 100%" required>
                    <input type="hidden" name="comment-postid" value="<?php echo $post_id; ?>" />
                    <button style="margin-left:5px;" class="primary_btn" type="submit"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </form>
            </div>
            <hr />
            <?php
                $all_comment = mysqli_query($conn,"SELECT * FROM user_comment WHERE comment_post_id='$post_id' ORDER BY id DESC");
                $comment_num = mysqli_num_rows($all_comment);
                if($comment_num > 0):
                while ($comm_fetch = mysqli_fetch_array($all_comment) ): ?>
            <div class="comments flex align-items-center">
                <img class="autor-img" src="./img/<?php echo $comm_fetch['user_pic']; ?>"
                    alt="<?php echo $comm_fetch['user_name']; ?>">
                <div>
                    <h4 class="author-title"><span>
                            <?php echo $comm_fetch['user_name']; ?>
                        </span></h4>
                    <p>
                        <?php echo $comm_fetch['comment']; ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <div class="comments flex align-items-center justify-content-center">
                <h4 class="author-title">No comments have been posted yet</h4>
            </div>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php include('./template-part/no_post_found.php') ?>
        <?php  endif; ?>
    </div>
</section>
<!---profile main section end--->
<?php include('./template-part/main_footer.php') ?>