<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículo - <?php echo $perfil['nome']; ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>

  <header>
    <div class="logo">
      <h1><?php echo $perfil['nome']; ?></h1>
      <p><?php echo $perfil['area']; ?></p>
    </div>
    <nav>
      <ul>
        <li><a href="index.php" class="btn-nav">Currículo</a></li>
        <li><a href="projetos.php" class="btn-nav">Projetos</a></li>
      </ul>
    </nav>
  </header>
