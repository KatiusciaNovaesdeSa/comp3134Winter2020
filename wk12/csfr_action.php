<form id = "csfr_form" method = "POST">
           <label for="user">Username:</label>
           <input type = "text" name = "user">

           <label for=" password">Password:</label>
           <input type = "text" name = "password">

        <input type=submit name= submit value="Submit Form"/> 
<form>
<div id="msg_splash">
<?php
    $get_confirm = $_SESSION["confirmation"]; 
    $post_confirm  = $_POST['confirmation'];

 if ($get_confirm == $post_confirm && $_POST['user']== 'host' && $_POST['passwo$
        echo "Welcome!!";
    }
   else{
        echo "Denied!!";