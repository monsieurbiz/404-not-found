<?php

header('HTTP/1.1 404 Not Found');

$title = isset($_GET['title']) ? htmlspecialchars($_GET['title'], ENT_QUOTES | ENT_SUBSTITUTE) : '';
if (empty($title)) {
    $title = '404 Not Found';
}
$content = isset($_GET['content']) ? htmlspecialchars($_GET['content'], ENT_QUOTES | ENT_SUBSTITUTE) : '';
$showForm = !isset($_GET['title']) || empty($_GET['title']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <link rel="icon" href="/favicon.png">
  <style>
    @font-face{font-display:swap;font-family:Archivo;font-stretch:100%;font-style:normal;font-weight:100 900;src:url(/fonts/Archivo-VariableFont-Latin.woff2)format("woff2");unicode-range:U+??,U+131,U+152-153,U+2BB-2BC,U+2C6,U+2DA,U+2DC,U+304,U+308,U+329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
    @font-face{font-display:swap;font-family:Archivo;font-stretch:100%;font-style:normal;font-weight:100 900;src:url(/fonts/Archivo-VariableFont-LatinExt.woff2)format("woff2");unicode-range:U+100-2BA,U+2BD-2C5,U+2C7-2CC,U+2CE-2D7,U+2DD-2FF,U+304,U+308,U+329,U+1D00-1DBF,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF}
    @font-face{font-display:swap;font-family:Dela Gothic One;font-style:normal;font-weight:700;src:url(/fonts/DelaGothicOne-Regular.woff2)format("woff2")}
    body {
      background-color: rgb(7 53 61);
      padding: 0;
      margin: 0;
    }
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    img {
      max-width: 200px;
      margin-bottom: 20px;
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: rgb(255 239 234);
      font-family: Dela Gothic One, sans-serif;
      font-weight: 700;
      letter-spacing: 2px;
    }
    h1:after {
        color: rgb(253 136 111);
        content: ".";
    }
    p {
      font-size: 1.2rem;
      color: rgb(255, 255, 255);
      font-family: Archivo, sans-serif;
      font-weight: 500;
    }
    a.btn {
        color: rgb(255 175 158);
        display: inline-block;
        padding: 20px;
        border: 1px solid rgb(255 175 158);
        border-radius: 5px;
        text-decoration: none;
    }
    a.btn:hover {
        color: white;
        border-color: white;
        text-decoration: underline;
    }
    a.action, #form {
        position: absolute;
        display: inline-block;
        color: rgb(255 239 234);
        bottom: 0;
        right: 0;
        padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
      <img src="https://monsieurbiz.com/media/resources/logo_white.png" alt="Monsieur Biz" title="Monsieur Biz">
      <h1><?php echo $title; ?></h1>
      <?php if (!empty($content)): ?>
      <p><?php echo $content; ?></p>
      <?php endif; ?>
      <p><a class="btn" href="#" onclick="window.history.back()">Retour à la page précédente</a></p>
  </div>
  <?php if ($showForm): ?>
    <form id="form" action="index.php" method="get" style="display: none;">
      Title: <input type="text" name="title" placeholder="404 Not Found">
      Description: <input type="text" name="content" placeholder="Description">
      <input type="submit" value="Submit">
    </form>
    <a class="action" href="#" onclick="document.getElementById('form').style.display = 'block'; this.style.display = 'none'; return false;">Change values</a>
  <?php endif; ?>
</body>
</html>
