<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oz Banking and Insurance</title>
    <meta name="description"
        content="Experience secure financial planning with our comprehensive banking and insurance solutions. From savings accounts to investment strategies, and from life insurance to asset protection, we've got you covered. Explore a world of financial stability and peace of mind with our trusted banking and insurance services.">
    <meta name="keywords"
        content="Banking services, Savings accounts, Checking accounts, Online banking, Mobile banking, Insurance services, Life insurance, Health insurance, Auto insurance, Home insurance">
    <!-- Style Sheets -->
    <link rel="stylesheet" href="css/mainStyle.css">
    <link rel="stylesheet" href="css/includeStyle.css">
    <!-- Favicon and Apple Icon -->
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
    <link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="icon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- JavaScript -->
    <script defer src="js/nav.js"></script>
    <script defer src="js/jquery-3.7.0.min.js"></script>
    <script defer src="js/jquery-ui.min.js"></script>
    <script defer src="js/main.js"></script>
</head>

<body>
    <header>
        <?php include 'html/header.html'; ?>
    </header>
    <main id="home">
        <!-- Main Content -->
        <!-- Banner -->
        <?php include 'html/carousel.html'; ?>
        <!-- Oz Banking Services List -->
        <div class="containerGreen">
            <section id="servicesList" class="centerBound">
                <h2>Oz banking services</h2>
                <ul>
                    <li><a href="personal-bank-account.php"><img src="assets/card-credit-finance.svg" alt="card"
                                aria-hidden="true">Banking Services</a></li>
                    <li><a href="business-loan.php"><img src="assets/coins.svg" alt="coins" aria-hidden="true">Business
                            Loans</a></li>
                    <li><a href="#"><img src="assets/coins.svg" alt="coins" aria-hidden="true">Investments</a></li>
                    <li><a href="personal-credit-card.php"><img src="assets/card-holder.svg" alt="card"
                                aria-hidden="true">Credit cards</a></li>
                    <li><a href="personal-loans.php"><img src="assets/money-bag.svg" alt="money"
                                aria-hidden="true">Personal
                            Loans</a></li>
                    <li><a href="#"><img src="assets/stock-ticker.svg" alt="stock" aria-hidden="true">Superannuation</a>
                    </li>
                    <li><a href="personal-home-loan.php"><img src="assets/house.svg" alt="house" aria-hidden="true">Home
                            Loans</a></li>
                    <li><a href="#"><img src="assets/insurance-protection-safety.svg" alt="insurance"
                                aria-hidden="true">Insurance</a></li>
                    <li><a href="#"><img src="assets/corporate.svg" alt="corporate" aria-hidden="true">Corporate
                            Services</a></li>
                </ul>
            </section>
        </div>
        <!-- Protecting your funds -->
        <section id="protectingFunds">
            <div class="container">
                <div>
                    <h2>Protecting your funds</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros vel
                        malesuada.
                        Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare justo, auctor
                        efficitur
                        turpis nibh pulvinar lorem. Morbi vitae sapien sit amet turpis facilisis sagittis feugiat
                        molestie
                        tortor. </p>
                </div>
                <div>
                    <button class="btnBlack">View Current Scams</button>
                    <button class="btnBlack">How we can protect you</button>
                </div>
            </div>

        </section>
        <!-- Popular banking and insurance solutions -->
        <div class="containerGold">
            <section class="popSolutions">
                <h2>Popular Banking Solutions</h2>
                <div class="cardArea">
                    <a href="personal-home-loan.php">
                        <div class="card">
                            <div class="cardImg">
                                <picture>
                                    <source srcset="img/couple-moving-700.jpg" media="(min-width: 500px)">
                                    <img src="img/couple-moving-350.jpg" alt="Clean lounge room area">
                                </picture>
                            </div>
                            <div class="cardText">
                                <h3>First Home Loans</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros
                                    vel
                                    malesuada. Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare
                                    justo, auctor efficitur turpis nibh pulvinar lorem.</p>
                            </div>
                        </div>
                    </a>
                    <a href="personal-loans.php">
                        <div class="card">
                            <div class="cardImg">
                                <picture>
                                    <source srcset="img/girl-holiday-party-700.jpg" media="(min-width: 500px)">
                                    <img src="img/girl-holiday-party-350.jpg" alt="Girl on holiday at party">
                                </picture>
                            </div>
                            <div class="cardText">
                                <h3>Personal Loans</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros
                                    vel
                                    malesuada. Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare
                                    justo, auctor efficitur turpis nibh pulvinar lorem.</p>
                            </div>
                        </div>
                    </a>
                    <a href="business-loan.php">
                        <div class="card">
                            <div class="cardImg">
                                <picture>
                                    <source srcset="img/contruction-meeting-700.jpg" media="(min-width: 500px)">
                                    <img src="img/contruction-meeting-350.jpg"
                                        alt="Group viewing plans and construction site.">
                                </picture>
                            </div>
                            <div class="cardText">
                                <h3>Business Loans</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros
                                    vel
                                    malesuada. Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare
                                    justo, auctor efficitur turpis nibh pulvinar lorem.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            <section class="popSolutions">
                <h2>Popular Insurance Solutions</h2>
                <div class="cardArea">
                    <a href="#">
                        <div class="card">
                            <div class="cardImg">
                                <picture>
                                    <source srcset="img/house-contents-700.jpg" media="(min-width: 500px)">
                                    <img src="img/house-contents-350.jpg" alt="Lounge room with sofa and side table">
                                </picture>
                            </div>
                            <div class="cardText">
                                <h3>Home and Contents Insurance</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros
                                    vel
                                    malesuada. Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare
                                    justo, auctor efficitur turpis nibh pulvinar lorem.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="card">
                            <div class="cardImg">
                                <picture>
                                    <source srcset="img/women-with-pets-700.jpg" media="(min-width: 500px)">
                                    <img src="img/women-with-pets-350.jpg" alt="Woman playing with pet dogs">
                                </picture>
                            </div>
                            <div class="cardText">
                                <h3>Pet Insurance</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros
                                    vel
                                    malesuada. Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare
                                    justo, auctor efficitur turpis nibh pulvinar lorem.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="card">
                            <div class="cardImg">
                                <picture>
                                    <source srcset="img/woman-holiday-700.jpg" media="(min-width: 500px)">
                                    <img src="img/woman-holiday-350.jpg" alt="Woman sitting on car on holiday at beach">
                                </picture>
                            </div>
                            <div class="cardText">
                                <h3>Travel Insurance</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra iaculis eros
                                    vel
                                    malesuada. Sed tristique, elit pellentesque sodales sollicitudin, risus ipsum ornare
                                    justo, auctor efficitur turpis nibh pulvinar lorem.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>
        <!-- Oz Banking Calculators -->
        <section id="calculatorSelection">
            <div class="container">
                <h2>Oz banking calculators</h2>
                <div class="flexLayout">
                    <a href="calculator-home-loan.php">
                        <img src="assets/house.svg" alt="Icon of a house">
                        <p>Home Loan - Borrow and Repayment</p>
                    </a>

                </div>
                <div class="flexLayout">
                    <a href="calculator-personal-loan.php">
                        <img src="assets/travel.svg" alt="Icon of a plane">
                        <p>Personal Loan - Borrow and Repayment</p>
                    </a>

                </div>
                <div class="flexLayout">
                    <a href="#">
                        <img src="assets/coins.svg" alt="Icon of a coins">
                        <p>Savings Calculator</p>
                    </a>

                </div>
            </div>

        </section>
        <!-- Ways we can help -->
        <section id="wayToHelp">
            <div class="centerBound">
                <h2>Ways we can help</h2>
                <div class="containerArea">
                    <div class="cardContainer">
                        <div class="card">
                            <h3>Online Banking Support</h3>
                            <div class="cardContent">
                                <p>Discover and learn about online banking.</p>
                                <div>
                                    <a href="#">
                                        <img src="assets/monitor.svg" alt="Monitor for videos" aria-hidden="true">
                                        Video demonstrations</a>
                                    <a href="#">
                                        <img src="assets/customer-service-headphones.svg" alt="Customer services worker"
                                            aria-hidden="true">
                                        Customer Service Support</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="cardContainer">
                        <div class="card">
                            <h3>Application Banking</h3>
                            <div class="cardContent">
                                <p>Application for both iPhone and Android mobile devices.</p>
                                <div>
                                    <a href="#"><img class="downloadApps" src="assets/download-apple.png"
                                            alt="Download Apple App"></a>
                                    <a href="#"><img class="downloadApps" src="assets/download-android.png"
                                            alt="Download Android App"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="cardContainer">
                        <div class="card">
                            <h3>Hardship Support</h3>
                            <div class="cardContent">
                                <p>Discover and learn about online banking.</p>
                                <div>
                                    <a href="#">
                                        <img src="assets/receiving-money.svg" alt="Given money for help"
                                            aria-hidden="true">
                                        Cost of living support</a>
                                    <a href="#">
                                        <img src="assets/support.svg" alt="Recieving financial support"
                                            aria-hidden="true">
                                        Emergency assistance</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="importantInfo">
            <div class="containerMax">
                <h2>Important Information</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere fermentum tortor. Suspendisse
                    commodo eu ante eget condimentum. Mauris ut rhoncus ipsum, at semper dui. Ut vitae sagittis augue.
                    Vestibulum pretium porttitor metus id tempor. Nam id arcu et lectus viverra laoreet. Curabitur sed
                    laoreet mauris. Nam in laoreet eros. Sed facilisis aliquam bibendum. Praesent nec orci eget mi
                    mattis
                    auctor sit amet ut ipsum. Maecenas quis neque a lorem ullamcorper maximus sed at leo. Aenean
                    imperdiet
                    lectus eu nulla auctor, sed cursus dolor finibus.</p>
                <br>
                <p>Nulla sapien velit, mollis eu urna quis, consequat pharetra erat. Aenean rutrum dignissim molestie.
                    Fusce in justo imperdiet, tristique sem eu, posuere lorem. Nullam porta mauris vitae est auctor,
                    vitae
                    luctus nibh mattis. Nulla quis libero at ligula lacinia lacinia.</p>
                <br>
                <p>Cras in neque arcu. Maecenas id ligula consequat, convallis est eu, rhoncus sapien. Quisque sit amet
                    aliquam mi. Nullam tristique est quis felis tristique laoreet. Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit. Morbi orci ligula, posuere in rutrum eget, vestibulum quis eros. Integer aliquam
                    felis
                    ac rutrum posuere. Suspendisse commodo auctor justo, sed laoreet tortor dapibus quis. Pellentesque
                    habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur id est
                    ornare, sollicitudin neque nec, tempor est.</p>
            </div>

        </section>
    </main>
    <footer>
        <?php include 'html/footer.html'; ?>
    </footer>
</body>

</html>