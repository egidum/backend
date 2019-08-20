<!--
- Sukurk masyvą $cities ir priskirk ‘Berlynas’, ‘Roma’, ‘Londonas’
- Panaudok print_r funkciją taip, kad ji išvestų masyvo $cities duomenis
- HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą.
- Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas”
- Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
- Pridėk: londonas - 8.6
- HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.”
-->

<?php
$cities = ['Berlynas', 'Roma', 'Londonas'];
   $cities [] = 'Tokijas';
   print_r($cities);
?>

<ul>
   <?php
//   echo '<li style="list-style: none">' . $cities[1] . '</li>';
   echo "<li style=\"list-style: none\">$cities[1]</li>";
   ?>
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
   <?php
//   echo '<li style="list-style: none">Gyventojų skaičius: ' . $cities2 ['tokijas'] . ' mln.' . '</li>';
   echo "<li style=\"list-style: none\">Gyventojų skaičius: {$cities2 ['tokijas']} mln.</li>";
   ?>
</ul>
