<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A la découverte des fruits du monde">
    <meta name="author" content="Roméo KAKPO">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Saveurs Fruitées</title> 
</head>
<body>

  <?php include("pages/header.html");?>

  <?php 
    $page = isset($_GET['page'])?$_GET['page']:'home';
    include('pages/'.$page.'.php');
  ?>

  <?php include("pages/footer.html");?>
  <script src="JS/jquery-3.6.0.min.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/main.js"></script>
</body>
</html>
