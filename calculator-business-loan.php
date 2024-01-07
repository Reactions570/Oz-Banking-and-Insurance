<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Loan Calculator | Oz Banking and Insurance</title>
    <meta name="description"
        content="Estimate your home loan payments with our user-friendly home loan calculator. Input your loan amount, interest rate, and loan term to get instant insights into your monthly payments. Plan your budget effectively and make informed decisions about your home financing using our convenient online calculator.">
    <meta name="keywords"
        content="Home loan calculator, Mortgage calculator, Loan payment estimator, Loan affordability calculator, Monthly mortgage calculator">
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
    <script async src="js/calculator-personal.js"></script>
</head>

<body>
    <header>
        <?php include 'html/header.html'; ?>
    </header>
    <main id="calculator">
        <!-- Main Content -->
        <div class="centerBound">
            <!-- Your details -->
            <div class="bgGold">
                <h1>Borrow and repayment calculator</h1>
                <form id="calForm" action="" method="get">
                    <div class="layoutRow">
                        <h2>About you</h2>
                        <div class="inputArea">
                            <div class="inputContainer">
                                <label for="numDependants">Number of dependants</label>
                                <select name="numDependants" id="numDependants">
                                    <option value="1">None</option>
                                    <option value="2">One</option>
                                    <option value="3">Two</option>
                                    <option value="4">Three</option>
                                    <option value="5">Four</option>
                                    <option value="6">Five</option>
                                </select>
                            </div>
                            <div class="inputContainer">
                                <label for="frequency">Repayment Frequency</label>
                                <select name="frequency" id="frequency">
                                    <option value="1">Weekly</option>
                                    <option value="2">Fortnightly</option>
                                    <option value="3">Monthly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="layoutRow">
                        <h2>Weekly Income Amount</h2>
                        <div class="inputArea">
                            <div class="inputContainer">
                                <label for="incCom">Combined Income Amount</label>
                                <input type="number" id="incCom" min="0" value="0" name="incomeCombined">
                            </div>
                            <p>or</p>
                            <div class="inputContainer">
                                <label for="incApp1">Applicant 1</label>
                                <input type="number" id="incApp1" min="0" value="0" name="incomeApplicant1">
                            </div>
                            <div class="inputContainer">
                                <label for="incApp2">Applicant 2</label>
                                <input type="number" id="incApp2" min="0" value="0" name="incomeApplicant2">
                            </div>
                            <div class="inputContainer">
                                <label for="incApp3">Applicant 3</label>
                                <input type="number" id="incApp3" min="0" value="0" name="incomeApplicant3">
                            </div>
                        </div>
                    </div>
                    <div class="layoutRow">
                        <input type="submit" name="submit" id="submit" value="calculate">
                    </div>
                </form>

            </div>
            <div class="bgPureWhite">
                <h1>Your Estimate</h1>
                <div class="layoutRow">
                    <h2>Estimate Borrowing Price</h2>
                    <p>Price is a maximum potential borrowing power</p>
                    <h2 id="estPrice">$ -</h2>
                </div>
                <div class="layoutRow">
                    <h2>Estimated Repayment</h2>
                    <div class="layoutGrid">
                        <p class="estQ">Interest Rate</p>
                        <p id="estIntRate" class="estA">21.54% p.a.</p>
                        <p class="estQ" id="frequencyName">Monthly Repayment</p>
                        <p id="estRepayment" class="estA">-</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- General Product Information Area -->
        <div class="centerBound">
            <div id="generalProductInfo" class="accordion">
                <!-- Important Information -->
                <h3>
                    <span>
                        <svg class="arrow" width="30" height="30" viewBox="0 0 30 30" fill="none" aria-hidden="true">
                            <path d="M11.25 5L20.625 14.375L11.25 23.75" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                    Important Information
                </h3>
                <div id="genImportInfo" class="genProductInfoContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere fermentum tortor.
                        Suspendisse commodo eu ante eget condimentum. Mauris ut rhoncus ipsum, at semper dui. Ut vitae
                        sagittis augue. Vestibulum pretium porttitor metus id tempor. Nam id arcu et lectus viverra
                        laoreet. Curabitur sed laoreet mauris. Nam in laoreet eros. Sed facilisis aliquam bibendum.
                        Praesent nec orci eget mi mattis auctor sit amet ut ipsum. Maecenas quis neque a lorem
                        ullamcorper maximus sed at leo. Aenean imperdiet lectus eu nulla auctor, sed cursus dolor
                        finibus.</p>
                    <p>Nulla sapien velit, mollis eu urna quis, consequat pharetra erat. Aenean rutrum dignissim
                        molestie. Fusce in justo imperdiet, tristique sem eu, posuere lorem. Nullam porta mauris vitae
                        est auctor, vitae luctus nibh mattis. Nulla quis libero at ligula lacinia lacinia. </p>
                    <p>Cras in neque arcu. Maecenas id ligula consequat, convallis est eu, rhoncus sapien. Quisque sit
                        amet aliquam mi. Nullam tristique est quis felis tristique laoreet. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Morbi orci ligula, posuere in rutrum eget, vestibulum quis eros.
                        Integer aliquam felis ac rutrum posuere. Suspendisse commodo auctor justo, sed laoreet tortor
                        dapibus quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas. Curabitur id est ornare, sollicitudin neque nec, tempor est.</p>
                    <div id="formsLinks">
                        <h3>Forms and links</h3>
                        <ul>
                            <li><a href="#">Oz Bank Terms and Conditions</a></li>
                            <li><a href="#">Personal banking fees (PDF, 150KB)</a></li>
                        </ul>


                    </div>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'html/footer.html'; ?>
    </footer>
</body>

</html>