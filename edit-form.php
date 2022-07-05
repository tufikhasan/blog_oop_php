<?php
session_start();
include('./includes/db.php');
if(!isset($_SESSION['first'])){
	header('location: ./login.php');
}
include('./template-part/main_header.php') ?>
<!---form section start--->
<!---form area start--->
<section class="main-content">
    <div class="form-area flex align-items-center justify-content-center">
    <?php
	if(isset($_GET['edit'])):
	$editpostid = $_GET['edit'];
    $all_post = mysqli_query($conn,"SELECT * FROM user_post WHERE id='$editpostid'");
	//post  while loop start from here
	while($post_tukra = mysqli_fetch_array($all_post)):
	$post_id = $post_tukra['id']; ?>
        <form action="./includes/edit.php?update=<?php echo $post_id; ?>" method="POST" enctype="multipart/form-data">
            <h2 class="title">Update your post</h2>
            <div class="input-box">
                <label for="edit-post-title">Post title</label>
                <input type="text" name="edit-post-title" id="edit-post-title" placeholder="Enter post title" style="width: 100%" value="<?php echo $post_tukra['post_title']; ?>"/>
            </div>
            <div class="input-box">
                <label for="edit-post-desc">Post Description</label>
                <textarea name="edit-post-desc" id="edit-post-desc" cols="30" rows="10" style="width: 100%"
                    placeholder="Enter post Description"><?php echo $post_tukra['post_content']; ?></textarea>
            </div>
            <div class="input-box">
                <label for="post-img">Post image</label>
                <input type="file" id="edit-post-img" style="width: 100%" name="edit-post-img" />
            </div>
            <?php if($post_tukra['post_image']): ?>
            <div class=" flex align-items-center justify-content-center">
                <img src="img/post/<?php echo $post_tukra['post_image']; ?>" alt="" width="100px" height="auto"/>
            </div>
            <?php endif;?>
            <div class=" flex justify-content-space-between">
                <input class="primary_btn" type="submit" value="Update post" />
                <button class="primary_btn" type="reset">&circlearrowright;</button>
            </div>
        </form>
        <?php endwhile;endif;?>
    </div>
</section>
<!---form area end--->
<!---form section end--->
<?php include('./template-part/footer.php') ?>