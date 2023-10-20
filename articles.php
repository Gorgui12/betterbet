


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     

<style>
	/* Mise en forme du corps de la page */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Style pour le titre h1 */
h1 {
    font-size: 24px;
    text-align: center;
    margin-top: 40px;
}

/* Style pour les articles */
div {
    border: 1px solid #ccc;
    margin-bottom: 20px;
    padding: 20px;
}

img {
    float: left;
    margin-right: 20px;
}

h2 {
    font-size: 20px;
    margin: 0;
}

p {
    font-size: 16px;
    margin-top: 10px;
    clear: both;
}

/* Style pour les liens de la navigation */
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: #333;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #666;
}

/* Style pour le footer */
footer {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}

/* Style pour les réseaux sociaux */
#social-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 40px;
}

#social-icons a {
    margin-right: 20px;
    font-size: 24px;
    color: #333;
    transition: color 0.3s ease;
}

#social-icons a:hover {
    color: #666;
}
</style>






	<title>Articles</title>
</head>
<body>


    <footer>
		<nav>
			<ul>
				<li><a href="ACCUEIL.php">Accueil</a></li>
				<li><a href="coupons.php">Coupon du jour</a></li>
				<li><a href="codes.php">Code promo</a></li>
				<li><a href="articles.php">Actualités</a></li>
				<li><a href="#social-icons">Nos réseaux sociaux</a></li>
			</ul>
		</nav>
	</footer>



	<h1>service pas encore disponibe</h1>
	<?php
	// Connexion à la base de données
	/*$pdo = new PDO("mysql:host=localhost;dbname=chatgpt;charset=utf8", 'root', '');
	// Récupération des articles de la base de données
	$sql = "SELECT * FROM articles";
	$result = $pdo->query($sql);
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	?>
		<div>
			<img src="<?php echo $row['image']; ?>" alt="<?php echo $row['titre']; ?>" width="200">
			<h2><?php echo $row['titre']; ?></h2>
			<p><?php echo $row['description']; ?></p>
			<div>
				<a href="like.php?id=<?php echo $row['id']; ?>"><img src="like.png" alt="J'aime"></a>
				<a href="dislike.php?id=<?php echo $row['id']; ?>"><img src="dislike.png" alt="Je n'aime pas"></a>
			</div>
		</div>
	<?php
	}*/
	?>

<header id="social-icons">
		<a href="https://t.me/+EaCejpAxxB5hMDJk"><i class="fab fa-telegram"></i></a>
		<a href="https://instagram.com/better____bet?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
		<a href="https://youtube.com/channel/UCNUCJs5EJfcE2v-ngT2BXqg"><i class="fab fa-youtube"></i></a>
		<a href="https://www.facebook.com/profile.php?id=100076282536215"><i class="fab fa-facebook"></i></a>
	</header>



</body>
</html>
