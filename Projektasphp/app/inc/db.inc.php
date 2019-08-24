<?php
   define("DB_SERVER", "localhost");
   define("DB_USER", "root");
   define("DB_PASSWORD", "");
   define("DB_NAME", "projektasphp");

   $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
   if($mysqli->connect_error) {  
      echo "Atsiprašome, įvyko klaida.\n";
      echo 'Klaida: ' . $mysqli->connect_error . '\n';
      exit();
   }

   mysqli_query($mysqli, "INSERT INTO clients (fname, lname, email, phone, title, comments)
   VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[phone]', '$_POST[title]', '$_POST[comments]')");
  