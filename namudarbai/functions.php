<?php
   function dbJungtis() {
      try {
         return $pdo = new PDO('mysql:host=127.0.0.1; dbname=namudarbai', 'root', '');  //Mac kompe root, root
      } catch (PDOExeption $e) {
         die($e->getMessage());
      }
   }

   function visosUzduotys($pdo) {
      $teiginys = $pdo->prepare('select * from ndarbas');
      $teiginys->execute();

      return $teiginys->fetchAll(PDO::FETCH_CLASS, 'namuDarbas');
   }
