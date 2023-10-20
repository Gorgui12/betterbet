



<style>
        
		/* Mise en forme générale de la page */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: beige;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.auth{
	float: left;
	width: 100%;
	background-color: blue;
	list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
   /* justify-content: space-between;*/
   align-items: center;
    height: 70px;
}

.logo{
	color: #fff;
	padding: 0;
	background-color: brown;
	font-size: 30px;
}

/* Mise en forme du menu */
nav ul {
	
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav ul li {
  margin: 0 10px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  padding: 10px;
  border-radius: 5px;
}

nav ul li a:hover {
  background-color: #333;
  color: #fff;
}

/* Mise en forme de l'espace publicitaire */
#ad-space {
  margin-top: 20px;
  height: 300px;
  position: relative;
}

#ad-space img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

#ad-space .ad-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
}

#ad-space .ad-overlay h2 {
  color: #fff;
  text-align: center;
}

#ad-space .ad-overlay a {
  background-color: #fff;
  color: #333;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
}

#ad-space .ad-overlay a:hover {
  background-color: #333;
  color: #fff;
}

/* Mise en forme de la section de présentation */
#presentation {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 20px 0;
}

#presentation img {
  width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 50%;
}

#presentation h2 {
  margin-left: 20px;
  font-size: 24px;
}

#logo{
	text-align: center;
}

.profil{
	height: 300px;
	width: 60%;
	margin-left: 20%;
   margin-right: 20%;
}
.desc{
	font-size: 25px;
}
/* Mise en forme du footer */
footer {
	
	height: 100px;
  background-color: #333;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

footer ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

footer ul li {
  margin: 0 60px;
}

footer ul li a {
	list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-decoration: none;
  color: #fff;
  font-size: 24px;
}


	   </style>