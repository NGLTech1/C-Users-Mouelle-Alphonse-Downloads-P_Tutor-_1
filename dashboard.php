<?php
session_start();
if(!isset($_SESSION['user'])){ header('Location:index.php'); exit; }
?>
<!DOCTYPE html><html><head>
<meta charset="utf-8"><title>Espace Utilisateur</title>
<link rel="stylesheet" href="assets/style.css"></head>
<body>
<div class="card">
<div class="top"><h1>Espace Utilisateur</h1><a href="logout.php">↪</a></div>
<p>Maquette 2 : Connexion réussie</p>
<h3>Champ de texte (Compteur)</h3>
<div id="counter">0</div>
<div class="actions">
<button class="add" onclick="add()">Ajouter</button>
<button class="sub" onclick="sub()">Diminuer</button>
</div>
</div>
<script src="assets/script.js"></script>
</body></html>