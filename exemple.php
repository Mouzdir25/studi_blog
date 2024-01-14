<?php 
echo"<h4>Tableau des fruits<h4>";

// Tableau simple
$fruits = ["Banane", "Orange", "Pomme"];
// echo $fruits [0];

//Quand on veut parcourrir un tableau
// Si on veut afficher tous les éléments on utilise une boucle

foreach ($fruits as $key => $value) { ?>
  <!-- echo $key."=".$value." - ";  -->

  <h2>Test</h2>
  <!-- // Deux façons d'ecrire si on veut mettre une class -->
  <!-- // echo "<h2 class=\"fruit\">$value</h2>"; -->
  <!-- // echo '<h2 class=fruit>'.$value.'</h2>'; -->

  <!-- // ET pour ecrire du HTML dans le PHP on fereme le php puis on ecrit le html ensuite on le re ouvre -->
  <h2 class="fruit"><?php echo $value; ?></h2>

<?php }

// Tableau associatif / c'est une clé une valeur
$utilisateur = ["nom" => "Dupon", "prenom" => "Jean", "age" => 26];
echo "Bonjour " . $utilisateur["nom"]." ".$utilisateur["prenom"];

// les tableaux mutlidimensionnels / Là on a des lignes et des colonnes
  $utilisateurs = [
  ["nom" => "Dupon", "prenom" => "Jean", "age" => 26],
  ["nom" => "Martin", "prenom" => "Rose", "age" => 36],
  ["nom" => "Doe", "prenom" => "Jane", "age" => 46]
];
echo "<br>";
// echo $utilisateurs [1]["nom"];

foreach ($utilisateurs as $key => $utilisateur) {?>
  <p><?php echo $utilisateur["nom"]. " ".$utilisateur["prenom"] ; ?></p>

  <!-- // var_dump($value);// Pour savoir ce que c'est -->
    
<?php }

?>

<section id="utilisateurs">
  <article class="utilisateur">
    <h2>Jean Dupond</h2>
    <p>Age: 33 ans</p>
  </article>
  <article class="utilisateur">
    <h2>Martin Rose</h2>
    <p>Age: 36 ans</p>
  </article>
  <article class="utilisateur">
    <h2>Doe Jane</h2>
    <p>Age: 46 ans</p>
  </article>
</section>

<!-- Une autre façon d'afficher avec moins de code -->

<section id="utilisateurs">
   <!-- la variable c'est utilisateurs $key simbolise quel ligne  et value toute la ligne-->

  <?php foreach ($utilisateurs as $key => $utilisateur) { ?> 
    <article class=utilisateur>
      <h2><?php echo $utilisateur["nom"]. " ".$utilisateur["prenom"] ?></h2>
      <!-- Une autre façon d'afficher sans le echo juste avec ?=$value -->
      <h2><?=$utilisateur["age"]."ans" ?></h2>
    </article>
  <?php } ?>
</section>

<?php
// Pour connaitre le type de donnée on fait un var_dump
foreach ($utilisateurs as $key => $value) {
  var_dump($value); // Et on ne peut pas faire un echo d'un tableau en chaine de caractère 
}
?>


