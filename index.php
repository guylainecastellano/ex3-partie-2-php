<?php
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex3 partie2 php</title>
</head>
<body>
  <?php
  if ($gender != 'homme'){ ?>
    <p>c'est une développeuse!!!</p>
  <?php } else { ?>
    <p>c'est un développeur!!!</p>
  <?php } ?>
</body>
</html>
