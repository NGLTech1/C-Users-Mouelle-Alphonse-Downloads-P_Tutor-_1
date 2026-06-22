<?php
$conn = new mysqli("localhost","root","","schema");
if($conn->connect_error){ die("Erreur BD"); }
?>