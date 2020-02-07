<div id="menu2">
    <ul>
        <li><a>DESTINATION</a></li>
        <?php
        $xml2 = simplexml_load_file("menu.xml") or die();

        foreach ($xml2->children() as $link)
        {
            echo "<li><a href=\"$link->url\">$link->nom</a></li>";
        }
        ?>
    </ul>
</div>