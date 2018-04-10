<?php
	class Comment
	{
		public $Cauthor;
		public $Cnote;
		public $Cdate;
		
			public function addComment($xmlFile)
			{
				if($_SESSION["username"]){
					$allComments = simplexml_load_file($xmlFile);
					
					
					$comment = new DOMElement('comment'); //cretes an empty child of comments
					
					$dom = dom_import_simplexml($allComments);
					$comment = $dom->appendChild($comment);
					
					//is for creating children of children
					$author = new DOMElement('username', $this->Cauthor);
					
					$author = $comment->appendChild($author);
					
					$note = new DOMElement('note', $this->Cnote);
					
					$note = $comment->appendChild($note);
					
					$date = new DOMElement('cdate', $this->Cdate);
					
					$date = $comment->appendChild($date);
					
					return $allComments->asXML($xmlFile);
					
				}
				else
				{
					
				}
			}
			
			function setDate()
			{
				$date = date('Y-m-d H:i:s');
				return $date;
			}
			
			
		
		function RemoveComment($xmlTemp)
		{
			$xml = simplexml_load_file($xmlTemp);
			$doc = new DOMDocument;
			$doc->load($xmlTemp);
			
			$x = 0;
			$comments = $doc->getElementsByTagName('comment');
			foreach($comments as $comment)
			{
				$user = $xml->comment[$x]->username;
				$codate = $xml->comment[$x]->cdate;
				
				if($_SESSION["username"]== $user && $_POST["cdate"]== $codate)
				{
					$comment->parentNode->removeChild($comment);
					$doc->save($xmlTemp);
					break;
				}
				$x +=1;
			}
		}
	}
	
?>	