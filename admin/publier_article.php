




<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Publier un article</title>
</head>


<style>

/* Style général */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Style de l'en-tête */
header {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

header h1 {
  margin: 0;
}

/* Style de la navigation */
nav {
  background-color: #eee;
  padding: 10px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 10px;
}

nav a {
  color: #333;
  text-decoration: none;
  padding: 5px;
}

nav a:hover {
  background-color: #333;
  color: #fff;
}

/* Style du formulaire */
form {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #eee;
}

form label {
  display: block;
  margin-bottom: 10px;
}

form input[type="text"],
form input[type="file"],
form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

form input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #fff;
  color: #333;
}


</style>


<body>


<header>
		<h1>Page d'administration</h1>
	</header>

	<nav>
		<ul>
			<li><a href="../admin.php">accueil</a></li>
			<li><a href="ajouter_code_promo.php">Ajouter un code(s) promo(s)</a></li>
			<li><a href="ajouter_coupon.php">ajouter un coupon</a></li>
		</ul>
	</nav>


	<h1>Publier un article</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<label for="titre">Titre :</label>
		<input type="text" name="titre" id="titre" required><br><br>

		<label for="image">Image :</label>
		<input type="file" name="image" id="image" required><br><br>

		<label for="description">Description :</label><br>
		<textarea name="description" id="description" cols="30" rows="10" required></textarea><br><br>

		<label for="contenu">Contenu :</label><br>
		<textarea name="contenu" id="contenu" cols="30" rows="10" required></textarea><br><br>

		<input type="submit" value="Publier l'article">
	</form>
</body>
</html>



<?php
 $bdd = new PDO("mysql:host=localhost;dbname=chatgpt;charset=utf8", 'root', '');

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $contenu = $_POST['contenu'];

  // Vérifier si une image est uploadée
  if (!empty($_FILES['image']['name'])) {
    // Obtenir le nom de fichier et le chemin temporaire du fichier uploadé
    $image_nom = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // Définir le dossier de destination pour l'image uploadée
    $destination = "../images/articles/" . $image_nom;

    // Déplacer l'image uploadée vers le dossier de destination
    if (move_uploaded_file($image_tmp, $destination)) {
      // Insérer les données dans la base de données
      $query = "INSERT INTO articles (titre, description, contenu, image) VALUES (:titre, :description, :contenu, :image)";
      $stmt = $bdd->prepare($query);
      $stmt->bindValue(':titre', $titre);
      $stmt->bindValue(':description', $description);
      $stmt->bindValue(':contenu', $contenu);
      $stmt->bindValue(':image', $destination);
      $stmt->execute();

      // Rediriger l'utilisateur vers la page d'accueil
      header('Location: ../admin.php');
      exit();
    } else {
      echo "Une erreur est survenue lors de l'upload de l'image.";
    }
  } else {
    echo "Veuillez sélectionner une image.";
  }
}
?>
