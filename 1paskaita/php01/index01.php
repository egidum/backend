<!--
Sukurk index01.php failą, o jame sukurk:
- kintamuosius šalis, miestas, populiacija
- priskirk jų reikšmes: Lietuva, Vilnius, 574221
- išvesk šiuos duomenis failo HTML dalyje (panaudok <ul> ir <li>)
-->

<?php
$country = 'Lietuva';
$city = 'Vilnius';
$populiation = 574221;
?>

<ul>
   <li style="list-style:none"><?php echo $country; ?></li>
   <li style="list-style:none"><?php echo $city; ?></li>
   <li style="list-style:none"><?php echo $populiation; ?></li>
</ul>
