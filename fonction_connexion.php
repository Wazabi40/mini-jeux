<? 
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


    $json = "login.json";
    $jsonDecode = json_decode($json);
    var_dump($jsonDecode);
    

>
    
    