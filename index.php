 

<?php
// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifier les informations d'identification de l'utilisateur dans la base de données
    // Remplacer cette étape par la logique d'authentification appropriée, par exemple avec une base de données et des requêtes SQL



    
    // Connexion à la base de données
    $connexion = mysqli_connect("localhost", "root", "", "chatgpt");
    
    // Vérifier si la connexion a échoué
    if (!$connexion) {
        die("Erreur de connexion à la base de données: " . mysqli_connect_error());
    }
    
    // Vérifier si le formulaire de connexion a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $nom_utilisateur = htmlspecialchars($_POST["username"]);
        $mot_de_passe =htmlspecialchars($_POST["password"]);
    
        // Requête SQL pour vérifier les informations d'utilisateur
        $requete = "SELECT * FROM utilisateurs WHERE email = '$nom_utilisateur' AND motdepasse = '$mot_de_passe'";
        $resultat = mysqli_query($connexion, $requete);
    




    // Si les informations d'identification correspondent à un utilisateur
    if ($username == "utilisateur" && $password == "motdepasse") {
        // Rediriger vers la page d'accueil de l'utilisateur
        header("Location: accueil.php");
        exit();
    }
    // Si les informations d'identification correspondent à un administrateur
    elseif ($username == "gorguipresi@gmail.com" && $password == "Gorgui12") {
        // Rediriger vers la page d'administration
        header("Location: admin.php");
        exit();
    }
    // Si les informations d'identification sont incorrectes
    else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

}
?>


    
    <!DOCTYPE html>
<html>
<head lang="fr">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page de connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />




<style>



   /* Réinitialisation des styles par défaut */
   body, form, input, label {
    margin: 0;
    padding: 0;
}

   /* Style pour le formulaire de connexion */
   header {
    
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   z-index: 9999;
   /* autres styles */


    background-color: #007bff;
    color: #fff;
    padding: 20px;
    text-align: center;
}

form {
    height: 350px;
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

main {
    padding: 20px;
}

#logo {
    margin-top: 20px;
    text-align: center;
}

.profil {
    max-width: 200px;
    border-radius: 50%;
}

.desc {
    margin-top: 10px;
    font-size: 16px;
    line-height: 1.4;
}

h2 {
    margin-top: 20px;
    font-size: 18px;
    text-align: center;
}

footer {
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
}

#social-icons {
    margin-top: 20px;
}

ul {
    list-style-type: none;
}

ul li {
    display: inline-block;
    margin-right: 40px;
}

ul li a {
    font-size: 50px;
    color: #007bff;
}

ul li a:hover {
    color: #0056b3;
}


</style>




</head>
<body>
	<header>
		<h1>BETTER BET</h1>
	</header>

   
    <main>   
		<div id="ad-space"></div>
		<div id="logo">
			<img src="images/logo.jpg" alt="" class="profil">
			<p class="desc">
				
			BIENVENUE SUR BETTER BET , LE MEILLEUR SITE DE PRONOSTIC AFRICAIN<br> AVEC 90% DE REUSSITE.  BETTER BET vous accompagne sur vos paris <br> avec des coupons gratuits,elle vous propose aussi une selection<br> des meilleurs code promo du monde. De meme, BETTER BET <br> vous aide a choisir un bookmaker avec un classement  pertinent<br> des meilleurs sites de parisportif

			</p>
		</div>
	</main>



	<main>
		<form action="" method="post">
            <h1>connexion</h1>
			<label for="Email">Email:</label>
			<input type="email" id="username" name="username" required><br>

			<label for="password">Mot de passe:</label>
			<input type="password" id="password" name="password" required><br>
          
			<input type="submit" value="Se connecter">
            <br>
            <br>
            <a href="login.php">S'inscrire</a>
		</form>
	</main>

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














