<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Index
    </title>
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/reset.css" />
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/style.css" />

</head>

<body>
   

        <ul id="menu">
            <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
            <li><a href="<?=base_url()?>index.php/Calendar">Calendar</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/meatballs">Meatballs</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/pancakes">Pancakes</a></li>
        </ul>
    </div>
	 <div class="topbar">
	 </div>
    <div class="ruta">
        <h2>Log in</h2>
        <h3>Please enter your username and password.</h3>

        <form action="<?=base_url()?>index.php/Auth/login" method="POST">
            Username: <input type="text" name="username" /> Password: <input type="password" name="password" />
            <input type="submit" />


        </form>


    </div>

</body>

</html>
