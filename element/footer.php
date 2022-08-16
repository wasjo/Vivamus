<footer>
    <?php
    //icons
    $iconList = "SELECT `content` FROM `contents` WHERE `element_id` = 6";
    $result = $con->query($iconList);

    //links
    $linkList = "SELECT `content` FROM `contents` WHERE `element_id` = 7";
    $linkResult = $con->query($linkList);
    
    //rights
    $rightsList = "SELECT `content` FROM `contents` WHERE `element_id` = 8";
    $rightsResult = $con->query($rightsList);

    ?>

    <div class="mediaLinkStyle">
        <?php
        foreach ($result as $item) {
            echo "<span class='mediaIcon'>$item[content]</span>";
        }
        ?>
    </div>
    <div class="sponsorStyle">
        <?php
        foreach ($linkResult as $link) {
            echo "<span> $link[content]</span> <hr class='hrStyle' />";
        }
        ?>
    </div>
    <div class="copyrightStyle">
        <?php
        foreach ($rightsResult as $rightItem) {
            echo "<span>$rightItem[content]</span>";
        }
        ?>
    </div>
</footer>s