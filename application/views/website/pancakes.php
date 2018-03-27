<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pancakes</title>
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/reset.css" />
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/style.css" />
    <script>BASE_URL = '<?=base_url()?>'</script>
    <script src="<?= base_url();?>static/javascript/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url();?>static/javascript/commenthandler.js"></script>
    <script>
    $(document).ready(function(){
      loadComment('pancakes');
    });
    </script>

</head>

<body>
  
        
        <ul id="menu">
            <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
            <li><a href="<?=base_url()?>index.php/Calendar">Calendar</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/meatballs">Meatballs</a></li>
			<?php include 'ifLoggedIn.php';?>

        </ul>
		

    <div class="topbar">
    </div>
    <div class="ruta">

        <h1>Pancakes</h1>

        <img id="matbild" src="<?=base_url()?>static/pictures/pannkakor.jpg" alt="Woops, image cannot be seen">
        <div id="ingredienser">
            <h2>Ingredients:</h2>

            <ul>
                <li>3 dl Milk</li>
                <li>3 Eggs</li>
                <li>5 dl Flour</li>
                <li>1 tbsp Butter</li>
                <li>5 tsp Salt</li>
            </ul>
        </div>
        <div id="instructions">
            <h2>Instructions:</h2>

            <ol type="1">
                <li>Mix dry ingredients in one container.</li>
                <li>Mix wet ingredients in another container.</li>
                <li>Mix the two groups of ingredients together and fry in a pan for as long as you please. </li>
            </ol>
        </div>
        <div id="nutrition">
            <h2>Nutritional Value</h2>
            <h3>Per 100 grams</h3>

            <ul>
                <li>9g Fat</li>
                <li>58mg Cholesterol</li>
                <li>522mg Sodium</li>
                <li>29g Carbohydrates</li>
                <li>7g Protein</li>
            </ul>
        </div>

        <div class="commentsection">
            <h2>Comments</h2>
              <div class='insertCommentHere'>
             </div>
      </div>

    </div>

</body>

</html>
