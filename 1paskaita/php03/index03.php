<!--
Sukurk failą index03.php, jame sukurk du kintamuosius $x = 10; ir $y = 7;
Parašyk kodą taip, kad naršyklėje gautum:
10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3
Skaičius galima naudoti tik kintamųjų reikšmėse, ne echo sakiniuose.
Reikės trečio kintamojo.
-->

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
