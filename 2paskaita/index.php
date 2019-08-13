<!--Masyvai, ciklai-->

<?php
//   echo "<table border=\"1\">";
//   for ($row = 1; $row <= 10; $row++) {
//      echo "<tr>\n";
//      for($col = 1; $col <= 10; $col++) {
//         $x = $col * $row;
//         echo "<td>$x</td>\n";
//      }
//      echo "</tr>";
//   }
//   echo "</table>";

?>


<!-- užduotis 1-->

<?php
$cities = ['Berlynas', 'Roma', 'Londonas'];
   $cities [] = 'Tokijas';
   print_r($cities);
?>

<ul>
   <li style="list-style: none"><?php echo $cities[1] ?></li>
</ul>

<?php
$cities2 = [
   'tokijas' => 13.6,
   'vasingtonas' => 0.6,
   'maskva' => 11.5
];
   $cities2 ['londonas'] = 8.6;

   print_r($cities2);
?>

<ul>
   <li style="list-style: none"><?php echo '“Gyventojų skaičius: ' . $cities2 ['tokijas'] = 13.6 . ' mln.”' ?></li>
</ul>

<!-- užduotis 2-->


<?php
$cities3 = [
   'Tokijas' => [13.6, 1868, 'Japonija'],
   'Vasingtonas' => [0.6, 1790, 'JAV'],
   'Maskva' => [11.5, 1147, 'Rusija']
];
   $cities3 ['Londonas'] = [8.6, 43, 'Anglija'];

   print_r($cities3);
?>



<!-- užduotis 3-->

<?php
$metai = 1774;
if($metai >= $cities3['Vasingtonas'][1]){
   echo "Vašingtonas yra JAV sostinė.";
}elseif($metai = $metai){
   echo "“JAV sostinė vis dar Filadelfijoje.";
};

?>




