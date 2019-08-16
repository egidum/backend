<!--
- Užrašyk klasę, kuri talpintų žmogaus vardą, pavardę ir
 metodą pasisveikinimui.
- Sukurk du žmones su skirtingais duomenimis.
- Išvesk šiuos duomenis naršyklėje.-->


<?php
   class People {
      public $fname;
      public $lname;

      public function hello() {
         return 'Hello, ' . $this -> fname . ' ' . $this -> lname . '<br>';
      }
   }

$jonas = new People();
$angele = new People();

$jonas -> fname = "Jonas";
$jonas -> lname = "Jonaitis";

$angele -> fname = "Angele";
$angele -> lname = "Angelina";

echo $jonas -> hello();
echo $angele -> hello();


?>
