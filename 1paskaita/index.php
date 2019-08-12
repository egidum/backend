
<?php echo 'Labas, Pasauli!'; ?>

<?= 'Labas'; ?>



<?php
$country = 'Lietuva';
$city = 'Vilnius';
$populiation = 574221;
?>


<ul>
   <li><?php echo $country; ?></li>
   <li><?php echo $city; ?></li>
   <li><?php echo $populiation; ?></li>
</ul>


<p><?php echo $city.' - Lietuvos sostinė'; ?></p>
<p><?php echo "Lietuvos sostinė - $city"; ?></p>

<p><?php echo "$country ir $city, sparčiai auga"; ?></p>
<p><?php echo $country.' ir '.$city.', sparčiai auga'; ?></p>


<?php
$x = 10;
$y = 7;
$z = $x + $y;
echo "$x + $y = $z <br>";
$z = $x - $y;
echo "$x - $y = $z <br>";
$z = $x * $y;
echo "$x * $y = $z <br>";
$z = $x / $y;
echo "$x / $y = $z <br>";
$z = $x % $y;
echo "$x % $y = $z <br>";
?>





