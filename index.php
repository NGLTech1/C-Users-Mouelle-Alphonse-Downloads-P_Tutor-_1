<?php
session_start();
require_once 'config.php';
$message='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'] ?? '';
    $password=$_POST['password'] ?? '';
    $stmt=$conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $res=$stmt->get_result();
    if($row=$res->fetch_assoc()){
        if(password_verify($password,$row['password'])){
            $_SESSION['user']=$row['username'];
            header('Location: dashboard.php');
            exit;
        }
    }
    $message='Identifiants incorrects';
}
?>
<!DOCTYPE html><html><head>
<meta charset="utf-8"><title>Connexion</title>
<link rel="stylesheet" href="assets/style.css"></head>
<body>
<div class="card">
<h1>Connexion</h1>
<p>Maquette 1 : Page de connexion</p>
<form method="post">
<label>Nom</label>
<input type="text" name="username" placeholder="Votre nom" required>
<label>Mot de passe</label>
<input type="password" name="password" placeholder="Votre mot de passe" required>
<div class="forgot">Mot de passe oublié ?</div>
<button type="submit">Connexion</button>
</form>
<div class="error"><?php echo $message; ?></div>
</div></body></html>