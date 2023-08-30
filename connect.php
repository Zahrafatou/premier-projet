<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$host = "localhost";
$dbname = "projet";
$user = "root";
$pass = "";

try {
    $bd = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
    exit();
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = !empty($_POST["prenom"]) ? $_POST["prenom"] : NULL;
    $email = !empty($_POST["email"]) ? $_POST["email"] : NULL;
    $message = !empty($_POST["mesage"]) ? $_POST["mesage"] : NULL;  // Utilisez "mesage" au lieu de "message"

    try {
        // Utiliser une requête préparée pour l'insertion
        $insertQuery = "INSERT INTO liste(prenom, email, mesage) VALUES(:prenom, :email, :mesage)";
        $stmt = $bd->prepare($insertQuery);

        // Lier les paramètres à la requête
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mesage', $message);  // Utilisez ":mesage" au lieu de ":message"

        // Exécuter la requête préparée
        if ($stmt->execute()) {
            echo "Merci d'avoir pris le temps de donner vos opinions. 
            A bientot!!";
            echo '<a href="index.php" class="bouton">Cliquez ici pour retourner</a>';
        } else {
            echo "Erreur d'insertion : " . implode(", ", $stmt->errorInfo());
        }
    } catch (PDOException $e) {
        echo "ERREUR : " . $e->getMessage();
    }
}

// Fermer la connexion à la base de données
//$bd = null;

?>

