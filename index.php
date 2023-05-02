<?php
$title = 'xeions';
$dominio = 'xeions.com';
?>
<!DOCTYPE html>
<html lang="es">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="utf-8">
  <title><?=$title?></title>
  <meta name="description" content="<?=$title?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
  echo '
  <meta property="og:type" content="website" />
  <meta property="og:title" content="'.$title.'" />
  <meta property="og:description" content="'.$title.'" />
  <meta property="og:url" content="https://'.$dominio.'" />
  <meta property="og:image" content="https://'.$dominio.'/img/logo-og.jpg" />
  ';
  ?>


  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>

</head>
<body>

<div class="uk-height-viewport uk-cover-container">
  <img src="img/bg.jpg" uk-cover>
</div>

</body>
</html>
