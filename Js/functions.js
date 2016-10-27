$(document).ready(function() {
    var $formLogin = $('#token_form');

    $("form").submit(function () {
      var $token=$('#token_input').val();

      if ($token == "TOTO") {
          //$('#text-login-msg').text($token);
          $("#test1").text("Hello world!");
      }else{
          //$('#text-login-msg').text('non non nono');
          $("#test1").text("Hello world!");
      }
    });
});
