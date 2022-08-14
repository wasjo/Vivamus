<body>
    <div>
        <?php
        //header Tittle
        $headerTittle = "SELECT `content` FROM `contents` WHERE `element_id` = 2";
        $Result = $con->query($headerTittle);
        $row = mysqli_fetch_all($Result);
        $header = $row[0];
        $subHeader = $row[1];

        //tab numbers
        $tabList = "SELECT `content` FROM `contents` WHERE `element_id` = 3";
        $tabListResult = $con->query($tabList);

        //form tittle
        $form = "SELECT `content` FROM `contents` WHERE `element_id` = 4";
        $formResult = $con->query($form);
        $formRow = mysqli_fetch_all($formResult);
        $aboutYou = $formRow[0];
        $donation = $formRow[1];
        $message = $formRow[2];

        //form content
        $formContents = "SELECT `content` FROM `contents` WHERE `element_id` = 5";
        $formContentResult = $con->query($formContents);
        while ($formContentResultRow = mysqli_fetch_array($formContentResult))

        // foreach ($formContentResult as $testtest) {$test = $testtest;}
        echo ($test[''])

        ?>

        <div class="bodyDivStyle">
            <section class="bodyStyle">
                <?php echo "<h1>$header[0]</h1>" ?>
                <?php echo "<p>$subHeader[0]</p>" ?>
                <hr class="bodyHrStyle" />
            </section>
            <form id="regForm">
                <div id="progress">
                    <ul id="progressNum">
                        <?php
                        foreach ($tabListResult as $list) {
                            echo "<li class='step'>$list[content]</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="sectionCard">
                    <?php
                    echo ("<div id='aboutYou'>$aboutYou[0]</div>")
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
                    echo ("<div id='YourDonationHeader'>$donation[0]</div>")
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
                    echo ("<div id='yourMessage'>$message[0]</div>")
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