
<?php echo '<h2 style="margin-bottom: 0;">Labas, Pasauli!</h2><br>'; ?>

<?= '<h3 style="color: red; margin-top: 0;">Variantas #1 (su =)</h3>' ?>
<?php echo '<h3 style="color: red; margin-top: 0;">Variantas #2 ariantas (su php)</h3>' ?>
<? echo '<h3 style="color: red; margin-top: 0;">Variantas #3 (be php ir =), t.b. įjungta "short_open_tag" </h3>'; ?>

<?php
$country = 'Lietuva';
$city = 'Vilnius';
$populiation = 574221;
?>

<ul style="color: green; font-weight: bold;">
   <li><?php echo $country; ?></li>
   <li><?php echo $city; ?></li>
   <li><?php echo $populiation; ?></li>
</ul>

<p style="font-family: Verdana; font-size: 25px; background-color: skyblue;"><?php echo $city.' - Lietuvos sostinė'; ?></p>
<p><?php echo "Lietuvos sostinė - $city"; ?></p>

<p style="color: #66cd18"><?php echo "$country ir $city, sparčiai auga"; ?></p>
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


<?php //phpinfo(); ?>

<?php
	echo strlen('Kiek tau metu?');
?>

<?php
$num1 = 30;
$num2 = $num1;

echo '<br>$num1: ' . $num1;      // 10
echo '<br>$num2: ' . $num2;      // 10

$num1 = 20;

echo '<br>$num1: ' . $num1;      // 20
echo '<br>$num2: ' . $num2;      // 10
?>

<?php
  echo '<br>' . $_SERVER['PHP_SELF'];
?>

<?php
$str = "Skaičus: ";
$num = 12;

echo '<br>' . $str . $num . '<br>';
echo 'Skaičius: ' . 1;
?>






