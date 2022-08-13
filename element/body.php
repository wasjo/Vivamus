<body>
    <div>
        <div class="bodyDivStyle">
            <section class="bodyStyle">
                <h1>In euismod sapien eu maximus tempus</h1>
                <p>
                    Vestibulum bibendum posuere dui, in pharetra est hendrerit ac.
                    Integer posuere metus lacus
                </p>
                <hr class="bodyHrStyle" />
            </section>
            <form id="regForm">
                <div id="progress">
                    <ul id="progressNum">
                        <li class="step">1</li>
                        <li class="step">2</li>
                        <li class="step">3</li>
                    </ul>
                </div>
                <div class="sectionCard">
                    <div id="aboutYou">About You</div>
                    <div class="bodyForm">
                        <div class="firstAndLastName">
                            <span>
                                <label for="firstName">First name*</label>
                                <input type="text" id="firstName" name="firstName" value="">
                            </span>
                            <span>
                                <label for="lastName">Last name*</label>
                                <input type="text" id="lastName" name="lastName" value="">
                            </span>
                        </div>
                        <div class="emailAndMobile">
                            <span>
                                <label for="emailAddress">Email Address*</label>
                                <input type="email" id="emailAddress" name="emailAddress" value="">
                            </span>
                            <span>
                                <label for="mobileNumber">Mobile number*</label>
                                <input type="number" id="mobileNumber" name="mobileNumber" value="">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="sectionCard">
                    <div id="YourDonationHeader">Your donation</div>
                    <div class="yourDonation">
                        <div class="headerForCard">
                            <span id="tab1">Paypal</span> <span id="tab2">Credit Card</span>
                        </div>
                        <label for="inputShortStyle">Donation Amount*</label>
                        <input type="number" id="inputShortStyle" name="lastName" value="">
                        <label for="inputLongStyle">Card Holder Name*</label>
                        <input type="number" id="inputLongStyle" name="lastName" value="">
                        <label for="inputLongStyle1">Credit Card No.*</label>
                        <input type="number" id="inputLongStyle1" name="lastName" value="">
                        <label for="inputShortStyle1">Credit Card No.*</label>
                        <input type="number" id="inputShortStyle1" name="lastName" value="">
                        <label for="inputShortStyle2">Card Security Code*</label>
                        <input type="number" id="inputShortStyle2" name="lastName" value="">
                        <label for="inputShortStyle3">Expiry Date*</label>
                        <input type="number" id="inputShortStyle3" name="lastName" value="">

                    </div>
                </div>
                <div class="sectionCard">
                    <div id="yourMessage">Your Message</div>
                    <div class="bodyForm">
                        <div class="emailAndMobile">
                            <span>
                                <label for="styleForTextArea">Your Message</label>
                                <textarea rows="4" cols="50" id="styleForTextArea" name="textarea"> </textarea>
                            </span>
                            <span>
                                <input type="checkbox" id="anonymous" name="anonymous">
                                <label for="anonymous"> Keep me anonymous</label><br>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="buttonStyle">
                    <button id="prevButton" type="button" onclick="nextPrev(-1)"> Back </button>
                    <button id="nextButton" type="button" onclick="nextPrev(1)"> Next </button>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets/Script/javaScript.js"></script>
</body>