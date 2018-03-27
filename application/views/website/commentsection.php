 <?php foreach ($comments as $comment) {

  $author = (string)$comment->attributes()['author'];
  $message = htmlentities($comment,ENT_QUOTES);
  $date = (string)$comment->attributes()['date'];

?>
   <div class="comment">

    <h3> <?php echo $author?> says:</h3> <?=$message?>
      <?php if(isset($loggedInUser)){

    if($loggedInUser == (string)$comment->attributes()['author']){ ?>
       <div class="delete">
              <form class="deleteForm" method="POST">
                  <input type="submit" value="delet this" name="delet">
                  <input type="hidden" name="time" value="<?=$date?>">
                  <input type="hidden" name="text" value="<?=$message?>">
                  <input type="hidden" name="whichRecipe" value="<?=$this->uri->segment(3, 0);?>"/>
              </form>
      </div>
  <?php } }?>
</div>
<?php
}
    if(isset($loggedInUser)) { ?>
            <form class='addComment' method="POST">
                Comment: <input type="text" name="comment" />
                <input type="submit" />
                <input type="hidden" name="recipe" value="<?=$this->uri->segment(3, 0);?>"/>
    <?php     } ?>
