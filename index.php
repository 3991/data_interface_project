<?php require_once('Ressources/Include/header.php');?>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Test COUNT <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Test GET</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Test AGGREGATION<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form id="signin" class="navbar-form navbar-right" role="form">

        <div class="input-group">
            <span class="input-group-addon "><i class="glyphicon glyphicon-info-sign"></i></span>
            <input id="token" type="text" class="form-control" name="token" value="token" placeholder="Token...">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</nav>
<a class="btn btn-default" href="#" role="button">Sujbect 1</a>
<button class="btn btn-default" type="submit">Sujbect 2</button>
<input class="btn btn-default" type="button" value="Sujbect 3">
<input class="btn btn-default" type="submit" value="Sujbect 4">
<div class="jumbotron">
    <div class="container">
        <h4 id="test">Combien de livre(s) <strong><i>Harry Potter à l&apos;Ecole des Sorciers*</i></strong> peut-on &eacute;crire avec les Tweets sur <strong><i>Lille</i></strong> de cette semaine ?</h4>
        <p>*La version am&eacute;ricaine (~77523 mots)</p>
        <p><span class="label label-info">Info</span> test</p>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <h4 id="test">Combien de livre(s) <strong><i>Harry Potter à l&apos;Ecole des Sorciers*</i></strong> peut-on &eacute;crire avec les Tweets sur <strong><i>Lille</i></strong> de cette semaine ?</h4>
        <p>*La version am&eacute;ricaine (~77523 mots)</p>
        <p><span class="label label-info">Info</span> test</p>
    </div>
</div>
<div class="container">
<?php echo file_get_contents(""); ?>
</div>
<script>
$(document).ready(function() {

});
</script>
<?php require_once('Ressources/Include/footer.php'); ?>
