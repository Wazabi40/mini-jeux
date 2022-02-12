<?php 
    session_start();
	
	$utilisateurConnecte = false;
	$utilisateurAdmin = false;

	if (isset($_SESSION["login"]) && isset($_SESSION["pwd"])){
        
        $utilisateurConnecte = true;
        $utilisateurAdmin = true;
        
        $login = $_SESSION["login"];
        $pwd = $_SESSION["pwd"];
        
    }
?>


<html>
    
    <head>
    </head>
    
    <body>
        <h2> Choix du jeu </h2>
        
        
    </body>

</html>
        