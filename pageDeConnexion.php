<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TamAIR</title>
    <link rel='stylesheet' type='text/css' href='pageConnexion.css'/>
</head>
<body>
<header>
    <div id="img" style="width: 100%">
        <img src="images/LOGO.png">
    </div>
    <div>
        <nav id="menu">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </nav>
    </div>
</header>
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
<footer>
    <blockquote> Fait par Liam Jourdain <br>Contactez nous: jouli1933471@etu.cegepjonquiere.ca
    </blockquote>
</footer>
</body>
</html>