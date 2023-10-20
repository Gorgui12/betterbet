



     



<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste des coupons</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <style>

       /* Body styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    background-color: #f2f2f2;
}

/* Header styles */
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 999;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    text-transform: uppercase;
}

nav ul li a:hover {
    color: #ff6a00;
}

/* Table styles */
table {
    max-width: 1200px;
    margin: 80px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

table thead {
    background-color: #333;
    color: #fff;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
}

table td img {
    max-width: 100%;
    height: auto;
}

table td button {
    background-color: #ff6a00;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

table td button:hover {
    background-color: #333;
}

/* Footer styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 40px;
    text-align: center;
}

#social-icons {
    max-width: 1200px;
    margin: 0 auto;
}

#social-icons h2 {
    margin-bottom: 20px;
}

#social-icons ul {
    display: flex;
    justify-content: center;
}

#social-icons ul li {
    margin-right: 20px;
}

#social-icons ul li a {
    color: #fff;
    font-size: 24px;
}

#social-icons ul li a:hover {
    color: #ff6a00;
}


	</style>


</head>
<body>

<header>




	<nav>
		<ul>
			<li><a href="accueil.php"> ACCUEIL </a></li>
			<li><a href="coupons.php">COUPON DU JOUR</a></li>
			<li><a href="bookmakers.php">BOOKMAKERS</a></li>
			<li><a href="codes.php">CODE PROMO</a></li>
			<li><a href="articles.php">ACTUALITÉS</a></li>
			<li><a href="#social-icons">NOS RÉSEAUX SOCIAUX</a></li>
			
		</ul>
	</nav>
</header>


	<h1>LA LISTE DES COUPONS </h1>

	<table>
		<thead>
			<tr>
				<th>Image</th>
				<th>Description</th>
				<th>Code</th>
				<th>Date de début</th>
				<th>Date de fin</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            <?php

			// Connexion à la base de données
			$bdd = new PDO('mysql:host=localhost;dbname=chatgpt', 'root', '');

			// Récupération des coupons dans la table "coupons"
			$reponse = $bdd->query('SELECT * FROM coupons');

			while ($donnees = $reponse->fetch())
			{
				echo '<tr>';
				echo '<td><img src="'.$donnees['image'].'" width="80" height="80"></td>';
				echo '<td>'.$donnees['description'].'</td>';
				echo '<td>'.$donnees['code'].'</td>';
				echo '<td>'.$donnees['date_debut'].'</td>';
				echo '<td>'.$donnees['date_fin'].'</td>';
				echo '<td><button onclick="copyCode(\''.$donnees['code'].'\')">Copier le code</button></td>';
				echo '</tr>';
			}

			// Fermeture de la connexion à la base de données
			$reponse->closeCursor(); 
			?>

		</tbody>
	</table>

	<script>
		// Fonction pour copier le code dans le presse-papier
		function copyCode(code) {
			navigator.clipboard.writeText(code);
			alert('Le code '+code+' a été copié dans le presse-papier.');
		}
	</script>

<footer>
		<div id="social-icons">
			<h2>suivez nos RESEAU SOCIAUX</h2>
		<ul>
		 <li>	<a href="https://t.me/+EaCejpAxxB5hMDJk"><i class="fab fa-telegram"></i></a></li>
		 <li><a href="https://instagram.com/better____bet?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
		 <li>	<a href="https://youtube.com/channel/UCNUCJs5EJfcE2v-ngT2BXqg"><i class="fab fa-youtube"></i></a></li>
		 <li>	<a href="https://www.facebook.com/profile.php?id=100076282536215"><i class="fab fa-facebook"></i></a></li>

		</ul>
	    </div>
     </footer>

</body>
</html>
