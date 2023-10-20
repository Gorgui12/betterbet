

<?php /*  session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['user_id'])) {
  // Rediriger vers la page de connexion
  header('Location: login.php');
  exit();  
}*/

// Le reste du code de la page
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'administration</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		
		header {
			background-color: #333;
			color: white;
			padding: 10px;
			text-align: center;
		}

		nav {
			background-color: #555;
			color: white;
			padding: 10px;
			text-align: center;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
		}

		nav ul li {
			margin: 0 10px;
		}

		nav ul li a {
			color: white;
			text-decoration: none;
			font-weight: bold;
			font-size: 18px;
			padding: 10px;
			transition: all 0.2s ease-in-out;
			border-radius: 5px;
			border: 1px solid transparent;
		}

		nav ul li a:hover {
			background-color: #fff;
			color: #333;
			border-color: #333;
		}

		main {
			padding: 50px;
			text-align: center;
		}

	</style>
</head>
<body>
	<header>
		<h1>Page d'administration</h1>
	</header>

	<nav>
		<ul> 
            <li> <a href="ACCUEIL.php">accueil</a> </li>
			<li><a href="admin/ajouter_code_promo.php">Ajouter code promo</a></li>
			<li><a href="admin/ajouter_coupon.php">Ajouter coupon</a></li>
			<li><a href="admin/publier_article.php">Publier article</a></li>
           
		</ul>
	</nav>

	<main>
		<p>Bienvenue sur la page d'administration. Sélectionnez une option dans le menu ci-dessus pour continuer.</p>
	</main>

	<footer>
		<p>© 2023 BETTER BET</p>
	</footer>
</body>
</html>
