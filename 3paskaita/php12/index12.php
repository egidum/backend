<!--
- Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. Paspaudus mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje. Forma turėtų dingti, kai išvedamas rezultatas, o rezultato spausdinimas turėtų būti tik tuomet, kai vartotojas užpildė visus laukelius ir paspaudė mygtuką.-->

<html>

<head>
   <title></title>
</head>

<body>
   <div class="form">
      <?php
       if(!empty($_POST['fname']) && !empty($_POST['lname'])) {
          if(!preg_match("/^[A-Za-z]*$/", $_POST['fname']) || !preg_match("/^[A-Za-z]*$/", $_POST['lname'])) {
             die("<p>Neteisingai įvestas vardas!</p>");
          }
         echo '<p>Prisijungėte kaip, ' . $_POST['fname'] . ' ' . $_POST['lname'] . '</p>';
       } else {
            echo '
            <form action="" method="post">
            <h4>Įveskite savo duomenys:</h4>
            <div>
               <p style="margin-bottom: 0">Vardas:</p>
               <input type="text" name="fname">
            </div>
            <div>
               <p style="margin-bottom: 0">Pavardė:</p>
               <input type="text" name="lname">
            </div>
            <div>
               <p></p>
               <input type="submit" value="Pateikti" name="submit">
            </div>
            </form>
            ';
       }

      exit;
      ?>
   </div>
</body>

</html>
