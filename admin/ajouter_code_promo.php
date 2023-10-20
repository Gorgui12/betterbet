












<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un code promo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




       <style>

/* Style for header */
header {
  background-color: #333;
  color: white;
  padding: 20px;
}

/* Style for navigation menu */
nav {
  background-color: #4CAF50;
  overflow: hidden;
}

nav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

nav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style for form */
.container {
  margin-top: 50px;
  max-width: 500px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

input[type=text], input[type=number], input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid #ccc;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] {
  -moz-appearance: textfield;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  margin-bottom: 15px;
}


       </style>


    <?php
// Connexion à la base de données
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'chatgpt';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $bookmaker =htmlspecialchars($_POST["bookmaker"]) ;
    $note =htmlspecialchars($_POST["note"]) ;
    $bonus =htmlspecialchars($_POST["bonus"]) ;
    $code_promo =htmlspecialchars($_POST["code_promo"]) ;

    // Vérifier si la clé "logo" existe et qu'un fichier a été envoyé pour le champ "logo"
    if (isset($_FILES["logo"]) && $_FILES["logo"]["name"]) {
        // Définir le dossier de destination pour le fichier
        $target_dir = "../images/logos";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Vérifier si le fichier est une image
        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if($check === false) {
            echo "Le fichier n'est pas une image.";
            exit;
        }

        // Vérifier la taille du fichier
        if ($_FILES["logo"]["size"] > 500000) {
            echo "Le fichier est trop volumineux.";
            exit;
        }

        // Déplacer le fichier dans le dossier de destination
        if (!move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
            echo "Erreur lors du téléchargement du fichier.";
            exit;
        }

        $logo = $target_file;
    } else {
        $logo = "";
    }

    // Insérer les données dans la base de données en utilisant une approche orientée objet
    $stmt = $pdo->prepare("INSERT INTO code_promo (bookmaker, note, bonus, code_promo, logo) VALUES (:bookmaker, :note, :bonus, :code_promo, :logo)");
    $stmt->bindParam(':bookmaker', $bookmaker);
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':bonus', $bonus);
    $stmt->bindParam(':code_promo', $code_promo);
    $stmt->bindParam(':logo', $logo);
    if ($stmt->execute()) {
        echo "Le code promo a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données dans la base de données.";
    }
}

// Fermer la connexion à la base de données
$pdo = null;
?>








</head>
<body>


<header>
		<h1>Page d'administration</h1>
	</header>

	<nav>
		<ul>
			<li><a href="../admin.php">accueil</a></li>
			<li><a href="ajouter_coupon.php">Ajouter coupon</a></li>
			<li><a href="publier_article.php">Publier article</a></li>
		</ul>
	</nav>






	<div class="container">
		<h2 class="text-center mb-5">Ajouter un code promo</h2>
		<form action="" method="post">
			<div class="form-group">
				<label for="bookmaker">Bookmaker :</label>
				<input type="text" class="form-control" id="bookmaker" name="bookmaker">
			</div>
			<div class="form-group">
				<label for="note">Note :</label>
				<input type="number" class="form-control" id="note" name="note" min="0" step="0.1" max="10">
			</div>
			<div class="form-group">
				<label for="bonus">Bonus :</label>
				<input type="number" class="form-control" id="bonus" name="bonus" step="0.1" min="0">
			</div>
			<div class="form-group">
				<label for="code_promo">Code promo :</label>
				<input type="text" class="form-control" id="code_promo" name="code_promo">
			</div>
			<div class="form-group">
				<label for="logo">Logo :</label>
				<input type="file" class="form-control-file" id="logo" name="logo">
			</div>
			<button type="submit" class="btn btn-primary">Ajouter</button>
		</form>
	</div>
</body>
</html>
