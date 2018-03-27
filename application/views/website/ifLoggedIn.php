<?php
          if(isset($loggedInUser)) {
              echo'<div class="menu">
              <a> Welcome ' . $loggedInUser . '</a>';

            echo'<a href="'. base_url().'index.php/Auth/logout'. $_SERVER['REQUEST_URI']. '">Logout</a>
            </div>';
          }
          else{
            echo'<div class="menu">
               <a href="'.base_url().'index.php/Auth">Log in</a>
             </div>';
          }
