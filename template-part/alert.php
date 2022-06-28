<div class="alert-message">
<?php
    if(isset($_GET['result'])){
		if($_GET['result'] == 'blank'){
			echo '<span class="hide-alert">&#10526; Fill all input</span>';
		}elseif($_GET['result'] == 'not-match'){
			echo '<span class="hide-alert">&#10526; Check your re-write email</span>';
		}if($_GET['result'] == 'exist'){
			echo '<span class="hide-alert">&#10526; Already have an account</span>';
		}if($_GET['result'] == 'successful'){
			echo '<span class="hide-alert">&#10526; Welcome to Codebook</span>';
		}if($_GET['result'] == 'wrong-credentials'){
			echo '<span class="hide-alert">&#10526; Enter a valid email or password</span>';
		}if($_GET['result'] == 'post-added-successful'){
			echo '<span class="hide-alert">&#10526; Post created successful</span>';
		}if($_GET['result'] == 'unable-to-create-post'){
			echo '<span class="hide-alert">&#10526; Unable to create a post</span>';
		}if($_GET['result'] == 'comment-successful'){
			echo '<span class="hide-alert">&#10526; Your Comment has been posted successful</span>';
		}if($_GET['result'] == 'post-deleted-successfully'){
			echo '<span class="hide-alert">&#10526; Your Post has been deleted successfully</span>';
		}if($_GET['result'] == 'do-not-change-anything'){
			echo '<span class="hide-alert">&#10526; Your don\'t change anything</span>';
		}if($_GET['result'] == 'post-update-successfully'){
			echo '<span class="hide-alert">&#10526; Your Post has been update successfully</span>';
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