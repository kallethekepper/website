<?php
	session_start();
	
		include "comment.php";
			$comment = new comment();
				
				
				switch ($_POST['url']){
					case '/view/pancakes.php':
						$xml = '../model/commentpan.xml';
						$returnAdress = '../view/pancakes.php';
						break;
					case '/view/swedishMeatballsRecipe.php':
						$xml = '../model/commentmeat.xml';
						$returnAdress ='../view/swedishMeatballsRecipe.php';
						break;}		
			
			$comment -> Cauthor = $_SESSION['username'];
			$comment -> Cdate = $_POST['cdate'];
			$comment -> Cauthor;
			
			
			$comment->RemoveComment($xml);
			header("Location:". $returnAdress);
		
?>		