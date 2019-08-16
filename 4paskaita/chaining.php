<?php
   class Car{
      public $bakas;
      public function degaluKiekis($litrai) {
         $this -> bakas += $litrai;
         return $this;
      }
      public function atstumas($distancija) {
         $km = $distancija;
         $litrai = $km * 0.1;
         $this -> bakas -= $litrai;
         return $this;
      }
   }
$toyota = new Car();
$bakas = $toyota -> degaluKiekis(50) -> atstumas (60) -> bakas;
echo 'Bake bus likę: ' . $bakas . ' L';

?>
