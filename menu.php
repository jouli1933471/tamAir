<div id="menu2">
    <ul>
        <li><a>DESTINATION</a></li>
        <?php
        $xml2 = simplexml_load_file("menu.xml") or die();

        foreach ($xml2->children() as $link)
        {
            if ($_COOKIE["langue"] == "LangueFrancais")
                echo "<li><a href=\"$link->url\">$link->nom</a></li>";
            else
                echo "<li><a href=\"$link->url\">$link->name</a></li>";
        }
        ?>
    </ul>
</div>
