<?php
//   $kaledos2019 = strtotime('Dec 25, 2019');
//   echo date('l, F j, Y', $kaledos2019);
?>


<?php
//   $date1 = new DateTime();
//   $date2 = new DateTime();
//
//   $losangeles = new DateTimeZone('America/Los_Angeles');
//   $vilnius = new DateTimeZone('Europe/Vilnius');
//
//   $date1 -> setTimezone($losangeles);
//   $date2 -> setTimezone($vilnius);
//
//   echo 'Laikas Los Andzele: ' . $date1 -> format('g:ia, l, F j, Y') . '<br>';
//   echo 'Laikas Vilniuje: ' . $date2 -> format('g:ia, l, F j, Y') . '<br>';

?>


<?php
//   $date1 = new DateTime();
//   $date2 = new DateTime();
//
//   $capetown = new DateTimeZone('Africa/Johannesburg');
//   $wellington = new DateTimeZone('Pacific/Auckland');
//
//   $date1 -> setTimezone($capetown);
//   $date2 -> setTimezone($wellington);
//
//   echo 'Laikas Keiptaunas: ' . $date1 -> format('g:ia, l, F j, Y') . '<br>';
//   echo 'Laikas Velingtonas: ' . $date2 -> format('g:ia, l, F j, Y') . '<br>';

?>


<?php
   $date1 = new DateTime();
   $date2 = new DateTime();

   $mumbai = new DateTimeZone('Asia/Kolkata');
   $manila = new DateTimeZone('Asia/Manila');

   $date1 -> setTimezone($mumbai);
   $date2 -> setTimezone($manila);

   echo 'Laikas Mumbajus: ' . $date1 -> format('g:ia, l, F j, Y') . '<br>';
   echo 'Laikas Manila: ' . $date2 -> format('g:ia, l, F j, Y') . '<br>';

?>
