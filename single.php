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
            </div>
            <?php endwhile; ?>
    </section>
<?php include('./template-part/main_footer.php') ?>
