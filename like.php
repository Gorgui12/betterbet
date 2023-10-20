


<?php
// On récupère l'ID de l'article et on s'assure qu'il est numérique
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id) && is_numeric($id)) {
    // On incrémente le nombre de likes pour l'article correspondant dans la base de données
    // Ici, on suppose qu'on a une table "articles" avec une colonne "nb_likes"
    $pdo = new PDO("mysql:host=localhost;dbname=chatgpt;charset=utf8", 'root', '');
    $sql = 'UPDATE articles SET nb_likes = nb_likes + 1 WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// On redirige l'utilisateur vers la page de l'article
header('Location: article.php?id=' . $id);
exit();
