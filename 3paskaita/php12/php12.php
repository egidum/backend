<!--
- Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. Paspaudus
mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje.-->

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
            if(isset($_POST['submit']))
            print_r("<p>Prisijungėte kaip, {$_POST['fname']} {$_POST['lname']}</p>");
            exit;
         ?>
      </form>

  </body>
</html>


