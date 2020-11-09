<?php
include"top.html";
$name= $_GET ["name"];
foreach(file("singles.txt") as $file){

  $exp = explode(',', $file);
  if( $name == $exp[0]){
      list($name, $gene, $age, $pt, $pos, $min, $max) = explode (',',$file);
  }
}
?>
<html>
  <head>
    <link href="nerdluv.css" text="text/css" rel="stylesheet">
  </head>
  <body>
      <div class="match">
        <h1>Matches for <?=$name ?></h1>
      <?php
        foreach(file("singles.txt") as $file){
          list($match_name, $match_gender, $match_age, $match_type, $match_OS, $match_min, $match_max) = explode (",",$file);
                if ($name != $match_name && $gene != $match_gender && $match_age>=$min &&
                    $match_age <= $max && $match_OS == $pos ){
                      $string1 = str_split($pt); //in String1 viene utilizzata la stringa del User
                      $string2 = str_split($match_type);//in String2 viene utilizzata la stringa del possibile match
                      $flag    = 0;
                      for ($index=0;$index<count($string1) && $flag<1; $index++){
                          $flag = $string1[$index] == $string2[$index]; //se le due stringe sono uguali danno un risultato pari a 1
                          if($flag == 1){

      ?>
    <p>
        <?= $match_name ?>
      <img src="http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/user.jpg" alt="matching_user">
    </p>
      <ul>
         <li><strong>gender:</strong><?= $match_gender ?></li>
         <li><strong>age:</strong><?= $match_age ?></li>
         <li><strong>type:</strong><?= $match_type ?></li>
         <li><strong>OS:</strong><?= $match_OS ?></li>
      </ul>

      <?php
                        }//controllo del flag == 1
            }//for applicato per la stringa parametro type
        }//if controllo dei parametri
    }//foreach
       ?>
      </div>
  </body>
</html>
<?php
include"bottom.html";


?>
