/*
 Bones Scripts File
 Author: Eddie Machado

 This file should contain any js scripts you want to add to the site.
 Instead of calling it in the header or throwing it inside wp_head()
 this file will be called automatically in the footer so as not to
 slow the page load.

 */

// Whole-script strict mode syntax
"use strict";

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function (el, pseudo) {
        this.el = el;
        this.getPropertyValue = function (prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function ($) {

    $('body').fitVids();
    $('input, textarea').placeholder();

    /*
     Responsive jQuery is a tricky thing.
     There's a bunch of different ways to handle
     it, so be sure to research and find the one
     that works for you best.
     */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {

    }
    /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {

    }
    /* end larger than 481px */

    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function () {
            $(this).attr('src', $(this).attr('data-gravatar'));
        });

    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    }


    // ADD CUSTOM SCRIPTS HERE

    /* Handle empty <p> elements in IE8 */
    $('.lt-ie9 p:empty').addClass('empty-element');

    /* Remove the crummy pseudo-placeholder behavior on the Jetpack Subscribe widget */
    $('.jetpack_subscription_widget input#subscribe-field').removeAttr('onblur').removeAttr('onclick').val('').attr('placeholder', 'Email Address');

    /* Browser Detection */
    function setupBrowserCheck() {
        //if IE touch support
        var $html = jQuery('html');
        if ($html.hasClass('no-touch') &&
            jQuery.browser.msie &&
            ('onmsgesturechange' in window)) {
            $html.removeClass('no-touch');
            $html.addClass('touch');
        }

        var os = (function () {
            var ua = navigator.userAgent.toLowerCase();
            return {
                isWin2K:/windows nt 5.0/.test(ua),
                isXP:/windows nt 5.1/.test(ua),
                isVista:/windows nt 6.0/.test(ua),
                isWin7:/windows nt 6.1/.test(ua),
                isMac:/macintosh/.test(ua)
            };
        }());

        if (jQuery.browser.mozilla) jQuery('html').addClass('mozilla');
        if (jQuery.browser.msie) {
            jQuery('html').addClass('msie');
            if (jQuery.browser.version == '8.0') {
                jQuery('html').addClass('ie8');
            } else if (jQuery.browser.version == '9.0') {
                jQuery('html').addClass('ie9');
            } else if (jQuery.browser.version == '10.0') {
                jQuery('html').addClass('ie10');
            }
        }
        if (jQuery.browser.webkit) jQuery('html').addClass('webkit');
        if (os.isWin7 || os.isVista || os.isXP || os.isWin2K) {
            jQuery('html').addClass('ms-windows');
        } else if (os.isMac) {
            jQuery('html').addClass('macintosh');
        }

        // Code to differentiate between Safari and Chrome
        var userAgent = navigator.userAgent.toLowerCase();
        jQuery.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());
        // Is this a version of Chrome?
        if (jQuery.browser.chrome) {
            userAgent = userAgent.substring(userAgent.indexOf('chrome/') + 7);
            userAgent = userAgent.substring(0, userAgent.indexOf('.'));
            jQuery.browser.version = userAgent;
            // If it is chrome then jQuery thinks it's safari so we have to tell it it isn't
            jQuery.browser.safari = false;
            jQuery('html').addClass('chrome');
        }
        // Is this a version of Safari?
        if (jQuery.browser.safari) {
            userAgent = userAgent.substring(userAgent.indexOf('safari/') + 7);
            userAgent = userAgent.substring(0, userAgent.indexOf('.'));
            jQuery.browser.version = userAgent;
            jQuery('html').addClass('safari');
        }
    }
    setupBrowserCheck();

});
/* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
 */
(function (w) {
    // This fix addresses an iOS bug, so return early if the UA claims it's something else.
    if (!( /iPhone|iPad|iPod/.test(navigator.platform) && navigator.userAgent.indexOf("AppleWebKit") > -1 )) {
        return;
    }
    var doc = w.document;
    if (!doc.querySelector) {
        return;
    }
    var meta = doc.querySelector("meta[name=viewport]"),
        initialContent = meta && meta.getAttribute("content"),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
        x, y, z, aig;
    if (!meta) {
        return;
    }
    function restoreZoom() {
        meta.setAttribute("content", enabledZoom);
        enabled = true;
    }

    function disableZoom() {
        meta.setAttribute("content", disabledZoom);
        enabled = false;
    }

    function checkTilt(e) {
        aig = e.accelerationIncludingGravity;
        x = Math.abs(aig.x);
        y = Math.abs(aig.y);
        z = Math.abs(aig.z);
        // If portrait orientation and in one of the danger zones
        if (!w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) )) {
            if (enabled) {
                disableZoom();
            }
        }
        else if (!enabled) {
            restoreZoom();
        }
    }

    w.addEventListener("orientationchange", restoreZoom, false);
    w.addEventListener("devicemotion", checkTilt, false);
})(this);