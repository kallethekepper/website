<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Index
    </title>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>static/stylesheets/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>static/stylesheets/style.css">
    <script src="<?= base_url();?>static/javascript/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url();?>static/loadComment.js"></script>


</head>

<body>



   


        
        <ul id="menu">
            <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
            <li><a href="<?=base_url()?>index.php/Calendar">Calendar</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/meatballs">Meatballs</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/pancakes">Pancakes</a></li>
            <?php include 'ifLoggedIn.php';?>
        </ul>
		 <div class="topbar">
    </div>
    <div class="ruta">
        <h2>Welcome to Tasty Recipes</h2> Be sure to check out our calendar full of tasty recipes

        <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>

    </div>

</body>

</html>
