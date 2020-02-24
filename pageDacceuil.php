<?php
session_start();

$cookie_name = "langue";
if ($_POST["Langue"]=="LangueFrancais")
        $cookie_value = $_POST["Langue"];
else
    $cookie_value = "LangueAnglais";
$expire = time() + 1 ;

setcookie($cookie_name,$cookie_value,$expire);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TamAIR</title>
    <link rel='stylesheet' type='text/css' href='pageDacceuil.css'/>
</head>
<body>
<?php
include 'header.php';
?>
<section>
    <?php
    include 'menu.php'
    ?>

    <div id="contenu">
        <h1>
            SECTION À VENIR
        </h1>
    </div>
</section>
<?php
include 'footer.php'
?>
</body>
</html>