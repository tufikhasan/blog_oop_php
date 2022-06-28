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
    <section>
        <div class="main-content">
        <?php
            $all_post = mysqli_query($conn,"SELECT * FROM user_post WHERE id='$post_id'");
            while ($post = mysqli_fetch_array($all_post)): ?>
            <h1 class="title">POST TITLE: <span><?php echo $post['post_title']; ?></span></h1>
            <?php endwhile; ?>
        </div>
    </section>
<?php include('./template-part/main_footer.php') ?>
