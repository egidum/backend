<!--
- Sukurk masyvą temp ir patalpink jame Vilniaus balandžio mėnesio oro temperatūras:
- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21.
- Rask ir išvesk vidutinę mėnesio temperatūrą, penkias šilčiausias ir penkias šalčiausias temperatūras.
- Patarimai:
1. Naudok foreach ciklą.
2. Naudok round( ), kad suapvalintum vidutinę temperatūrą.
3. Naudok rsort( ), kad surūšiuoti ciklą žemėjančia tvarka.
4. Naudok array_slice( ), kad surastum penkias šilčiausias ir penkias šalčiausias temperatūras.-->

<?php
   $temps = [
      4, 3, 9, 19, 19, 9, 12, 20, 24, 20,
      12, 14, 18, 21, 20, 23, 16, 16, 15,
      19, 19, 17, 17, 15, 12, 13, 13, 15,
      19, 21];
   $temps_sum = 0;
   foreach($temps as $temp) {
      $temps_sum += $temp;
   }
   echo round($temps_sum  / count($temps)) . "<br>";

   rsort($temps);
   print_r($temps);
   echo "<br>";

   $warm_temps = array_slice($temps, 0, 5);
   print_r($warm_temps);
   echo "<br>";

   $cold_temps = array_slice($temps, -5, 5);
   print_r($cold_temps);

?>
