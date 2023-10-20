


  
<meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




 <!DOCTYPE html>
<html>
<head>
	<title>Codes Promo</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
       /* Mise en page générale */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    padding: 30px;
    margin: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Styles pour le tableau */
table {
    width: 100%;
}

th, td {
    text-align: center;
}

th {
    background-color: #343a40;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Styles pour les boutons de copie */
.code-promo {
    margin-right: 5px;
}

/* Styles pour le pied de page */
footer {
    background-color: #343a40;
    color: #fff;
    padding: 20px;
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
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

nav a:hover {
    text-decoration: underline;
}

/* Styles pour les icônes de réseaux sociaux */
#social-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #343a40;
    padding: 10px;
}

#social-icons a {
    margin: 0 10px;
    color: #fff;
    font-size: 24px;
}

/* Styles spécifiques pour les réseaux sociaux */
#social-icons a:hover {
    color: #ccc;
}

#social-icons .fab.fa-facebook:hover {
    color: #3b5998;
}

#social-icons .fab.fa-instagram:hover {
    color: #dd2a7b;
}

#social-icons .fab.fa-telegram:hover {
    color: #0088cc;
}

#social-icons .fab.fa-youtube:hover {
    color: #cd201f;
}


    </style>


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






	<div class="container">
		<h2 class="text-center mb-5">voici les meilleures codes promo du monde</h2>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Bookmakers</th>
					<th scope="col">Note</th>
					<th scope="col">Bonus</th>
					<th scope="col">Codes Promo</th>
				</tr>
			</thead>
			<tbody>
			<?php
    // Connexion à la base de données
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'chatgpt';
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Récupérer les données des bookmakers
    $sql = "SELECT * FROM code_promo";
    $result = mysqli_query($conn, $sql);

    // Vérifier que la requête a réussi
    if (!$result) {
        die("Error executing query: " . mysqli_error($conn));
    }

    // Afficher les données dans le tableau
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td><img src="' . $row["logo"] . '" height="100px" alt=" '. $row["bookmaker"] .'"></td>';


            echo '<td>' . $row["note"] . '</td>';
            echo '<td>' . $row["bonus"] . '%</td>';
            echo '<td>';

            // Afficher tous les codes promo pour le bookmaker courant
            $codes = explode(",", $row["code_promo"]);
            foreach ($codes as $code) {
                echo '<button class="btn btn-primary code-promo" data-clipboard-text="' . $code . '">' . $code . '</button> ';
            }

            echo '</td>';
            echo '</tr>';
        }
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
?>

			</tbody>
		</table>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
	<script>
		// Initialiser Clipboard.js pour la copie des codes promo
		var clipboard = new ClipboardJS('.code-promo');

		// Gérer la copie des codes promo
		clipboard.on('success', function(e) {
			alert("Le code promo a été copié dans le presse-papier !");
		});
	</script>


    <header id="social-icons">
		<a href="https://t.me/+EaCejpAxxB5hMDJk"><i class="fab fa-telegram"></i></a>
		<a href="https://instagram.com/better____bet?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
		<a href="https://youtube.com/channel/UCNUCJs5EJfcE2v-ngT2BXqg"><i class="fab fa-youtube"></i></a>
		<a href="https://www.facebook.com/profile.php?id=100076282536215"><i class="fab fa-facebook"></i></a>
	</header>

</body>
</html>
