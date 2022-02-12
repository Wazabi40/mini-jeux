<?php
  
   /* session_start();

    if (empty($_POST["login"]) || empty($_POST["pwd"]))
	{
		print("<script>
			     alert('Erreur. Certains champs du formulaire non remplis.');
			     window.location.replace('./page_login.php');
			 </script>");
	}
	else
	{
		$login = $_POST["login"];
		$pwd = $_POST["pwd"];
	}*/


    $json = file_get_contents("login.json");

    $jsonDecode = json_decode($json,true);
    
    for($i=0 ; $i < count($jsonDecode['user']) ; $i++){
        echo $jsonDecode['user'][$i]['nom']."<br>";
        echo $jsonDecode['user'][$i]['mail']."<br>";
        echo $jsonDecode['user'][$i]['login']."<br><br><br>";
    }
    //var_dump($jsonDecode);
    


?>
    
    