<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Meatballs</title>
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/reset.css" />
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/style.css" />
    <script>BASE_URL = '<?=base_url()?>'</script>
    <script src="<?= base_url();?>static/javascript/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url();?>static/javascript/commenthandler.js"></script>
    <script>
    $(document).ready(function(){
      loadComment('meatballs');
    });
    </script>
</head>

<body>
        </div>
        <ul id="menu">
            <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
            <li><a href="<?=base_url()?>index.php/Calendar">Calendar</a></li>
			<li><a >Meatballs</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/pancakes">Pancakes</a></li>
			<?php include 'ifLoggedIn.php';?>
        </ul>
		<div class="topbar">
		
    </div>
    <div class="ruta">

        <h1>Meatballs</h1>

        <img id="matbild" src="<?=base_url()?>static/pictures/kottbullar.jpg" alt="Woops, image cannot be seen">
        <div id="ingredienser">
            <h2>Ingredients:</h2>

            <ul>
                <li>500 g minced meat</li>
                <li>1/2 dl breadcrumbs</li>
                <li>1 dl cream</li>
                <li>2 tbsp chopped onion</li>
                <li>1 egg</li>
                <li>1 tsp salt</li>
                <li>1 tsp black pepper</li>
                <li>2 tbsp butter</li>
            </ul>
        </div>
        <div id="instructions">
            <h2>Instructions:</h2>
            <ol type="1">
                <li>Mix breadcrumbs and cream.</li>
                <li>Add the minced meat,chopped onion, ,egg, salt and pepper to the mix.</li>
                <li>Roll the mix into balls and fry in pan with butter. </li>
            </ol>
        </div>
        <div id="nutrition">
            <h2>Nutritional Value:</h2>
            <h3>Per 100 grams</h3>

            <ul>
                <li>15g Fat</li>
                <li>640mg Sodium</li>
                <li>8g Carbohydrates</li>
                <li>8g Protein</li>
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
