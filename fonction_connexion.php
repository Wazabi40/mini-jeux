<?php

    session_start();
    
    

    if (empty($_POST["login"]) || empty($_POST["pwd"]))
	{
		print("<script>
			     alert('Erreur. Certains champs du formulaire non remplis.');

			     window.location.replace('./page_connexion.php');

			 </script>");
	}
	else
	{

        $login = $_POST["login"];
		$pwd = $_POST["pwd"];
        $json = file_get_contents("login.json");
         $jsonDecode = json_decode($json,true);
        
        $i=0;
        while( $i < count($jsonDecode['user']))
        {
            if($jsonDecode['user'][$i]['login'] == $login)
            {
            
                if($jsonDecode['user'][$i]['pwd'] == $pwd)
                {
                    $_SESSION['login'] = $login;
                    $_SESSION['pwd'] = $pwd;
                    print("<script>
                        window.location.replace('./choixDuJeu.php');
                    </script>");
                }else
                {
                    print("<script>
                        alert('mot de passe incorect.');
                        window.location.replace('./page_connexion.php');
                    </script>");
                }
                
            }
            $i++;
           
        }
          print("<script>
                    alert('login Incorect.');
                    window.location.replace('./page_connexion.php');
                </script>");
		
	}



   
    
 

    //var_dump($jsonDecode);
    


?>
    
    