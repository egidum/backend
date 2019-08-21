<!--
- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį.
Įvestus duomenis panaudokite stačiakampio ploto apskaičiavimui. Rezultatą
išveskite į naršyklę. Forma turėtų dingti, kai išvedamas rezultatas, o
rezultato spausdinimas turėtų būti tik tuomet, kai vartotojas užpildė visus
laukelius ir paspaudė mygtuką.-->

<html>
  <head>
     <title></title>
  </head>
  <body>
     <div class="form">
         <?php
         if($_POST['ilgis'] && $_POST['plotis']) {
         $plotas = $_POST['ilgis'] * $_POST['plotis'];
         echo "<p>Stačiakampio plotas: $plotas kv.m</p>";
         } else {
            echo '
            <form action="" method="post">
            <h4>Įveskite stačiakampio ilgį ir plotį (metrais):</h4>
            <p style="color:#ff0000">
            Svarbu! Skaičiai po kablelio įvedami su tašku
            </p>
            ilgis: <input type="text" name="ilgis">
            plotis: <input type="text" name="plotis">
            <input type="submit" value="skaičiuoti" name="submit"><br>
            </form>
            ';
         }
         exit;
         ?>
     </div>
  </body>
</html>
