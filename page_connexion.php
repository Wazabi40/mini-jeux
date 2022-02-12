<html>
    <head>
        <link rel = "stylesheet" href = "./css/style.css"/>
        <title>Mini jeux</title>
        <meta charset = "UTF-8">
        <name="viewport" content="width=device.width, initial-scale=1.0">
    </head>



<body>
    <br>
    <h1>Minis-Jeux</h1>
    
    <div id = "formulaireConnexion">        
        <h2> Connexion à votre compte: </h2><br>
    
        <form action = "fonction_connexion.php" method = "post"> 
                
            <label> Identifiant: </label></br>
                <input type = "text"  name = "login" placeholder = "Identifiant" /><br/></br>
            <label> Mot de passe: </label></br>
                <input type = "passeword" name = "pwd" placeholder = "Mot de passe" /> <br/></br>

                <input type = "submit" value = "se connecter" /><br><br><br>
            
            <label>
                <small>
                    vous n'avez pas de compte ? <a href = "page_creation_compte.php" > Créez en un ici ! </a>
                </small>

            </label>
        
        </form>
    </div>



</body>
      



</html>