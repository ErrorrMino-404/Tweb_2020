<!DOCTYPE>
<?php
    $film_name=$_GET["film"];
    $dir=$film_name."/";
    $info=file($dir."info.txt");
    $info_nome=$info[0];
    $info_anno=$info[1];
    $info_voto=$info[2];
    $overview=file($dir."overview.txt");
    $overview_png_path=$dir."overview.png";

    if($info_voto>=60){
        $evaluation_img = "https://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/freshbig.png";
    }else{
        $evaluation_img = "https://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/rottenbig.png";
    }

    $rev_str = $dir."review*.txt";
    $review = glob($rev_str);
    $tot_rev_num = count($review);
    $rev_num = ceil($tot_rev_num/2);
    $sx_review = array_slice($review,0,$rev_num);
    $dx_review = array_slice($review,$rev_num);
?>
<html lang="it">
<head>
  <title><?=$info_nome?>- RT</title>
  <link href= "movie.css" type="text/css" rel="stylesheet">
  <link href="http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/rotten.gif"
    type="image/gif" rel="shortcut icon">
</head>
<body>
    <div id="banner">
      <img src="http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/banner.png">
    </div>

      <h1> <?=$info_nome." (".$info_anno.")" ?> </h1>

  <div class="margine">
    <aside>
      <div>
        <img src="<?= $overview_png_path?>"class="copertina">
      </div>
      <dl>
        <?php
            for($i=0; $i<count($overview) ; $i++){
              $overview_str = explode(":",$overview[$i]);
         ?>
         <dt><?=$overview_str[0]?></dt>
         <dd><?=$overview_str[1]?></dt>

         <?php }  ?>
      </dl>
  </aside>
  <article>
    <p id="punteggio">
        <img src=<?= $evaluation_img?> class="rotten">
        <span class="rate"><?=$info_voto?>%</span>
    </p>

                <div id="colosin">
                    <?php
                        for($i=0; $i<5 && $i<count($sx_review); $i++){
                            $rev=file($sx_review[$i]);
                            $text_rev=$rev[0];
                            $rev_img= "http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/".str_replace("\n","",strtolower($rev[1])).".gif";
                            $autore=$rev[2];
                            $publi=$rev[3];

                  ?>

                    <p class="recensione">
                      <span>
                        <img src= <?=$rev_img?> class="rec">
                        <q> <?=$text_rev?> </q>
                      </span>
                    </p>

                    <p class="utente">
                    <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/critic.gif" alt="Critic">
                    <?=$autore?> <br>
                    <span id="italic"><?=$publi?></span>
                    </p>

                  <?php
                  }
                  ?>

                </div>
                <div id="colodes">
                  <?php
                      for($i=0; $i<5 && $i<count($dx_review); $i++){
                          $rev=file($dx_review[$i]);
                          $text_rev=$rev[0];
                          $rev_img= "http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/".str_replace("\n","",strtolower($rev[1])).".gif";
                          $autore=$rev[2];
                          $publi=$rev[3];

                ?>
                <p class="recensione">
                  <span>
                    <img src= <?=$rev_img?> alt="Rotten">
                    <q> <?=$text_rev?> </q>
                  </span>
                </p>

                <p class="utente">
                <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/critic.gif" alt="Critic">
                <?=$autore?> <br>
                <span class="publications"><?=$publi?></span>
                </p>

              <?php
              }
              ?>
              </div>

      </article>
      <p id="finale">(1-<?= $tot_rev_num?>) of <?= $tot_rev_num?></p>
    </div>
    <div id="validators">
      <a href="http://validator.w3.org/check/referer">
        <img width="88" src="https://upload.wikimedia.org/wikipedia/commons/b/bb/W3C_HTML5_certified.png " alt="Valid HTML5!">
      </a>
      <br>
      <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!">
      </a>
    </div>
  </body>
</html>

