




<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "chatgpt");
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]) ;
    $prenom =htmlspecialchars($_POST["prenom"]) ;
    $email =htmlspecialchars($_POST["email"]) ;
    $motdepasse = password_hash( ($_POST["motdepasse"]) , PASSWORD_DEFAULT);
    // Vérification des champs obligatoires
    if (empty($nom) || empty($prenom) || empty($email) || empty($motdepasse)) {
        echo "Veuillez remplir tous les champs obligatoires.";
    } else {
        // Vérification de l'adresse email valide
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Adresse email invalide.";
        } else {
            // Vérification si l'email existe déjà dans la base de données
            $requete = "SELECT * FROM utilisateurs WHERE email = '$email'";
            $resultat = mysqli_query($connexion, $requete);
            if (mysqli_num_rows($resultat) > 0) {
                echo  "Cette adresse email est déjà utilisée."; 
            } else {
                // Insertion des données dans la base de données
                $requete = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";
                if (mysqli_query($connexion, $requete)) {
                    echo "Inscription réussie !";
                    header('Location: login.php');

                } else {
                    echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
                }
            }
        }
    }
}
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


  <style>

   /* Réinitialisation des styles par défaut */
body, form, input, label {
    margin: 0;
    padding: 0;
}

/* Style du formulaire d'inscription */
form {
    height: 450px;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
}

label, input {
    display: block;
    margin-bottom: 20px;
}
input{
    width: 80%;
    height: 30px;
}

input[type="submit"] {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

/* Style de la page d'inscription */
header {
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    text-align: center;
}

h1 {
    font-size: 24px;
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
    margin-right: 10px;
}

ul li a {
    color: #007bff;
}

ul li a:hover {
    color: #0056b3;
}


  </style>



</head>
<body>

<header>
    <h1>better bet</h1>
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

    <h2>CREEZ VOTRE COMPTE POUR PROFITER DE MULTIPLES SERVICES</h2>
    <form id="inscription-form" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required>
        <input type="submit" value="S'inscrire"> <br>
       
        vous avez deja un compte? <a href="index.php">se connecter</a>

    </form>



   <-- <script>


   /* document.getElementById('inscription-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Récupérer les valeurs des champs de formulaire
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var motdepasse = document.getElementById('motdepasse').value;

    // Envoyer les données d'inscription au serveur
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'index.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert(xhr.responseText);
        } else {
            alert('Une erreur est survenue lors de l\'inscription.');
        }
    };
    xhr.send('nom=' + encodeURIComponent(nom) +
             '&prenom=' + encodeURIComponent(prenom) +
             '&email=' + encodeURIComponent(email) +
             '&motdepasse=' + encodeURIComponent(motdepasse));
});



    </script> -->



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



