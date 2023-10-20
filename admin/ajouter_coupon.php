





<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ajouter un coupon</title>


<style>

/* Style général */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Style pour l'en-tête */
header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

header h1 {
  margin: 0;
}

/* Style pour la navigation */
nav {
  background-color: #ccc;
  padding: 10px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

nav li {
  margin: 0 10px;
}

nav a {
  color: #333;
  text-decoration: none;
}

nav a:hover {
  text-decoration: underline;
}

/* Style pour le formulaire */
form {
  margin: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="date"],
input[type="file"],
textarea {
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
}

textarea {
  height: 100px;
}

input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #666;
}


</style>





	<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Vérifier les champs obligatoires
  if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['code']) && !empty($_POST['date_debut']) && !empty($_POST['date_fin']) && !empty($_FILES['image']['name'])) {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $description =htmlspecialchars($_POST['description']);
    $code =htmlspecialchars($_POST['code']) ;
    $date_debut = htmlspecialchars($_POST['date_debut']);
    $date_fin =htmlspecialchars($_POST['date_fin']);

    // Traiter l'image
    $target_dir = "images/coupons/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if(in_array($imageFileType,$extensions_arr) ){
      // Upload l'image
      move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$nom.'.'.$imageFileType);
      $image = $target_dir.$nom.'.'.$imageFileType;

      // Connexion à la base de données
     
      $db = new PDO("mysql:host=localhost;dbname=chatgpt;charset=utf8", 'root', '');

      // Préparer la requête SQL
      $stmt = $db->prepare("INSERT INTO coupons (nom, description, code, image, date_debut, date_fin) VALUES (:nom, :description, :code, :image, :date_debut, :date_fin)");

      // Exécuter la requête avec les valeurs des paramètres
      $stmt->execute(['nom' => $nom, 'description' => $description, 'code' => $code, 'image' => $image, 'date_debut' => $date_debut, 'date_fin' => $date_fin]);

      // Rediriger l'utilisateur vers la page d'accueil
      header('Location: index.php');
      exit();
    } else {
      // Gérer l'erreur d'extension de fichier
      echo "Seules les extensions JPG, JPEG, PNG et GIF sont autorisées.";
    }
  } else {
    // Gérer l'erreur de champ(s) manquant(s)
    echo "Veuillez remplir tous les champs obligatoires.";
  }
}
?>





<body>


<header>
		<h1>Page d'administration</h1>
	</header>

	<nav>
		<ul>
			<li><a href="../admin.php">accueil</a></li>
			<li><a href="ajouter_code_promo.php">Ajouter un code(s) promo(s)</a></li>
			<li><a href="publier_article.php">Publier article</a></li>
		</ul>
	</nav>



	<h1>Ajouter un coupon</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br><br>

		<label for="image">Image :</label>
		<input type="file" name="image" id="image" required><br><br>

		<label for="description">Description :</label><br>
		<textarea name="description" id="description" cols="30" rows="10" required></textarea><br><br>

		<label for="code">Code :</label>
		<input type="text" name="code" id="code" required><br><br>

		<label for="date_debut">Date de début :</label>
		<input type="date" name="date_debut" id="date_debut" required><br><br>

		<label for="date_fin">Date de fin :</label>
		<input type="date" name="date_fin" id="date_fin" required><br><br>

		<input type="submit" value="Ajouter le coupon">
	</form>
</body>
</html>






