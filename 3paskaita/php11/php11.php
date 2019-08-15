<!--
- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. Įvestus
duomenis panaudokite stačiakampio ploto apskaičiavimui. Rezultatą išveskite į
naršyklę.-->

<html>
  <head>
     <title></title>
  </head>
  <body>
     <div class="form">
         <?php
         $displayForm = True;
         if($_POST['ilgis'] && $_POST['plotis']) {
         $plotas = $_POST['ilgis'] * $_POST['plotis'];
         echo "<p>Stačiakampio plotas: $plotas kv.m</p>";
         $displayForm = False;
         }
         if($displayForm) {
         ?>

         <form action="" method="post">
            <h4>Įveskite stačiakampio ilgį ir plotį (metrais):</h4>
            <p style="color:#ff0000">
            Svarbu! Skaičiai po kablelio įvedami su tašku
            </p>
            ilgis: <input type="text" name="ilgis">
            plotis: <input type="text" name="plotis">
            <input type="submit" value="skaičiuoti" name="submit"><br>
         </form>

         <?php
         }
         exit;
         ?>

     </div>
  </body>
</html>
