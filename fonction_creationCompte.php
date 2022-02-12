<?php

    session_start();
    
    

    if (empty($_POST["login"]) || empty($_POST["pwd"]) || empty($_POST["nom"]) || empty($_POST["mail"]))
	{
		print("<script>
			     alert('Erreur. Certains champs du formulaire non remplis.');

			     window.location.replace('./page_connexion.php');

			 </script>");
	}
	else
	{
        $json = file_get_contents("login.json");
        
        
        $jsonDecode = json_decode($json,true);
        
        array_push($jsonDecode['user'],
                   array('nom' => $_POST["nom"],
                      'mail' => $_POST["mail"],
                      'login' => $_POST["login"],
                      'pwd' => $_POST["pwd"])
                  );    
                   
        $jsonResult = json_encode($jsonDecode);
        file_put_contents('login.json',$jsonResult);
                   
                   
          print("<script>
                    alert('compte créé.');
                    window.location.replace('./page_connexion.php');
                </script>");
		
        
           
    }


    //var_dump($jsonDecode);
?>
    
    