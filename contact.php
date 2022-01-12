<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fontawesome.com/v6.0/icons?q=telephone&s=solid%2Cbrands">
</head>
<body>
<nav class= "navbar">
<ul class= "menu">
            <li><a href="index.php?page=index">Accueil</a></li>
            <li><a href="index.php?page=galerie">Galerie</a></li>
            <li><a href="index.php?page=liens">Liens</a></li>
            <li><a href="index.php?page=cv">Curriculum Vitae</a></li>
            <li><a href="index.php?page=tutoriels">Tutoriels</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h1>Laissez un commentaire ou un avis</h1>
        <form name="identite" action="identification.php" method="POST">
       <label for="">Genre:</label> 
       <br>
       <label><input type="radio" name="sexe" value="Monsieur" checked>Monsieur </label>
       <label><input type="radio" name="sexe" value="Madame">Madame</label>
       <br><br>
       <label for="">Entrez votre nom:</label>
       <input id="nom" type="text" name="nom" placeholder="Nom" required>
       <br><br>
       <label for="">Entrez votre prenom:</label>
       <input id="prenom" type="text" name="prenom" placeholder="Prénom" required>
       <br><br>
       <label for="">Votre Message</label> <br>
       <textarea name="commentaire" id="" cols="30" rows="10" required></textarea> <br>

            <label>cochez la case</label>
            <input id="case" type="checkbox" name="newsletter" value="oui" required>
            <br><br>

            <input class="bouton btn-envoyer" type="submit" value="envoyer">  
            <input class="bouton btn-reset" type="reset" value="reset">    
    </form>
    </main>
    <footer>
        <div class="trait"></div>
        <div class="copyright">
        <span>© Daniel Nana, stagiaire Web-dev 2021-2022 Cf2m</span>
        </div>
        <div class="icons3">
            <a href="https://www.twitter.fr/">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.facebook.fr/">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.fr/">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
        
    </footer>
</body>
</html>