<!--
- Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. Paspaudus mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje. Forma turėtų dingti, kai išvedamas rezultatas, o rezultato spausdinimas turėtų būti tik tuomet, kai vartotojas užpildė visus laukelius ir paspaudė mygtuką.-->

<html>
  <head>
     <title></title>
  </head>
  <body>
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


         <?php
            if(empty($_POST['fname'] && $_POST['lname'])){
               die("<p>Būtina užpildyti visus laukus!</p>");
            }
            if(isset($_POST['submit'])) {
               echo("<p>Prisijungėte kaip, {$_POST['fname']} {$_POST['lname']}</p>");
            }
            exit;
         ?>
      </form>

  </body>
</html>


