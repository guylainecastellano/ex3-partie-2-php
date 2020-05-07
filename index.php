<?php
$gender = 'gg';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex2 partie2 php</title>
</head>
<body>
  <p>
    <?php
    if ($gender =='homme'){
      echo 'c\est un développeur!!!';
    }  elseif ($gender =='femme'){
      echo 'c\est une développeuse!!!';
    }else {
      echo 'vous avez fait une erreur';
    }
    ?>
  </p>
</body>
</html>
