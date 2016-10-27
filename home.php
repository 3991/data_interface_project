<?php
session_start();
require_once('./Ressources/Include/header.php');
require_once('./Ressources/Include/menu.php');
?>
<div class="container">
  <a class ="label label-default" href="#" role="button">Sujbect 1</a>
  <a class ="label label-default" href="#" role="button">Sujbect 2</a>
  <a class ="label label-default" href="#" role="button">Sujbect 3</a>
  <a class ="label label-default" href="#" role="button">Sujbect 4</a>
</div>
<div class="container">
  <div class="jumbotron">
        <h3 id="test">Combien de livre(s) <strong><i>Harry Potter &#225; l&apos;Ecole des Sorciers*</i></strong> peut-on &eacute;crire avec les Tweets sur <strong><i>Lille</i></strong> de cette semaine <i class="glyphicon glyphicon-question-sign"></i></h3>
        <p>*La version am&eacute;ricaine (~77523 mots)</p>
        <p><span class="label label-info">Info</span> test</p>
    </div>
</div>
<div class="container">
<?php echo file_get_contents(""); ?>
</div>
<?php require_once('./Ressources/Include/footer.php'); ?>
