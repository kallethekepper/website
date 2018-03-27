<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calendar
    </title>
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/reset.css" />
    <link rel="stylesheet" href="<?= base_url();?>static/stylesheets/style.css" />
    <script src="<?= base_url();?>static/javascript/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url();?>static/loadComment.js"></script>

</head>

<body>
	 

   


        
        <ul id="menu">
            <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/meatballs">Meatballs</a></li>
            <li><a href="<?=base_url()?>index.php/Recipe/pancakes">Pancakes</a></li>
			 <?php include 'ifLoggedIn.php';?>
        </ul>
		<div class="topbar">
 
    </div>
    <div class="ruta">
        <h1>Calendar</h1>
        <ul class="kalendervecka">
            <li></li>
            <li></li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>

        </ul>
        <ul class="kalendervecka">
            <li>6</li>
            <li>7</li>
            <li>8
                <div>
                    <a href="<?=base_url()?>index.php/Recipe/pancakes">
                        <img src="<?=base_url()?>static/pictures/pannkakor.jpg" alt="woops, image cannot be seen" style="width:90px;height:80px;border:0;">
                    </a>

                </div>
            </li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>

        </ul>

        <ul class="kalendervecka">
            <li>13</li>
            <li>14</li>
            <li>15
                <div>
                    <a href="<?=base_url()?>index.php/Recipe/meatballs">
                        <img src="<?=base_url()?>static/pictures/kottbullar.jpg" alt="woops, image cannot be seen" style="width:90px;height:80px;border:0;">
                    </a>

                </div>
            </li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>

        </ul>

        <ul class="kalendervecka">
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>

        </ul>
        <ul class="kalendervecka">
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
            <li></li>
            <li></li>

        </ul>

    </div>


</body>

</html>
