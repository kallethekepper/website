<?php
class Recipe_model extends CI_model {

  public function getComments ($recipeName) {
    $fileName = $this->getFileName($recipeName);
    $xml = simplexml_load_file($fileName);
    return $xml;
  }

  public function addComment ($message, $author, $date, $recipeName) {
    $fileName = $this->getFileName($recipeName);
    $allComments = $this->getComments($recipeName);
    
    $comment = new DOMElement('comment', $message);
    $dom = dom_import_simplexml($allComments);
    $comment = $dom->appendChild($comment);

    $comment->setAttribute('author', $author);
    $comment->setAttribute('date', $date);

    return $allComments->asXML($fileName);
  }

  private function getFileName ($recipeName) {
    switch ($recipeName) {
      case 'pancakes':
      return __DIR__.'/pancakeComments.xml';

      case 'meatballs':
      return __DIR__.'/meatballComments.xml';
    }
}

public function delete($message, $author, $date, $recipeName){
$file = $this->getFileName($recipeName);
$dom = new DOMDocument();
$dom->load($file);
$comments = $dom->getElementsByTagName('comment');

  foreach($comments as $comment) {
      $currentMessage = $comment->nodeValue;
      $currentDate = $comment->getAttribute('date');

    if($author == $this->session->username && $date == $currentDate) {
        $comment->parentNode->removeChild($comment);
        $dom->save($file);


}

  }
}




}
