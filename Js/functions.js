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

function add_google_logo() {
        var src = "./Ressources/HarryPotter.jpg";
        show_image("./Ressources/HarryPotter.jpg", 600, 898, "Google Logo");
    }


    function show_image(src, width, height, alt) {
        var img = document.createElement("img");
        img.src = src;
        img.width = width;
        img.height = height;
        img.alt = alt;
        document.body.appendChild(img);
    }
