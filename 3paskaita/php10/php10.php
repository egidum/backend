<!--
- Sukurkite funkciją su dviem parametrais a ir b, kurie yra stačiakampio
kraštinių ilgiai. Funkcija apskaičiuos stačiakampio plotą.
- Rezultatą išveskite į naršyklę.-->

<?php
   function staciakampioPlotas($a, $b) {
      $area = $a * $b;
      echo "Stačiakampio plotas: $area kv.m";

   }

   staciakampioPlotas(15, 20);

?>
