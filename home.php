<?php session_start();
if(isset($_POST['submit'])) {
	if(isset($_POST['southpark'])){
	   echo "test";
	}
}
require_once('./Ressources/Include/header.php');
require_once('./Ressources/Include/menu_log.php');
require_once('./Controller/home.php');
?>
<div class="alert alert-success" id="div-login-msg">
  <span id="text-login-msg"><strong>Success!</strong> Connected</span>
</div>
<script src="./Js/functions.js"></script>
<?php require_once('./Ressources/Include/footer.php'); ?>
