<html>
   <body>
      <form action="" method="post">
         First name: <input type="text" name="fname">
         Age: <input type="text" name="age">
         <input type="submit">
      </form>
   </body>
</html>

<?php
   if($_POST['fname'] && $_POST['age']) {
      if(preg_match("/[^A-Za-z'-]/", $_POST['fname'])) {
         die("Įvesti neteisingi simboliai.");
      }
   }
   echo 'Welcom ' . $_POST['fname'] . ', <br>' . 'You are ' . $_POST['age'] . ' years old';
   exit;

?>
