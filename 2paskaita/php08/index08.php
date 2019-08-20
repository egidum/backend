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
   echo round($temps_sum  / count($temps)) . '<br>';

   rsort($temps);
   echo '<pre>';
   print_r($temps);
   echo '</pre>' . '<br>';

   $warm_temps = array_slice($temps, 0, 5);
   echo '<pre>';
   print_r($warm_temps);
   echo '</pre>' . '<br>';

   $cold_temps = array_slice($temps, -5, 5);
   echo '<pre>';
   print_r($cold_temps);
   echo '</pre>' . '<br>';

?>

<?php
   $temps = [
      4, 3, 9, 19, 19, 9, 12, 20, 24, 20,
      12, 14, 18, 21, 20, 23, 16, 16, 15,
      19, 19, 17, 17, 15, 12, 13, 13, 15,
      19, 21];

   echo '<p>Vilniaus balandžio mėn. vidutinė oro temperatūra: </p>' .
   round(array_sum($temps)  / count($temps)) . '&#8451;';
   echo '<br>';

   rsort($temps);
   echo '<p>Vilniaus balandžio mėn. oro temperatūros (&#8451;): </p>' . implode(", ", $temps);
   echo '<br>';

   $warm_temps = array_slice($temps, 0, 5);
   echo '<p>Šilčiausios Vilniaus balandžio mėn. oro temperatūros (&#8451;): </p>' . implode(", ", $warm_temps);
   echo '<br>';

   $cold_temps = array_slice($temps, -5, 5);
   echo '<p>Šalčiausios Vilniaus balandžio mėn. oro temperatūros (&#8451;): </p>' . implode(", ", $cold_temps);
?>

