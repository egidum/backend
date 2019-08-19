<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Mokomės PHP</title>
</head>

<body>
   <h3>Mano namų darbai:</h3>
   <ul>
      <?php foreach ($namuDarbai as $namuDarbas) : ?>
      <li>
         <?php if($namuDarbas->atlikta) : ?><strike><?= $namuDarbas->aprasas; ?></strike>
         <?php else: ?><?= $namuDarbas->aprasas; ?>
         <?php endif; ?>
      </li>
      <?php endforeach; ?>
   </ul>

</body>

</html>
