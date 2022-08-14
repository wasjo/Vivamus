<header>
    <?php
    $navbar="SELECT `content` FROM `contents` WHERE `element_id` = 1";
    $result = $con->query($navbar);

    ?>
    <?= "<img src='$logo' alt='logo' class='logo' >" ?>
    <div class="navBarHeader">
        <?php
         foreach($result as $item) {
            echo "<span>$item[content]</span> <hr class='hrStyle'/>";
        }
        ?>
    </div>
    <form action="index.html" class="searchForm">
        <input type="text" class="searchInput" name="value" value="">
        <?= "<img src='$magnifyingGlass' alt='magnifyingIcon' class='searchIcon' >" ?>
    </form>
</header>