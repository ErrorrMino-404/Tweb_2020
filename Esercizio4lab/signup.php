<?php
  include"top.html";


?>
<html>
  <head>
    <link href="nerdluv.css" text="text/css"  rel="stylesheet">
  </head>

  <body>
      <form action="signup-submit.php" >
          <fieldset>
            <legend>New User Signup</legend>
              <ul>
                <li><strong>Name:</strong><label><input type ="text" name="name" maxlength="16" ></label> </li>
                <li><strong>Gender:</strong><label ><input type ="radio" name="cc"
                    value="M" checked="checked">Male</label>
                    <label><input type ="radio" name="cc" value="F">Female</label> </li>
                <li><label><strong>Age:</strong><input type="text" name="age"size="6" maxlength="2" > </label></li>
                <li><strong>Personality type:</strong><label><input type="text" name="pty" size="6"
                                                            maxlength="4">(

                                                      <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
                                                      Don't know your type?</a>)</label></li>

                <li><label><strong>Favorite OS:</strong> <select name ="OS" > <option name="Linux" selected="selected">Linux</option>
                                                                       <option name="Mac_OS_X">Mac OS X </option>
                                                                       <option name="Windows">Windows</option>
                                                  </select></label>
                <li><label><strong>Seeking age:</strong> <input type="text" name="min" size="6" maxlength="2"  placeholder="min"> to
                                                         <input type="text" name="max" size="6" maxlength="2" placeholder="max"></label></li>
                <li><input type="submit" value="Sign Up"></li>
              </ul>

          </fieldset>
      </form>
  </body>
</html>
<?php
  include "bottom.html";
?>
