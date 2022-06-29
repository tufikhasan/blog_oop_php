<?php
session_start();
include('./includes/db.php');
if(!isset($_SESSION['first'])){
	header('location: ./login.php');
}
include('./template-part/main_header.php') ;
if(isset($_GET['post-id'])){
		
	$post_id =$_GET['post-id'];
}
$full_name = $_SESSION['first'].' '.$_SESSION['last'];
$login_user_pic = $_SESSION['image'];
?>
    <!---Add post section start--->
<?php include('./template-part/add_post_form.php') ?>
    <!---single page section start--->
    <section class="main-content flex justify-content-center" style="padding: 1rem;">
        <?php
            $all_post = mysqli_query($conn,"SELECT * FROM user_post WHERE id='$post_id'");
            while ($post = mysqli_fetch_array($all_post)): ?>
            <div class="single-post">
                <div class="autor-info flex align-items-center" style="position: relative;">
                    <img class="autor-img" src="./img/<?php echo $post['user_picture'] ?>" alt="<?php echo $post['user_name'] ?>">
                    <div>
                        <h4 class="author-title"><span class="author-title"><?php echo $post['user_name'] ?></span></h4>
                        <p><?php echo $post['post_date'] ?></p>
                    </div>
                </div>
                <h1 class="title"><?php echo $post['post_title']; ?></h1>
                <img src="img/post/<?php echo $post['post_image'] ?>" alt="<?php echo $post['post_title']; ?>">
                <p><?php echo $post['post_content']; ?></p>
                <div class="comment-form flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $login_user_pic; ?>" alt="<?php echo $full_name; ?>">
                    <form class="flex" style="width: 100%" action="includes/comment.php?single-post-id=<?php echo $post_id; ?>" method="POST">
                        <input type="text" name="comment" placeholder="Leave a comment" style="width: 100%" required>
                        <input type="hidden" name="comment-postid" value="<?php echo $post_id; ?>" />
                        <button style="margin-left:5px;" class="primary_btn" type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                    </form>
                </div>
                <h3 class="title" style="margin: 1rem 0;">ALL Comments</h3>
                <?php $all_comments = mysqli_query($conn,"SELECT * FROM user_comment WHERE comment_post_id='$post_id'");
                $comment_num = mysqli_num_rows($all_comments);
                if($comment_num > 0): 
                while($comment = mysqli_fetch_array($all_comments)):
                ?>
                <div class="comments flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $comment['user_pic']; ?>" alt="<?php echo $comment['user_name']; ?>">
                    <div>
                        <h4 class="author-title"><span><?php echo $comment['user_name']; ?></span></h4>
                        <p><?php echo $comment['comment']; ?></p>
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
    </section>
<?php include('./template-part/main_footer.php') ?>
