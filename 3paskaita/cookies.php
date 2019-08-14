<?php
setcookie("name", "Valdas Adamkus", time()+3600, "/", "", 0);
// time()+3600 - 3600 sek.; "/" - failu struktura; "" - domenas; 0 - be sertifikato 1 - su sertifikatu
setcookie("age", "92", time()+3600, "/", "", 0);
?>

<html>
  <head>
     <title>Kuriamas ir pasiekiamas Cookies</title>

  </head>
  <body>
    <?php
      if(isset($_COOKIE["name"])) {
         echo 'Welcom' . $_COOKIE["name"] . '<br>';
         echo 'You are ' . $_COOKIE["age"] . ' years old.';
      } else {
         echo "Who are you?";
      }
     ?>

  </body>
</html>
