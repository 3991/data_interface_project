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

function add_harry_potter_picture(element) {
  var src = "./Ressources/Images/HarryPotter.jpg";
  //show_image(src, 200, "Google Logo");
  addRow(element, src, 200, "HP picture");
}


function show_image(src, width, alt) {
  var img = document.createElement("img");
  img.src = src;
  img.width = width;
  img.alt = alt;
  document.body.appendChild(img);
}

function addRow(elmt, src, width, alt){
    var tr = document.createElement('tr');
    elmt.appendChild(tr);

    var td = document.createElement('td');
    tr.appendChild(td);

    var img = document.createElement("img");
    img.src = src;
    img.width = width;
    img.alt = alt;
    //var tdText = document.createTextNode(value);
    td.appendChild(img);
}

/*
// Creates canvas 320 × 200 at 10, 50
var paper = Raphael(10, 50, 320, 200);

// Creates circle at x = 50, y = 40, with radius 10
var circle = paper.circle(50, 40, 10);
// Sets the fill attribute of the circle to red (#f00)
circle.attr("fill", "#f00");

// Sets the stroke attribute of the circle to white
circle.attr("stroke", "#fff");
*/
