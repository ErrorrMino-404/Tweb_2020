<?php
  include "top.html";
  $name = $_GET["name"];
  $gene = $_GET["cc"];
  $age  = $_GET["age"];
  $p_t  = $_GET["pty"];
  $f_os = $_GET["OS"];
  $min  = $_GET["min"];
  $max  = $_GET["max"];

  if(!empty($name)){

    if(!empty($age)){ //controllo presenza età

      if(!empty($p_t)){ //controllo Personality

         if(!empty($min) && !empty($max)){

            $risultato=$name. "," .$gene. "," .$age. "," .$p_t. "," .$f_os. "," .$min. "," .$max;
            file_put_contents("singles.txt", "$risultato \r\n", FILE_APPEND );


?>
<html>
  <head>
      <link href="nerdluv.css"  text="text/css" rel="stylesheet">
  </head>
  <body>
      <h1> Thank you! </h1>
      <p> Welcome to NerdLuv, Elaine Benes! <p> <br>
      <p> Now <a href="matches.php">log in to see your matches!</a>
<?php
        }else {echo "Inserire età minima/massima";}

      }else {echo "Inserire Personalità";}

    }else {echo "Inserire età";}

  }else { echo $name. "  non ha inserito il nome";}


 ?>


  </body>
</html>
 <?php
 include "bottom.html"

  ?>
