<!--
- Sukurkite savo funkciją, kuri naršyklėje rodytų dabartinius metus: © 2019,
 jei tinklalapis buvo sukurtas ankstesniais metais, turėtų rodyti tokiu formatu:
  © 2015-2019
- Pasvarstykite, kaip rasite dabartinius metus ir ar jūsų funkcija turės parametrų.

       # NUO SUKURIMO IKI DABAR - 2010 - 2019, rodo abi datas
       # DABARTINIAI METAI - 2019, rodo 2019
       # NUO DABAR IKI BUSIMA DATA - 2030, rodo 2019
-->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>

   <footer>
      <h4>&copy; <?php
         function metai($Date) {
            if($Date < date('Y')) {
               echo $Date . '-' . date('Y');
            } else {
               echo date('Y');
            }
         }
         metai (2015);
       ?>
      </h4>
   </footer>

</body>
</html>
