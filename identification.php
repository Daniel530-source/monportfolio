<?php
// connection à la base de donnéé
$connect= mysqli_connect("localhost", "root", '');
if($connect){
    //je suis connecté
    if($connect->select_db("projet_portfolio")){
        //j'ai sélectionné la bd
        
        //récupération des données du formulaire
            $genre = isset($_POST['sexe']) ? $_POST['sexe'] : "";
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
            $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
            $commentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : "";

           // echo $genre ."<br>" . $prenom . "<br>" .$nom ."<br>" .$commentaire ; 
           // inserer dans la bd
$connect->query("insert into contact values(default, '$genre', '$nom', '$prenom', '$commentaire') ");
//redirection: rediriger vers une autre page après insert dans la bd
header("location:home.php");
    }else{
        // erreur de sélection de la bd
    }
}else{
    //problème de connexion
}