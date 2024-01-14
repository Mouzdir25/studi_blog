<?php 
    require_once __DIR__ . "/lib/article.php"; 
    

    // Pour ien voir qu'on a accès aux articles
    // var_dump($articles);

    // Là on recupere l'id avec $_GET
    $id = $_GET["id"];

    // ça va chercher dans le tableau articles me recuperé seulement celui qui est demander dans le parametre d'url
    $article = $articles[$id];

    // var_dump($article);
    

    require_once __DIR__ . "/lib/menu.php"; 

    // "exclude" => true permet d'explure le menu quans on ira voir les details d'un article
    $mainMenu["actualite.php"] = ["head_title" => htmlentities($article["title"]), "meta_description" => htmlentities(substr($article["content"], 0, 250)) , "exclude" => true];

    require_once __DIR__ . "/templates/header.php"; 
?>


<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="uploads/articles/<?=htmlentities($article["image"]) ?>" class="d-block mx-lg-auto img-fluid" alt="<?=htmlentities($article["title"]) ?>" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=htmlentities($article["title"]) ?> </h1>
    <p class="lead"><?=htmlentities($article["content"]) ?></p>
  </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php";?>