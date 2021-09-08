<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Content/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory&family=Parisienne&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    require_once("Controllers/Controller.php");
    require_once("Models/Model.php");
    require_once("Utils/header.php");

    $controllers = ["home", "livre", "fournisseur", "commande", "compte"];
    $controller_default = "home";

    if (isset($_GET['controller']) and in_array($_GET['controller'], $controllers))
    {
        $nom_controller = $_GET['controller'];
    }
    else
    {
        $nom_controller = $controller_default;
    }

    $nom_classe = "Controller_" . $nom_controller;
    $nom_fichier = "Controllers/" . $nom_classe . ".php";

    if (file_exists($nom_fichier))
    {
        require_once($nom_fichier);
        $controller =  new $nom_classe();
    }
    else
    {
        exit("Error 404 : not found");
    }

    require_once("Utils/footer.php");
?>
</body>
</html>

