<?php
session_start();
if(!isset($_SESSION['first'])){
	header('location: ./login.php');
}
include('./template-part/main_header.php') ;
$full_name = $_SESSION['first'].' '.$_SESSION['last'];
?>
    <!---Add post section start--->
<?php include('./template-part/add_post_form.php') ?>
    <!---Add post section end--->
    <!---Home main section start--->
    <section>
        <div class="main-content flex justify-content-space-between post-area">
            <div class="post">
                <div class="autor-info flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span class="author-title"><?php echo $full_name; ?></span></h4>
                        <p>May 14, 2022</p>
                    </div>
                </div>
                <img src="https://images.pexels.com/photos/1172253/pexels-photo-1172253.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    alt="post">
                <h2 class="title">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio porro fugiat, nostrum commodi soluta
                    libero pariatur accusamus, totam consectetur consequuntur laborum eligendi aliquid veritatis sunt
                    aliquam laboriosam, officia facere error.</p>
                <div class="comment-form flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <form class="flex" style="width: 100%">
                        <input type="text" name="comment" placeholder="Leave a comment" style="width: 100%" required>
                        <button class="primary_btn" type="submit">&#8620;</button>
                    </form>
                </div>
                <hr />
                <div class="comments flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span><?php echo $full_name; ?></span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="autor-info flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span class="author-title"><?php echo $full_name; ?></span></h4>
                        <p>May 14, 2022</p>
                    </div>
                </div>
                <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q="
                    alt="post">
                <h2 class="title">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio porro fugiat, nostrum commodi soluta
                    libero pariatur accusamus, totam consectetur consequuntur laborum eligendi aliquid veritatis sunt
                    aliquam laboriosam, officia facere error.</p>
                <div class="comment-form flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <form class="flex" style="width: 100%">
                        <input type="text" name="comment" placeholder="Leave a comment" style="width: 100%" required>
                        <button class="primary_btn" type="submit">&#8620;</button>
                    </form>
                </div>
                <hr />
                <div class="comments flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span><?php echo $full_name; ?></span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
                <div class="comments flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span><?php echo $full_name; ?></span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="autor-info flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span class="author-title"><?php echo $full_name; ?></span></h4>
                        <p>May 14, 2022</p>
                    </div>
                </div>
                <img src="https://images.pexels.com/photos/1172253/pexels-photo-1172253.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    alt="post">
                <h2 class="title">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio porro fugiat, nostrum commodi soluta
                    libero pariatur accusamus, totam consectetur consequuntur laborum eligendi aliquid veritatis sunt
                    aliquam laboriosam, officia facere error.</p>
                <div class="comment-form flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <form class="flex" style="width: 100%">
                        <input type="text" name="comment" placeholder="Leave a comment" style="width: 100%" required>
                        <button class="primary_btn" type="submit">&#8620;</button>
                    </form>
                </div>
                <hr />
                <div class="comments flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span><?php echo $full_name; ?></span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="autor-info flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span class="author-title"><?php echo $full_name; ?></span></h4>
                        <p>May 14, 2022</p>
                    </div>
                </div>
                <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q="
                    alt="post">
                <h2 class="title">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio porro fugiat, nostrum commodi soluta
                    libero pariatur accusamus, totam consectetur consequuntur laborum eligendi aliquid veritatis sunt
                    aliquam laboriosam, officia facere error.</p>
                <div class="comment-form flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <form class="flex" style="width: 100%">
                        <input type="text" name="comment" placeholder="Leave a comment" style="width: 100%" required>
                        <button class="primary_btn" type="submit">&#8620;</button>
                    </form>
                </div>
                <hr />
                <div class="comments flex align-items-center">
                    <img class="autor-img" src="./img/<?php echo $_SESSION['image'] ?>" alt="Towfik">
                    <div>
                        <h4 class="author-title"><span><?php echo $full_name; ?></span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---Home main section end--->
<?php include('./template-part/main_footer.php') ?>