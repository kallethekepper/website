<?php
	session_start();
	
	class user
	{
			function authentication($username, $password)
			{
				$xml=simplexml_load_file("..\model\logIn.xml") or die("Error: Cannot create object");
				$x = 0;
		
				foreach($xml -> person as $person)
				{
					
					if(isset($username))
					{
						
						$hash = password_hash($xml->person[$x]->password, PASSWORD_DEFAULT);
						if($username== $xml->person[$x]->username && password_verify($xml->person[$x]->password, $hash))						
						{
							echo'inloggad';
							
							$user = $xml->person[$x]->username;
							
							$_SESSION["username"] =(string) $user;
							
							
							break;
							
						}
						else{}
					}
					$x += 1;
				}
			}
	}
	
?>	