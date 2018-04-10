<?php
	class comments()
	{
		function getComments ($file){
					$xml = simplexml_load_file($file);
					return $xml;
		}
	}	

?>