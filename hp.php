<?php session_start();
require_once('./Ressources/Include/header.php');
require_once('./Ressources/Include/menu_log.php');
//require_once('./Controller/hp.php');
?>
<div class="container">
  <div class="jumbotron">
    <p>Tops sujets : <span class="label label-info" href="#" role="button">Sujbect 1</span>
      <span class="label label-info" href="#" role="button">Sujbect 2</span>
      <span class="label label-info" href="#" role="button">Sujbect 3</span>
      <span class="label label-info" href="#" role="button">Sujbect 4</span></p>
        <h3 id="test">Combien de livre(s) <strong><i>Harry Potter &#225; l&apos;Ecole des Sorciers*</i></strong> peut-on &eacute;crire avec les Tweets sur <strong><i>Lille</i></strong> de cette semaine <i class="glyphicon glyphicon-question-sign"></i></h3>
        <div class="alert alert-info" role="alert"><strong>Info !</strong> *La version am&eacute;ricaine (~77523 mots)</div>
    </div>
</div>
<script src="./Js/functions.js"></script>
<?php require_once('./Ressources/Include/footer.php'); ?>
