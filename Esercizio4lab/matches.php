<?php
  include"top.html";
?>

<html>
  <head>
      <link href="nerdluv.css" text="text/css"  rel="stylesheet">
  </head>

  <body>
    <form action = "./matches-submit.php">
        <fieldset>
          <legend>Returning User:</legend>
            <ul>
              <li><strong>Name:</strong><label><input type ="text" name="name" maxlength="16" ></label> </li>
              </ul>
              <input type="submit" value="View My Matches">
        </fieldset>
    </form>
  </body>

</html>
<?php
  include"bottom.html";


?>
