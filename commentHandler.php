<?php
	session_start();

		include "comment.php"; 
			$comment = new comment();
			
			if(isset($_POST['notes']))
			{	
				switch ($_POST['url']) {
					case '/view/pancakes.php':
						$xml = '../model/commentpan.xml';
						$returnAdress = '../view/pancakes.php';
						break;
					case '/view/swedishMeatballsRecipe.php':
						$xml = '../model/commentmeat.xml';
						$returnAdress ='../view/swedishMeatballsRecipe.php';
						break;}		
			}
			
			$comment -> Cnote = $_POST['notes'];
			$comment -> Cauthor = $_SESSION['username'];
			$comment -> Cdate = $comment->setDate();
			$comment -> Cauthor;
			
			
			
			$comment->addComment($xml);
			
			
			header("Location:". $returnAdress);
		
?>		