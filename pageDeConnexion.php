<?php
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TamAIR</title>
    <link rel='stylesheet' type='text/css' href='pageConnexion.css'/>
</head>
<body>
<?php
include 'header.php'
?>
<section>
    <div id="connexion">
        <div>
            <h1>
                 Connexion du client
            </h1>
        </div>
    </div>
    <div id="form">
            <form action="pageDacceuil.php" method="post">
                <div id="label">
                    <label for="Identifiant"></label><input type="text" id="Identifiant" placeholder="Identifiant" required name="Identifiant">
                </div>
                <div id="label">
                    <label for="MotdePasse"></label><input type="password" id="motDePasse" placeholder="Mot de passe" required name="motpasse">
                </div>
                <div id="inscrireConnecter">
                    <input type="submit" value="S'inscrire" >
                    <input type="submit" value="Se connecter" >
                </div>
            </form>
    </div>
</section>
<?php
include 'footer.php'
?>
</body>
</html>