

<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'chatgpt';
$user = 'root';
$password = '';

// Connexion à la base de données
try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    // Afficher les erreurs PDO sous forme d'exceptions
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}
?>
