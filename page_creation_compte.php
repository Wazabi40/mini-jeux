<html>
    <head>
        <title>Mini jeux</title>
        <meta charset = "UTF-8">
        <name="viewport" content="width=device.width, initial-scale=1.0">
    </head>




<body>
    <h2> Creation de votre compte: </h2>    
    <form action = "fonction_creationCompte.php" method = "post">
        <label> Nom Prenom: </label></br>
            <input type = "text"  name = "nom"  placeholder = "NOM Prenom" /></br></br>
        <label> Adresse Mail: </label></br>
            <input type = "text"  name = "mail" placeholder = "Adresse Mail" /><br/></br>
        <label> Mot de passe: </label></br>
            <input type = "passeword" name = "pwd" placeholder = "Mot de passe" /> <br/></br>
        <label> Identidiant: </label></br>
            <input type = "text"  name = "login"  placeholder = "Identifiant" /></br></br>

        <input type = "submit"  value = "creer compte" /></br></br>
        <label>
            <small>
                vous avez déjà un compte ? <a href = "page_connexion.php" >connectez-vous ! </a>
            </small>

        </label>
        
        

            

        
    </form>
</body>   
    
    
    
    
    
</html>