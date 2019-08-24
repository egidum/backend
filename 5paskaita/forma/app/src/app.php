<?php
   /*
   spausdiname visus duomenys iš POST
   var_dump($_POST);

   gražesnis išvedimo variantas
   echo $_POST['vardas'] . '<br>' . $_POST['email'] . '<br>' . $_POST['message'];

   $vardas = $_POST['vardas'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   echo "<p>Vardas: $vardas</p>";
   echo "<p>El. paštas: $email</p>";
   echo "<p>Žinutė: $message</p>";


   $vardas = $_POST['vardas'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   //Įsitikiname, kad duomenys užpildyti
   if(!empty($vardas) && !empty($email) && !empty($message)) {
      echo "<p>Vardas: $vardas</p>";
      echo "<p>El. paštas: $email</p>";
      echo "<p>Žinutė: $message</p>";
   }

   //Pašaliname bet kokius prieš ir po sekančius tarpus
   $vardas = trim($_POST['vardas']);
   $email = trim($_POST['email']);
   $message = trim($_POST['message']);

   if(!empty($vardas) && !empty($email) && !empty($message)) {
      echo "<p>Vardas: $vardas</p>";
      echo "<p>El. paštas: $email</p>";
      echo '<p>Žinutė:' . htmlspecialchars($message) . '</p>';
   }


   //El.pašto validavimas
   $vardas = trim($_POST['vardas']);
   $email = trim($_POST['email']);
   $message = trim($_POST['message']);

   if(!empty($vardas) && !empty($email) && !empty($message)) {
      echo "<p>Vardas: $vardas</p>";
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "<p>El. paštas: $email</p>";
      }
      echo '<p>Žinutė:' . htmlspecialchars($message) . '</p>';
   }
   */

   //Formos siuntimas
   if(isset($_POST['submit'])) {
      $vardas = trim($_POST['vardas']);
      $email = trim($_POST['email']);
      $message = trim($_POST['message']);

      if(!empty($vardas) && !empty($email) && !empty($message)) {
         if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "andrius@vilniuscoding.lt";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo:' . $vardas . ', ' . $email;
            $zinute = htmlspecialchars($message);
            //mail($to, $subject, $autorius, $zinute, $from);
            echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime.');</script>";
         }
      }

      include('db.php');
   }
