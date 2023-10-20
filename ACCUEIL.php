

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>better bet</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 <!-- Lien vers la bibliothèque Font Awesome (ajoutez cette balise dans la section <head> de votre page HTML) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




       <style>
        
		/* Styles pour l'en-tête */
header {
	
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
 
  box-shadow: 0px 1px 5px rgba(0,0,0,0.2);
  z-index: 9999;


  background-color: #292f33;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

nav li {
  margin: 0 10px;
}

/* Ajoutez ces styles CSS dans votre fichier CSS ou dans la balise <style> dans le head de votre page HTML */


.fa {
  /* Styles pour l'icône de la bibliothèque d'icônes Font Awesome */
  /* Assurez-vous d'inclure le lien vers la bibliothèque Font Awesome dans votre page HTML */
  font-family: FontAwesome;
  font-size: 16px;
  text-decoration: none;
  margin-left: 5px; /* Espacement entre le texte et l'icône */
}


nav a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
}

nav a:hover {
  color: #1da1f2;
}

.logo {
	
	margin-right: 0px;
	color: #fff;
	padding: 0;
	background-color: brown;
	font-size: 30px;
}

.logo i {
  font-style: normal;
}

.logo span {
  display: block;
  font-size: 18px;
  font-weight: normal;
  letter-spacing: 2px;
}

/* Styles pour la section principale */
main {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 50px;
}

#ad-space {
	height: 400px;
  width: 100%;
  margin-bottom: 30px;
}

#ad-space img {
  width: 100%;
  height: 100%;
}

.ad-text {
  margin-top: 10px;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
}

.ad-button {
  margin-top: 10px;
  padding: 10px;
  background-color: #1da1f2;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

#logo {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

#logo img {
  width: 200px;
  height: auto;
  border-radius: 50%;
  margin-bottom: 30px;
}

.desc {
  font-size: 20px;
  text-align: center;
}

/* Styles pour le pied de page */
footer {
  background-color: #f2f2f2;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

#social-icons {
  text-align: center;
}

#social-icons h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

#social-icons ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

#social-icons li {
  margin: 0 10px;
}

#social-icons a {
  color: #1da1f2;
  text-decoration: none;
  font-size: 24px;
}

#social-icons a:hover {
  color: #292f33;
}



	   </style>




	<script>
		var ads = [
			{
				src: "images/bonus_1xbet.jpg",
				link: "https://refpa40043.top/L?tag=d_692133m_4129c_&site=692133&ad=4129",
				text: "bonus de 500%",
				button: "recuperer"
			},
			{
				src: "images/bonus_linebet.jpg",
				link: "https://gx221.lineorg.com/",
				text: "Obtenez votre coupon aujourd'hui",
				button: "Obtenir"
			},
			{
				src: "images/1xbet_bonus.png",
				link: "https://refpa40043.top/L?tag=d_692133m_4129c_&site=692133&ad=4129",
				text: "Offre exclusive pour les nouveaux utilisateurs",
				button: "S'inscrire"
			},
			{
				src: "images/bonus_melbet.jpg",
				link: "https://refpakrtsb.top/L?tag=d_2171231m_45415c_&site=2171231&ad=45415",
				text: "Gagnez gros avec notre offre spéciale",
				button: "En profiter maintenant"
			}
		];
    
		var currentAdIndex = 0;
		var adInterval = setInterval(function() {
			// Affiche la publicité courante
			var currentAd = ads[currentAdIndex];
			$("#ad-space").html(`
				<a href="${currentAd.link}">
					<img src="${currentAd.src}" alt="">
					<div class="ad-text">${currentAd.text}</div>
					<button class="ad-button">${currentAd.button}</button>
				</a>
			`);

			// Passe à la publicité suivante
			currentAdIndex++;
			if (currentAdIndex >= ads.length) {
				currentAdIndex = 0;
			}
		}, 5000);
	</script>
</head>
<body>
	<header>


		<nav>
			<h1 class="logo"><i><span>BETTER <br> BET</span></i></h1>
			<ul>
				
				<li><a href="coupons.php">COUPON DU JOUR</a></li>
				<li><a href="bookmakers.php">BOOKMAKERS</a></li>
				<li><a href="codes.php">CODE PROMO</a></li>
				<li><a href="articles.php">ACTUALITÉS</a></li>
				<li><a href="#social-icons">NOS RÉSEAUX SOCIAUX</a></li>
				<li><a href="index.php" class="logout-link">Déconnexion <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
				
			</ul>
		</nav>
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