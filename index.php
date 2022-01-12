

<?php


    $page = isset($_GET['page']) ?  $_GET['page'] : "";

    if($page==="galerie"){
        require_once('galerie.php');
    }else if($page==="cv"){
        require_once('cv.php');
    }
    else if($page==="contact"){
        require_once('contact.php');
    }
    else if($page==="liens"){
        require_once('liens.php');
    }
    else if($page==="tutoriels"){
        require_once('tutoriels.php');
    }
    else if($page==="accueil"){
        require_once('accueil.php');
    }
    else{
        require_once('home.php');
    }
    ?>
    