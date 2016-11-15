<?php
session_start();

if(isset($_POST['submit'])) {
	if(isset($_POST['token']) && !empty($_POST['token'])){
    $_SESSION['token'] = $_POST['token'];
		header('Location: home.php');
	}else if(isset($_POST['token']) && empty($_POST['token'])){
	}
}
require_once('./Ressources/Include/header.php');
require_once('./Ressources/Include/menu.php');
?>
<div class="alert alert-warning" id="div-login-msg">
  <span id="text-login-msg"><strong>Warning!</strong> Type your token.</span>
</div>

<script src="./Js/functions.js"></script>
<?php require_once('./Ressources/Include/footer.php'); ?>
