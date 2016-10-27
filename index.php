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
<div id="div-login-msg">
  <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
  <span id="text-login-msg">Type your username and password.</span>
</div>

<div class="alert alert-warning" role="alert"><strong>Warning!</strong> Token!!!!</div>

<script src="./Js/functions.js"></script>
<?php require_once('./Ressources/Include/footer.php'); ?>
