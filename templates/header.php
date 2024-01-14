<?php


  // On a choisit SCRIPT_NAME mais on aurai tès bien choisit autre mar rapport à l'information
  // basename permet de nous donner le denier information sans le /
  // On a stocker tout ses information dans une variable currentName


  $currentPage = basename ($_SERVER["SCRIPT_NAME"]);
  // Pour pourvoir voir ce qui nous interesse
  // var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$mainMenu[$currentPage]["meta_description"] ?>">
    <title><?=$mainMenu[$currentPage]["head_title"] ?></title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/override-bootstrap.css">
  </head>

  <body>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="assets/images/logo-tech-trendz.png" alt="logo TechTrendz" width="150px">
          </a>
        </div>

        <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <?php foreach ($mainMenu as $key => $menuItem) {

            // On vérifie s'il y'a l'exclude dans le menu, s'il n'y est pas on affiche et grace au ! pour faire l'inverse
            if (!array_key_exists("exclude", $menuItem)){
            ?>
            <li class="nav-item"><a href="<?=$key?>" class="nav-link px-2 <?php 
            // La classe active dans le menu
            if ($key === $currentPage) { echo "active"; }

            // Si cette condition est vrai ça retournera active sion rien, c'est la méthode ethernere
            // echo ($key === $currentPage) ? "active" : "";
            
            ?>"><?=$menuItem["menu_title"]?></a></li>
          <?php }
          }
          ?>

        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </header>

      <main>