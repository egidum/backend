<!--Sukurk index02.php failą. Panaudok kintamuosius ir reikšmes iš PHP 01 užduoties.
Naujajame faile panaudok $miestas taip, kad gautume sakinį "Vilnius - Lietuvos sostinė"
(naudok vienkartines kabutes PHP kode). Panaudok $miestas ir $šalis taip, kad gautume
sakinį "Vilnius ir Lietuva sparčiai auga" (dvigubos kabutės PHP kode). -->

<?php
$country = 'Lietuva';
$city = 'Vilnius';
$populiation = 574221;
?>

<p><?php echo $city.' - Lietuvos sostinė'; ?></p>
<p><?php echo "$city ir $country sparčiai auga"; ?></p>
