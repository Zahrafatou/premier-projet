// Récupérer les éléments DOM
var chaineElement = document.getElementById("chaine");
var afficherBouton = document.getElementById("afficherBouton");
var autrePartieElement = document.getElementById("autrePartie");

// Récupérer la chaîne de caractères initiale
var chaineInitiale = chaineElement.textContent;

// Ajouter un gestionnaire d'événement au bouton
afficherBouton.addEventListener("click", function() {
    // Récupérer la deuxième partie de la chaîne
    console.log('clic');
    var autrePartie = chaineInitiale.substr(50);
    
    // Afficher la deuxième partie dans l'élément approprié
    autrePartieElement.textContent = autrePartie;
});
