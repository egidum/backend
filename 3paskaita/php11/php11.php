<!--
- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. Įvestus
duomenis panaudokite stačiakampio ploto apskaičiavimui. Rezultatą išveskite į
naršyklę.-->

<html>
  <head>
     <title></title>
  </head>
  <body>
      <form action="" method="post">
         <h4>Įveskite stačiakampio ilgį ir plotį (metrais):</h4>
         <p style="color:#ff0000">
         Svarbu! Skaičiai po kablelio įvedami su tašku
         </p>
         ilgis: <input type="text" name="ilgis">
         plotis: <input type="text" name="plotis">
         <input type="submit" value="skaičiuoti" name="submit"><br>

         <?php
            if(isset($_POST['submit'])) {
            $plotas = $_POST['ilgis'] * $_POST['plotis'];
            }
            echo "<p>Stačiakampio plotas: $plotas kv.m</p>";
            exit;
         ?>
      </form>

  </body>
</html>
