<div class="alert-message">
<?php
    if(isset($_GET['result'])){
		if($_GET['result'] == 'blank'){
			echo '<span class="hide-alert danger">Fill all input  &nbsp;&nbsp;<i class="fa-solid fa-circle-exclamation"></i></span>';
		}elseif($_GET['result'] == 'not-match'){
			echo '<span class="hide-alert danger">Check your confirmation email address &nbsp;&nbsp;<i class="fa-solid fa-message-check"></i></span>';
		}if($_GET['result'] == 'exist'){
			echo '<span class="hide-alert danger">Already have an account &nbsp;&nbsp;<i class="fa-solid fa-skull-crossbones"></i><</span>';
		}if($_GET['result'] == 'successful'){
			echo '<span class="hide-alert">Welcome to Codeblog share your blog &nbsp;&nbsp;<i class="fa-solid fa-wreath"></i></span>';
		}if($_GET['result'] == 'wrong-credentials'){
			echo '<span class="hide-alert danger">Enter a valid email or password  &nbsp;&nbsp;<i class="fa-solid fa-circle-exclamation"></i></span>';
		}if($_GET['result'] == 'post-added-successful'){
			echo '<span class="hide-alert">Post created successful &nbsp;&nbsp;<i class="fa-solid fa-check-double"></i></span>';
		}if($_GET['result'] == 'unable-to-create-post'){
			echo '<span class="hide-alert danger">Unable to create a post  &nbsp;&nbsp;<i class="fa-solid fa-circle-exclamation"></i></span>';
		}if($_GET['result'] == 'comment-successful'){
			echo '<span class="hide-alert">Your Comment has been posted successful &nbsp;&nbsp;<i class="fa-solid fa-check-double"></i></span>';
		}if($_GET['result'] == 'post-deleted-successfully'){
			echo '<span class="hide-alert danger">Your Post has been deleted successfully &nbsp;&nbsp;<i class="fa-solid fa-skull-crossbones"></i></span>';
		}if($_GET['result'] == 'did-not-change-anything'){
			echo '<span class="hide-alert danger">You haven\'t changed anything&nbsp;&nbsp;<i class="fa-solid fa-circle-exclamation"></i></span>';
		}if($_GET['result'] == 'post-update-successfully'){
			echo '<span class="hide-alert">Your Post has been update successfully&nbsp;&nbsp;<i class="fa-solid fa-check-double"></i></span>';
		}
	}
?>
</div>
<style>
.alert-message{
  width: fit-content;
  position: fixed;
  top: 100px;
  left: 1.5rem;
  z-index: 1;
}
.alert-message span{
  padding: 10px;
  text-align: center;
  font-size: 0.8rem;
  color: white;
  background: #27ae60;
  font-weight: bold;
  border-radius: 10px;
}
.alert-message span.danger{
	background:#d63031
}
.hide-alert {
  -webkit-animation: hideAlert 3s forwards;
  animation: hideAlert 3s forwards;
}
@keyframes hideAlert {
    0% {opacity: 1;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}
@-webkit-keyframes hideAlert {
    0% {opacity: 1;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}
</style>