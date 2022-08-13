<header>
    <?= "<img src='$logo' alt='logo' class='logo' >" ?>
    <div class="navBarHeader">
        <?php
        foreach ($navBarContents as $content) {
            echo "<span >$content</span> <hr class='hrStyle'/>";
        }
        ?>
    </div>
    <form action="index.html" class="searchForm">
        <input type="text" class="searchInput" name="value" value="">
        <?= "<img src='$magnifyingGlass' alt='magnifyingIcon' class='searchIcon' >" ?>
    </form>
</header>