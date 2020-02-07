<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TamAIR</title>
    <link rel='stylesheet' type='text/css' href='pageDacceuil.css'/>
</head>
<body>
<header>
    <div id="img" style="width: 100%">
        <img src="images/LOGO.png">
    </div>
    <nav id="menu">
        <?php
        if(isset($_POST["Identifiant"]) && isset($_POST["motpasse"]))
        {
            $prenom = $_POST["Identifiant"];
            $motpasse = $_POST["motpasse"];
            $nom = $_POST[""];
            $xml = simplexml_load_file("user.xml") or die();
            $userok = false;

            foreach ($xml ->children() as $utilisateur )
            {
                if($utilisateur->prenom == $prenom && $utilisateur->motpasse == $motpasse)
                {
                    $userok =true;
                }
            }
            if($userok == true)
            {
                echo "<a href=\"pageDeConnexion.php\">BONJOUR $prenom  </a><a href=\"pageDeConnexion.php\">DÉCONNEXION</a>";
            }
        }
        ?>
    </nav>
</header>
<section>
    <div id="menu2">
        <ul>
            <li><a>DESTINATION</a></li>
            <?php
            $xml2 = simplexml_load_file("menu.xml") or die();


            ?>
            <li><a href="#news">destination2</a></li>
            <li><a href="#contact">destination3</a></li>
            <li><a href="#about">destination4</a></li>
        </ul>
    </div>
    <div id="contenu">
        <h1>
            SECTION À VENIR
        </h1>
    </div>
</section>
<footer>
    <blockquote> Fait par Liam Jourdain <br>Contactez nous: jouli1933471@etu.cegepjonquiere.ca
    </blockquote>
</footer>
</body>
</html>