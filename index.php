<?php
// Assurez-vous que le fichier connect.php est inclus
require_once('connect.php');

// Votre requête SQL pour récupérer les données
$sql = 'SELECT * FROM liste';

// On prépare la requête
$query = $bd->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$results = $query->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite a Idee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="color.css">

    <style>
.message-text {
  max-height: 50px; /* ou la hauteur désirée */
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

</style>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="Image/imag.png " class="img "width="4%" height="3%">
    <a id="a1" class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="a1" class="nav-link" href="formulaire.php">Formulaire</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-dark" type="submit" onclick="alert('BIENVENUE')"><a href="formulaire.php">Se connecter</a></button>

      </form>
    </div>
  </div>
</nav>



<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/avis.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/image.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/téléchargé.png" class="d-block w-10" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/design.png" class="d-block w-10" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<main class= "container">   
          
        <div class = "row">
        <?php foreach($results as $index => $result) { ?>
  <div class="card w-50 mb-3 col-md-4">
    <div class="card-body">
      <p class="card-text">
        <p >prenom : <?= $result['prenom'] ?></p>
        <p>email : <?= $result['email'] ?></p>
        <p class="message-text" id="chaine">
          <?= $result['mesage'] ?>
        </p>
        <p id="autrePartie"></p>
        <button class="btn btn-dark button" id="afficherBouton">Plus d'info</button>
      </p>
    </div>
  </div>
<?php } ?>




</div>
        </div>
      </main>


    <script src="index.js"></script>
    <script>
      // Récupérer les éléments DOM
var chaineElement = document.getElementById("chaine");
var afficherBouton = document.getElementById("afficherBouton");
var autrePartieElement = document.getElementById("autrePartie");

// Récupérer la chaîne de caractères initiale
var chaineInitiale = chaineElement.textContent;

// Ajouter un gestionnaire d'événement au bouton
afficherBouton.addEventListener("click", function() {
    // Récupérer la deuxième partie de la chaîne
    console.log(chaineElement);
    var autrePartie = chaineInitiale.substr(50);
    
    // Afficher la deuxième partie dans l'élément approprié
    autrePartieElement.textContent = autrePartie;
    
});
    </script>


    
    <!-- <script>
function toggleMessage(id) {
  var element = document.getElementById(id);
  
  if (element.style.maxHeight) {
    element.style.maxHeight = null;
  } else {
    element.style.maxHeight = element.scrollHeight + "px";
  }
}
</script> -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script></body>
</html>




