<html>
  <head>
     <title>Funkcijos su return</title>

  </head>
  <body>
    <?php
      function sudetis($x, $y) {
         $sum = $x + $y;
         return $sum;

         $ats = sudetis(10, 20);
         echo "Atsakymas: $ats";
      }
     ?>

  </body>
</html>
