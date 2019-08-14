<html>
  <head>
     <title>Failo skaitymas su PHP</title>

  </head>
  <body>
    <?php
      $filename = 'text.txt'; // atidarius narsykleje sukuriamas text.txt failas, fopen (w+)
      $file = fopen($filename, "r"); // pakeiciam fopen(r)

      $filesize = filesize($filename);
      $filetext = fread($file, $filesize);
      fclose($file);

      echo "Failo dydis: $filesize B";
      echo "<pre>$filetext</pre>";
     ?>

  </body>
</html>
