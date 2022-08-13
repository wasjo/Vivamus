<header>
    <!-- <?= "<img src='$logo' alt='logo' class='logo' >" ?> -->
    <div class="navBarHeader">
        <?php
        foreach ($navBarContent as $content) {
            echo "<span class='hrStyle'>$content</span>";
        }
        ?>
    </div>
    <form action="index.html" class="searchForm">
        <input type="text" class="searchInput" name="value" value="">
        <img src="./assets/images/MAGNIFYING.png" alt="magnifyingIcon" class="searchIcon" />
    </form>
</header>