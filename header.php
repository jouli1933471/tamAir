<header>
    <div id="img" style="width: 100%">
        <img src="images/LOGO.png">
    </div>
    <nav id="menu">
        <?php
        if(isset($_POST["Identifiant"]) && isset($_POST["motpasse"]))
        {
            $_SESSION["identifiant"]=$_POST["Identifiant"];
            $_SESSION["identifiant"]=$_POST["Identifiant"];
            $prenom = $_POST["Identifiant"];
            $motpasse = $_POST["motpasse"];
            $nom = "";
            $xml = simplexml_load_file("user.xml") or die();
            $userok = false;

            foreach ($xml ->children() as $utilisateur )
            {
                if($utilisateur->prenom == $prenom && $utilisateur->motpasse == $motpasse)
                {
                    $userok =true;
                    $nom = $utilisateur->nom ;
                    $_SESSION["prenom"]=$_POST["Identifiant"];
                    $_SESSION["nom"]=$utilisateur ->nom;
                    $_SESSION["email"]=$utilisateur ->email;

                }

            }
            if($userok == true && $xml->children())
            {
                echo "<a href=\"pageDeConnexion.php\">BONJOUR $prenom $nom</a><a href=\"pageDeConnexion.php\">DÉCONNEXION</a>";
            }
            else{
                header('location:http://localhost/tamAIR/pageDeConnexion.php');
            }
        }
        ?>
    </nav>
</header>
