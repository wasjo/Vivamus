<footer>
    <div class="mediaLinkStyle">
        <?php
        foreach ($icons as $icon) {
            echo "<span class='mediaIcon'>$icon</span>";
        }
        ?>
    </div>
    <div class="sponsorStyle">
        <?php
        foreach ($links as $link) {
            echo "<span> $link </span> <hr class='hrStyle' />";
        }
        ?>
    </div>
    <div class="copyrightStyle">
        <?php
            foreach ($rights as $right) {
                echo "<span>$right</span>";
            }
        ?>
    </div>
</footer>s