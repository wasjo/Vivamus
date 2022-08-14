<body>
    <div>
        <div class="bodyDivStyle">
            <section class="bodyStyle">
                <?php echo "<h1>$text[0]</h1>" ?>
                <?php echo "<p>$text[1]</p>" ?>
                <hr class="bodyHrStyle" />
            </section>
            <form id="regForm">
                <div id="progress">
                    <ul id="progressNum">
                        <?php
                        foreach ($listNumbers as $listNumber) {
                            echo "<li class='step'>$listNumber</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="sectionCard">
                    <?php
                    echo ("<div id='aboutYou'>$tittle[0]</div>")
                    ?>
                    <div class="bodyForm">
                        <div class="firstAndLastName">
                            <?php
                            echo ("<span>
                                    <label for='firstName'>$formContent[0]*</label>
                                    <input type='text' id='firstName' name='firstName'>
                                    </span>
                                <span>
                                    <label for='lastName'>$formContent[1]*</label>
                                    <input type='text' id='lastName' name='lastName'>
                                </span>"
                            )
                            ?>
                        </div>
                        <div class="emailAndMobile">
                            <?php
                            echo ("<span>
                                    <label for='emailAddress'>$formContent[2]*</label>
                                    <input type='email' id='emailAddress' name='emailAddress'>
                                </span>
                                <span>
                                    <label for='mobileNumber'>$formContent[3]*</label>
                                    <input type='number' id='mobileNumber' name='mobileNumber'>
                                </span>"
                            )
                            ?>
                        </div>
                    </div>
                </div>
                <div class="sectionCard">
                    <?php
                    echo ("<div id='YourDonationHeader'>$tittle[1]</div>")
                    ?>
                    <div class="yourDonation">
                        <?php
                        echo ("<div class='headerForCard'>
                        <span id='tab1'>$formContent[4]</span> <span id='tab2'>$formContent[5]</span>
                    </div>")
                        ?>
                        <?php
                        echo ("<label for='inputShortStyle'>$formContent[6]*</label>
                        <input type='number' id='inputShortStyle' name='lastName'>
                        <label for='inputLongStyle'>$formContent[7]*</label>
                        <input type='number' id='inputLongStyle' name='lastName'>
                        <label for='inputShortStyle1'>$formContent[8]*</label>
                        <input type='number' id='inputShortStyle1' name='lastName'>
                        <label for='inputShortStyle2'>$formContent[9]*</label>
                        <input type='number' id='inputShortStyle2' name='lastName'>
                        <label for='inputShortStyle3'>$formContent[10]*</label>
                        <input type='number' id='inputShortStyle3' name='lastName'>"
                        )
                        ?>
                    </div>
                </div>
                <div class="sectionCard">
                    <?php
                    echo ("<div id='yourMessage'>$tittle[2]</div>")
                    ?>
                    <div class="bodyForm">
                        <div class="emailAndMobile">
                            <?php
                            echo ("<span>
                                <label for='styleForTextArea'>$formContent[11]</label>
                                <textarea rows='4' cols='50' id='styleForTextArea' name='textarea'> </textarea>
                                </span>
                                <span>
                                <input type='checkbox' id='anonymous' name='anonymous'>
                                <label for='anonymous'>
                                $formContent[12]</label><br>
                                </span>"
                            )
                            ?>
                        </div>
                    </div>
                </div>
                <div class="buttonStyle">
                    <?php
                    echo ("<button id='prevButton' type='button' onclick='nextPrev(-1)'> $formContent[13] </button>
                    <button id='nextButton' type='button' onclick='nextPrev(1)'> $formContent[14] </button>")
                    ?>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets/Script/javaScript.js"></script>
</body>