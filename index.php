<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader_6146b8e5563eda1c6eac86cbbc7f1e24.php';

$campaign_id = 'gc302r';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>

<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='https://static.tacdn.com/css2/build/concat/long_lived_global_legacy-v2850505690a.css' data-rup='long_lived_global_legacy'/>
<link rel="icon" id="favicon" href="https://static.tacdn.com/favicon.ico" type="image/x-icon"/>
<link rel="preload" href="https://static.tacdn.com/css2/webfonts/TripAdvisor/TripAdvisor_Regular.woff2?v004.001" as="font" type="font/woff2" crossorigin>
<link rel="mask-icon" sizes="any" href="https://static.tacdn.com/img2/icons/ta_square.svg" color="#00a680"/>
<script type='text/javascript' data-rup='global_error'>!function(){function e(e){return"object"==typeof e&&"WARN"===e.level?"WARN":"ERROR"}function r(r,n,o,i,a,c){var d={error_script:n,line:o,column:i,ready_state:document.readyState};return s?(require.defined("ta/util/Error")&&require("ta/util/Error").record(a,"error post load:: "+r,c,d,e(a),{isglobal:!0}),void t(r,a,"ErrorGlobal",!0)):(g.push({msg:r||"",error:a,evt:c,data:d}),!window.IS_DEBUG)}function t(e,r,n,o){if(require.defined("@ta/sentryBridge")){var i=require("@ta/sentryBridge");if(i)if(e&&!r){var a=new Error("Unknown jQuery Error Event"),c=JSON.stringify(e);c.length>200&&(c=c.substring(0,Math.min(c.length,200))+"..."),i.withScope(function(e){e.setTag("logger",n),e.setExtra("jQueryEvent",c),i.captureException(a)})}else i.withScope(function(e){e.setTag("logger",n),i.captureException(r)})}else o&&setTimeout(function(){t(e,r,n,!1)},1e4)}function n(){require(["ta/util/Error"],function(r){for(;g.length;){var n=g.shift();n.msg.match(/(^|[^\w.])ta .*defin/)||(r.record(n.error,"window.onerror:: "+n.msg,n.evt,n.data,e(n.error),{isglobal:!0}),t(n.msg,n.error,"PageLoad",!0))}s=!0})}function o(){l=null,E=!1,d=u=null}function i(e,t,n,i,a,c){var f=c&&c.target;if(E){if((!d||a&&a.stack)&&(d=a),!w)try{w=arguments.callee}catch(e){}l?f=l:(!f||u&&f==window)&&(f=u),r(e,t,n,i,d,{target:f,callee:w}),o()}else{d=a,E=!0,u=f;try{w=arguments.callee}catch(e){}}}function a(e){e=e||window.event,i(e.message,e.filename,e.lineno,e.colno,e.error||e,e)}function c(e){e=e||window.event,l=e.target||e.srcElement,f&&clearTimeout(f),f=setTimeout(function(){f=0,l=null},1)}var d,u,l,w,f,s=!1,g=[],E=!1;window.__scriptLoadError=function(e,r){if(e instanceof HTMLScriptElement){var t=e.getAttribute("data-rup");if(t){r&&window.define&&window.define(t,[],function(){return{}});var n=new Error("Error loading script tag for: "+t);throw n.level="WARN",n}}},window.onerror=function(e,r,t,n,o){return i(e,r,t,n,o,window.event),!window.IS_DEBUG},window.addEventListener?(window.addEventListener("error",a,!1),window.addEventListener("click",c,!0),window.addEventListener("load",n)):window.attachEvent&&(window.attachEvent("onerror",a),document.attachEvent("onmouseup",c),window.attachEvent("onload",n))}();
!function(){var e,n,t=0,a=5e3;window.uiOverlay=function(l){if(document.readyState in{complete:1,loaded:1}){var i=arguments;require(["trjs!overlays/uiOverlay"],function(e){e.apply(null,i)})}else document.addEventListener&&(e=[].slice.call(arguments),t=(new Date).getTime(),n||(n=!0,document.addEventListener("DOMContentLoaded",function(){Date.now()-t<a&&uiOverlay.apply(null,e)},!1)))}}();
</script>
<script type='text/javascript'>
window.taRollupsAreAsync = true;
</script>
<script>(function(w){
var q={d:[],r:[],c:[],t:[],v:[]};
var r = w.require = function() {q.r.push(arguments);};
r.config = function() {q.c.push(arguments);};
r.defined = r.specified = function() {return false;};
r.taConfig = function() {q.t.push(arguments);};
r.taVer = function(v) {q.v.push(v);};
r.isQ=true;
w.getRequireJSQueue = function() {return q;};
})(window);
</script>
<script type='text/javascript' data-rup='amdearly'>!function(e){function t(e){return"function"==typeof require&&require.defined&&require.defined(e)}function n(e,t,n){t?e[t].apply(e,n):"function"==typeof e&&e.apply(e,n)}function r(){if(u=!0,require.isQ)throw"Fatal error - this page does not have require";if(e.getRequireJSQueue){for(var t=e.getRequireJSQueue();t.d.length>0;)define.apply(e,t.d.shift());for(;t.r.length>0;)require.apply(e,t.r.shift());e.getRequireJSQueue=null}l&&+new Date-i<5e3&&a.apply(e,l)}if(!e||!e.requireCallLast){var l,i,u=!1,a=e.requireCallLast=function(e,r){l=null;var a=[].slice.call(arguments,2);t(e)?n(require(e),r,a):t("trjs")?require(["trjs!"+e],function(e){n(e,r,a)}):u||(i=+new Date,l=[].slice.call(arguments))},c=e.requireCallIfReady=function(n){t(n)&&a.apply(e,arguments)},o=function(t,n,r,l){var i=c;return!r||"click"!==r.type&&"submit"!==r.type||(i=a,r.preventDefault&&r.preventDefault()),l.unshift(n),l.unshift(t),i.apply(e,l),!1};e.remoteModule=function(e,t){return o("remoteModule",null,e,[].slice.call(arguments))},e.requireEvCall=function(e,t,n,r){return e=e.match(/^((?:[^\/]+\/)*[^\/\.]+)\.([^\/]*)?$/),o(e[1],e[2],t,[].slice.call(arguments,1))},e.widgetEvCall=function(e,t,n,r){return o("ta/prwidgets","call",t,[].slice.call(arguments))},e.placementEvCall=function(e,t,n,r,l){return o("ta/p13n/placements","evCall",n,[].slice.call(arguments))},document.addEventListener?document.addEventListener("DOMContentLoaded",r):e.addEventListener?e.addEventListener("load",r):e.attachEvent&&e.attachEvent("onload",r)}}(window);
</script>
<meta http-equiv="imagetoolbar" content="no"/>
<title> THE 10 BEST Fun Activities &amp; Games in Luxembourg Province - TripAdvisor </title>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="cache-control" content="no-cache,must-revalidate"/>
<meta http-equiv="expires" content="0"/>
<meta property="og:title" content="THE 10 BEST Fun Activities &amp; Games in Luxembourg Province - TripAdvisor"/>
<meta property="og:description" content="Top Luxembourg Province Fun Activities &amp; Games: See reviews and photos of fun activities &amp; games in Luxembourg Province, Belgium on TripAdvisor."/>
<meta property="og:image" content="https://media-cdn.tripadvisor.com/media/photo-s/01/78/61/7a/durbuy.jpg"/>
<meta property="og:image:width" content="550"/>
<meta property="og:image:height" content="412"/>
<script type="text/javascript">
(function () {
if (typeof console == "undefined") console = {};
var funcs = ["log", "error", "warn"];
for (var i = 0; i < funcs.length; i++) {
if (console[funcs[i]] == undefined) {
console[funcs[i]] = function () {};
}
}
})();
var pageInit = new Date();
var hideOnLoad = new Array();
var WINDOW_EVENT_OBJ = window.Event;
var IS_DEBUG = false;
var CDNHOST = "https://static.tacdn.com";
var cdnHost = CDNHOST;
var MEDIA_HTTP_BASE = "https://media-cdn.tripadvisor.com/media/";
var POINT_OF_SALE = "en_US";
if (typeof DUST_GLOBAL === 'undefined') {
var DUST_GLOBAL = {"IS_IELE8":false,"LOCALE":"en_US","IS_IE10":false,"CDN_HOST":"https://static.tacdn.com","DEVICE":"desktop","IS_RTL":false,"LANG":"en","DEBUG":false,"READ_ONLY":false,"POS_COUNTRY":191};
}
</script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/jquery-c-v2864359163a.js' data-rup='jquery'></script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/mootools-c-v23928644364a.js' data-rup='mootools'></script>
<script type="text/javascript">
var jsGlobalMonths =     new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var jsGlobalMonthsAbbrev =     new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
var jsGlobalDayMonthYearAbbrev =     new Array("{0} Jan {1}","{0} Feb {1}","{0} Mar {1}","{0} Apr {1}","{0} May {1}","{0} Jun {1}","{0} Jul {1}","{0} Aug {1}","{0} Sep {1}","{0} Oct {1}","{0} Nov {1}","{0} Dec {1}");
var jsGlobalDaysAbbrev =     new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
var jsGlobalDaysShort =     new Array("S","M","T","W","T","F","S");
var jsGlobalDaysFull =     new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var sInvalidDates = "The dates you entered are invalid. Please correct your dates and search again.";
var sSelectDeparture = "Please select a departure airport.";
var DATE_FORMAT_MMM_YYYY = "MMM YYYY";
var DATE_PICKER_CLASSIC_FORMAT = "MM/dd/yyyy";
var DATE_PICKER_SHORT_FORMAT = "MM/dd";
var DATE_PICKER_META_FORMAT = "EEE, MMM d";
var DATE_PICKER_DAY_AND_SLASHES_FORMAT = "EEE MM/dd/yyyy";
var jsGlobalDayOffset = 1 - 1;
var DATE_FORMAT = { pattern: /(\d{1,2})\/(\d{1,2})\/(\d{2,4})/, month: 1, date: 2, year: 3 };
var formatDate = function(d, m, y) {return [++m,d,y].join("/");};
var cal_month_header = function(month, year) {return cal_months[month]+"&nbsp;"+year;};
</script>
<script type="text/javascript">
var currencySymbol = new Array();
var cur_prefix = false;
var cur_postfix = true;
var curs=[,'CHF','SEK','TRY','DKK','NOK','PLN','AED','AFN','ALL','AMD','ANG','AOA','ARS','AWG','AZN','BAM','BBD','BDT','BGN','BHD','BIF','BMD','BND','BOB','BSD','BTN','BWP','BYR','BZD','CDF','CLP','COP','CRC','CVE','CZK','DJF','DOP','DZD','EGP','ERN','ETB','FJD','FKP','GEL','GHS','GIP','GMD','GNF','GTQ','GYD','HNL','HRK','HTG','HUF','IDR','IQD','IRR','ISK','JMD','JOD','KES','KGS','KHR','KMF','KWD','KYD','KZT','LAK','LBP','LKR','LRD','LSL','LYD','MAD','MDL','MGA','MKD','MNT','MOP','MRO','MUR','MVR','MWK','MYR','MZN','NAD','NGN','NIO','NPR','OMR','PAB','PEN','PGK','PHP','PKR','PYG','QAR','RON','RSD','RUB','RWF','SAR','SBD','SCR','SGD','SHP','SLL','SOS','SRD','STD','SZL','THB','TJS','TMT','TND','TOP','TTD','TZS','UAH','UGX','UYU','UZS','VEF','VUV','WST','YER','ZAR','CUP','KPW','MMK','SDG','SYP'];
for(var i=1;i<curs.length;i++){currencySymbol[curs[i]]=new Array(curs[i],true);}
var curs = [,'USD','GBP','EUR','CAD','AUD','JPY','RMB','INR','BRL','MXN','TWD','HKD','ILS','KRW','NZD','VND','XAF','XCD','XOF','XPF']
var curs2 = [,'$','£','€','CA$','A$','¥','CN¥','₹','R$','MX$','NT$','HK$','₪','₩','NZ$','₫','FCFA','EC$','CFA','CFPF']
for(var i=1;i<curs.length;i++){currencySymbol[curs[i]]=new Array(curs2[i],true);}
var groupingSize = 3;
var groupingSeparator = ",";
var JS_location_not_found = "Your location not found.";
var JS_click_to_expand = "Click to Expand";
var JS_choose_valid_city = "Please choose a valid city from the list.";
var JS_select_a_cruise_line = "Please select a cruise line.";
var JS_loading = "Loading ...";
var JS_Ajax_failed="We're sorry, but there was a problem retrieving the content. Please check back in a few minutes.";
var JS_maintenance="Our site is currently undergoing maintenance.\n\nWe\'re sorry for the inconvenience...we\'ll be back soon.";
var JS_Stop_search = "stop search";
var JS_Resume_search = "Resume search";
var JS_Thankyou = "Thank you";
var JS_DateFormat = "mm/dd/yyyy";
var JS_review_lost = "Your review will be lost.";
var JS_coppa_sorry = "We're sorry....";
var JS_coppa_privacy = "Based on information you submitted, your TripAdvisor account does not meet the requirements of our <a href='/pages/privacy.html'>Privacy Policy</a>.";
var JS_coppa_deleted = "Your account has been deleted.";
var JS_close = "Close";
var JS_close_image = "https://static.tacdn.com/img2/buttons/closeButton.gif";
var JS_CHANGES_SAVED = "Changes saved";
var JS_community_on = "Community has been enabled";
var lang_Close = JS_close;
var JS_UpdatingYourResults = "Updating your results &#8230;";
var JS_OwnerPhoto_heading = "Thank you for submitting your request to TripAdvisor. ";
var JS_OwnerPhoto_subheading = "We process most listings and changes within 5 business days. ";
var JS_OwnerPhoto_more = "Add more photos to your listing";
var JS_OwnerPhoto_return = "Return to your Owner’s Center";
var JS_NMN_Timeout_title = "Do you want to keep trying?";
var JS_NMN_Timeout_msg = "It is taking longer than expected to get your location.";
var JS_NMN_Error_title = "Location error";
var JS_NMN_Error_msg   = "There has been an error in trying to determine your location";
var JS_KeepTrying = "Keep Trying";
var JS_TryAgain   = "Try Again";
var js_0001 = "Please select at least one vendor from the list."; var js_0002 = "Please choose dates in the future."; var js_0003 = "Please choose a check-out date that is at least one day later than your check-in date."; var js_0004 = "Please choose dates that are less than 330 days away.";   var js_0005 = "Searching for deals ... this may take a few moments"; var js_0006 = "Your selections have not changed."; var js_0010 = "Please click again to open each window or adjust browser settings to disable popup blockers."; var js_0011 = "Update"; var js_0012 = "Show next offer"; var js_0013 = "Please click the \"Check Rates!\" button above to open each window."; var js_0014 = 'Opens one window for each offer. Please disable pop-up blockers.';
var js_0015 = 'Compare prices';
var js_invalid_dates_text = "The dates entered are invalid. Please correct your dates and search again."; var js_invalid_dates_text_new = "Please enter dates to check rates"; var js_invalid_dates_text_new2 = "Please enter dates to show prices";
var qcErrorImage = '<center><img src="https://static.tacdn.com/img/action_required_blinking.gif" /></center>';
var selectedHotelName = ""; var cr_loc_vend = 'https://static.tacdn.com/img2/checkrates/cr.gif';
var cr_loc_vend_ch = 'https://static.tacdn.com/img2/checkrates/cr_check.gif';
var cr_loc_logo = 'https://static.tacdn.com/img2/checkrates/logo.gif';
var cd_loc_vend = 'https://static.tacdn.com/img2/checkrates/cd.png';
var cd_loc_vend_ch = 'https://static.tacdn.com/img2/checkrates/cd_check.png';
var JS_Any_Date = "Any Date";
var JS_Update_List = "Update List";
var sNexusTitleMissing = "The title must be populated";
var JS_Challenge="Challenge";
var JS_TIQ_Level="Level";
var JS_TIQ="Travel IQ";
var JS_TIQ_Pts="pts";
var RATING_STRINGS = [
"Click to rate",
"Terrible",
"Poor",
"Average",
"Very Good",
"Excellent"
];
var overlayLightbox = false;
if("" != "")
{
overlayLightbox = true;
}
var isTakeOver = false;
var overlayOptions = "";
var overlayBackupLoc = "";
var gmapDomain = "maps.google.com";
var mapChannel = "ta.desktop.attractions";
var bingMapsLang = "en".toLowerCase();
var bingMapsCountry = "US".toLowerCase();
var bingMapsBaseUrl = "http://www.bing.com/maps/default.aspx?cc=us&";
var googleMapsBaseUrl = "http://maps.google.com/?";
var yandexMapsBaseUrl = "http://maps.yandex.com";
var serverPool = "B";
var posLocale = "en_US";
var cssPhotoViewerAsset = "https://static.tacdn.com/css2/build/concat/photos_with_inline_review-v22366763776a.css";
var cssAlbumViewerExtendedAsset = "https://static.tacdn.com/css2/build/concat/media_albums_extended-v2192791042a.css";
var jsPhotoViewerAsset = 'https://static.tacdn.com/js3/src/ta/photos/Viewer-v23776172971a.js';
var jsAlbumViewerAsset = ["https://static.tacdn.com/js3/build/concat/album_viewer-c-v21720198776a.js"];
var jsAlbumViewerExtendedAsset = ["https://static.tacdn.com/js3/build/concat/media_albums_extended-c-v23515875029a.js"];
var cssInlinePhotosTabAsset = "https://static.tacdn.com/css2/build/concat/photo_albums_stacked-v24123383951a.css";
var cssPhotoLightboxAsset = "https://static.tacdn.com/css2/build/concat/photo_albums-v2231729968a.css";
var jsDesktopBackboneAsset = ["https://static.tacdn.com/js3/build/concat/desktop_modules_modbone-c-v22880201494a.js"];
var jsPhotoViewerTALSOAsset = 'https://static.tacdn.com/js3/src/TALSO-v21232481152a.js';
</script>
<script type="text/javascript">
var VERSION_MAP = {
"ta-maps.js": "https://static.tacdn.com/js3/build/concat/ta-maps-gmaps3-c-v21692313372a.js"
,
"ta-widgets-typeahead.js": "https://static.tacdn.com/js3/build/concat/ta-widgets-typeahead-c-v23082375902a.js"
,
"ta-media.js": "https://static.tacdn.com/js3/build/concat/ta-media-c-v21555091364a.js"
,
"ta-overlays.js": "https://static.tacdn.com/js3/build/concat/ta-overlays-c-v2470769182a.js"
,
"ta-registration-RegOverlay.js": "https://static.tacdn.com/js3/build/concat/ta-registration-RegOverlay-c-v24194657438a.js"
,
"ta-mapsv2.js": "https://static.tacdn.com/js3/build/concat/ta-mapsv2-gmaps3-c-v22458777926a.js"
};
</script>
<script type="text/javascript">
var cookieDomain = ".tripadvisor.com";
var modelLocaleCountry = "US";
var ipCountryId = "294473";
var pageServlet = "Attractions";
var crPageServlet = "Attractions";
var userLoggedIn = false;
</script>
<script type="text/javascript">
var migrationMember = false;
var savesEnable = false;
var flagsUrl = '/Attractions-g188657-Activities-c56-Luxembourg_Province_The_Ardennes_Wallonia.html';
var noPopClass = "no_cpu";
var flagsSettings = [
];
var isIPad = false;
var isTabletOnFullSite = false;
var tabletOnFullSite = false;
var lang_Close  = "Close";
var img_loop    = "https://static.tacdn.com/img2/generic/site/loop.gif";
var communityEnabled = true
var footerFlagFormat = "";
var modelLocId = "188657";
var modelGeoId = "188657";
var gClient = 'gme-tripadvisorinc';
var gKey = '';
var gLang = '&language=en_US';
var mapsJs = 'https://static.tacdn.com/js3/build/concat/ta-maps-gmaps3-c-v21692313372a.js';
var mapsJsLite = 'https://static.tacdn.com/js3/lib/TAMap-v22716202300a.js';
var memoverlayCSS = 'https://static.tacdn.com/css2/pages/memberoverlay-v23380050421a.css';
var flagsFlyoutCSS = 'https://static.tacdn.com/css2/build/less/overlays/build/flags/flags_flyout-v22550490311a.css';
var globalCurrencyPickerCSS = 'https://static.tacdn.com/css2/build/less/overlays/build/global_currency_picker-v293409552a.css';
var g_emailHotelCSS = 'https://static.tacdn.com/css2/t4b/emailhotel-v23132220216a.css';
var g_emailHotelJs = ["https://static.tacdn.com/js3/build/concat/t4b_emailhotel-c-v2511184519a.js"];
var passportStampsCSS = 'https://static.tacdn.com/css2/modules/passport_stamps-v21996473260a.css';
var autocompleteCss = "https://static.tacdn.com/css2/modules/autocomplete-v21125419838a.css";
var globalTypeAheadCss = "https://static.tacdn.com/css2/build/concat/global_typeahead-v22345061948a.css";
var globalTypeAheadFontCss = "https://static.tacdn.com/css2/build/concat/proxima_nova-v21162278434a.css";
var wiFriHasMember =  false  ;
var JS_SECURITY_TOKEN = "TNI1625!ALHr9WfauGoUBrpJrVDi+kMpcLsqUPPM7CZWd403q8Q6JZP2uHjl0BQXeqMB7KH7B0anLiLocUtL+96fH+UjUkWdynD7+yR5QjFQvjuFoPT45rFgxcOR6r38hNl5gBoLDsWWXT8oqPA8TL43/ASl0UpHThZqdKrH0u9G3khfHnJI";
var addOverlayCloseClass = "";
var isOverlayServlet = "";
var IS_OVERLAY_DEBUG = "false";
</script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/tripadvisor-c-v2499674320a.js' data-rup='tripadvisor'></script>
<script type="text/javascript">var taSecureToken = "TNI1625!ALHr9WfauGoUBrpJrVDi+kMpcLsqUPPM7CZWd403q8Q6JZP2uHjl0BQXeqMB7KH7B0anLiLocUtL+96fH+UjUkWdynD7+yR5QjFQvjuFoPT45rFgxcOR6r38hNl5gBoLDsWWXT8oqPA8TL43/ASl0UpHThZqdKrH0u9G3khfHnJI";</script>
<script type="text/javascript">
if(window.ta && ta.store) {
ta.store('photo.viewer.localization.videoError', 'We\'re sorry, video player could not load');     }
</script>
<!--trkP:bot_detection-->
<!-- PLACEMENT bot_detection -->
<script type="text/javascript">var taEarlyRoyBattyStatus = 0;var taSecureToken = "TNI1625!ALHr9WfauGoUBrpJrVDi+kMpcLsqUPPM7CZWd403q8Q6JZP2uHjl0BQXeqMB7KH7B0anLiLocUtL+96fH+UjUkWdynD7+yR5QjFQvjuFoPT45rFgxcOR6r38hNl5gBoLDsWWXT8oqPA8TL43/ASl0UpHThZqdKrH0u9G3khfHnJI";(function() {var cookieDomain = ".tripadvisor.com";var sessionPartition = "1";try {val = encodeURIComponent(taSecureToken + "," + sessionPartition);if (cookieDomain) {val += "; domain=" + cookieDomain;}document.cookie = "roybatty="+val+"; path=/";taEarlyRoyBattyStatus = 1; } catch(err) {}})();</script><!--etk-->
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/ta-attractions-narrow-c-v21538338587a.js' data-rup='ta-attractions-narrow'></script>
<script type="text/javascript">
var geoParam = "&geo=188657";
</script>
<link rel='stylesheet' type='text/css' media='screen, print' href='https://static.tacdn.com/css2/build/concat/attraction_overview_clarity-v253752405a.css' data-rup='attraction_overview_clarity'/>
<link rel='stylesheet' type='text/css' media='screen, print' href='https://static.tacdn.com/css2/build/concat/attraction_overview_clarity_responsive_attraction_overview_style-v21279395864a.css' data-rup='attraction_overview_clarity_responsive_attraction_overview_style'/>
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" media="screen, print" href="https://static.tacdn.com/css2/build/concat/winIE6-v23211338030a.css" />
        <![endif]-->
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" media="screen, print" href="https://static.tacdn.com/css2/build/concat/winIE7-v21543589224a.css" />
        <![endif]-->
<script>!function(){if('PerformanceLongTaskTiming' in window){var g=window.__tti={e:[]};g.o=new PerformanceObserver(function(l){g.e=g.e.concat(l.getEntries())});g.o.observe({entryTypes:['longtask']})}}();window.performance&&performance.setResourceTimingBufferSize&&performance.setResourceTimingBufferSize(1000);window.addEventListener('load',function(){window.performance&&performance.mark&&performance.mark('load')},!0);!function(n,e){var t,o,i,c=[],f={passive:!0,capture:!0},r=new Date,a="pointerup",u="pointercancel";function p(n,c){t||(t=c,o=n,i=new Date,w(e),s())}function s(){o>=0&&o<i-r&&(c.forEach(function(n){n(o,t)}),c=[])}function l(t){if(t.cancelable){var o=(t.timeStamp>1e12?new Date:performance.now())-t.timeStamp;"pointerdown"==t.type?function(t,o){function i(){p(t,o),r()}function c(){r()}function r(){e(a,i,f),e(u,c,f)}n(a,i,f),n(u,c,f)}(o,t):p(o,t)}}function w(n){["click","mousedown","keydown","touchstart","pointerdown"].forEach(function(e){n(e,l,f)})}w(n),self.perfMetrics=self.perfMetrics||{},self.perfMetrics.onFirstInputDelay=function(n){c.push(n),s()}}(addEventListener,removeEventListener);</script><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/platform.runtime.e7e9ab5e5c.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/platform.monikers.eccf1a862b.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/core-ui.toast.10039ee993.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/login.auth-gate-lithium.4eefc67f16.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/lithium-common.bb663001be.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/common.webview.dd67304f49.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/common.image-preloader.4b6612bd1c.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/ta-common.e887762988.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/overlays.popover.71723674ee.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/modal.fullscreen.7fa7f6c9a8.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/modal.vanilla.83b151c09d.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/input.drop-zone.a2a1035b2d.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/overlays.pieces.36a3e7fe3d.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/modal.core.e967143f16.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/brand.header.7734417ba7.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-geopill.9bba692d85.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-shopping-cart.238cae47b0.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-inbox.cd3a5cc00e.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-profile.508ed15570.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-search.d298f52543.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.quick-links.33be5ce143.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.mobile-global-nav-content-collect.d62dd58c3d.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav.b96b130d39.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/onboarding.explicit-preferences-entry.599375b53d.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.states.f7ac3bac87.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-search.3ce3a19ad5.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-content-collect.70caa4a2c2.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-trips.f69c1f5d0b.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.geopill-search.1865e2c698.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/search.typeahead.d96b443814.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/brand.trip-search-geopill-flyout.db9b08f25f.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/cpm.590h3aaj2ykycy2oiul.632f504180.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/modal.slide-in.e8398e62b7.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/modal.headers.e98af0d89e.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/public.listing.397032d6fb.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/onboarding.explicit-preferences.b9b5430265.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/cpm.hqwtxyh8w.27bda00e18.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/onboarding.common.8ea4d373ea.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/common.typeahead.4660010722.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/styleguide.skeleton.22aac568bd.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/input.text-input.957ba6eb4c.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.save-to-trip.097749e5b8.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.trip-flow-selector.c3211583ab.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.save-to-trip-btn-hotspot-tooltip.b3b4bb5314.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.save-to-trip-btn-hotspot-poptoast.be4cfc78e8.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.bookmark-icon.85f98d182d.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.trip-toasts.264bc64f13.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/attractions.attractions-socialproof-shelf.4d905a713b.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/media.face-pile.689b753cde.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/social.scroll.0c59c51673.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/styleguide.bubble-rating.715d17688a.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.google-onetap.ab22cef07c.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.ta-twotap.59c05af42a.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.facebook-onetap.1241d2f738.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.home-location-prompt.2a7f8b808c.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.exclusive-content-prompt.a112c9d29b.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.app-download-dialog.6b850ca3f6.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.gating-overlays.38194d5b0f.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.partial-page-prompt.b39477faa0.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.download-app-button.d303f48907.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/cpm.utitar1150yh3xhy9laeaz4g9.98a1c5c722.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.open-in-app-button.f64cd00e2b.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.sign-in-button.c22f39a6f3.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/memx.continue-with-button.07b9f16ac8.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/social.onboarding-controller.92ec88f576.css'/><link rel='stylesheet' type='text/css' href='https://static.tacdn.com/components/dist/@ta/trips.trip-detail-layout.8e8fbe7f5d.css'/>
<style type="text/css">
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget {
position: relative;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: 100%;
padding: 0;
vertical-align: top;
box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget:nth-child(2n) {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .tile:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .tile .thumbCrop {
height: 100%;
position: absolute;
top: 0;
left: 0;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .tile .thumbCrop img {
vertical-align: middle;
object-fit: cover;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .tile .thumbCrop img:hover {
opacity: .9;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .tile .product_details {
float: left;
padding: 10px 12px;
height: 140px;
margin: 0px 160px;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .name_container .product_name {
color: #069;
float: left;
cursor: pointer;
font-size: 1.333333em;
font-weight: bold;
overflow: hidden;
max-height: 36px;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .price {
position: absolute;
right:0;
font-size: 12px;
width: 130px;
height: 140px;
padding: 10px 10px 10px 10px;
border-left: 1px solid #e6e5e0;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .price .from {
text-align: center;
margin: 20px 0 15px 0;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .price .from span {
font-size: 20px;
font-weight: bold;
display: block;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .price .savings {
text-decoration: line-through;
color: #E46715;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .price .savings .strikethruPrice {
font-size: 12px;
font-weight: normal;
color: black;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .product_details .rating_container {
margin-top: 6px;
width: 100%;
min-height: 10px;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .product_details .description {
max-height: 72px;
overflow: hidden;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .rating_container .rating_and_reviews {
float: left;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .rating_and_reviews .rating {
margin-bottom: 6px;
float: left;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .rating_and_reviews .reviews {
font-size: 1.1670em;
display: inline-block;
color: #999;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .rating_container .more_info {
float: right;
padding-top: 5px;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .rating_and_reviews .button_inner {
padding: 0 8px
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .clear {
clear: both;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .tile .ui_ribbon {
z-index: 1;
top: 6px;
}
DIV.prw_rup.prw_shelves_day_trip_single_shelf_item_widget .ui_button {
float: right;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget {
position: relative;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 18px) / 2);
margin: 4px;
padding: 0;
vertical-align: top;
box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget:nth-child(2n) {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .tile:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .tile .thumbCrop {
position: absolute;
top: 0;
left: 0;
height: 100%;
overflow: hidden;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .tile .thumbCrop img {
vertical-align: middle;
object-fit: cover;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .tile .thumbCrop img:hover {
opacity: .9;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .tile .product_details {
margin-left: 160px;
padding: 10px 8px;
height: 140px;
overflow: hidden;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .name_container .product_name {
color: #069;
float: left;
cursor: pointer;
font-weight: bold;
overflow: hidden;
max-height: 28px;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .name_container .product_name {
max-height: 32px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price {
font-size: 12px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price .from {
text-align: center;
right: calc(42% - 38px);
display: inline-block;
position: absolute;
bottom: 10px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price .from span {
font-size: 16px;
font-weight: bold;
display: block;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price .from span {
font-size: 12px;
}
.domn_en_IN DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price .from span {
font-size: 11px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price .savings {
text-decoration: line-through;
color: #E46715;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .price .savings .strikethruPrice {
font-size: 12px;
font-weight: normal;
color: black;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .product_details .rating_container {
margin-top: 6px;
width: 100%;
min-height: 10px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .product_details .description {
height: 42px;
overflow: hidden;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .product_details .description {
height: 39px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .rating_container .rating_and_reviews {
float: left;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .rating_and_reviews .rating {
margin-bottom: 6px;
float: left;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .rating_and_reviews .reviews {
font-size: 1.1670em;
display: inline-block;
color: #999;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .rating_container .more_info {
float: right;
padding-top: 5px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .rating_and_reviews .button_inner {
padding: 0 8px
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .clear {
clear: both;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .tile .ui_ribbon {
z-index: 1;
top: 6px;
}
DIV.prw_rup.prw_shelves_day_trip_double_shelf_item_widget .ui_button {
float: right;
right: 5%;
position: absolute;
bottom: 10px;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget {
position: relative;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 27px) / 3);
margin: 4px;
padding: 0;
vertical-align: top;
box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget:nth-child(3n) {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .tile:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .tile .thumbCrop {
display: inline-block;
height: 111px;
overflow: hidden;
width: 100%;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .tile .thumbCrop img {
margin-top: -38px;
vertical-align: middle;
object-fit: cover;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .tile .thumbCrop img:hover {
opacity: .9;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .tile .product_details {
padding: 10px 15px 12px;
height: 92px;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .name_container .product_name {
color: #069;
float: left;
cursor: pointer;
font-size: 14px;
font-weight: bold;
overflow: hidden;
width: 75%;
height: 48px;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .name_container .product_name {
max-height: 40px;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .price {
float: right;
font-size: 12px;
text-align: right;
height: 36px;
width: 25%;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .price span {
font-size: 14px;
font-weight: bold;
text-align: right;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .price .savings {
text-decoration: line-through;
color: #E46715;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .price .savings .strikethruPrice {
font-size: 12px;
font-weight: normal;
color: black;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .product_details .rating_container {
margin-top: 6px;
width: 100%;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .rating_container .rating_and_reviews {
float: left;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .rating_and_reviews .rating {
margin-bottom: 6px;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .rating_and_reviews .reviews {
font-size: 12px;
color: #999;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .rating_container .more_info {
float: right;
padding-top: 5px;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .rating_and_reviews .button_inner {
padding: 0 8px
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .clear {
clear: both;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .tile .ui_ribbon {
z-index: 1;
top: 6px;
}
DIV.prw_rup.prw_shelves_day_trip_triple_shelf_item_widget .ui_button {
float: right;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 36px) / 4);
margin: 4px;
padding: 0;
vertical-align: top;
box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget:nth-child(4n) {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .tile:hover .thumb {
opacity: .9;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .tile:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .tile .thumbCrop {
display: inline-block;
height: 111px;
overflow: hidden;
width: 100%;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .tile .thumbCrop img {
height: 133px;
vertical-align: middle;
width: 200px;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .tile .product_details {
padding: 10px 8px;
height: 92px;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .name_container .product_name {
color: #069;
float: left;
font-size: 14px;
font-weight: bold;
overflow: hidden;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .name_container .product_name {
max-height: 38px;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .price {
float: right;
font-size: 14px;
text-align: right;
bottom: 6px;
right: 12px;
position: absolute;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .price{
font-size: 10px;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .price span {
font-size: 14px;
font-weight: bold;
text-align: right;
}
.domn_ja DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .price span{
font-size: 10px;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .price .savings {
text-decoration: line-through;
color: #E46715;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .price .savings .strikethruPrice {
font-size: 12px;
color: black;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .product_details .rating_container {
margin-top: 6px;
width: 100%;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .rating_container .rating_and_reviews {
float: left;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .rating_and_reviews .rating {
margin-bottom: 6px;
display: inline-block;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .rating_and_reviews .reviews {
font-size: 12px;
display: inline-block;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .rating_and_reviews .reviews:hover {
text-decoration: underline;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .rating_container .more_info {
float: right;
padding-top: 5px;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .rating_and_reviews .button_inner {
padding: 0 8px
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .clear {
clear: both;
}
DIV.prw_rup.prw_shelves_day_trip_standard_shelf_item_widget .tile .ui_ribbon {
z-index: 1;
top: 6px;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header {
margin: 0 10px 10px 4px;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header_icon {
margin: 0 6px 0 0;
color: #00a680;
font-size: 18px;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_container.first {
padding: 0 0 18px 0;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_container {
padding: 18px 0 18px 0;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header .title_text {
font-size: 16px;
font-weight: bold;
height: 18px;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header .see_all_link {
font-size: 16px;
font-weight: bold;
float: right;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_subtitle {
font-size: 12px;
height: 14px;
font-weight: bold;
color: #E46715;
margin: 6px 0 0 0;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_container .shelf_item_container:only-of-type {
margin-top: 0;
}
DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header .taLnk:hover {
text-decoration: underline;
}
.attractions_clarity DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header .title_text,
.attractions_clarity DIV.prw_rup.prw_shelves_day_trip_shelf_widget .shelf_header .see_all_link,
.attractions_clarity DIV.prw_rup.prw_shelves_day_trip_shelf_widget a
{
color: #333 !important;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_attractions_attractions_review_snippets .extra-snippet {
display: none;
}
DIV.prw_rup.prw_attractions_attractions_review_snippets .has-left:before,
DIV.prw_rup.prw_attractions_attractions_review_snippets .has-right:after {
content: "…";
}
}
DIV.prw_rup.prw_attractions_attractions_review_snippets .review_snippets {
margin-top: 8px;
}
DIV.prw_rup.prw_attractions_attractions_review_snippets .review_snippets .review_snippet {
color: #4a4a4a;
padding-bottom: 12px;
font-size: 12px;
line-height: 16px;
line-height: 18px;
}
DIV.prw_rup.prw_attractions_attractions_review_snippets .review_snippets .review_snippet a {
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attractions_review_snippets .review_snippets .review_snippet .highlighted {
font-weight: bold;
}
DIV.prw_rup.prw_attractions_attractions_review_snippets .review_snippets .MTBadge {
padding-bottom: 8px;
}
body:not(.tablet_desktop) DIV.prw_rup.prw_attractions_attraction_merchandising_product .readMore:hover,
body:not(.tablet_desktop) DIV.prw_rup.prw_attractions_attraction_merchandising_product .readMore:focus {
text-decoration: underline;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .ui_ribbon {
max-width: 132px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .parent_waypoint_icon {
display: block;
float: left;
vertical-align: text-top;
padding-right: 6px;
width: 23px;
height: 17px;
background-size: 23px 17px;
background-image: url(/img2/waypoints/icon_waypoints.png);
background-repeat: no-repeat;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_element .inlinebubble {
margin-top: 20px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell_clickable {
cursor: pointer;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell {
position: relative;
padding: 20px 16px;
background-color: #fff;
border-bottom: 1px solid #e5e5e5;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell:hover {
z-index: 1;
box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.25);
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell a,
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell a:visited {
color: inherit;
text-decoration: none;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell a:hover,
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell a:focus,
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell a:active {
color: inherit;
text-decoration: underline;
cursor: pointer;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell .readMore {
font-weight: bold;
cursor: pointer;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .attraction_clarity_cell .listing {
position: relative;
min-height: 180px;
box-sizing: border-box;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .with_inline_products .listing_info {
margin: 0 274px 0 188px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info {
display: table;
min-height: 180px;
margin: 0 182px 0 188px;
padding: 0 12px;
box-sizing: border-box;
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .promotable .listing_info {
width: auto;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_callout .callout_tag {
display: inline-block;
margin-bottom: 6px;
padding: 4px 8px;
border-radius: 6px;
background-color: #4a4a4a;
font-weight: bold;
font-size: 12px;
line-height: 16px;
color: #fff;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_callout .promoted_event_tag {
background-color: #ff6500;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_callout .callout_text {
display: inline-block;
margin-left: 4px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_title {
margin-bottom: 10px;
font-size: 20px;
line-height: 24px;
color: #000a12;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_title.title_with_snippets {
margin-bottom: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_title h2 {
font-weight: normal;
font-size: 20px;
line-height: 24px;
color: #000a12;
padding: 0;
margin: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .promoted_event_date_summary {
font-weight: bold;
color: #2c2c2c;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line {
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line .p13n_reasoning_v2 {
font-size: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line .p13n_reasoning_v2 span {
font-size: 14px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line .p13n_reasoning_v2 .comma_separator {
padding-right: 3px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating {
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .rating {
overflow: visible;
padding-bottom: 8px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .rating .ui_bubble_rating {
font-size: 16px;
line-height: 20px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .rating .more {
margin-left: 3px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .popRanking {
overflow: visible;
margin-bottom: 6px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_description {
margin-top: 18px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .nested_commerce_link {
bottom: 0;
color: #00a680;
font-weight: bold;
font-size: 12px;
line-height: 16px;
position: relative;
right: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .nested_commerce_link:hover {
cursor: pointer;
text-decoration: underline;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .attr_review_stubs {
margin-top: 12px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets {
display: table-footer-group;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .reviews {
width: inherit;
margin-top: 12px;
line-height: 22px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .review_stubs_item {
position: relative;
white-space: nowrap;
clear: both;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .review_stubs_item .date {
margin-left: 5px;
color: #767676;
font-style: normal;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .review_stubs_item .ltr {
display: block;
overflow: hidden;
margin-right: 74px;
text-overflow: ellipsis;
white-space: nowrap;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_duration {
display: table-footer-group;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_duration a {
color: #069;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking {
position: absolute;
top: 0;
bottom: 0;
left: 0;
width: 180px;
height: 180px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking a {
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
width: auto;
height: auto;
overflow: hidden;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking img {
height: 100%;
vertical-align: text-top;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking .saveToTripWrapper {
position: absolute;
top: 4px;
right: 4px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking .thumbSetWrapper .tall_fix {
width: 88px;
overflow: hidden;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking .thumbSetWrapper .tall_fix .sizedThumb {
margin-left: -44px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking .thumbSetWrapper .thumbWrapper.odd {
float: left;
margin: 0 2px 2px 2px;
clear: both;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking .thumbSetWrapper .thumbWrapper.even {
float: right;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking .thumbSetWrapper .thumbWrapper.even.alt {
clear: right;
margin-bottom: 2px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .central_listing_commerce {
position: absolute;
top: 0%;
right: 0;
bottom: 34%;
width: 170px;
padding-left: 12px;
text-align: center;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .no-attractions-error {
color: #d80007;
background-color: #f2f2f2;
padding: 10px;
margin-top: 12px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .parent-name-and-distance {
unicode-bidi: isolate;
font-size: 14px;
color: #4a4a4a;
vertical-align: bottom;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .geobroaden_banner {
margin-bottom: 0;
margin-top: 12px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products {
position: absolute;
top: 0;
right: 0;
border-left: 1px dotted #d6d6d6;
padding-left: 16px;
height: 175px;
width: 262px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products .inline_products_header {
font-size: 12px;
font-weight: bold;
padding-bottom: 20px;
color: #767676;
cursor: pointer;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products .inline_product {
clear: both;
margin-bottom: 16px;
height: 48px;
overflow: hidden;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products .inline_product .inline_product_title {
font-size: 12px;
font-weight: bold;
line-height: 1.33;
height: 32px;
overflow: hidden;
cursor: pointer;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products .inline_product .inline_product_price_and_more_info {
float: right;
margin-left: 24px;
text-align: right;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products .inline_product .inline_product_price_and_more_info .inline_product_price {
font-size: 12px;
font-weight: normal;
color: #a1a1a1;
margin-bottom: 4px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .inline_products .inline_product .inline_product_price_and_more_info .inline_product_price span {
font-weight: bold;
color: black;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product {
position: relative;
min-height: 180px;
box-sizing: border-box;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .section_header {
padding: 15px;
color: #000;
background: #fff;
border-width: 0 0 1px;
border-style: solid;
border-color: #e5e5e5;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .photo_booking img {
margin-left: -55px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .product_price_info {
position: absolute;
top: 20px;
right: 0;
width: 132px;
padding-left: 12px;
text-align: right;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .product_price_info .tag_container {
margin: 14px 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_duration a {
color: #00a680;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .price_test {
margin-bottom: 12px;
font-size: 16px;
line-height: 20px;
color: #000a12;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .price_test .from {
position: relative;
font-size: 14px;
line-height: 18px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .price_test .from span {
display: block;
font-size: 20px;
line-height: 24px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .strikethruPrice {
display: inline-block;
position: relative;
font-size: 16px;
line-height: 20px;
font-weight: normal;
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .strikethruPrice:before {
content: "";
position: absolute;
top: 45%;
left: 0;
right: 0;
height: 2px;
background: #ff6500;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .langSupport {
margin-top: 10px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .langSupport .flag_svg {
margin: 0 7px;
width: 29px;
height: 17px;
vertical-align: text-bottom;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info {
display: table;
min-height: 180px;
margin: 0 182px 0 188px;
padding: 0 12px;
box-sizing: border-box;
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
height: 180px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .promotable .listing_info {
width: auto;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_callout .callout_tag {
display: inline-block;
margin-bottom: 6px;
padding: 4px 8px;
border-radius: 6px;
background-color: #4a4a4a;
font-weight: bold;
font-size: 12px;
line-height: 16px;
color: #fff;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_callout .promoted_event_tag {
background-color: #ff6500;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_callout .callout_text {
display: inline-block;
margin-left: 4px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_title {
margin-bottom: 10px;
font-size: 20px;
line-height: 24px;
color: #000a12;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_title.title_with_snippets {
margin-bottom: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_title h2 {
font-weight: normal;
font-size: 20px;
line-height: 24px;
color: #000a12;
padding: 0;
margin: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .promoted_event_date_summary {
font-weight: bold;
color: #2c2c2c;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line {
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line .p13n_reasoning_v2 {
font-size: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line .p13n_reasoning_v2 span {
font-size: 14px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .tag_line .p13n_reasoning_v2 .comma_separator {
padding-right: 3px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating {
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .rating {
overflow: visible;
padding-bottom: 8px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .rating .ui_bubble_rating {
font-size: 16px;
line-height: 20px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .rating .more {
margin-left: 3px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_rating .popRanking {
overflow: visible;
margin-bottom: 6px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_description {
margin-top: 18px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .nested_commerce_link {
bottom: 0;
color: #00a680;
font-weight: bold;
font-size: 12px;
line-height: 16px;
position: relative;
right: 0;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .nested_commerce_link:hover {
cursor: pointer;
text-decoration: underline;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .attr_review_stubs {
margin-top: 12px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets {
display: table-footer-group;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .reviews {
width: inherit;
margin-top: 12px;
line-height: 22px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .review_stubs_item {
position: relative;
white-space: nowrap;
clear: both;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .review_stubs_item .date {
margin-left: 5px;
color: #767676;
font-style: normal;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .review_snippets .review_stubs_item .ltr {
display: block;
overflow: hidden;
margin-right: 74px;
text-overflow: ellipsis;
white-space: nowrap;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_duration {
display: table-footer-group;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .listing_duration a {
color: #069;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .listing_info .sponsored_v2 {
margin-bottom: 5px;
}
DIV.prw_rup.prw_attractions_attraction_merchandising_product .clickable_listing {
cursor: pointer;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container {
padding: 18px 0 18px 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.first {
padding: 0 0 18px 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand {
margin: 13px 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand.first {
margin: 0 0 13px 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header {
margin: 0 10px 10px 4px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title {
display: flex;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_title_container {
flex-grow: 1;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_title_container .title_text {
font-weight: bold;
font-size: 24px;
line-height: 28px;
color: #000a12;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_title_container .title_text {
font-size: 16px;
line-height: 20px;
}
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_title_container .total_items_num {
font-size: 18px;
line-height: 22px;
font-weight: normal;
line-height: 30px;
text-align: center;
margin-left: 4px;
color: #767676;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_title_container .dineWithLocalsSymbol {
display: inline-block;
vertical-align: inherit;
position: relative;
top: 2px;
height: 20px;
width: 20px;
background-size: 20px 20px;
background-image: url('/img2/restaurants/eat_with/Hat_big.png');
margin-right: 6px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .see_all_link {
font-size: 16px;
float: right;
position: relative;
cursor: pointer;
color: #4a4a4a;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .taLnk:hover {
text-decoration: underline;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_geo_shelf_item .price {
margin-top: 10px;
font-size: 14px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_geo_shelf_item .price .from {
display: none;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_geo_shelf_item .price a {
color: #000;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_geo_shelf_item .price a span {
font-weight: bold;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.resp_scrollable {
display: -ms-flexbox;
display: -webkit-box;
display: -moz-box;
display: -webkit-flex;
display: flex;
-webkit-flex-wrap: nowrap;
-moz-flex-wrap: nowrap;
-ms-flex-wrap: nowrap;
flex-wrap: nowrap;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.unscoped_brand_scroll {
flex-wrap: nowrap;
overflow-x: hidden;
position: relative;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.unscoped_brand_scroll.scrolled .ui_column {
position: relative;
left: -100%;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.unscoped_brand_scroll .brand_scroll_arrow {
position: absolute;
height: 50px;
top: 50%;
margin-top: -25px;
z-index: 10;
padding: 0 5px;
font-size: 45px;
line-height: 49px;
font-weight: bold;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.unscoped_brand_scroll .brand_scroll_arrow.left {
left: 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.unscoped_brand_scroll .brand_scroll_arrow.right {
right: 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.unscoped_brand_scroll .brand_scroll_arrow span:before {
display: block;
height: 100%;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a {
display: block;
height: 100%;
background-color: #00a680;
color: #fff;
font-weight: bold;
text-align: center;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a .brand_tile_title {
padding: 40px 8px 10px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a .brand_tile_cta {
padding: 10px 8px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand {
padding: 0;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header {
margin: 0;
/* flex title row for easier layout */
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .shelf_title {
display: flex;
align-items: baseline;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .shelf_title .ui_icon {
position: relative;
color: #00a680;
margin-right: 4px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .shelf_title .ui_icon.travelers-choice-badge {
top: 2px;
margin-bottom: -2px;
font-size: 42px;
line-height: 1;
margin-top: -10px;
/* maintain line height: 42 - 32 = 10 */
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .shelf_title .shelf_title_container {
flex-grow: 1;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .shelf_title .see_all {
margin-left: 15px;
white-space: nowrap;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_item_container.ui_columns.is-multiline {
flex-wrap: nowrap;
overflow-y: scroll;
-webkit-overflow-scrolling: touch;
margin-right: -16px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_item_container.ui_columns.is-multiline::-webkit-scrollbar {
display: none;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_item_container.unscoped_brand_scroll {
overflow-x: inherit;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_item_container.unscoped_brand_scroll .brand_scroll_arrow {
display: none;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand #brand_tile a .brand_tile_title {
font-size: 16px;
line-height: 18px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand #brand_tile a .brand_tile_cta {
font-size: 16px;
line-height: 18px;
}
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .ui_icon.travelers-choice-badge {
display: none;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.rebrand .shelf_header .see_all {
font-size: 14px;
line-height: 18px;
}
}
@media (min-width: 768px) {
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a {
height: 200px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a .brand_tile_title {
padding: 40px 8px 10px;
font-size: 18px;
line-height: 20px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a .brand_tile_cta {
padding: 10px 8px;
font-size: 18px;
line-height: 18px;
}
}
@media (min-width: 1024px) {
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a .brand_tile_title {
font-size: 22px;
line-height: 26px;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container #brand_tile a .brand_tile_cta {
font-size: 20px;
line-height: 24px;
}
}
.Restaurants .coverpage_widget DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .title_text {
font-size: 24px;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container {
white-space: nowrap;
overflow: hidden;
flex-wrap: nowrap;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.is-multiline {
white-space: normal;
flex-wrap: wrap;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.shelfItemsWithGrayBgWrapper > .prw_rup.prw_sponsoredListings_restaurants_tripads_coverpage,
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container.shelfItemsWithGrayBgWrapper > .prw_rup.prw_shelves_restaurant_shelf_item_widget {
border: solid 1px #e5e5e5;
border-radius: 4px;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.restaurants_collections {
margin: 0 -5px 0 -5px;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.restaurants_collections .shelf_item_container {
overflow: visible;
position: relative;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.restaurants_collections .shelf_item_container .scrollable_container_grayBg {
overflow: hidden;
position: relative;
background-color: #f2f2f2;
}
.Restaurants DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.restaurants_collections .shelf_item_container .scrollable_container_grayBg > .prw_shelves_trip_shelf_item_widget {
background: transparent;
}
.location_detail_rebrand .coverpage_widget DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .title_text {
font-size: 24px;
}
.location_detail_rebrand DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container {
white-space: nowrap;
overflow: hidden;
flex-wrap: nowrap;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_item_container:only-of-type {
margin-top: 0;
}
.coverpage_widget DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .see_all_link {
color: #4a4a4a;
float: none;
position: absolute;
bottom: 0;
right: 0;
white-space: nowrap;
line-height: 24px;
}
.coverpage_widget DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title {
position: relative;
}
.coverpage_widget DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header .shelf_title .title_text {
font-weight: bold;
font-size: 24px;
color: #000a12;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity {
box-shadow: none;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .shelf_title .shelf_title_container .title_text {
color: #000a12;
font-size: 20px;
font-weight: normal;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .see_all_link,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .shelf_title .see_all_link {
color: #000a12;
font-size: 16px;
font-weight: normal;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .product_details,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .product_details {
padding: 10px 8px;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item.name a,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .item.name a,
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .product_name a,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .product_name a {
color: #000a12;
font-size: 16px;
font-weight: normal;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .item,
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .reviews,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .reviews {
color: #4a4a4a;
font-size: 14px;
font-weight: normal;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .price,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .price {
float: none;
position: relative;
bottom: 0;
right: 0;
margin-top: 6px;
font-size: 16px;
font-weight: bold;
text-align: left;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .price .from,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity .shelf_container .price .from {
font-size: 14px;
font-weight: normal;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity {
box-shadow: none;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_header,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .shelf_header {
margin: 0 5px 12px 0;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .shelf_title .shelf_title_container .title_text {
font-size: 24px;
line-height: 28px;
font-weight: bold;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .see_all_link,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .shelf_title .see_all_link {
font-size: 14px;
color: #4a4a4a;
width: 86px;
text-align: right;
margin-top: 9px;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item.name a,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .item.name a,
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_shelf_item_detail a,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .ui_shelf_item_detail a,
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .product_name a,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .product_name a {
font-size: 16px;
line-height: 20px;
color: #000a12;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .item,
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .reviews,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .reviews,
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container a.reviewCount,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container a.reviewCount {
font-size: 12px;
font-weight: normal;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item.price,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .item.price {
padding-top: 2px;
font-size: 12px;
line-height: 16px;
font-weight: normal;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .price,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .price {
color: #4a4a4a;
font-size: 12px;
font-weight: bold;
margin-top: 2px;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .price .from,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .price .from {
font-size: 12px;
font-weight: normal;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .price span,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .price span {
font-size: 12px;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .detail,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .detail,
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_shelf_item_detail,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container .ui_shelf_item_detail {
padding: 10px 0;
}
.forum_xsell.coverpage_clarity DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.first,
DIV.prw_rup.prw_shelves_shelf_widget.forum_xsell.coverpage_clarity .shelf_container.first {
padding: 24px 0 12px;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web {
padding-top: 10px;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .shelf_title .shelf_title_container .title_text {
margin-left: 4px;
font-size: 16px;
line-height: 20px;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .see_all_link,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .shelf_title .see_all_link {
color: #4a4a4a;
font-size: 14px;
margin: 3px 3px 0 0;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .item,
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .reviews,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .reviews,
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item a.reviewCount,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .item a.reviewCount {
font-size: 12px;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .ui_shelf_item_detail a,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .ui_shelf_item_detail a,
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .product_name a,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .product_name a {
font-size: 14px;
line-height: 18px;
white-space: normal;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .item.name,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container .item.name {
font-size: 14px;
line-height: 18px;
white-space: normal;
}
.forum_xsell.mobile_web DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.first,
DIV.prw_rup.prw_shelves_shelf_widget.coverpage_clarity.mobile_web .shelf_container.first {
padding: 26px 0 12px;
}
.Attractions DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text {
font-weight: bold;
font-size: 24px;
line-height: 28px;
color: #000a12;
}
@media (max-width: 767px) {
.Attractions DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text {
font-size: 16px;
line-height: 20px;
}
}
.Attractions DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .see_all_link {
line-height: 28px;
color: #4a4a4a;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_item_container .carousel_wrap {
width: 100%;
height: 225px;
overflow: hidden;
}
DIV.prw_rup.prw_shelves_shelf_widget .shelf_item_container .carousel {
display: inline-block;
width: 100%;
height: 100%;
white-space: nowrap;
overflow-x: scroll;
overflow-y: hidden;
padding-bottom: 17px;
box-sizing: content-box;
}
.shelf_title_20 DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text {
font-weight: bold;
font-size: 20px;
line-height: 24px;
color: #000a12;
}
@media (max-width: 767px) {
.shelf_title_20 DIV.prw_rup.prw_shelves_shelf_widget .shelf_container .shelf_title .shelf_title_container .title_text {
font-size: 16px;
line-height: 20px;
}
}
.a_gray_background DIV.prw_rup.prw_shelves_shelf_widget .shelf_container {
padding: 0;
}
.a_gray_background DIV.prw_rup.prw_shelves_shelf_widget .shelf_container.first {
padding: 0;
}
@media (min-width: 768px) {
DIV.prw_rup.prw_shelves_shelf_widget .shelf_item_container.no_wrap {
white-space: nowrap;
overflow: hidden;
flex-wrap: nowrap;
}
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container {
padding: 0;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header {
margin: 0;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title {
display: flex;
justify-content: space-between;
align-items: baseline;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_header_icon {
margin: 0 6px 0 0;
color: #00a680;
font-size: 18px;
line-height: 22px;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .ui_icon {
position: relative;
color: #00a680;
margin-right: 4px;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .ui_icon.travelers-choice-badge {
top: 2px;
margin-bottom: -2px;
font-size: 42px;
line-height: 1;
margin-top: -10px;
/* maintain line height: 42 - 32 = 10 */
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .see_all,
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .see_all_link {
margin-right: 12px;
font-size: 16px;
line-height: 20px;
cursor: pointer;
white-space: nowrap;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .see_all,
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .see_all_link {
margin-right: 0px;
font-size: 14px;
line-height: 18px;
}
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .shelf_subtitle {
font-size: 12px;
line-height: 16px;
height: 14px;
font-weight: bold;
color: #E46715;
margin: 6px 0 0 0;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_header .shelf_title .taLnk:hover {
text-decoration: underline;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container {
display: flex;
flex-direction: row;
flex-wrap: nowrap;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container {
overflow-y: scroll;
-webkit-overflow-scrolling: touch;
margin-right: -16px;
margin-left: -9px;
}
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container::-webkit-scrollbar {
display: none;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container .additional_items_container {
position: relative;
margin: 12px 0 12px 12px;
display: flex;
flex-direction: column;
width: 50%;
min-width: 210px;
padding: 16px 0 16px 16px;
border: solid;
border-width: 1px;
border-color: #e5e5e5;
min-height: 110px;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container .additional_items_container {
display: none;
}
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container .additional_items_container .additional_items_title {
font-size: 12px;
line-height: 16px;
font-weight: bold;
color: #767676;
padding: 5px 0 10px 5px;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container .additional_items_container .additional_items {
display: flex;
flex-direction: row;
flex-wrap: wrap;
}
DIV.prw_rup.prw_shelves_multi_shelf_widget .shelf_container .shelf_item_container .additional_items_container .additional_items > * {
width: 50%;
min-width: 210px;
}
.Attractions DIV.prw_rup.prw_shelves_multi_shelf_widget .multi_shelf_container .shelf_title .shelf_title_container .title_text {
font-weight: bold;
font-size: 24px;
line-height: 28px;
color: #000a12;
}
@media (max-width: 767px) {
.Attractions DIV.prw_rup.prw_shelves_multi_shelf_widget .multi_shelf_container .shelf_title .shelf_title_container .title_text {
font-size: 16px;
line-height: 20px;
}
}
.Attractions DIV.prw_rup.prw_shelves_multi_shelf_widget .multi_shelf_container .shelf_title .see_all_link {
line-height: 28px;
color: #4a4a4a;
}
.Attractions DIV.prw_rup.prw_shelves_multi_shelf_widget .multi_shelf_container .shelf_item_container .additional_items_container {
margin: 12px 0 12px 0;
}
.Attractions DIV.prw_rup.prw_shelves_multi_shelf_widget .multi_shelf_container .shelf_item_container .additional_items_container .additional_items > * {
width: 100%;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 36px) / 4);
margin: 0 4px;
padding: 0;
vertical-align: top;
box-shadow: 0 1px 1px -1px #999;
}
.a_gray_background DIV.prw_rup.prw_shelves_attraction_shelf_item_widget {
width: calc((100% - 60px) / 4);
margin: 0 20px 0 0;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget:last-child {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget.max-shelf-length-6 {
width: calc((100% - 60px) / 6);
}
.coverpage_clarity DIV.prw_rup.prw_shelves_attraction_shelf_item_widget {
box-shadow: none;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget.resp-scrollable-six {
width: 180px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .prw_meta_saves_badge {
position: absolute;
top: 2px;
right: 2px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .thumbnail {
position: relative;
display: block;
height: 111px;
background-color: #fff;
transition: opacity linear 100ms;
white-space: normal;
overflow: hidden;
opacity: 1;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .thumbnail img.npp {
margin-top: -60px;
margin-left: -4px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .thumbnail img.npp.resp-scrollable-six {
margin-left: 36px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .poi:hover .thumbnail {
opacity: .9;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .detail {
padding: 10px 8px;
color: #333;
min-height: 62px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .item {
margin-bottom: 6px;
vertical-align: middle;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .item.name {
font-weight: bold;
font-size: 14px;
position: relative;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .truncated_text {
display: block;
display: -webkit-box;
-webkit-line-clamp: 2;
white-space: normal;
line-height: 21px;
max-height: 42px;
overflow: hidden;
position: relative;
text-align: start;
padding-right: 24px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .truncated_text:before {
content: '...';
position: absolute;
/* set position to right bottom corner of block */
right: 16px;
bottom: 0;
/*same as the page background color*/
background: #fff;
margin-right: -32px;
padding-right: 16px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .truncated_text:after {
content: ' ';
position: absolute;
/* set position to right bottom corner of text */
right: 16px;
width: 16px;
height: 16px;
margin-top: 3px;
/*same as the page background color*/
background: #fff;
margin-right: -32px;
padding-right: 16px;
}
@supports (-webkit-line-clamp: 2) {
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .truncated_text:before {
content: none
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .truncated_text:after {
content: none
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .truncated_text {
line-height: unset;
max-height: unset;
position: unset;
text-align: unset;
padding-right: unset;
-webkit-box-orient: vertical;
text-overflow: ellipsis;
}
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .item.name.wrap {
display: table-cell;
height: 30px;
padding-bottom: 6px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .wrap .poiTitle {
display: inline-block;
white-space: normal;
vertical-align: middle;
width: 90%;
width: calc(100% - 26px); /* 20px for icon and 6px for margin */
margin-left: 6px;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .review_count {
color: #333;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .rating-widget {
display: inline-block;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .ui_bubble_rating {
font-size: 14px;
margin: 0 4px 0 1px;
}
.forum_xsell .carousel DIV.prw_rup.prw_shelves_attraction_shelf_item_widget {
box-sizing: border-box;
width: 150px;
padding: 0;
}
.forum_xsell .carousel DIV.prw_rup.prw_shelves_attraction_shelf_item_widget:first-child {
margin-left: 4px;
}
.forum_xsell DIV.prw_rup.prw_shelves_attraction_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 20px) / 3);
margin: 0 4px;
padding: 0;
vertical-align: top;
box-shadow: none;
}
.forum_xsell DIV.prw_rup.prw_shelves_attraction_shelf_item_widget:first-child {
margin-left: 0;
}
.forum_xsell DIV.prw_rup.prw_shelves_attraction_shelf_item_widget:last-child {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_attraction_shelf_item_widget .saveToTripWrapper {
position: absolute;
top: 4px;
right: 4px;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .ui_color {
display: inline-block;
margin: 0 12px 12px;
border: 1px solid rgba(0, 0, 0, 0.25);
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .ui_color .swatch {
display: block;
width: 128px;
height: 100px;
padding: 2px;
border-bottom: 1px solid rgba(0, 0, 0, 0.25);
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .ui_color .values {
display: block;
padding: 2px;
font-size: 12px;
text-align: center;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget {
position: relative;
margin: 12px 12px 12px 0;
padding: 16px 6px 16px 16px;
display: flex;
width: 50%;
min-width: 220px;
border: solid;
border-width: 1px;
border-color: #e5e5e5;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget:not(:first-child) {
margin-left: 12px;
margin-right: 0;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget {
min-width: 85%;
display: inline-block;
margin: 0px 6px 0px 0px;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget:only-child {
width: 100%;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget:not(:first-child) {
width: auto;
margin-left: 0px;
margin-right: 6px;
}
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget {
border: none;
outline: 1px solid #e5e5e5;
outline-offset: -6px;
}
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile {
position: relative;
width: 100%;
height: 100%;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display {
display: flex;
flex-direction: row;
min-height: 110px;
height: 100%;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
font-size: 14px;
line-height: 18px;
color: #4a4a4a;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_image {
border-radius: 2px;
height: 94px;
max-width: 94px;
min-width: 94px;
background-repeat: no-repeat;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_image img {
height: 94px;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body {
display: flex;
flex-direction: row;
width: 100%;
justify-content: space-between;
}
@media (max-width: 767px), (min-width: 768px) {
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body {
flex-direction: column;
}
}
@media (min-width: 1024px) {
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body {
flex-direction: row;
}
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_info {
display: flex;
flex-direction: column;
margin-left: 12px;
overflow: hidden;
white-space: nowrap;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_info div {
margin-bottom: 2px;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_info a {
margin-bottom: 0;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_info .reservation_name {
font-size: 16px;
line-height: 20px;
max-height: 41px;
white-space: normal;
overflow: hidden;
display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 2;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_info .location_name {
font-size: 12px;
line-height: 16px;
color: #767676;
padding: 5px 0 5px 0;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_info .traveler_description {
padding-bottom: 7px;
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_footer {
align-self: flex-end;
justify-content: right;
padding: 0 12px 0 12px;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_footer {
align-self: flex-start;
}
}
DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_footer .ui_button {
font-size: 14px;
line-height: 18px;
padding: 8px;
align-self: flex-end;
justify-self: right;
white-space: nowrap;
}
.Attractions .multi_shelf_container.upcoming_bookings DIV.prw_rup.prw_shelves_reservation_shelf_item_widget {
min-width: 220px;
margin: 12px 12px 12px 0;
}
.Attractions .multi_shelf_container.upcoming_bookings DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body {
flex-direction: column;
}
.Attractions .multi_shelf_container.upcoming_bookings DIV.prw_rup.prw_shelves_reservation_shelf_item_widget .tile .reservation_display .reservation_body .reservation_footer {
align-self: flex-start;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container {
padding: 18px 0 18px 0;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container.is_mobile_web {
overflow-y: hidden;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container.first {
padding: 2px 0 18px 0;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container .shelf_detail_box {
flex: none;
background: #00a680;
width: 25%;
height: 111px;
position: relative;
width: calc((100% - 36px) / 4);
height: 80px;
margin: 0 4px 8px;
padding: 0;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container .shelf_detail_box .detail {
position: absolute;
bottom: 0px;
font-size: 14px;
font-weight: bold;
margin: 9px 10px;
color: #fff;
overflow: hidden;
width: 92%;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container .shelf_item_container {
display: flex;
margin: 0;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_widget .shelf_container .shelf_item_container.nofilter {
white-space: nowrap;
overflow: auto;
overflow-y: hidden;
-webkit-overflow-scrolling: touch;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 32px) / 4);
margin: 0 4px;
padding: 0;
vertical-align: top;
box-shadow: 0 1px 1px -1px #999;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget.sponsoredListing {
width: 100%;
margin: 0px;
}
.a_gray_background DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget {
width: calc((100% - 60px) / 4);
margin: 0 20px 0 0;
}
.a_gray_background DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget.sponsoredListing {
width: 100%;
margin: 0px;
}
.a_gray_background DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget:last-child {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget.max-shelf-length-6 {
width: calc((100% - 60px) / 6);
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget.resp-scrollable-six {
width: 180px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget:last-child {
margin-right: 0;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget {
box-shadow: none;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .prw_meta_saves_badge {
position: absolute;
top: 2px;
right: 2px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .tile:hover .thumb {
opacity: .9;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .single_line_truncated_text {
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
display: block;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .truncated_text {
display: block;
display: -webkit-box;
-webkit-line-clamp: 2;
white-space: normal;
line-height: 21px;
max-height: 42px;
overflow: hidden;
position: relative;
text-align: start;
padding-right: 24px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .truncated_text:before {
content: '...';
position: absolute;
/* set position to right bottom corner of block */
right: 16px;
bottom: 0;
/*same as the page background color*/
background: #fff;
margin-right: -32px;
padding-right: 16px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .truncated_text:after {
content: ' ';
/* absolute position */
position: absolute;
/* set position to right bottom corner of text */
right: 16px;
width: 16px;
height: 16px;
margin-top: 3px;
/*same as the page background color*/
background: #fff;
margin-right: -32px;
padding-right: 16px;
}
@supports (-webkit-line-clamp: 2) {
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .truncated_text:before {
content: none;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .truncated_text:after {
content: none;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .truncated_text {
line-height: unset;
max-height: unset;
position: unset;
text-align: unset;
padding-right: unset;
-webkit-box-orient: vertical;
text-overflow: ellipsis;
}
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .tile:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .tile .thumbCrop {
display: block;
height: 111px;
overflow: hidden;
width: 100%;
position: relative;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .tile .thumbCrop img {
height: 133px;
vertical-align: middle;
width: 200px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .tile .product_details {
padding: 10px 8px;
height: 92px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .ui_merchandising_pill {
position: absolute;
bottom: 6px;
left: 6px;
z-index: 1;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .reviews,
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price {
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .name_container .product_name {
color: #069;
font-size: 14px;
font-weight: bold;
overflow: hidden;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price {
float: right;
font-size: 14px;
text-align: right;
bottom: 6px;
right: 12px;
position: absolute;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .book_now_cta .ui_button {
float: left;
margin-bottom: 10px;
margin-right: 10px;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .book_now_cta .price {
font-size: 14px;
margin-top: 2px;
overflow: auto;
text-overflow: initial;
white-space: initial;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .book_now_cta .price .savings {
margin-right: 6px;
}
.coverpage_clarity DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .book_now_cta .per_adult {
color: #4a4a4a;
font-size: 12px;
font-weight: normal;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price span {
display: inline-block;
font-size: 14px;
font-weight: bold;
text-align: right;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price .adult {
font-weight: normal;
font-size: 14px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price .adult span {
display: inline-block;
font-size: 14px;
font-weight: bold;
text-align: right;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price .savings .strikethrough {
position: relative;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price .savings .strikethrough:before {
border-bottom: 1px solid #ff6500;
position: absolute;
content: "";
width: 100%;
height: 50%;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .price .savings .strikethruPrice {
font-size: 12px;
color: black;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .product_details .rating_container {
margin-top: 6px;
width: 100%;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .rating_and_reviews .rating-widget {
margin-bottom: 6px;
display: inline-block;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .rating_and_reviews .reviews {
font-size: 12px;
display: inline-block;
vertical-align: text-bottom;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .rating_and_reviews .reviews:hover {
text-decoration: underline;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .rating_container .more_info {
float: right;
padding-top: 5px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .rating_and_reviews .button_inner {
padding: 0 8px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .clear {
clear: both;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .ui_bubble_rating {
font-size: 14px;
margin: 1px 4px 0 0;
}
.forum_xsell .shelf_item_container .carousel DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget:first-child {
margin-left: 4px;
}
.forum_xsell DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 20px) / 3);
margin: 0 4px;
padding: 0;
vertical-align: top;
box-shadow: none;
}
.forum_xsell DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget:first-child {
margin-left: 0;
}
.forum_xsell DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget:last-child {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .kid_pricing {
color: #00a680;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .kid_pricing .ui_icon {
padding-right: 4px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .free_cancellation {
color: #4a4a4a;
font-weight: normal;
font-size: 12px;
margin-top: 4px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .free_cancellation .ui_icon {
padding-right: 4px;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget span.tipContent.hidden {
display: none;
}
DIV.prw_rup.prw_shelves_attraction_product_shelf_item_widget .saveToTripWrapper {
position: absolute;
top: 4px;
right: 4px;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container {
display: flex;
flex-direction: row;
padding: 8px;
font-size: 12px;
line-height: 16px;
color: #4a4a4a;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_poi_thumbnail {
overflow: unset;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_poi_thumbnail .image_wrapper {
height: 54px;
width: 54px;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_poi_thumbnail .image_wrapper .image {
min-width: 54px;
max-width: 54px;
min-height: 54px;
max-height: 54px;
border-radius: 2px;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_shelf_item_detail {
padding: 0 0 0 8px;
flex-grow: 1;
flex-basis: 0;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_shelf_item_detail a {
display: flex;
flex-direction: column;
width: 100%;
font-size: 12px;
line-height: 16px;
color: #000a12;
height: 31px;
white-space: normal;
overflow: hidden;
display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 2;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_shelf_item_detail .item.review_rating {
display: flex;
}
DIV.prw_rup.prw_shelves_attraction_product_small_shelf_item_widget .ui_shelf_item_container .ui_shelf_item_detail .item.review_rating .reviewCount {
padding-left: 4px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
box-sizing: border-box;
width: 100%;
margin: 0 4px;
padding: 0;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .featured_product_container {
display: flex;
padding: 0 4px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .photo {
min-width: calc(24.33333333%);
display: inline-block;
margin: 0 4px 0 0;
flex: 1 3 250px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .photo .thumbCrop {
display: inline-block;
height: 111px;
overflow: hidden;
width: 100%;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .photo .thumbCrop img {
height: 133px;
vertical-align: middle;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .photo :hover .thumbCrop {
opacity: .9;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .price_cta_container {
display: flex;
flex-basis: 98px;
flex-direction: column;
margin: 0 4px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .featured_product_info {
display: flex;
flex: 1 2 510px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .featured_product_details {
display: flex;
flex: 1 2 390px;
flex-wrap: wrap;
float: right;
margin: 0 0 0 4px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .product_name,
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .reviews,
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .full_price {
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .product_name {
color: #000;
font-size: 16px;
font-weight: normal;
overflow: hidden;
display: block;
word-wrap: break-word;
white-space: pre-wrap;
white-space: -moz-pre-wrap;
white-space: -pre-wrap;
white-space: -o-pre-wrap;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .book_now_button {
flex: 1 1 50px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .book_now_button a {
position: absolute;
bottom: 0;
right: 8px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .book_now_cta {
display: flex;
flex-direction: column;
flex: 1 1 50px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .book_now_cta .ui_button {
margin-bottom: 10px;
margin-right: 10px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .savings {
text-align: right;
font-size: 14px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .savings span {
display: inline-block;
font-size: 14px;
font-weight: bold;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .full_price {
font-size: 18px;
margin-top: 2px;
overflow: auto;
text-overflow: initial;
white-space: initial;
text-align: right;
bottom: 6px;
right: 12px;
font-weight: bold;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .per_adult {
color: #4a4a4a;
font-size: 12px;
text-align: right;
margin-top: 2px;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .savings .strikethrough {
position: relative;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .savings .strikethrough:before {
border-bottom: 1px solid #ff6500;
position: absolute;
content: "";
width: 100%;
height: 50%;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .savings .strikethruPrice {
font-size: 12px;
color: #ff6500;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .featured_product_details .rating_container {
margin-top: 6px;
width: 100%;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .rating_and_reviews .reviews {
font-size: 12px;
display: inline-block;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .rating_and_reviews .rating-widget {
margin-bottom: 6px;
display: inline-block;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .reviews:hover {
text-decoration: underline;
}
DIV.prw_rup.prw_shelves_featured_attraction_product_shelf_item_widget .ui_bubble_rating {
font-size: 14px;
margin: 1px 4px 0 0;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget {
background-color: #fff;
-webkit-box-shadow: 0 1px 4px 0 rbga(0, 0, 0, 0.15);
-moz-box-shadow: 0 1px 4px 0 rbga(0, 0, 0, 0.15);
box-shadow: 0 1px 4px 0 rbga(0, 0, 0, 0.15);
opacity: 1;
transition: opacity linear 100ms;
white-space: normal;
display: inline-block;
box-sizing: border-box;
width: calc((100% - 27px) / 3);
margin: 0 4px 8px;
/* add bottom margin */
padding: 0;
vertical-align: top;
box-shadow: 0 1px 1px -1px #999;
height: 90px;
position: relative;
cursor: pointer;
}
.a_gray_background DIV.prw_rup.prw_shelves_filter_shelf_item_widget {
margin: 0 15px 0 0;
width: calc((100% - 30px) / 3);
}
.a_gray_background DIV.prw_rup.prw_shelves_filter_shelf_item_widget:last-child {
margin-right: 0;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget .detail {
position: absolute;
top: 38px;
left: 0;
box-sizing: border-box;
width: 100%;
text-align: center;
font-size: 14px;
color: #fff;
font-weight: bold;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget:hover .detail {
text-decoration: underline;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget:hover .filter_image {
opacity: .9;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget .name {
color: #fff;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget .filter_image {
display: block;
height: 90px;
border-bottom: 1px solid #e5e5e5;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
-webkit-background-size: cover;
}
DIV.prw_rup.prw_shelves_filter_shelf_item_widget .filter_image:before {
content: "";
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
background: rgba(0, 0, 0, 0.45);
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_item_widget {
position: relative;
width: calc((100% - 36px) / 4);
height: 80px;
margin: 0 4px 8px;
padding: 0;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_item_widget .detail {
position: absolute;
bottom: 0px;
font-size: 14px;
font-weight: bold;
margin: 9px 10px;
color: #fff;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
width: 92%;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_item_widget:hover .filter_image {
opacity: .9;
cursor: pointer;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_item_widget .name {
color: #fff;
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_item_widget .filter_image:before {
content: "";
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
background: rgba(0, 0, 0, 0.4);
background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.8));
background: -o-linear-gradient(top, transparent, rgba(0, 0, 0, 0.8));
background: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.8));
background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8));
}
DIV.prw_rup.prw_shelves_embedded_taxonomy_shelf_item_widget .filter_image {
position: relative;
height: 80px;
border-bottom: 1px solid #e5e5e5;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
-webkit-background-size: cover;
}
DIV.prw_rup.prw_common_centered_thumbnail .sizing_wrapper {
position: relative;
overflow: hidden;
}
DIV.prw_rup.prw_common_centered_thumbnail .centering_wrapper {
display: inline-block;
position: absolute;
top: 50%;
}
DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
margin: 0 4px 1px 4px;
padding: 8px;
vertical-align: top;
min-width: 185px;
width: calc((100% - 36px) / 4);
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget {
min-width: initial;
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget:first-child {
margin-left: 0;
}
.tablet_desktop DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget {
min-width: initial;
}
DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget .tile {
border-width: 1px;
border-style: solid;
border-color: #e5e5e5;
width: 100%;
}
DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget .picture_container {
width: 100%;
height: 0;
padding-bottom: 47%;
overflow: hidden;
}
DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget img {
width: 100%;
height: auto;
vertical-align: middle;
margin-top: -10%;
}
DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget .title {
color: #000;
padding: 10px 20px;
text-align: center;
font-weight: bold;
overflow: hidden;
white-space: nowrap;
height: 20px;
}
DIV.prw_rup.prw_shelves_ticketed_event_category_shelf_item_widget .clear {
clear: both;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget {
position: relative;
cursor: pointer;
background-color: #fff;
display: inline-block;
box-sizing: border-box;
width: calc((100vw - 36px) / 2);
margin: 0 4px;
padding: 0;
vertical-align: top;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .tile:hover .thumbCrop {
opacity: .9;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .tile:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .tile .thumbCrop {
display: block;
height: 111px;
overflow: hidden;
width: 100%;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .tile .thumbCrop img {
height: 133px;
vertical-align: middle;
width: 200px;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .tile .details {
padding: 10px 0;
font-size: 12px;
line-height: 16px;
color: #767676;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .name_container,
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .category_container,
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .date_range_container,
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .price {
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .name_container {
font-size: 14px;
line-height: 18px;
color: #000a12;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .date_range_container .ui_icon {
padding-right: 4px;
color: #00a680;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .price {
color: #000a12;
display: inline-block;
font-size: 14px;
line-height: 18px;
text-align: right;
margin-top: 6px;
}
DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .price .fromPrice {
font-weight: bold;
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget,
.tablet_desktop DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget {
width: calc((100% - 36px) / 4);
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget:first-child,
.tablet_desktop DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget:first-child {
margin-left: 0;
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget:last-child,
.tablet_desktop DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget:last-child {
margin-right: 0;
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .details,
.tablet_desktop DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .details {
font-size: 14px;
line-height: 18px;
}
.desktop_web DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .name_container,
.tablet_desktop DIV.prw_rup.prw_shelves_ticketed_event_performer_shelf_item_widget .name_container {
font-size: 16px;
line-height: 20px;
}
DIV.ppr_rup.ppr_priv_attraction_returning_users .urgencyMessageWrapper > .ui_section {
margin: 16px 0 0 0;
padding: 16px;
display: -ms-flexbox;
display: -webkit-box;
display: -moz-box;
display: -webkit-flex;
display: flex;
border-width: 1px;
border-style: solid;
border-color: #e5e5e5;
}
DIV.ppr_rup.ppr_priv_attraction_returning_users .urgencyMessageWrapper .urgencyMessage {
font-size: 14px;
display: block;
-webkit-box-flex: 1;
-moz-box-flex: 1;
-webkit-flex: 1 1 auto;
-ms-flex: 1 1 auto;
flex: 1 1 auto;
line-height: 24px;
}
DIV.ppr_rup.ppr_priv_attraction_returning_users .urgencyMessageWrapper.hidden {
display: none;
}
DIV.ppr_rup.ppr_priv_attraction_returning_users .ui_icon {
display: block;
-webkit-box-flex: 0;
-moz-box-flex: 0;
-webkit-flex: 0 0 auto;
-ms-flex: 0 0 auto;
flex: 0 0 auto;
font-size: 14px;
line-height: 24px;
}
DIV.ppr_rup.ppr_priv_attraction_returning_users .ui_icon.close {
color: #000;
cursor: pointer;
display: inline;
}
DIV.ppr_rup.ppr_priv_attraction_returning_users .ui_icon.special-offer-45deg {
color: #ff6500;
font-size: 24px;
line-height: 28px;
padding: 0 5px 0 0;
}
DIV.ppr_rup.ppr_priv_trip_planner {
position: relative;
background-color: #fff;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
DIV.ppr_rup.ppr_priv_trip_planner .corgi_container {
width: 100%;
max-width: none;
padding: 0;
}
DIV.ppr_rup.ppr_priv_trip_planner .gray-bg {
background: #f2f2f2;
}
@media (min-width: 768px) {
DIV.ppr_rup.ppr_priv_trip_planner .gray-bg {
margin-bottom: -1px;
}
}
DIV.ppr_rup.ppr_priv_trip_planner .hidden {
display: none;
}
DIV.ppr_rup.ppr_priv_trip_planner_h1 .adjust-for-heading {
margin-bottom: -12px;
}
DIV.ppr_rup.ppr_priv_trip_planner_h1 .heading {
font-size: 11px;
line-height: 15px;
color: #767676;
text-align: right;
float: right;
}
DIV.ppr_rup.ppr_priv_trip_planner_h1 .heading_name {
display: block;
padding: 12px;
font-weight: bold;
font-size: 32px;
line-height: 36px;
color: #000a12;
text-align: center;
white-space: nowrap;
max-width: 100%;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_trip_planner_h1 .heading_name {
font-size: 18px;
line-height: 22px;
}
}
DIV.ppr_rup.ppr_priv_trip_planner_h1 .ttdBanner {
font-size: 16px;
line-height: 20px;
color: #4a4a4a;
text-align: center;
padding: 12px 12px 24px;
}
DIV.ppr_rup.ppr_priv_trip_planner_h1 .ttdBanner .ui_icon {
padding-right: 4px;
color: #767676;
}
DIV.ppr_rup.ppr_priv_trip_planner_h1 .ttdBanner .element {
margin: 0 4px;
}
.a_gray_background DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header {
margin: 10px auto;
}
.a_gray_background DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.bottom_tight {
margin: 10px auto;
}
.ui_container DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header {
padding-top: 12px;
padding-bottom: 12px;
margin: 0;
}
@media (max-width: 767px) {
.ui_container DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header {
padding: 16px 0;
}
}
.shoppingcart DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.ui_container {
max-width: 100%;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header {
margin: 18px auto;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.ui_container {
margin: 0 auto;
padding-top: 25px;
padding-bottom: 25px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.bottom_tight {
margin: 25px 0 10px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.top_tight {
margin: 0 0 25px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.mobile_small {
margin: 0;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.bottom_none {
padding-bottom: 0;
margin-bottom: 0;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.home_page {
padding-top: 25px;
padding-bottom: 0;
margin-bottom: -10px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.promo_shopping_cart {
border-width: 0 0 1px;
border-style: solid;
border-color: #e5e5e5;
margin: 0;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header {
margin: 12px 16px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_header.home_page {
padding-top: 12px;
}
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content {
background-color: #fff;
padding: 16px 12px 16px 16px;
font-size: 16px;
line-height: 20px;
border-width: 1px;
border-style: solid;
border-color: #e5e5e5;
display: flex;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .centered {
text-align: center;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .spacer {
flex: 1 0 auto;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .cta_default {
display: none;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .mobile_small .attraction_promo_content {
padding: 0;
border-width: 1px 0;
border-style: solid;
border-color: #e5e5e5;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .mobile_small .attraction_promo_content .cta_small {
display: inline-flex;
margin: 15px 10px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .mobile_small .attraction_promo_content .discount:last-of-type {
margin: 0;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .promo_shopping_cart .attraction_promo_content {
border: none;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .promo_shopping_cart .attraction_promo_content .cta_container .ui_icon {
display: none;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .block {
display: inline-flex;
min-height: 19px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .savings_icon.ui_icon {
color: #ef6945;
font-size: 20px;
position: relative;
margin-right: 5px;
min-width: 20px;
top: 1px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .discount {
color: #ef6945;
font-weight: bold;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .see_terms_container {
display: inline-block;
cursor: pointer;
border-bottom: 1px dotted #767676;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .terms_title {
font-weight: bold;
font-size: 24px;
line-height: 28px;
color: #000a12;
color: #4a4a4a;
margin-bottom: 15px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .terms_title {
font-size: 16px;
line-height: 20px;
}
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .terms_highlight {
font-size: 18px;
line-height: 22px;
color: #767676;
margin-bottom: 20px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .terms_highlight span {
color: #ef6945;
font-weight: bold;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .terms_detail {
margin-top: 30px;
font-size: 11px;
line-height: 15px;
color: #4a4a4a;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card {
display: flex;
flex-direction: column;
justify-content: center;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .modal-card-body {
flex-grow: 0;
padding: 0 35px;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .modal-card .modal-card-foot {
justify-content: flex-start;
padding: 15px 35px 0;
}
}
@media (min-width: 1024px) {
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .cta_default {
display: flex;
}
DIV.ppr_rup.ppr_priv_attraction_promo_header .attraction_promo_content .cta_small {
display: none;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .attraction_overview_header {
margin-top: 32px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .attraction_overview_header {
margin: 0;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .second_nav_border {
width: 100%;
border-top: 2px solid #f2f2f2;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .second_nav_border {
border-top: none;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .flex_row {
display: flex;
align-items: center;
max-height: 46px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .flex_row {
max-height: 42px;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .tabs_container {
font-size: 16px;
padding-left: 19px;
padding-right: 19px;
height: 46px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .tabs_container {
padding-left: 10px;
padding-right: 0;
height: 42px;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .tabs {
flex-grow: 1;
overflow: auto;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .tabs {
background-color: #fff;
padding: 0;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .back_to_all_tab {
border: none;
text-align: left;
cursor: pointer;
color: #4a4a4a;
line-height: 46px;
height: 46px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .back_to_all_tab {
line-height: 42px;
height: 42px;
}
}
DIV.ppr_rup.ppr_priv_attraction_overview_header .overview_map {
display: flex;
justify-content: center;
align-items: center;
width: 186px;
height: 46px;
background: #fff url('/img2/maps/img_map.png') no-repeat;
border-width: 1px;
border-style: solid;
border-color: #e5e5e5;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_attraction_overview_header .overview_map {
display: none;
}
}
DIV.ppr_rup.ppr_priv_attraction_day_trip_shelf h2.top_attractions {
margin-bottom: 12px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .ap_filter_wrap {
position: relative;
margin: 0 20px 0 0;
padding: 0 0 12px;
border-bottom: 1px solid #e5e5e5;
font-size: 14px;
color: #4a4a4a;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .ap_filter_header {
height: auto;
padding: 23px 0 11px;
line-height: 24px;
font-size: 20px;
color: #000a12;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .ap_filter_header a {
color: inherit;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .header_text_wrap {
overflow: hidden;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .header_text {
display: inline-block;
line-height: normal;
vertical-align: middle;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .more,
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .ap_navigator,
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .jfy_checkbox {
position: relative;
padding: 6px 0 6px;
cursor: pointer;
border: none;
overflow: hidden;
text-overflow: ellipsis;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .jfy_checkbox label {
display: inline-block;
padding-left: 24px;
font-weight: normal;
cursor: pointer;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .clear_filters {
float: right;
max-width: 35%;
font-size: 12px;
text-align: right;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .clear_filters:hover .clear_filters_text {
text-decoration: underline;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .clear_filters_text {
display: inline-block;
line-height: normal;
vertical-align: middle;
color: #4a4a4a;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .times-circle-fill {
position: absolute;
left: 0;
top: 0;
width: auto;
height: auto;
font-size: 18px;
line-height: 26px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .selected_filter_wrap .jfy_checkbox {
color: #00a680;
padding: 6px 0 6px 24px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .selected_filter_wrap .jfy_checkbox label {
padding-left: 0;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .selected_filter_wrap .jfy_checkbox label:before {
display: none;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .selected_filter_wrap .jfy_checkbox a,
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .selected_filter_wrap .jfy_checkbox .taLnk {
color: #00a680;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .single_select .ui_input_checkbox label:before {
content: "";
border-radius: 1em;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .single_select .ui_input_checkbox .input_hidden:checked + .label:before {
background: #00a680;
box-shadow: inset 0 0 0 0.25em #fff;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .language-filter-test-modal .modal-card {
width: 490px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .language-filter-test-modal .modal-card .modal-card-head {
padding-bottom: 14px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .language-filter-test-modal .modal-card .modal-card-head .modal-card-title {
font-size: 20px;
line-height: 24px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .language-filter-test-modal .modal-card .modal-card-body {
font-size: 14px;
line-height: 18px;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .language-filter-test-modal .modal-card .modal-card-foot {
padding-top: 45px;
justify-content: flex-start;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity label.popular_themes:before {
border-radius: 1em;
}
DIV.ppr_rup.ppr_priv_attraction_filters_clarity .navigation_removed {
padding-top: 0;
}
DIV.prw_rup.prw_common_centered_image {
height: 100%;
}
DIV.prw_rup.prw_common_centered_image .imgWrap {
display: block;
position: relative;
width: 100%;
height: 100%;
overflow: hidden;
}
DIV.prw_rup.prw_common_centered_image .imgWrap .centeredImg:not(.lte_ie8) {
position: relative;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
}
.rtl DIV.prw_rup.prw_common_centered_image .imgWrap .centeredImg:not(.lte_ie8) {
transform: translate(50%, -50%);
-webkit-transform: translate(50%, -50%);
-moz-transform: translate(50%, -50%);
-ms-transform: translate(50%, -50%);
}
DIV.prw_rup.prw_common_centered_image .imgWrap .centeredImg:not(.lte_ie8).noscript {
position: absolute;
}
DIV.prw_rup.prw_common_centered_image .imgWrap.fixedAspect {
position: relative;
height: 0;
}
DIV.prw_rup.prw_common_centered_image .imgWrap.fixedAspect .centeredImg {
position: absolute;
}
DIV.ppr_rup.ppr_priv_curated_shopping_list_overview .header {
font-size: 24px;
font-weight: bold;
color: #000a12;
padding: 12px 0 4px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_curated_shopping_list_overview .header {
font-size: 18px;
padding-top: 18px;
}
}
@media (min-width: 768px) {
DIV.ppr_rup.ppr_priv_curated_shopping_list_overview .shopList,
DIV.ppr_rup.ppr_priv_curated_shopping_list_overview .seeMore {
padding: 0;
}
}
DIV.ppr_rup.ppr_priv_curated_shopping_list_overview .shopList {
margin-bottom: 16px;
}
DIV.ppr_rup.ppr_priv_curated_shopping_list_overview .seeMore {
margin: 30px 0;
text-align: center;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search {
-ms-flex-pack: center;
-webkit-box-pack: center;
-moz-box-pack: center;
-webkit-justify-content: center;
justify-content: center;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search .ui_button {
position: relative;
white-space: nowrap;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search .calendar {
position: static;
width: auto;
height: auto;
overflow: visible;
background: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search .ui_picker_field {
background: #fff;
border-radius: 2px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns {
padding: 12px 0 0;
margin: 0;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns {
justify-content: flex-start;
padding: 0 16px 0 0;
}
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns .wrap_column.label_column {
max-width: 30%;
width: auto;
flex-basis: auto;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns .wrap_column.label_column {
display: none;
}
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns .wrap_column.label_column .trip_search_label {
display: block;
font-weight: bold;
font-size: 16px;
line-height: 20px;
text-align: center;
white-space: nowrap;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns .wrap_column.label_column .trip_search_label.hidden {
display: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns .pax_picker_container {
padding: 8px 0;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions .trip_search.ui_columns .pax_picker_container {
display: none;
}
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .persistent_trip_search .ui_column {
padding: 8px;
flex-grow: 0;
flex-basis: auto;
display: flex;
justify-content: center;
align-items: center;
white-space: nowrap;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .persistent_trip_search .ui_column.date_picker_container {
flex-basis: 350px;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions .persistent_trip_search .ui_column {
padding: 0 0 0 16px;
}
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field:after {
content: "";
background: rgba(255, 255, 255, 0.7);
display: block;
position: absolute;
top: -1px;
bottom: -1px;
left: -9px;
right: -1px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field.focused:after,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field.highlight:after,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field:hover:after {
background: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field.focused .pickerType.ui_icon,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field.highlight .pickerType.ui_icon,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field:hover .pickerType.ui_icon {
color: #00a680;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field.focused[data-datetype="CHECKOUT"] .pickerType.ui_icon,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field.highlight[data-datetype="CHECKOUT"] .pickerType.ui_icon,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field:hover[data-datetype="CHECKOUT"] .pickerType.ui_icon {
color: #ef6945;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field .pickerType.ui_icon,
DIV.ppr_rup.ppr_priv_trip_search_attractions .dim .ui_picker_field[data-datetype="CHECKOUT"] .pickerType.ui_icon {
color: #767676;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_picker_field[data-datetype="CHECKOUT"] .pickerType.ui_icon {
color: #ef6945;
}
@media (min-width: 1024px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions :not(.fixed) > .ui_columns.wrap_label.delineationBelow {
padding-bottom: 24px;
}
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions .pickerType {
margin: -2px 5px 0 5px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .picker-text {
margin: 0;
}
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_picker {
color: #4a4a4a;
padding: 0;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .pickerType {
margin: -2px 10px 0 8px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_column.date_picker {
width: 64%;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_column.guest_picker {
width: 36%;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_columns.stacked-tablet {
display: block;
margin: 0;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_columns.stacked-tablet > .ui_column {
padding: 0;
margin: 16px 0;
display: block;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_columns.wrap_label {
margin: 0;
padding-bottom: 10px;
-webkit-flex-wrap: wrap;
-moz-flex-wrap: wrap;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_columns.wrap_label .wrap_column {
margin-bottom: -12px;
max-width: 900px;
width: 100%;
-ms-flex: 1;
-webkit-box-flex: 1;
-moz-box-flex: 1;
-webkit-flex: 1 1 auto;
flex: 1 1 auto;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .ui_columns.wrap_label .wrap_column.extra_width {
max-width: 950px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .unified-picker {
display: inline-block;
outline: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .unified-picker.hidden {
display: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions #PERSISTENT_TRIP_SEARCH_BAR.fixed {
position: fixed;
position: -ms-device-fixed;
z-index: 9990;
top: 0;
right: 0;
left: 0;
padding: 0;
margin: 0;
background-color: #fff;
box-shadow: 0 1px 8px rgba(0, 0, 0, 0.2);
}
DIV.ppr_rup.ppr_priv_trip_search_attractions #PERSISTENT_TRIP_SEARCH_BAR.fixed .trip_search.ui_columns {
padding: 8px 0;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .noDates .unified-picker:first-child {
margin-left: 312px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .noDates.collapsed-fixed-datepicker .unified-picker:first-child {
margin-left: 0;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap .explain {
color: #fff;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap .explain .ages_change {
color: inherit;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap.selecting .explain {
color: #767676;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap.selecting .explain .ages_change {
color: inherit;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap.selecting .picker-inner {
color: #000a12;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap.selecting .picker-inner .ui_icon {
font-size: 12px;
line-height: 16px;
color: inherit;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap.selecting .picker-dropdown .picker-label {
color: #000a12;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .fixed .ages-wrap.selecting .picker-dropdown .picker-label .ui_icon {
color: inherit;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .calendar-inline-container {
padding: 6px 16px 0;
background-color: #fff;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .calendar-inline-container:empty {
display: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .calendar-inline-container .unified-picker {
display: block;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .search_typeahead.error input::-webkit-input-placeholder {
color: #d80007;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .search_typeahead.error input:-moz-placeholder {
color: #d80007;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .search_typeahead.error input::-moz-placeholder {
color: #d80007;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .search_typeahead.error input:-ms-input-placeholder {
color: #d80007;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .search_typeahead.error .ui_icon.typeahead_icon {
color: #d80007;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .clear_dates_text {
font-size: 12px;
line-height: 16px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .clear_dates {
margin-top: 12px;
}
@media (min-width: 768px) {
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .clear_dates {
margin-top: 0;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .pickerType {
margin: -2px 5px 0 5px;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .picker-text {
margin: 0;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .is-hidden-mobile {
display: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .trip_search.ui_columns {
justify-content: flex-start;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .trip_search .wrap_column.label_column {
display: none;
}
DIV.ppr_rup.ppr_priv_trip_search_attractions .tabletMapOpen .persistent_trip_search .ui_column {
padding: 0 0 0 16px;
}
}
DIV.prw_rup.prw_datepickers_attraction_range_dates {
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
display: -ms-flexbox;
display: -webkit-box;
display: -moz-box;
display: -webkit-flex;
display: flex;
height: 100%;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field {
-ms-flex: 1;
-webkit-box-flex: 1;
-moz-box-flex: 1;
-webkit-flex: 1 1 auto;
flex: 1 1 auto;
display: inline-block;
height: 100%;
margin-left: 8px;
border-radius: 2px;
overflow: hidden;
cursor: pointer;
outline: none;
/* define color variants */
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:first-child {
margin-left: 0;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:first-child .picker-body {
margin-left: 8px;
border-left-width: 0;
box-shadow: -8px 0 0 #00a680;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:first-child .picker-body .picker-icon {
color: #00a680;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:first-child.focused .picker-body {
border-color: #00a680;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:first-child.focused .picker-body .picker-icon {
color: #00a680;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:nth-child(2) .picker-body {
margin-left: 8px;
border-left-width: 0;
box-shadow: -8px 0 0 #ef6945;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:nth-child(2) .picker-body .picker-icon {
color: #ef6945;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:nth-child(2).focused .picker-body {
border-color: #ef6945;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field:nth-child(2).focused .picker-body .picker-icon {
color: #ef6945;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-body {
height: 100%;
height: 30px;
background: #fff;
border: 1px solid #d6d6d6;
border-radius: 2px;
box-sizing: border-box;
white-space: nowrap;
padding: 2px 0;
display: flex;
min-height: 36px;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-body:before {
content: "";
display: inline-block;
vertical-align: middle;
height: 100%;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-icon-container {
display: flex;
align-items: center;
justify-content: center;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-icon {
margin: -3px 2px 0 8px;
font-size: 20px;
color: #767676;
vertical-align: middle;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-text {
display: flex;
margin: 0 6px;
flex-direction: column;
justify-content: center;
align-items: center;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field-label {
display: block;
font-size: 11px;
line-height: normal;
color: #767676;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-label {
display: block;
font-size: 14px;
font-weight: bold;
line-height: 20px;
}
@media (max-width: 1023px) {
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-icon {
display: inline-block;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-field-label {
font-size: 12px;
}
DIV.prw_rup.prw_datepickers_attraction_range_dates .picker-label {
font-size: 13px;
}
}
DIV.prw_rup.prw_common_form_submit {
position: relative;
flex-basis: auto;
}
DIV.prw_rup.prw_common_form_submit.loading .form_submit {
color: transparent !important;
}
DIV.prw_rup.prw_common_form_submit.loading .ui_loader {
display: flex;
}
DIV.prw_rup.prw_common_form_submit .form_submit.hidden {
display: none;
}
DIV.prw_rup.prw_common_form_submit button.disabled {
pointer-events: none;
}
DIV.prw_rup.prw_common_form_submit .ui_loader {
display: none;
}
@media (max-width: 767px) {
DIV.prw_rup.prw_common_form_submit .submit_text {
display: block;
}
DIV.prw_rup.prw_common_form_submit .submit_icon {
display: none;
}
}
@media (min-width: 768px) {
DIV.prw_rup.prw_common_form_submit .submit_text {
display: none;
}
DIV.prw_rup.prw_common_form_submit .submit_icon {
display: inline-block;
}
}
@media (min-width: 1024px) {
DIV.prw_rup.prw_common_form_submit .submit_text {
display: block;
}
DIV.prw_rup.prw_common_form_submit .submit_icon {
display: none;
}
}
DIV.prw_rup.prw_common_form_submit .form_submit {
display: block;
margin: auto;
}
.a_gray_background DIV.ppr_rup.ppr_priv_attraction_coverpage .attractions_coverpage_widget {
background-color: #fff;
padding: 15px;
margin: 16px 0;
border-width: 1px;
border-style: solid;
border-color: #e5e5e5;
}
DIV.ppr_rup.ppr_priv_attraction_coverpage .attractions_coverpage_widget {
border-width: 0 0 1px;
border-style: solid;
border-color: #e5e5e5;
border-bottom: 1px solid #e5e5e5;
}
DIV.ppr_rup.ppr_priv_attraction_coverpage .attractions_coverpage_widget .gBrandingText {
font-size: 12px;
line-height: 16px;
font-weight: normal;
color: #767676;
padding-right: 4px;
float: right;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_container {
margin-bottom: 8px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_container .top_picks_section {
margin-bottom: 15px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_section .section_header {
margin-bottom: 8px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .section_header .section_title {
font-size: 16px;
font-weight: bold;
margin-top: 18px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .section_title .see_more {
color: #006699;
cursor: pointer;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .section_title .see_more:hover {
text-decoration: underline;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_section .tile_container {
margin-top: 15px;
white-space: nowrap;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_section .tile_container:only-of-type {
margin-top: 0;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .tile {
width: 32%;
display: inline-block;
background-color: #FFF;
-webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
-moz-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
margin: 0 0.66%;
position: relative;
opacity: 1;
transition: opacity linear 100ms;
white-space: normal;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .tile:hover .thumb {
opacity: .9;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .tile:first-child {
margin-left: 0;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .tile .thumbCrop {
cursor: pointer;
display: inline-block;
height: 111px;
overflow: hidden;
width: 100%;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .tile .thumbCrop img {
height: 187px;
margin-top: -38px;
vertical-align: middle;
width: 280px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .tile .product_details {
padding: 10px 15px 12px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .name_and_price .product_name {
color: #006699;
cursor: pointer;
float: left;
font-size: 14px;
font-weight: bold;
height: 48px;
overflow: hidden;
width: 75%;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .name_and_price .price {
float: right;
font-size: 12px;
height: 36px;
width: 25%;
text-align: right;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .name_and_price .price span {
font-size: 20px;
font-weight: bold;
text-align: right;
display: block;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .price .savings {
text-decoration: line-through;
color: #E46715;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .price .savings .strikethruPrice {
font-size: 12px;
color: black;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .product_details .rating_container {
display: inline-block;
height: 37px;
margin-top: 6px;
width: 100%;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .rating_container .rating_and_reviews {
float: left;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .rating_and_reviews .rating {
margin-bottom: 6px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .ui_bubble_rating {
font-size: 14px;
margin-left: 1px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .rating_and_reviews .reviews {
font-size: 12px;
color: #999;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .rating_container .more_info {
float: right;
padding-top: 5px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .rating_and_reviews .button_inner {
padding: 0 8px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .clear {
clear: both;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_container .see_more_groups {
text-align: center;
font-family: Arial, sans-serif;
color: #006699;
font-size: 15px;
font-weight: 700;
width: 98%;
border-bottom: 2px solid #e9e8e2;
line-height: 1px;
margin: 24px auto 24px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_container .see_more_groups span {
background: #f4f3f0;
padding: 0 10px;
cursor: pointer;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_container .see_more_groups span:hover {
text-decoration: underline;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories h2.top_attractions {
margin-bottom: 12px;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label {
position: absolute;
height: 24px;
line-height: 24px;
left: -8px;
background-color: #00a680;
color: #fff;
font-style: italic;
font-family: "Georgia Italic", "Georgia", "Times New Roman", "Century Schoolbook L", serif;
font-size: .9183em;
font-weight: normal;
text-align: center;
padding: 0 15px 0 20px;
top:  5px;
border-radius: 0;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label.sell_out, DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label.special_offer {
background-color: #e26726;
font-family: "Arial", "Helvetica Neue", "Helvetica", sans-serif;
font-style: normal;
z-index: 90;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label:before {
content: "";
display: block;
position: absolute;
top: 100%;
left: 0;
width: 0;
border-style: solid;
border-color: transparent #333;
border-width: 0 8px 8px 0;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label.sell_out:after,
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label.special_offer:after {
border-color: #e26726 transparent;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label:after {
content: "";
display: block;
position: absolute;
top: 0;
height: 100%;
left: 100%;
width: 0;
border-style: solid;
border-color: #00a680 transparent;
border-width: 24px 10px 0 0;
}
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label.sell_out:after,
DIV.ppr_rup.ppr_priv_attraction_viator_categories .attraction_offer_label.special_offer:after {
border-color: #e26726 transparent;
}
.attractions_clarity DIV.ppr_rup.ppr_priv_attraction_viator_categories .section_title,
.attractions_clarity DIV.ppr_rup.ppr_priv_attraction_viator_categories .section_title .see_more,
.attractions_clarity DIV.ppr_rup.ppr_priv_attraction_viator_categories .name_and_price .product_name,
.attractions_clarity DIV.ppr_rup.ppr_priv_attraction_viator_categories .top_picks_container .see_more_groups,
.attractions_clarity DIV.ppr_rup.ppr_priv_attraction_viator_categories a
{
color: #333 !important;
}
.attractions_clarity DIV.ppr_rup.ppr_priv_attraction_viator_categories .see_more_groups span {
background: #fff !important;
}
DIV.ppr_rup.ppr_priv_ip_redir {
display: none;
position: relative;
padding: 12px 48px;
background-color: #fff;
}
@media (max-width: 767px) {
DIV.ppr_rup.ppr_priv_ip_redir {
padding: 12px 16px 4px;
}
DIV.ppr_rup.ppr_priv_ip_redir.smart-banner-top {
top: 80px;
}
}
DIV.ppr_rup.ppr_priv_ip_redir .ui_alert {
position: relative;
margin: 0;
font-size: 14px;
line-height: 18px;
}
DIV.ppr_rup.ppr_priv_ip_redir .ui_icon.times {
position: absolute;
top: 2px;
right: 2px;
color: #00a680;
font-size: 18px;
cursor: pointer;
}
DIV.ppr_rup.ppr_priv_ip_redir .continue {
margin-left: 5px;
font-size: 12px;
color: #069;
cursor: pointer;
}
DIV.ppr_rup.ppr_priv_ip_redir .ui_checkbox {
display: block;
margin-top: 3px;
cursor: pointer;
}
</style>
<style type="text/css">
body{}
#history_carousel {
margin: 0 14px 14px;
}
</style>
<!-- web650a.a.tripadvisor.com -->
<!-- PRODUCTION -->
<!-- releases/PRODUCTION_1398062_20191220_0400 -->
<!-- Rev 1398137 -->
<script type="text/javascript" src="https://static.tacdn.com/js3/src/trsupp-v23584999669a.js"></script>
<script type="text/javascript">
if(typeof define !== 'undefined') {
define('page-model', [], function () {
var model = {"session":{"analyticsInfo":{"promosStringForCurrentPageview":null,"cv47Key":null,"cv47Value":null,"evtCookiePUID":null,"cv1Key":null,"cv1Value":null,"memberState":"-","enabled":true,"pageview":true,"trackerId":"UA-30198665-1","campaignParams":null,"hasEvent":false,"customVariablesForSession":[{"variable":"Member","scope":3,"name":"Member","value":"-","slot":2},{"variable":"EntryGeo","scope":3,"name":"EntryGeo","value":"Luxembourg Province-188657","slot":3},{"variable":"EntryCountry","scope":3,"name":"EntryCountry","value":"Belgium-188634","slot":4},{"variable":"EntryServlet","scope":3,"name":"EntryServlet","value":"Attractions","slot":5},{"variable":"Pool","scope":3,"name":"Pool","value":"B","slot":6},{"variable":"Slice","scope":3,"name":"Slice","value":"2491","slot":7},{"variable":"MCID","scope":3,"name":"MCID","value":"Free Google-10568","slot":18},{"variable":"PageType","scope":3,"name":"PageType","value":"Desktop Page","slot":21},{"variable":"DeviceType","scope":3,"name":"DeviceType","value":"Desktop","slot":22},{"variable":"IPGeo","scope":3,"name":"IPGeo","value":"Dityatki-12353759","slot":23},{"variable":"ProductType","scope":3,"name":"ProductType","value":"Browser","slot":24},{"variable":"WebServer","scope":3,"name":"WebServer","value":"web650a","slot":48}],"jsonForCurrentPageview":"{\"cv\":[[\"_deleteCustomVar\",1],[\"_deleteCustomVar\",47],[\"_setCustomVar\",12,\"Country\",\"Belgium-188634\",3],[\"_setCustomVar\",19,\"Region\",\"The Ardennes-188652\",3],[\"_setCustomVar\",25,\"Continent\",\"Europe-4\",3],[\"_setCustomVar\",20,\"PP\",\"--\",3],[\"_deleteCustomVar\",11],[\"_deleteCustomVar\",13],[\"_deleteCustomVar\",14],[\"_deleteCustomVar\",8],[\"_deleteCustomVar\",10]],\"url\":\"/Attractions\"}","pagePropertyStringForCurrentPageview":"","jsonForEvent":null,"domain":""},"lazyObf":"{\"given\":\"abcdefghijklmopqrsuvwxyzABCDEFGHIJKLMOPQRSUVWXYZ1234567890\", \"replace\":\"mopqrsuvwxyzabcdefghijklSUVWXYZABCDEFGHIJKLMOPQR4567890123\",\"token\":\"###Obf###\",\"validator\":\"<!-- amSZ03nt -->\"}","pageServlet":"Attractions","sessionId":"74CEA223E2F7FF7360867645B0B0FF33","cdnHost":"https://static.tacdn.com","quickSave":true,"isExternalReferral":false,"useERUserTracking":true,"cookieDomain":".tripadvisor.com","uid":"Xf9oMwokIH0AAMxKCbEAAAEt","hasReferral":false,"posLocale":"en_US","MEDIA_HTTP_BASE":"https://media-cdn.tripadvisor.com/media/","user_id":"","loggedIn":false,"securelyLoggedIn":false},"DUST_GLOBAL":{"IS_IELE8":false,"LOCALE":"en_US","IS_IE10":false,"CDN_HOST":"https://static.tacdn.com","DEVICE":"desktop","IS_RTL":false,"LANG":"en","DEBUG":false,"READ_ONLY":false,"POS_COUNTRY":191},"JS_SECURITY_TOKEN":"TNI1625!ACBoyHvzcIREdcCZfLwygIkNM8jf9r0sImUEDAMVKp54uGyYOCjknXQfOwTz0RiDt4NqkILsGjE8bjoqqlX+POfbLd+/fc5BCQetSpVn9fVdFVWRzWO38ws94n8qGEb0Y8817YBJQVJKG2b712EjGxA2R5qBH95nWtFXAlDGwObQ","GEO_ID":"188657","hotelsInGeo":"100","LOC_ID":"188657","isMobile":false,"isRtl":false};
return model;
});
}
</script>
<link rel="next" href="/Attractions-g188657-Activities-c56-oa30-Luxembourg_Province_The_Ardennes_Wallonia.html"/>
</head>
<body id="BODY_BLOCK_JQUERY_REFLOW" class=" full_width_page content_blocks desktop_web attractions_lists_redesign attractions_lists_redesign_maps_above_filters attractions_clarity ltr domn_en_US lang_en globalNav2011_reset rebrand_2017 css_commerce_buttons flat_buttons sitewide xo_pin_user_review_to_top a_gray_background track_back" data-scroll='OVERVIEW' data-navArea-metaType="QC_Meta_Mini" data-navArea-placement="Unknown">
<div id="fb-root"></div>
<!--trkP:sync_rt_cookie-->
<!-- PLACEMENT sync_rt_cookie -->
<DIV ID="taplc_sync_rt_cookie_0" class="ppr_rup ppr_priv_sync_rt_cookie" data-placement-name="sync_rt_cookie">
<script type="text/javascript">require(["ta/Core/TA.Store"], function(taStore) {taStore.store("retargeting.rtURL", '//' + 'www.tamgrt.com/RT');taStore.store("retargeting.drs", 'ABC.7*AFIL.61*ATTPromo.34*AUC.98*BBML.54*BMP.30*BRDTTD.22*Brand.41*CAKE.5*CAR.17*COM.5*CRS.11*Community.97*Content.7*CoreX.41*EATPIZZA.72*EID.15*EXP.71*Engage.73*FDP.79*FDS.46*FDU.96*FLTMERCH.37*FLTREV.54*Filters.75*Flights.98*HRATF.75*HSX.6*HSXB.41*IBEX.98*ING.64*INT1.70*INT2.67*ITR.20*L10N.3*ML.67*ML6.91*MM.40*MOBILEAPP.-1*MOF.64*MPS.66*MTA.32*Me2.78*Mem.95*Mobile.60*MobileCore.34*Notifications.25*Other.92*P13N.39*PIE.86*PLS.34*POS.3*PRT.98*RDS1.17*RDS2.37*RDS3.64*RDS4.70*RDS5.95*RET.57*REV.34*REVB.4*REVH.45*REVSD.31*REVSP.6*REVXS.70*RNA.21*RSE1.90*RSE2.90*Rooms.94*S3PO.93*SD40.95*SE2O.88*SEM.41*SEO.28*SORT1.12*Sales.28*Search.90*SiteX.33*Surveys.27*T4B.20*TGT.0*TRP.49*TTD.35*TX.97*Timeline.51*VP.75*VR.18*YM.80*YMB.16');taStore.store("retargeting.uvm", '0.5470317949410499');taStore.store("retargeting.dbi", 'false');taStore.store("retargeting.geoId", '188657');});</script><script type="text/javascript">(function(window, document) {"use strict";var SYNC_AGE = 1000*60*30; var WHITELIST_AGE = 1000*60*60*24; var HTTP_COOKIE = "TART";var SYNC_COOKIE = "SRT";var WHITELIST_COOKIE = "WLRedir";var MSG_PREFIX = "COOKIESYNC:";var _isNewRTCookie = true;var _tart = 'enc%3ArZJAH%2F7lU2sLKrPpbrmjxsZRD29tE1MjExryDtzJ%2FlrrvvJqst08Tpr8Vp2KhzRIRsNr41gHGgI%3D';if (_hasCookie(HTTP_COOKIE) && !_isNewRTCookie) { return; } var syncFrame = document.createElement('iframe');function _on(element, event, callback) {var legacy = !('addEventListener' in document),   listen = legacy ? 'attachEvent' : 'addEventListener';if (legacy) { event = 'on' + event; }element[listen](event, callback);}function _off(element, event, callback) {var legacy = !('addEventListener' in document),   detach = legacy ? 'detachEvent' : 'removeEventListener';if (legacy) { event = 'on' + event; }element[detach](event, callback);}function _setCookie(name, value, age) {document.cookie = name + '=' + value +';domain=' + window.location.hostname +';path=/' +';expires=' + new Date(new Date().getTime() + age).toUTCString();}function _hasCookie(name) {return !!document.cookie.match(name + '=[^;]+');}function handleMessage(e) {if (!syncFrame || !e || !e.data || !e.data.indexOf || e.data.indexOf(MSG_PREFIX) !== 0) { return; }var cookieValue = e.data.substring(MSG_PREFIX.length);if (cookieValue) {_setCookie(SYNC_COOKIE, cookieValue, SYNC_AGE);} else if(!_hasCookie(WHITELIST_COOKIE)) {_setCookie(WHITELIST_COOKIE, "requested", WHITELIST_AGE);}_off(window, 'message', handleMessage);document.body.removeChild(syncFrame);syncFrame = null;}function _setupSyncFrame() {if (!syncFrame) { return; }var src = window.location.protocol + '//' + 'www.tamgrt.com/RT' + "?-sync=true&q=" + new Date().getTime();if(_isNewRTCookie) {if(_tart) {src += '&rid=' + _tart;}}syncFrame.src = src;document.body.appendChild(syncFrame);}_on(window, 'message', handleMessage);syncFrame.style.display = 'none';syncFrame.id = 'ta_cookie_sync';syncFrame.name = new Date().getTime();_setupSyncFrame();})(window, document);</script></DIV>
<!--etk-->
<div id="iframediv"></div>
<!--trkP:ip_redir-->
<!-- PLACEMENT ip_redir -->
<DIV ID="taplc_ip_redir_0" class="ppr_rup ppr_priv_ip_redir" data-placement-name="ip_redir">
<div class="ui_alert"data-action="prst"data-redir-url="https://www.tripadvisor.ru/LangRedirect?auto=1&amp;TAPD=tripadvisor.ru&amp;origin=null&amp;pool=B&amp;returnTo=/Attractions-g188657-Activities-c56-Luxembourg_Province_The_Ardennes_Wallonia.html&amp;m=12082"data-redir-domain=".tripadvisor.ru"data-current-domain=".tripadvisor.com"><span class="ui_icon times"></span><span class="header">А Вы в курсе, что TripAdvisor доступен и на <b>русском языке</b>?</span><span class="continue">Переключить на русский</span><div class="ui_checkbox"><input id="langprefcb" type="checkbox" checked="checked"><label for="langprefcb">Запомните свой выбор</label></div></div></DIV>
<!--etk-->
<div id="PAGE" class=" non_hotels_like desktop scopedSearch">
<div class="masthead ">
<!--trkP:global_nav-->
<!-- PLACEMENT global_nav -->
<DIV ID="taplc_global_nav_0" class="ppr_rup ppr_priv_global_nav" data-placement-name="global_nav">
<div class="global-nav-no-refresh" id="global-nav-no-refresh-1"><!-- PLACEMENT global_nav_dropdowns --><div id="taplc_global_nav_dropdowns_0" class="ppr_rup ppr_priv_global_nav_dropdowns" data-placement-name="global_nav_dropdowns"><div class="global-nav-overlays-container"></div><ul class="global-nav-links-menu-more"></ul><ul class="hidden global_nav_dropdowns_dust"><li class="tabItem dropDown jsNavMenu"><ul class="subNav masthead-dropdown-tourism"><li class="subItemDust"><a href="/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html" class="subLink">Luxembourg Province Tourism</a></li><li class="subItemDust"><a href="/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Hotels</a></li><li class="subItemDust"><a href="/Hotels-g188657-c2-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Bed and Breakfast</a></li><li class="subItemDust"><a href="/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html" class="subLink">Luxembourg Province Vacation Rentals</a></li><li class="subItemDust"><a href="/Vacation_Packages-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html" class="subLink">Luxembourg Province Vacation Packages</a></li><li class="subItemDust"><a href="/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html" class="subLink">Flights to Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Luxembourg Province Restaurants</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to Do in Luxembourg Province</a></li><li class="subItemDust"><a href="/ShowForum-g188657-i1966-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Luxembourg Province Travel Forum</a></li><li class="subItemDust"><a href="/LocationPhotos-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Luxembourg Province Photos</a></li><li class="subItemDust"><a href="/LocalMaps-g188657-Luxembourg_Province-Area.html" class="subLink">Luxembourg Province Map</a></li><li class="subItemDust"><a href="/Travel_Guide-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Luxembourg Province Travel Guide</a></li></ul></li><li class="tabItem dropDown jsNavMenu"><ul class="subNav masthead-dropdown-hotels"><li class="subItemDust"><a href="/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">All Luxembourg Province Hotels</a></li><li class="subItemDust"><a href="/SmartDeals-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotel-Deals.html" class="subLink">Luxembourg Province Hotel Deals</a></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">By Hotel Type</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-htype"><li class="subItemDust"><a href="/Hotels-g188657-zfd2-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Motels</a></li><li class="subItemDust"><a href="/Hotels-g188657-c3-zff29-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Campgrounds</a></li><li class="subItemDust"><a href="/Hotels-g188657-c3-zff26-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Hostels</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff4-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Family Hotels</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff7-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Business Hotels</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff3-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Romantic Hotels in Luxembourg Province</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff13-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Spa Resorts</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff12-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Luxury Hotels</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff8-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Resorts</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff24-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Green Hotels</a></li><li class="subItemDust"><a href="/Hotels-g188657-zff11-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Ski-In / Ski-Out Hotels</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">By Hotel Class</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-hclass"><li class="subItemDust"><a href="/Hotels-g188657-zfc4-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">4-stars Hotels in Luxembourg Province</a></li><li class="subItemDust"><a href="/Hotels-g188657-zfc3-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">3-stars Hotels in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">By Hotel Brand</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-brand"><li class="subItemDust"><a href="/Hotels-g188657-zfb13297-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Logis Hotels in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Popular Amenities</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-amens"><li class="subItemDust"><a href="/Hotels-g188657-zfa7-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Hotels with Free Parking</a></li><li class="subItemDust"><a href="/Hotels-g188657-zfa9-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Pet Friendly Hotels in Luxembourg Province</a></li><li class="subItemDust"><a href="/Hotels-g188657-zfa3-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html" class="subLink">Luxembourg Province Hotels with Pools</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Popular Luxembourg Province Categories</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-hcat"><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Pets-Allowed-Cheap-Hotels-zfp13548908.html" class="subLink">Luxembourg Province Cheap Pet Friendly Hotels</a></li><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Pets-Allowed-Campground-zfp13588897.html" class="subLink">Luxembourg Province Pet Friendly Campgrounds</a></li><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Clean-Hotels-zfp14928949.html" class="subLink">Luxembourg Province Clean Hotels</a></li><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Pets-Allowed-Motel-zfp15239966.html" class="subLink">Luxembourg Province Pet Friendly Motels</a></li><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Family_friendly-Resort-zfp15689034.html" class="subLink">Family Resorts in Luxembourg Province</a></li><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Hot-Tub-Hotels-Motels-zfp16543589.html" class="subLink">Luxembourg Province Hotels with Hot Tubs</a></li><li class="subItemDust"><a href="/HotelsList-Luxembourg_Province-Charming-Hotels-zfp12127085.html" class="subLink">Charming Hotels in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Near Landmarks</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-nattr"><li class="subItemDust"><a href="/HotelsNear-g188659-d6457514-Bastogne_War_Museum-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Bastogne War Museum</a></li><li class="subItemDust"><a href="/HotelsNear-g230017-d318679-Chateau_de_Bouillon-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Chateau de Bouillon</a></li><li class="subItemDust"><a href="/HotelsNear-g580121-d3560843-Old_Town_of_Durbuy-Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Old Town of Durbuy</a></li><li class="subItemDust"><a href="/HotelsNear-g188659-d523440-Mardasson_Memorial-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Mardasson Memorial</a></li><li class="subItemDust"><a href="/HotelsNear-g188659-d4068277-Bastogne_Barracks-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Bastogne Barracks</a></li><li class="subItemDust"><a href="/HotelsNear-g580121-d3501117-Adventure_Valley_Durbuy-Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Adventure Valley Durbuy</a></li><li class="subItemDust"><a href="/HotelsNear-g188659-d2359673-101_Airborne_Museum_Le_Mess_Bastogne-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near 101 Airborne Museum Le Mess - Bastogne</a></li><li class="subItemDust"><a href="/HotelsNear-g1841348-d8432024-Abbaye_d_Orval-Orval_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Abbaye d&#39;Orval</a></li><li class="subItemDust"><a href="/HotelsNear-g608692-d1821895-Orval_Abbey-Florenvill_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Orval Abbey</a></li><li class="subItemDust"><a href="/HotelsNear-g580121-d4323075-Topiary_Park-Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Topiary Park</a></li><li class="subItemDust"><a href="/HotelsNear-g580120-d2342722-Chateau_Feodal-La_Roche_en_Ardenne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Chateau Feodal</a></li><li class="subItemDust"><a href="/HotelsNear-g641801-d2691493-Grottes_de_Hotton-Hotton_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Grottes de Hotton</a></li><li class="subItemDust"><a href="/HotelsNear-g776162-d774884-Euro_Space_Center-Transinne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Euro Space Center</a></li><li class="subItemDust"><a href="/HotelsNear-g1045173-d1748685-Le_Labyrinthe_de_Barvaux_Durbuy-Barvaux_Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hotels near Le Labyrinthe de Barvaux-Durbuy</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Near Airports</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-nair"><li class="subItemDust"><a href="/HotelsNear-g188644-qBRU-Brussels.html" class="subLink">Hotels near (BRU) National Airport</a></li></ul></ul></li></ul></li><li class="tabItem dropDown jsNavMenu"><ul class="subNav masthead-dropdown-restaurants"><li class="subItemDust"><a href="/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">All Luxembourg Province Restaurants</a></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Popular Dishes</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-dishes"><li class="subItemDust"><a href="/Restaurants-g188657-zfd20191-Luxembourg_Province_The_Ardennes_Wallonia-Couscous.html" class="subLink">Best Couscous in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10678-Luxembourg_Province_The_Ardennes_Wallonia-Pasta.html" class="subLink">Best Pasta in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10922-Luxembourg_Province_The_Ardennes_Wallonia-Oysters.html" class="subLink">Best Oyster in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd20544-Luxembourg_Province_The_Ardennes_Wallonia-Cod.html" class="subLink">Best Cod in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd16554-Luxembourg_Province_The_Ardennes_Wallonia-Salad.html" class="subLink">Best Salad in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10907-Luxembourg_Province_The_Ardennes_Wallonia-Hamburger.html" class="subLink">Best Hamburgers in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10942-Luxembourg_Province_The_Ardennes_Wallonia-Tapas.html" class="subLink">Best Tapas in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd9910-Luxembourg_Province_The_Ardennes_Wallonia-Waffles_and_Crepes.html" class="subLink">Best Waffles &amp; Crepes in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd9899-Luxembourg_Province_The_Ardennes_Wallonia-Ice_Cream.html" class="subLink">Best Ice Cream in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10932-Luxembourg_Province_The_Ardennes_Wallonia-Ribs.html" class="subLink">Best Ribs in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10937-Luxembourg_Province_The_Ardennes_Wallonia-Shrimp.html" class="subLink">Best Shrimp in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd20316-Luxembourg_Province_The_Ardennes_Wallonia-Mussels.html" class="subLink">Best Mussels in Luxembourg Province</a></li><li class="subItemDust"><a href="/Restaurants-g188657-zfd10774-Luxembourg_Province_The_Ardennes_Wallonia-Fondue.html" class="subLink">Best Fondue in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Near Hotels</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-restaurantsNearHotels"><li class="subItemDust"><a href="/RestaurantsNear-g1949170-d1826030-Auberge_de_la_Ferme-Rochehaut_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Auberge de la Ferme</a></li><li class="subItemDust"><a href="/RestaurantsNear-g2368234-d11929786-Le_Florentin_Hotel-Florenville_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Le Florentin Hotel</a></li><li class="subItemDust"><a href="/RestaurantsNear-g188659-d227233-Hotel_Melba-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Hotel Melba</a></li><li class="subItemDust"><a href="/RestaurantsNear-g188659-d2140481-Le_Merceny_Motel-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Le Merceny Motel</a></li><li class="subItemDust"><a href="/RestaurantsNear-g1081534-d499846-Hotel_L_Amandier-Libramont_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Hotel L&#39;Amandier</a></li><li class="subItemDust"><a href="/RestaurantsNear-g188658-d624865-Hostellerie_du_Peiffeschof-Arlon_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Hostellerie du Peiffeschof</a></li><li class="subItemDust"><a href="/RestaurantsNear-g580119-d313869-Hotel_des_Ardennes-Corbion_sur_Semois_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Hotel des Ardennes</a></li><li class="subItemDust"><a href="/RestaurantsNear-g230017-d1014988-Panorama_Hotel-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Panorama Hotel</a></li><li class="subItemDust"><a href="/RestaurantsNear-g3181951-d2615962-Hotel_Restaurant_Beau_Sejour-Frahan_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Hotel - Restaurant Beau Sejour</a></li><li class="subItemDust"><a href="/RestaurantsNear-g580121-d1066187-Hotel_des_Comtes-Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Restaurants near Hotel des Comtes</a></li></ul></ul></li></ul></li><li class="tabItem dropDown jsNavMenu"><ul class="subNav masthead-dropdown-attractions"><li class="subItemDust"><a href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">All things to do in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zfw1-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things To Do This Weekend in Luxembourg Province</a></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav"><a href="/Attractions-g188657-Activities-c56-Luxembourg_Province_The_Ardennes_Wallonia.html" class="clickableSubLinkWithChildren">Fun &amp; Games in Luxembourg Province</a></span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-l3Fun &amp; Games"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t45-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Playgrounds in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c56-t97-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Movie Theaters in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c53-t107-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Casinos in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c56-t110-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Game &amp; Entertainment Centers in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c56-t128-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bowling Alleys in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c56-t131-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Sports Complexes in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c56-t208-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Room Escape Games in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Popular Luxembourg Province Categories</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-acat"><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c47-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Sights &amp; Landmarks in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Sights &amp; Landmarks"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t2-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Ancient Ruins in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t3-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Architectural Buildings in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t4-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Battlefields in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t6-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Castles in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t7-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Cemeteries in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t10-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Sacred &amp; Religious Sites in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t13-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Fountains in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t17-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Historic Sites in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t26-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Monuments &amp; Statues in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t34-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Neighborhoods in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t39-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Observation Decks &amp; Towers in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t122-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Farms in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t163-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Points of Interest &amp; Landmarks in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t166-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Lookouts in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c47-t175-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Churches &amp; Cathedrals in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c49-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Museums in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Museums"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t1-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Art Galleries in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t28-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Art Museums in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t30-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">History Museums in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t32-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Military Museums in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t35-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Science Museums in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t40-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Observatories &amp; Planetariums in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t161-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Specialty Museums in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c61-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Outdoor Activities in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Outdoor Activities"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t52-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Beaches in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t62-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Horseback Riding Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t78-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Cross-country Ski Areas in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t134-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Zoos in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t167-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t187-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Rentals in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t191-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Kayaking &amp; Canoeing in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t193-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">River Rafting &amp; Tubing in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t214-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bike Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t215-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Climbing Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t219-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hiking &amp; Camping Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t222-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Air Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t244-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Ski &amp; Snow Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t245-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Zipline &amp; Aerial Adventure Parks in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t270-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Stand-Up Paddleboarding in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c57-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Nature &amp; Parks in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Nature &amp; Parks"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t11-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Dams in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t45-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Playgrounds in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t52-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Beaches in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t54-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Caverns &amp; Caves in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t57-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Forests in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t58-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Gardens in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t59-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Geologic Formations in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t68-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Nature &amp; Wildlife Areas in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t70-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Parks in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t77-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Ski &amp; Snowboard Areas in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t87-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hiking Trails in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t134-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Zoos in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c57-t162-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bodies of Water in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c42-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Tours in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Tours"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c42-t139-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Sightseeing Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t167-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c42-t178-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Segway Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t187-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Rentals in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t191-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Kayaking &amp; Canoeing in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t193-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">River Rafting &amp; Tubing in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t214-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bike Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t215-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Climbing Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t219-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hiking &amp; Camping Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t222-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Air Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c42-t228-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Historical &amp; Heritage Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c42-t235-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Private Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t240-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bar, Club &amp; Pub Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t245-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Zipline &amp; Aerial Adventure Parks in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t270-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Stand-Up Paddleboarding in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c20-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Nightlife in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Nightlife"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t99-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bars &amp; Clubs in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t100-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Blues Clubs &amp; Bars in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t101-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Cigar Bars in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t170-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Coffeehouses in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t206-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Wine Bars in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t240-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bar, Club &amp; Pub Tours in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c26-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Shopping in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Shopping"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c49-t1-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Art Galleries in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c26-t140-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Factory Outlets in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c26-t143-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Shopping Malls in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c26-t144-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Gift &amp; Specialty Shops in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c26-t207-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Farmers Markets in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c36-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Food &amp; Drink in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Food &amp; Drink"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c36-t133-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Breweries in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c42-t201-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Beer Tastings &amp; Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t206-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Wine Bars in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c26-t207-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Farmers Markets in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c55-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Tours &amp; Water Sports in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Boat Tours &amp; Water Sports"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t167-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Tours in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t187-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Boat Rentals in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t191-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Kayaking &amp; Canoeing in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t193-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">River Rafting &amp; Tubing in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t270-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Stand-Up Paddleboarding in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c40-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Spas &amp; Wellness in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Spas &amp; Wellness"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c40-t127-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Spas in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c40-t129-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Health/Fitness Clubs &amp; Gyms in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c40-t250-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hammams &amp; Turkish Baths in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c40-t260-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Yoga &amp; Pilates in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c52-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Water &amp; Amusement Parks in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Water &amp; Amusement Parks"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c52-t98-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Theme Parks in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c52-t118-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Water Parks in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c60-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Traveler Resources in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Traveler Resources"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c60-t48-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Visitor Centers in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c58-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Concerts &amp; Shows in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Concerts &amp; Shows"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c20-t100-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Blues Clubs &amp; Bars in Luxembourg Province</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-c58-t116-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Theaters in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c48-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Zoos &amp; Aquariums in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Zoos &amp; Aquariums"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c61-t134-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Zoos in Luxembourg Province</a></li></ul></ul></li><li class="expandSubItemDust thirdLevelSubNav"><span class="expandSubLink thirdLevelSubNav"><a href="/Attractions-g188657-Activities-c53-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Casinos &amp; Gambling in Luxembourg Province</a></span><ul class="secondSubNav thirdLevelSubNav"><ul class="subNav masthead-dropdown-l3Casinos &amp; Gambling"><li class="subItemDust"><a href="/Attractions-g188657-Activities-c53-t107-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Casinos in Luxembourg Province</a></li></ul></ul></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Commonly Searched For in Luxembourg Province</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-attafin"><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft12159-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Honeymoon spot</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft11312-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Good for Adrenaline Seekers</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft12156-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Hidden Gems</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft12169-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Good for Couples</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft11292-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Free Entry</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft12170-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Good for Big Groups</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft11309-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Budget-friendly</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft11306-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Good for Kids</a></li><li class="subItemDust"><a href="/Attractions-g188657-Activities-zft11295-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Good for a Rainy Day</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Admission Tickets</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-atickets"><li class="subItemDust"><a href="/AttractionToursAndTickets-g188659-d6457514-Bastogne_War_Museum-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Bastogne War Museum</a></li><li class="subItemDust"><a href="/AttractionToursAndTickets-g188659-d523440-Mardasson_Memorial-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Mardasson Memorial</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Near Airports</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-anair"><li class="subItemDust"><a href="/AttractionsNear-g188644-qBRU-Brussels.html" class="subLink">Things to do near (BRU) National Airport</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Near Landmarks</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-anpoi"><li class="subItemDust"><a href="/AttractionsNear-g188659-d6457514-Bastogne_War_Museum-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Bastogne War Museum</a></li><li class="subItemDust"><a href="/AttractionsNear-g230017-d318679-Chateau_de_Bouillon-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Chateau de Bouillon</a></li><li class="subItemDust"><a href="/AttractionsNear-g580121-d3560843-Old_Town_of_Durbuy-Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Old Town of Durbuy</a></li><li class="subItemDust"><a href="/AttractionsNear-g188659-d4068277-Bastogne_Barracks-Bastogne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Bastogne Barracks</a></li><li class="subItemDust"><a href="/AttractionsNear-g580121-d3501117-Adventure_Valley_Durbuy-Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Adventure Valley Durbuy</a></li><li class="subItemDust"><a href="/AttractionsNear-g1841348-d8432024-Abbaye_d_Orval-Orval_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Abbaye d&#39;Orval</a></li><li class="subItemDust"><a href="/AttractionsNear-g641801-d2691493-Grottes_de_Hotton-Hotton_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Grottes de Hotton</a></li><li class="subItemDust"><a href="/AttractionsNear-g776162-d774884-Euro_Space_Center-Transinne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Euro Space Center</a></li><li class="subItemDust"><a href="/AttractionsNear-g1045173-d1748685-Le_Labyrinthe_de_Barvaux_Durbuy-Barvaux_Durbuy_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Le Labyrinthe de Barvaux-Durbuy</a></li></ul></ul></li><li class="expandSubItemDust secondLevelSubNav"><span class="expandSubLink secondLevelSubNav">Near Hotels</span><ul class="secondSubNav secondLevelSubNav"><ul class="subNav masthead-dropdown-attractionsNearHotels"><li class="subItemDust"><a href="/AttractionsNear-g1949170-d1826030-Auberge_de_la_Ferme-Rochehaut_Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Things to do near Auberge de la Ferme</a></li></ul></ul></li></ul></li><li class="tabItem dropDown jsNavMenu"><ul class="subNav masthead-dropdown-more"><li class="subItemDust"><a href="/Travel_Guide-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html" class="subLink">Travel Guides</a></li><li class="subItemDust"><a href="/apps" class="subLink">Apps</a></li><li class="subItemDust"><a href="/ShowUrl-a_partnerKey.1-a_url.http%3A__2F____2F__www__2E__cruisecritic__2E__com__2F__-a_urlKey.bb8a904288ee6bd29.html" class="subLink">Cruises</a></li><li class="subItemDust"><a href="/GreenLeaders" class="subLink">GreenLeaders</a></li><li class="subItemDust"><a href="/RoadTrip-g191-United_States.html" class="subLink">Road Trips</a></li></ul></li></ul></div></div><!-- PLACEMENT global_nav_component --><div id="taplc_global_nav_component_0" class="ppr_rup ppr_priv_global_nav_component" data-placement-name="global_nav_component"><div class="react-container" id='component_37' data-component-props='page-manifest' data-component='brand.header'><div><div class=""><div><div class="GoeSZwQ2"><div class="_1u3xGdS7 _1jckfS3Z"><div class="ui_container"><div class="hFL8HL-q"><div class="_351Jowk- _2AEbEk4y"><div class="brand-header-SideBar__onDarkBg--2b7rB"><div><span class="ui_icon menu-bars "></span></div></div></div><div class="_2I7WJ02w"><div class="brand-header-Logo__logoContainer--2lBDe"><div><a href="/" class="brand-header-Logo__logo--x3aMw"><img class="" src="https://static.tacdn.com/img2/branding/rebrand/TA_logo_secondary.svg" alt="TripAdvisor"/></a></div></div></div><div class="cGWPHKum QmEWx7RT"><div class="i3bZ_gBa"><div class="_3sXsAqz5"></div><form class="R1IsnpX3 NI9CbWSB" action="/Search"><input type="search" autoComplete="off" autoCorrect="off" autoCapitalize="off" spellcheck="false" required="" name="q" class="_3qLQ-U8m" placeholder="Search" title="Search" aria-label="Search" value=""/><input type="hidden" name="searchSessionId" value="404AF6521EB4CD95314E27BD6EAFD9FA1577019443641ssid"/><input type="hidden" name="geo" value="188657"/><button type="button" class="_3mLX8jwB _3djzE9Mn" title="Back" aria-label="Back"><span class="E0di58-K _2HBN-k68"></span></button><button type="submit" formaction="/Search" class="_3mLX8jwB _2a_Ua4Qv" title="Search" aria-label="Search"><span class="_2LyoLJ4U _2HBN-k68"></span></button></form></div></div><div class="bVXGT2TQ"><button class="_2iCUdSuL" title="Post" aria-label="Post"><span class="JJpblTbn _2HBN-k68"></span></button><button class="_2iCUdSuL" title="Trips" aria-label="Trips"><span class="UCXgI3AN _2HBN-k68"></span></button><button class="_2iCUdSuL" title="Inbox" aria-label="Inbox"><span class="_2-GaRjne _2HBN-k68"></span></button><div class="_3dN9L62Z"><div class="brand-global-nav-action-profile-Profile__container--3inu_"><a href="/RegistrationController?flow=sign_up_and_save&amp;pid=40664&amp;returnTo=%2F&amp;fullscreen=true&amp;flowOrigin=join&amp;hideNavigation=true" class="ui_button brand-global-nav-action-profile-ProfileSignedOut__loginButton--i8Bua small brand-global-nav-action-profile-ProfileSignedOut__blackButton--1qqX_ brand-global-nav-action-profile-ProfileSignedOut__condensed--2san1" data-flow-name="sign_up_and_save" title="JOIN">JOIN</a></div></div></div></div></div></div></div></div></div></div></div></div><div class='components-nav-legacy-actions'><!-- PLACEMENT global_nav_action_inbox:empty --><div id="taplc_global_nav_action_inbox_empty_0" class="ppr_rup ppr_priv_global_nav_action_inbox" data-placement-name="global_nav_action_inbox:empty"><div title="Inbox"> <div class="inbox-nav-contents ppr_rup ppr_priv_global_nav_action_inbox hidden" data-fs-block="true"><div class="inbox-nav-dropdown with-login-cta"><div class="header"><div class="title">Inbox</div> <a class="see-all" href="/Inbox" onclick="ta.trackEventOnPage('Inbox|Dropdown', 'see_all', '', '40186');">See all</a> </div><div class="inbox-lander-thread-list-item js-inbox-lander-thread-list-item loading hidden"><div class="loading-animation"></div><div class="inbox-lander-thread-list-item-core-content"><div class="inbox-lander-thread-list-item-avatar-and-mobile-date"><div class="inbox-lander-thread-list-item-avatar"><div class="empty_avatar"></div></div></div><div class="inbox-lander-thread-list-item-message"><div class="inbox-lander-thread-list-item-skeleton-bar"></div><div class="inbox-lander-thread-list-item-skeleton-bar"></div><div class="inbox-lander-thread-list-item-skeleton-bar"></div></div></div></div><div class="inbox-masthead-wrapper"><div class="login-cta"><span>Log in</span> to get trip updates and message other travelers.</div> </div></div></div></div></div></div><div class="global-nav-links global-nav-bottom global-nav-white  ui_tabs is-hidden-mobile "><div class="ui_container ui_columns is-gapless"><div class="links_container ui_column  is-11"><!-- PLACEMENT global_nav_links --><div id="taplc_global_nav_links_0" class="ppr_rup ppr_priv_global_nav_links" data-placement-name="global_nav_links"><div class="global-nav-links-container "><ul class="global-nav-links-menu"><li class="nav-sub-item" data-element=".masthead-dropdown-tourism"><a href="/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"id="global-nav-tourism" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="tourism">Luxembourg Province </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-hotels"><a href="/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html"id="global-nav-hotels" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="hotels"><span class="ui_icon hotels"></span>Hotels </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-attractions"><a href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html"id="global-nav-attractions" class="global-nav-link global-nav-link-2018 ui_tab active"data-tracking-label="attractions"><span class="ui_icon attractions"></span>Things to do </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-restaurants"><a href="/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"id="global-nav-restaurants" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="restaurants"><span class="ui_icon restaurants"></span>Restaurants </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-flights"><a href="/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html"id="global-nav-flights" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="flights"><span class="ui_icon flights"></span>Flights </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-vr"><a href="/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html"id="global-nav-vr" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="vr"><span class="ui_icon vacation-rentals"></span>Vacation Rentals </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-shopping"><a href="/Attractions-g188657-Activities-c26-Luxembourg_Province_The_Ardennes_Wallonia.html"id="global-nav-shopping" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="shopping"><span class="ui_icon shopping-bag-fill"></span>Shopping </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-vp"><a href="/Vacation_Packages-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"id="global-nav-vp" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="vp"><span class="ui_icon on-the-beach"></span>Vacation Packages </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-cruises"><a href="/CruiseDestination-g4-Europe"id="global-nav-cruises" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="cruises"><span class="ui_icon cruises"></span>Cruises </a></li><li class="nav-sub-item" data-element=".masthead-dropdown-cars"><a href="/RentalCars-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"id="global-nav-cars" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="cars"><span class="ui_icon parking"></span>Rental Cars </a></li><li class="nav-sub-item force-more" data-element=".masthead-dropdown-Forums"><a href="/ShowForum-g188657-i1966-Luxembourg_Province_The_Ardennes_Wallonia.html"id="global-nav-Forums" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="Forums"><span class="ui_icon forums"></span>Travel Forum </a></li><li class="nav-sub-item force-more" data-element=".masthead-dropdown-no_id"><a href="/Airlines"id="global-nav-no_id" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="Airlines"><span class="ui_icon flights"></span>Airlines </a></li><li class="nav-sub-item force-more" data-element=".masthead-dropdown-no_id"><a href="/TravelersChoice"id="global-nav-no_id" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="TravelersChoice"><span class="ui_icon travelers-choice-badge"></span>Best of 2019 </a></li><li class="nav-sub-item force-more" data-element=".masthead-dropdown-no_id"><a href="/RoadTrip-g191-United_States.html"id="global-nav-no_id" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="RoadTrips">Road Trips </a></li><li class="nav-sub-item force-more" data-element=".masthead-dropdown-HelpDesk"><a href="#"id="global-nav-HelpDesk" class="global-nav-link global-nav-link-2018 ui_tab "data-tracking-label="HelpDesk"><span class="ui_icon question-circle"></span>Help Center </a></li></ul><ul class="global-nav-links-menu-ellipsis is-top-only"><li class="global-nav-links-ellipsis"><span class="global-nav-link global-nav-link-2018 ui_tab ellipsis"><span class="ui_icon more-horizontal"></span></span></li></ul></div></div></div><div class="message_container ui_column is-1"></div></div></div><div class="global-nav-no-refresh" id="global-nav-no-refresh-2"><!-- PLACEMENT global_nav_onpage_assets --><div id="taplc_global_nav_onpage_assets_0" class="ppr_rup ppr_priv_global_nav_onpage_assets is-shown-at-tablet" data-placement-name="global_nav_onpage_assets">
<!-- PLACEMENT global_nav_onpage_assets -->
<div class="inner ">
<div class="ui_container  with_masthead ">
<h1 class="header heading fr">Top Fun Activities &amp; Games in Luxembourg Province, Belgium</h1>
<!--trkP:trip_planner_breadcrumbs-->
<!-- PLACEMENT trip_planner_breadcrumbs -->
<DIV ID="taplc_trip_planner_breadcrumbs_0" class="ppr_rup ppr_priv_trip_planner_breadcrumbs" data-placement-name="trip_planner_breadcrumbs">
<ul class="breadcrumbs"><li class="breadcrumb"><a class="link" href="/Tourism-g4-Europe-Vacations.html" onclick="ta.setEvtCookie('Breadcrumbs', 'click', 'Continent', 1, '/Tourism-g4-Europe-Vacations.html');"><span>Europe</span></a>&nbsp;<span class="ui_icon single-chevron-right"></span>&nbsp;</li><li class="breadcrumb"><a class="link" href="/Tourism-g188634-Belgium-Vacations.html" onclick="ta.setEvtCookie('Breadcrumbs', 'click', 'Country', 2, '/Tourism-g188634-Belgium-Vacations.html');"><span>Belgium</span></a>&nbsp;<span class="ui_icon single-chevron-right"></span>&nbsp;</li><li class="breadcrumb"><a class="link" href="/Tourism-g2263872-Wallonia-Vacations.html" onclick="ta.setEvtCookie('Breadcrumbs', 'click', 'Region', 3, '/Tourism-g2263872-Wallonia-Vacations.html');"><span>Wallonia</span></a>&nbsp;<span class="ui_icon single-chevron-right"></span>&nbsp;</li><li class="breadcrumb"><a class="link" href="/Tourism-g188652-The_Ardennes_Wallonia-Vacations.html" onclick="ta.setEvtCookie('Breadcrumbs', 'click', 'Region', 4, '/Tourism-g188652-The_Ardennes_Wallonia-Vacations.html');"><span>The Ardennes</span></a>&nbsp;<span class="ui_icon single-chevron-right"></span>&nbsp;</li><li class="breadcrumb"><a class="link" href="/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html" onclick="ta.setEvtCookie('Breadcrumbs', 'click', 'Province', 5, '/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html');"><span>Luxembourg Province</span></a>&nbsp;<span class="ui_icon single-chevron-right"></span>&nbsp;</li><li class="breadcrumb"><a class="link" href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html" onclick="ta.setEvtCookie('Breadcrumbs', 'click', '', 6, '/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html');"><span>Things to Do in Luxembourg Province</span></a>&nbsp;<span class="ui_icon single-chevron-right"></span>&nbsp;</li><li class="breadcrumb">Activities &amp; Games in Luxembourg Province</li></ul><script type="application/ld+json">{"@context":"http:\u002F\u002Fschema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"\u002FTourism-g4-Europe-Vacations.html","name":"Europe"}},{"@type":"ListItem","position":"2","item":{"@id":"\u002FTourism-g188634-Belgium-Vacations.html","name":"Belgium"}},{"@type":"ListItem","position":"3","item":{"@id":"\u002FTourism-g2263872-Wallonia-Vacations.html","name":"Wallonia"}},{"@type":"ListItem","position":"4","item":{"@id":"\u002FTourism-g188652-The_Ardennes_Wallonia-Vacations.html","name":"The Ardennes"}},{"@type":"ListItem","position":"5","item":{"@id":"\u002FTourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","name":"Luxembourg Province"}},{"@type":"ListItem","position":"6","item":{"@id":"\u002FAttractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html","name":"Things to Do in Luxembourg Province"}}]}</script></DIV>
<!--etk-->
</div>
</div>
</div><!-- PLACEMENT header_banner_ad:attractions_desktop --><div id="taplc_header_banner_ad_attractions_desktop_0" class="ppr_rup ppr_priv_header_banner_ad" data-placement-name="header_banner_ad:attractions_desktop"><div class="react-container" id='component_32' data-component-props='page-manifest' data-component='@ta/cpm.ad-target'><div class="iab_bilBrd"><div id="gpt-ad-970x250-728x90-header" class="gptAd cpm-ad-target-ad-target__gptAd--15jJ4" data-size="[[970,250],[728,90]]"></div></div></div></div><!-- PLACEMENT trip_planner:attractions --><div id="taplc_trip_planner_attractions_0" class="ppr_rup ppr_priv_trip_planner" data-placement-name="trip_planner:attractions">
<!-- PLACEMENT trip_planner:attractions -->
<div id="TRIP_PLANNER" class="ui_container
               ">
<!--trkP:trip_planner_h1_attractions-->
<!-- PLACEMENT trip_planner_h1:attractions -->
<DIV ID="taplc_trip_planner_h1_attractions_0" class="ppr_rup ppr_priv_trip_planner_h1" data-placement-name="trip_planner_h1:attractions">
<div class="adjust-for-heading">
<h1 id="HEADING" class="heading_name autoResize overrideDefaultStyle
          ">
Fun Activities & Games in Luxembourg Province&lrm;
</h1>
</div>
</DIV>
<!--etk-->
<!--trkP:trip_search_attractions_attraction_for_feature_attractions_responsive_attraction_overview-->
<!-- PLACEMENT trip_search_attractions:attraction_for_feature_attractions_responsive_attraction_overview -->
<DIV ID="taplc_trip_search_attractions_attraction_for_feature_attractions_responsive_attraction_overview_0" class="ppr_rup ppr_priv_trip_search_attractions" data-placement-name="trip_search_attractions:attraction_for_feature_attractions_responsive_attraction_overview">
<div id="PERSISTENT_TRIP_SEARCH_BAR" class="persistent_trip_search"><div class="ui_columns is-mobile datepicker_box trip_search metaDatePicker  collapsed-fixed-datepicker preDates noDates"><div class="ui_column wrap_column responsive_inline_hidden label_column"><span class="trip_search_label">When are you traveling?</span></div><DIV class="prw_rup prw_datepickers_attraction_range_dates ui_column responsive_inline_priority date_picker_container" data-prwidget-name="datepickers_attraction_range_dates" data-prwidget-init="handlers"><div class="unified-picker picker-field"onclick="widgetEvCall('handlers.openCalendar', event, this);"tabindex="2"data-dateType="ATTRACTION_FROM"data-emptyText="Start Date"data-trackingContext="AttractionFrom|DATES"data-dateFormat="date_medium_month"data-position="below 0 0"data-anim-group="TRIP_SEARCH"data-primary-datepicker="true"><div class="picker-body"><div class="picker-icon-container"><span class="picker-icon ui_icon calendar pickerType"></span></div><span class="picker-text"><span class="picker-label">Start Date</span></span></div></div><div class="unified-picker picker-field"onclick="widgetEvCall('handlers.openCalendar', event, this);"tabindex="3"data-dateType="ATTRACTION_TO"data-emptyText="End Date"data-trackingContext="AttractionTo|DATES"data-dateFormat="date_medium_month"data-position="below 0 0"data-anim-group="TRIP_SEARCH"><div class="picker-body"><div class="picker-icon-container"><span class="picker-icon ui_icon calendar pickerType"></span></div><span class="picker-text"><span class="picker-label">End Date</span></span></div></div></DIV><DIV class="prw_rup prw_common_form_submit ui_column is-hidden-mobile responsive_inline_hidden submit_wrap" data-prwidget-name="common_form_submit" data-prwidget-init="handlers"><button id="SUBMIT_ATTRACTIONS" class="autoResize form_submit ui_button primary" onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).updateAttractions(event, this)" tabindex="2"><span class="ui_icon search submit_icon"></span><span class="submit_text">Search</span></button><span class="ui_loader "><span></span><span></span><span></span><span></span><span></span></span></DIV><div class="ui_column clear_dates"><span class="clear_dates_text taLnk ui_link hidden" data-dateType="ATTRACTIONRANGE" onclick="ta.plc_trip_search_attractions_attraction_for_feature_attractions_responsive_attraction_overview_0_handlers.clearDates(event);">Clear Dates</span> </div></div></div></DIV>
<!--etk-->
</div>
</div><!-- PLACEMENT attraction_overview_header --><div id="taplc_attraction_overview_header_0" class="ppr_rup ppr_priv_attraction_overview_header" data-placement-name="attraction_overview_header"><div class="attraction_overview_header"><div class="second_nav_border"><div class="tabs_container ui_container"><div class="flex_row"><div class="tabs"><a class="back_to_all_tab" href=/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html><span class="ui_icon single-chevron-left"></span><span>Back to All Things to Do</span> </a></div><div class="overview_map" onclick="requireCallLast('ta/maps/opener', 'open', 2)"><span class="ui_button secondary viewMap"><span class="ui_icon map-pin-fill"></span>View Map </span></div></div></div></div></div></div></div></DIV>
<!--etk-->
<!--trkP:masthead_search_empty-->
<!-- PLACEMENT masthead_search:empty -->
<DIV ID="taplc_masthead_search_empty_0" class="ppr_rup ppr_priv_masthead_search" data-placement-name="masthead_search:empty">
<span class="hidden"><div class="search_overlay_content ui_container social_typeahead_2018" data-div-classes="ppr_rup ppr_priv_masthead_search"><div id="DUAL_SEARCH_LOADER_CONTAINER" class="dual_search_loader_container"><div class="dual_search_loader_overlay"></div><div class="dual_search_loader_visual"><div class="ui_spinner"></div></div></div><div class="just_padding"><div class="no_cpu"><form class="search_form ui_columns is-multiline" method="get" action="/Search" onsubmit="return placementEvCall('taplc_masthead_search_empty_0', 'deferred/lateHandlers.submitForm', event, this);" id="global_nav_search_form"><div class="ui_column is-10 is-gapless"><div class="search_line ui_columns is-multiline"><div id="MAIN_SEARCH_CONTAINER" class="mainSearchContainer ui_column "><div class="input_box"><span class="typeahead_icon what_neighbor ui_icon search"></span><div class="what_with_highlight"><input id="mainSearch" type="search" class="text focusClear" autocomplete="off" onBlur="placementEvCall('taplc_masthead_search_empty_0', 'deferred/lateHandlers.whatFocused', event, this)" onfocus="placementEvCall('taplc_masthead_search_empty_0', 'deferred/lateHandlers.whatFocused', event, this)" onkeydown="if (ta && (event.keyCode || event.which) === 13){ta.setEvtCookie('TopNav_Search', 'Action', 'Search | enter | EnterKey', 0, '/Search');}" onkeyup="placementEvCall('taplc_masthead_search_empty_0', 'deferred/lateHandlers.searchInputKeyUp', event, this)" autocorrect="off" spellcheck="false" placeholder="Search TripAdvisor"/><span id="CLEAR_WHAT" class="clear-text ui_icon times-circle-fill hidden"></span><span class="input_highlight"></span></div></div></div></div></div><div class="ui_column is-2 search_line_block is-gapless"><button id="SEARCH_BUTTON" class="search_button" type="submit" onclick="if (ta && event.clientY) { document.getElementById('global_nav_search_form').elements['pid'].value=3825; }ta && ta.setEvtCookie('TopNav_Search', 'Action', 'Search | ' + (event.detail === 0? 'enter' : 'click') + ' | SearchButton', 0, '/Search');return placementEvCall('taplc_masthead_search_empty_0', 'deferred/lateHandlers.submitClicked', event, this);" name="sub-search"><div id="SEARCH_BUTTON_CONTENT"><div class="inner">Search</div> </div></button></div><input id="SINGLE_SEARCH" type="hidden" name="singleSearchBox" value="true"><input id="TYPEAHEAD_GEO_ID" type="hidden" name="geo" value="188657"><input id="TYPEAHEAD_LATITUDE" type="hidden" name="latitude" value=""><input id="TYPEAHEAD_LONGITUDE" type="hidden" name="longitude" value=""><input id="TYPEAHEAD_NEARBY" type="hidden" name="searchNearby" value=""><input type="hidden" name="pid" value="3826"><input id="TOURISM_REDIRECT" type="hidden" name="redirect" value=""><input id="MASTAHEAD_TYPEAHEAD_START_TIME" type="hidden" name="startTime" value=""><input id="MASTAHEAD_TYPEAHEAD_UI_ORIGIN" type="hidden" name="uiOrigin" value=""><input id="MASTHEAD_MAIN_QUERY" type="hidden" name="q" value=""><input id="MASTHEAD_SUPPORTED_SEARCH_TYPES" type="hidden" name="supportedSearchTypes" value="find_near_stand_alone_query"><input id="MASTHEAD_ENABLE_NEAR_PAGE" type="hidden" name="enableNearPage" value="true"><input type="hidden" name="returnTo" value="__2F__Attractions__2D__g188657__2D__Activities__2D__c56__2D__Luxembourg__5F__Province__5F__The__5F__Ardennes__5F__Wallonia__2E__html"><input type="hidden" name="searchSessionId" value="74CEA223E2F7FF7360867645B0B0FF331577019443664ssid"><input type="hidden" id="SOCIAL_TYPEAHEAD_2018_FEATURE" name="social_typeahead_2018_feature" value="true"></form></div><div class="ui_columns results_panel"><div class="ui_column is-10 ui_columns results_panel"><div class="what_results ui_column  hidden"></div><div class="where_results ui_column is-offset-7 is-5 hidden"></div></div></div></div></div></span></DIV>
<!--etk-->
</div>
<div id="MAINWRAP" class=" hotels_lf_redesign ">
<div id="MAIN" class="Attractions
         prodp13n_jfy_overflow_visible
    ">
<div id="BODYCON" class="col easyClear bodLHN poolB new_meta_chevron_v2">
<div id="ATTRACTIONS_NARROW" class="attraction_list_all easyClear">
<div class="overview_sidebar sidebar al_sidebar scrollAdSidebar " id="leftNav">
<div id="FMRD">
<div class="js_floatContent">
<script type="text/javascript">
window.mapDivId = 'map0Div';
window.map0Div = {
lat: 49.67013,
lng: 5.81474,
zoom: null,
locId: 188657,
geoId: 188657,
isAttraction: false,
isEatery: false,
isLodging: false,
isNeighborhood: false,
title: "Luxembourg Province ",
homeIcon: true,
url: "/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html",
minPins: [
['hotel', 20],
['restaurant', 20],
['attraction', 20],
['vacation_rental', 0]       ],
units: 'mi',
geoMap: false,
tabletFullSite: false,
reuseHoverDivs: false,
filtersType: 'Attractions',
noSponsors: true    };
ta.store('infobox_js', 'https://static.tacdn.com/js3/build/concat/infobox-c-v22266883538a.js');
ta.store("ta.maps.apiKey", "");
(function() {
var onload = function() {
if (window.location.hash == "#MAPVIEW") {
ta.run("ta.mapsv2.Factory.handleHashLocation", {}, true);
}
}
if (window.addEventListener) {
if (window.history && window.history.pushState) {
window.addEventListener("popstate", function(e) {
ta.run("ta.mapsv2.Factory.handleHashLocation", {}, false);
}, false);
}
window.addEventListener('load', onload, false);
}
else if (window.attachEvent) {
window.attachEvent('onload', onload);
}
})();
ta.store("mapsv2.show_sidebar", true);
ta.store('mapsv2_restaurant_reservation_js', ["https://static.tacdn.com/js3/build/concat/ta-mapsv2-restaurant-reservation-c-v23961836573a.js"]);
ta.store('mapsv2.typeahead_css', "https://static.tacdn.com/css2/build/concat/maps_typeahead-v21751026596a.css");
ta.store('mapsv2.geoName', 'Luxembourg Province');
ta.store('mapsv2.map_addressnotfound', "Address not found");     ta.store('mapsv2.map_addressnotfound3', "We couldn\'t find that location near {0}.  Please try another search.");     ta.store('mapsv2.directions', "Directions from {0} to {1}");     ta.store('mapsv2.enter_dates', "Enter dates for best prices");     ta.store('mapsv2.best_prices', "Best prices for your stay");     ta.store('mapsv2.list_accom', "List of accommodations");     ta.store('mapsv2.list_hotels', "List of hotels");     ta.store('mapsv2.list_vrs', "List of vacation rentals");     ta.store('mapsv2.more_accom', "More accommodations");     ta.store('mapsv2.more_hotels', "More hotels");      ta.store('mapsv2.more_vrs', "More Vacation Rentals");     ta.store('mapsv2.no_availailability_from_partners', "No availability for your dates from our partners");   </script>
<div class="whatsNearbyV2" data-navArea-placement="@trigger">
<div id="map0Div" class="js_map"></div>
<div id="Map_Detail_Other_Div" style="display: none;" data-navArea-placement="Map_Detail_Other"></div>
</div>
<div id="LAYERS_FILTER_EXPANDED_ID" style="display:none">
<div class="title layersTitle">
<div class="card-left-icon"></div>
<div class="card-title-text">Also show</div> <div class="card-right-icon"></div>
</div>
<div class="layersFilter">
<div class="nearbyFilterList">
<div class="nearbyFilterItem hotel ">
<div class="nearbyFilterTextAndMark">
<div class="layersFilterText">
<div class="nearbyFilterTextCell">
Hotels
</div>
</div>
<div class="nearbyFilterMark hotelMark">
</div> </div>
<div class="nearbyFilterImage hotel ">
</div>
</div>
<div class="nearbyFilterItem restaurant ">
<div class="nearbyFilterTextAndMark">
<div class="layersFilterText">
<div class="nearbyFilterTextCell">
Restaurants
</div>
</div>
<div class="nearbyFilterMark restaurantMark">
</div> </div>
<div class="nearbyFilterImage restaurant ">
</div>
</div>
</div>
</div>
</div>
<div id="LAYERS_FILTER_COLLAPSED_ID" style="display:none">
<div class="title layersTitle">
<div class="card-left-icon"></div>
<div class="card-title-text">Also show</div> <div class="card-right-icon"></div>
</div>
</div>
<script type='text/javascript'>ta.store('mapsv2.search', true);</script>
<div class="poi_map_search_panel uicontrol">
<div class="address_search ">
<form action="" method="get" onsubmit="ta.call('ta.mapsv2.SearchBar.addAddress', event, this, 'MAP_ADD_LOCATION_INPUT', 'MAP_ADD_LOCATION_ERROR', true, false);return false;">
<input id="MAP_ADD_LOCATION_INPUT" type="text" class="text" name="address" autocomplete="off" value="Search by address or point of interest" defaultValue="Search by address or point of interest" onfocus="ta.trackEventOnPage('Search_Near_Map', 'Focus', '');ta.call('ta.mapsv2.SearchBar.bindTypeAheadFactory', event, this, 'MAP_ADD_LOCATION_ERROR', 188657, true, false, false);" onkeydown="ta.call('ta.mapsv2.SearchBar.onBeforeChange', event, this, 'MAP_ADD_LOCATION_ERROR');" onkeyup="ta.call('ta.mapsv2.SearchBar.onChange', event, this, 'MAP_ADD_LOCATION_ERROR');"/>
<input class="search_mag_glass" type="image" src=https://static.tacdn.com/img2/x.gif>
<input class="delete" type="image" src="https://static.tacdn.com/img2/x.gif" onclick="ta.call('ta.mapsv2.SearchBar.onClear', event, this, 'MAP_ADD_LOCATION_INPUT', 'MAP_ADD_LOCATION_ERROR'); return false;">
</form>
</div> <div id="MAP_ADD_LOCATION_ERROR" class="error_label hidden"></div>
</div>
<div class="uicontrol">
<div class="mapControls">
<div class="zoomControls styleguide">
<div class="zoom zoomIn ui_icon plus"></div>
<div class="zoom zoomOut ui_icon minus"></div>
</div>
<div class="mapTypeControls">
<div class="mapType map enabled"><div>Map</div></div><div class="mapType hyb disabled"><div>Satellite</div></div> </div>
<div class="zoomExcessBox">
<div class="zoomExcessContainer"><div class="zoomExcessInfo">Map updates are paused. Zoom in to see updated info.</div></div> <div class="resetZoomContainer"><div class="resetZoomBox">Reset zoom</div></div> </div>
</div>
<div class="spinner-centering-wrap">
<div class="updating_map">
<div class="updating_wrapper">
<img id="lazyload_1594226165_0" src='https://static.tacdn.com/img2/x.gif'/>
<span class="updating_text">Updating Map...</span> </div>
</div>
</div>
</div>
<div class="filters_enabled_flyout">
Your filters are still active. </div>
<div class="no_pins_flyout hidden">
<div class="flyout_text">There are no pins in your viewport. Try moving the map or changing your filters.</div> <img class="close_x" src="https://static.tacdn.com/img2/x.gif"/>
</div>
<div class="tile_disabled_flyout_text hidden">
Thank you for your interest.<br/>This feature is coming soon. </div>
<div class="js_footerPocket hidden"></div>
<div class="close-street-view hidden">
Return to Map </div>
</div> </div>
<div id="ATTRACTION_FILTER">
<!--trkP:attraction_filters_clarity-->
<!-- PLACEMENT attraction_filters_clarity -->
<DIV ID="taplc_attraction_filters_clarity_0" class="ppr_rup ppr_priv_attraction_filters_clarity" data-placement-name="attraction_filters_clarity">
<div class="ap_filter_wrap"><div class="ap_filter_header"><a class="taLnk ui_icon single-chevron-left" href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="SjZxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9GVk0=" onclick="ta.plc_attraction_filters_clarity_0_handlers.trackEvent('Attractions', 'back_nav', 'Coverpage');">All Things to Do</a></div></div><div class="ap_filter_wrap filter_wrap_0 selected_filter_wrap"><div class="ap_filter_header" id="0"><div class="clear_filters"><a class="clear_filters_text taLnk" href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="d29jXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF83Y3o="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'clear_all');">Clear all </a></div><div class="header_text_wrap"><div class="header_text">Your Selections</div></div></div><div class="filter_list_0"><div class="jfy_checkbox ui_input_checkbox multifilter active" data-params="WXNxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF85Mks="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L2_off', '56');"><input id="ap_filter_c_0" class="input_hidden" type="checkbox" name value="56" checked><span class="ui_icon times-circle-fill"></span><label class="label filterName" for="ap_filter_c_0"><a class="taLnk" href="/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="WXNxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF85Mks=">Fun & Games</a></label></div></div></div><div class="ap_filter_wrap filter_wrap_1"><div class="ap_filter_header" id="1"><div class="header_text_wrap"><div class="header_text">Fun &amp; Games</div></div></div><div class="filter_list_1"><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="NUVJXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQxMTAtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9OWHA="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '110');"><input id="ap_filter_t_0" class="input_hidden" type="checkbox" name value="110"><label class="label filterName" for="ap_filter_t_0"><a class="taLnk" href="/Attractions-g188657-Activities-c56-t110-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="NUVJXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQxMTAtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9OWHA=">Game & Entertainment Centers (6)</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="Um1tXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQyMDgtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9RaGM="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '208');"><input id="ap_filter_t_1" class="input_hidden" type="checkbox" name value="208"><label class="label filterName" for="ap_filter_t_1"><a class="taLnk" href="/Attractions-g188657-Activities-c56-t208-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="Um1tXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQyMDgtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9RaGM=">Room Escape Games (3)</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="d0FrXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQxMjgtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9hNXk="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '128');"><input id="ap_filter_t_2" class="input_hidden" type="checkbox" name value="128"><label class="label filterName" for="ap_filter_t_2"><a class="taLnk" href="/Attractions-g188657-Activities-c56-t128-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="d0FrXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQxMjgtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF9hNXk=">Bowling Alleys (2)</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="TEVxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzUzLXQxMDctTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF85SHg="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '107');"><input id="ap_filter_t_3" class="input_hidden" type="checkbox" name value="107"><label class="label filterName" for="ap_filter_t_3"><a class="taLnk" href="/Attractions-g188657-Activities-c53-t107-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="TEVxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzUzLXQxMDctTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF85SHg=">Casinos (1)</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="SW1WXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQ5Ny1MdXhlbWJvdXJnX1Byb3ZpbmNlX1RoZV9BcmRlbm5lc19XYWxsb25pYS5odG1sX1Y1Tg=="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '97');"><input id="ap_filter_t_4" class="input_hidden" type="checkbox" name value="97"><label class="label filterName" for="ap_filter_t_4"><a class="taLnk" href="/Attractions-g188657-Activities-c56-t97-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="SW1WXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQ5Ny1MdXhlbWJvdXJnX1Byb3ZpbmNlX1RoZV9BcmRlbm5lc19XYWxsb25pYS5odG1sX1Y1Tg==">Movie Theaters (1)</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="SmMzXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU3LXQ0NS1MdXhlbWJvdXJnX1Byb3ZpbmNlX1RoZV9BcmRlbm5lc19XYWxsb25pYS5odG1sX0RqeQ=="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '45');"><input id="ap_filter_t_5" class="input_hidden" type="checkbox" name value="45"><label class="label filterName" for="ap_filter_t_5"><a class="taLnk" href="/Attractions-g188657-Activities-c57-t45-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="SmMzXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU3LXQ0NS1MdXhlbWJvdXJnX1Byb3ZpbmNlX1RoZV9BcmRlbm5lc19XYWxsb25pYS5odG1sX0RqeQ==">Playgrounds (1)</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="RTQ1Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQxMzEtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF84SUo="onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'L3_on', '131');"><input id="ap_filter_t_6" class="input_hidden" type="checkbox" name value="131"><label class="label filterName" for="ap_filter_t_6"><a class="taLnk" href="/Attractions-g188657-Activities-c56-t131-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="RTQ1Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXQxMzEtTHV4ZW1ib3VyZ19Qcm92aW5jZV9UaGVfQXJkZW5uZXNfV2FsbG9uaWEuaHRtbF84SUo=">Sports Complexes (1)</a></label></div></div></div><div class="ap_filter_wrap filter_wrap_2 single_select"><div class="ap_filter_header" id="2"><div class="header_text_wrap"><div class="header_text">Other</div></div></div><div class="filter_list_2"><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="QktpXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMjk1LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfUG5s"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '11295');"><input id="ap_filter_zft_0" class="input_hidden" type="checkbox" name value="11295"><label class="label filterName" for="ap_filter_zft_0"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft11295-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="QktpXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMjk1LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfUG5s">Good for a Rainy Day</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="dDJSXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMzA2LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfZkRP"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '11306');"><input id="ap_filter_zft_1" class="input_hidden" type="checkbox" name value="11306"><label class="label filterName" for="ap_filter_zft_1"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft11306-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="dDJSXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMzA2LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfZkRP">Good for Kids</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="alA3Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMzA5LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfOFZ2"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '11309');"><input id="ap_filter_zft_2" class="input_hidden" type="checkbox" name value="11309"><label class="label filterName" for="ap_filter_zft_2"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft11309-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="alA3Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMzA5LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfOFZ2">Budget-friendly</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="MG5RXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMzEyLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfZG1t"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '11312');"><input id="ap_filter_zft_3" class="input_hidden" type="checkbox" name value="11312"><label class="label filterName" for="ap_filter_zft_3"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft11312-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="MG5RXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMzEyLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfZG1t">Good for Adrenaline Seekers</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="alFxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDEyMTcwLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfRHlK"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '12170');"><input id="ap_filter_zft_4" class="input_hidden" type="checkbox" name value="12170"><label class="label filterName" for="ap_filter_zft_4"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft12170-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="alFxXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDEyMTcwLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfRHlK">Good for Big Groups</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="djJ1Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMjkyLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfS1g0"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '11292');"><input id="ap_filter_zft_5" class="input_hidden" type="checkbox" name value="11292"><label class="label filterName" for="ap_filter_zft_5"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft11292-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="djJ1Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDExMjkyLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfS1g0">Free Entry</a></label></div><div class="collapse hidden"><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="REtlXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDEyMTU2LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfNWpG"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '12156');"><input id="ap_filter_zft_6" class="input_hidden" type="checkbox" name value="12156"><label class="label filterName" for="ap_filter_zft_6"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft12156-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="REtlXy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDEyMTU2LUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfNWpG">Hidden Gems</a></label></div><div class="jfy_checkbox ui_input_checkbox multifilter" data-params="M3R2Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDEyMTYzLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfYm5B"onclick="ta.plc_attraction_filters_clarity_0_handlers.trackAndAjax(event, 'zft_on', '12163');"><input id="ap_filter_zft_7" class="input_hidden" type="checkbox" name value="12163"><label class="label filterName" for="ap_filter_zft_7"><a class="taLnk" href="/Attractions-g188657-Activities-c56-zft12163-Luxembourg_Province_The_Ardennes_Wallonia.html" data-params="M3R2Xy9BdHRyYWN0aW9ucy1nMTg4NjU3LUFjdGl2aXRpZXMtYzU2LXpmdDEyMTYzLUx1eGVtYm91cmdfUHJvdmluY2VfVGhlX0FyZGVubmVzX1dhbGxvbmlhLmh0bWxfYm5B">Adventurous</a></label></div></div><div class="more reduced_height" onclick="ta.plc_attraction_filters_clarity_0_handlers.toggleVisibility(event);"><span class="taLnk">More</span> <span class="ui_icon caret-down"></span></div></div></div><script>ta.jquery(document).ready(function () {ta.trackImpressionEventOnPage('attraction_filter','style_tag_available','188657',0);});</script></DIV>
<!--etk-->
</div>
<div class="ad iab_medRec">
<div id="gpt-ad-300x250-300x600" class="adInner gptAd"></div>
</div>
<!--trkwidget_weather_-->
<div id="weatherBox" class="bx01 adjust">
<h2 class="title">
Luxembourg Province weather essentials
</h2>
<div class="body">
<div id="weatherHistory">
<div class="historyRow legend ">
<div class="month odd">Month</div> <div class="temp odd">High</div> <div class="temp odd">Low</div> <div class="precip odd">Precip</div> <div class="clear"></div>
</div>
<div class="historyRow ">
<div class="month even">Dec</div>
<div class="temp even">
<span id="weatherHistory0HiF">37&deg;F</span> <span id="weatherHistory0HiC">2&deg;C</span> </div>
<div class="temp even">
<span id="weatherHistory0LoF">31&deg;F</span> <span id="weatherHistory0LoC">0&deg;C</span> </div>
<div class="precip even">
<span id="weatherHistory0PrecipIn">5 in</span> <span id="weatherHistory0PrecipCm">12 cm</span> </div>
<div class="clear"></div>
</div>
<div class="historyRow ">
<div class="month odd">Jan</div>
<div class="temp odd">
<span id="weatherHistory1HiF">36&deg;F</span> <span id="weatherHistory1HiC">2&deg;C</span> </div>
<div class="temp odd">
<span id="weatherHistory1LoF">30&deg;F</span> <span id="weatherHistory1LoC">-1&deg;C</span> </div>
<div class="precip odd">
<span id="weatherHistory1PrecipIn">4 in</span> <span id="weatherHistory1PrecipCm">11 cm</span> </div>
<div class="clear"></div>
</div>
<div class="historyRow ">
<div class="month even">Feb</div>
<div class="temp even">
<span id="weatherHistory2HiF">39&deg;F</span> <span id="weatherHistory2HiC">3&deg;C</span> </div>
<div class="temp even">
<span id="weatherHistory2LoF">32&deg;F</span> <span id="weatherHistory2LoC">0&deg;C</span> </div>
<div class="precip even">
<span id="weatherHistory2PrecipIn">4 in</span> <span id="weatherHistory2PrecipCm">9 cm</span> </div>
<div class="clear"></div>
</div>
<div class="historyRow ">
<div class="month odd">Mar</div>
<div class="temp odd">
<span id="weatherHistory3HiF">45&deg;F</span> <span id="weatherHistory3HiC">7&deg;C</span> </div>
<div class="temp odd">
<span id="weatherHistory3LoF">35&deg;F</span> <span id="weatherHistory3LoC">1&deg;C</span> </div>
<div class="precip odd">
<span id="weatherHistory3PrecipIn">4 in</span> <span id="weatherHistory3PrecipCm">10 cm</span> </div>
<div class="clear"></div>
</div>
<div class="historyRow ">
<div class="month even">Apr</div>
<div class="temp even">
<span id="weatherHistory4HiF">50&deg;F</span> <span id="weatherHistory4HiC">10&deg;C</span> </div>
<div class="temp even">
<span id="weatherHistory4LoF">39&deg;F</span> <span id="weatherHistory4LoC">3&deg;C</span> </div>
<div class="precip even">
<span id="weatherHistory4PrecipIn">3 in</span> <span id="weatherHistory4PrecipCm">8 cm</span> </div>
<div class="clear"></div>
</div>
<div class="historyRow ">
<div class="month odd">May</div>
<div class="temp odd">
<span id="weatherHistory5HiF">58&deg;F</span> <span id="weatherHistory5HiC">14&deg;C</span> </div>
<div class="temp odd">
<span id="weatherHistory5LoF">46&deg;F</span> <span id="weatherHistory5LoC">7&deg;C</span> </div>
<div class="precip odd">
<span id="weatherHistory5PrecipIn">4 in</span> <span id="weatherHistory5PrecipCm">10 cm</span> </div>
<div class="clear"></div>
</div>
</div>
<div class="wuLink">
<a href="/WeatherUnderground?g=188657" target="_blank" rel="nofollow">More weather for Luxembourg Province</a>
</div>
<div class="bottomLine">
<div id="weatherToggle">
<span id="weatherToggleMetric" onclick="return ta.call('ta.widgets.Weather.switchToMetric', event);"></span>
<span>&nbsp;|&nbsp;</span>
<span dir="ltr"><span id='weatherToggleEnglish' onclick='return ta.call(&quot;ta.widgets.Weather.switchToEnglish&quot;, event);'></span></span>
</div>
<div class="poweredBy">
<div class="logo">
<a href="/WeatherUnderground" target="_blank" rel="nofollow"><img width="40" id="lazyload_1594226165_1" height="19" src='https://static.tacdn.com/img2/x.gif'/></a>
</div>
<div class="wu">
Powered by<br/> <a href="/WeatherUnderground" target="_blank" rel="nofollow">Weather Underground</a>
</div>
</div>
<div class="cb"></div>
</div>
</div>
</div>
<!--etk-->
<script type="text/javascript">
ta.store('weather.mode', 'box');
ta.store('weather.default', 'history');
ta.store('weather.system', 'english');
new Asset.javascript("https://static.tacdn.com/js3/src/ta/widgets/Weather-v23530032271a.js");
new Asset.css("https://static.tacdn.com/css2/widget/weather_2col-v22061762803a.css");
ta.util.pending.waitForFn('weather_init', 'ta.widgets.Weather.init');
</script>
<div class="ad iab_medRec">
<div id="gpt-ad-300x250-300x600-bottom" class="adInner gptAd"></div>
</div>
<!-- smoke:rbrDisplay -->
</div>
<div id="AL_LIST_CONTAINER" class="overview_balance easyClear scrollAdMain">
<!--trkP:attraction_returning_users-->
<!-- PLACEMENT attraction_returning_users -->
<DIV ID="taplc_attraction_returning_users_0" class="ppr_rup ppr_priv_attraction_returning_users" data-placement-name="attraction_returning_users">
<div class="urgencyMessageWrapper hidden" data-tracking-property="returnurgency_impression_control"></div></DIV>
<!--etk-->
<!--trkP:attraction_promo_header-->
<!-- PLACEMENT attraction_promo_header -->
<DIV ID="taplc_attraction_promo_header_0" class="ppr_rup ppr_priv_attraction_promo_header" data-placement-name="attraction_promo_header">
</DIV>
<!--etk-->
<!--trkP:attractions_socialproof_shelf-->
<div class="react-container" id='component_31' data-component-props='page-manifest' data-component='@ta/attractions.attractions-socialproof-shelf'></div><!--etk-->
<!--trkP:attraction_coverpage_attraction-->
<!-- PLACEMENT attraction_coverpage:attraction -->
<DIV ID="taplc_attraction_coverpage_attraction_0" class="ppr_rup ppr_priv_attraction_coverpage" data-placement-name="attraction_coverpage:attraction">
</DIV>
<!--etk-->
<script language="JavaScript">
ta.queueForReady(function() {
ta.trackEventOnPage('Attraction_Categories_Module', 'Impression', 'hidden', 0, true);
});
</script>
<div id="ATTRACTION_SORT_WRAPPER" class="sort_bar" data-urlparam="sort">
<ul class="ui_tab_bar">
<li class="header">Sort by:
</li> <li class="ui_tab selected">
Traveler Ranked <div class="ui_icon question-circle tooltip_icon" data-tooltip="" data-position="below" data-maxwidth="200" data-element=".content" data-options="closeOnWindowSize" onmouseover="ta.servlet.Attractions.narrow.hoverTooltip(event, this);">
<div class="content hidden">
<div>
Highest rated places of interest or tour operators on TripAdvisor, based on traveler reviews. </div>
</div>
</div>
</li>
<li id="bookonline_sort_option" class="ui_tab" onclick="ta.trackEventOnPage('Attraction_Sort', 'Book_Online', 'Book_Online', 1);ta.servlet.Attractions.narrow.changeSort(event, this, {'zfn' : '', 'zfr' : '', 'zfq' : '', 'zft': ''}, 'bookable')">
Book Online <div class="ui_icon question-circle tooltip_icon" data-tooltip="" data-position="below" data-maxwidth="200" data-element=".content" data-options="closeOnWindowSize" onmouseover="ta.servlet.Attractions.narrow.hoverTooltip(event, this);">
<div class="content hidden">
<div>
Highest rated places of interest or tour operators on TripAdvisor, promoting those where there is at least one tour or activity available to book on TripAdvisor. </div>
</div>
</div>
</li>
</ul>
</div>
<div id=geobroaden_opt_out class=geobroaden_banner visible onclick="require('common/geobroaden').geobroadenBannerClick('opt_out');">
<div id="icon" class="ui_icon map-pin-fill"></div>
<div id="text">
<div id="primaryText">We found great results, but some are outside Luxembourg Province. Showing results in neighboring cities.</div>
<div id="secondaryText">Limit search to Luxembourg Province.</div>
</div>
</div>
<div id=geobroaden_opt_in class=geobroaden_banner hidden onclick="require('common/geobroaden').geobroadenBannerClick('opt_in');">
<div id="icon" class="ui_icon map-pin-fill"></div>
<div id="text">
<div id="primaryText">We found great results, but some are outside Luxembourg Province. Showing results in neighboring cities.</div>
<div id="secondaryText">Limit search to Luxembourg Province.</div>
</div>
</div>
<!--trkP:geobroadening-->
<!--etk-->
<div class="geobroaden_state hidden" data-gbconfidence="HIGH" data-useroverride="false"> </div>
<!--trkP:AttractionsList-->
<!--trkV:AL-1.0-->
<!--trkFI:1-->
<!--etk-->
<!--trkN:1-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:2-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:3-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:4-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:5-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:6-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:7-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:8-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:9-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:10-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:11-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:12-->
<!--trkN:1-->
<!--etk-->
<!--trkN:2-->
<!--etk-->
<!--etk-->
<!--trkN:13-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:14-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:15-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:16-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:17-->
<!--trkN:1-->
<!--etk-->
<!--trkN:2-->
<!--etk-->
<!--etk-->
<!--trkN:18-->
<!--trkN:1-->
<!--etk-->
<!--trkN:2-->
<!--etk-->
<!--trkN:3-->
<!--etk-->
<!--etk-->
<!--trkN:19-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:20-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:21-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:22-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:23-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:24-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:25-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:26-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:27-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:28-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:29-->
<!--trkN:1-->
<!--etk-->
<!--etk-->
<!--trkN:30-->
<!--trkN:1-->
<!--etk-->
<!--trkN:2-->
<!--etk-->
<!--etk-->
<!--etk-->
<!--etk-->
<div id="FILTERED_LIST" class="attraction_list attraction_list_short ">
<div id="ATTR_ENTRY_12981670" class="attraction_element" data-locationid="12981670">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d12981670-Reviews-Crocus_Quest_Games-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 1, '/Attraction_Review')" target="_blank">
Crocus Quest Games
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 14.9 mi away">
<span>Luxembourg City, Luxembourg 14.9 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_50" alt="5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d12981670-Reviews-Crocus_Quest_Games-Luxembourg_City.html#REVIEWS">
183 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d12981670-r572090120-Crocus_Quest_Games-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">Well-designed scenario, out-of-the</span><span class="has-left has-right"> box enigma, <span class="highlighted">fun</span> and exciting time in the</span><span class="extra-snippet"> bank.... we had a wonderful time with Crocus Quest and definitely recommend it!</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d12981670-r550429903-Crocus_Quest_Games-Luxembourg_City.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">It was so great))we</span><span class="has-left has-right"> loved all <span class="highlighted">puzzles</span>, decorations, the</span><span class="extra-snippet"> atmosphere there and of course the staff!</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d12981670-Reviews-Crocus_Quest_Games-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '12981670', 1)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d12981670-Reviews-Crocus_Quest_Games-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 1, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Crocus Quest Games" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_2" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:12981670_component_15' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_8610465" class="attraction_element" data-locationid="8610465">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d8610465-Reviews-Kids_Playground-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 2, '/Attraction_Review')" target="_blank">
Kids Playground
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 14.4 mi away">
<span>Luxembourg City, Luxembourg 14.4 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d8610465-Reviews-Kids_Playground-Luxembourg_City.html#REVIEWS">
156 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#2 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d8610465-r505063811-Kids_Playground-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="has-right">Quirky, <span class="highlighted">fun</span> things to play on, giant slides,</span><span class="extra-snippet"> adventure playground as well as nearby cafes for coffees and ice-creams.</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d8610465-r447682764-Kids_Playground-Luxembourg_City.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">Activities surrounding the ship are interesting too so there are lots of things to do in</span><span class="has-left "> the area - and lots of space to <span class="highlighted">picnic</span> or nap.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d8610465-Reviews-Kids_Playground-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '8610465', 2)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d8610465-Reviews-Kids_Playground-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 2, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Kids Playground" width="180" style="height: 180px; width: 271px; margin-left: -45px;" id="lazyload_1594226165_3" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:8610465_component_17' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_9996705" class="attraction_element" data-locationid="9996705">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190353-d9996705-Reviews-Enigmo_Rooms-Dudelange.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 3, '/Attraction_Review')" target="_blank">
Enigmo Rooms
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Dudelange, Luxembourg 18.0 mi away">
<span>Dudelange, Luxembourg 18.0 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190353-d9996705-Reviews-Enigmo_Rooms-Dudelange.html#REVIEWS">
134 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Dudelange
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190353-d9996705-r518018957-Enigmo_Rooms-Dudelange.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">We&#39;ve done some of the very highly rated</span><span class="has-left has-right"> London escape <span class="highlighted">games</span> in the past and found</span><span class="extra-snippet"> this to be of equally high standard.</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190353-d9996705-r484138027-Enigmo_Rooms-Dudelange.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">We tried the &quot;Prison San Pedro&quot; &amp; the &quot;Bureau de Howard Carter&quot; rooms an both were</span><span class="has-left has-right"> very good, we had <span class="highlighted">fun</span>, the puzzles were</span><span class="extra-snippet"> tricky but solvable.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190353-d9996705-Reviews-Enigmo_Rooms-Dudelange.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '9996705', 3)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190353-d9996705-Reviews-Enigmo_Rooms-Dudelange.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 3, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Enigmo Rooms" width="180" style="height: 240px; width: 180px; margin-top: -30px;" id="lazyload_1594226165_4" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:9996705_component_27' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div class="ad iab_leaBoa inlineBannerAd">
<div id="gpt-ad-728x90-a" class="adInner gptAd"></div>
</div>
<div id="ATTR_ENTRY_11978654" class="attraction_element" data-locationid="11978654">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d11978654-Reviews-Escape_Hunt_Luxembourg-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 4, '/Attraction_Review')" target="_blank">
Escape Hunt Luxembourg
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 14.9 mi away">
<span>Luxembourg City, Luxembourg 14.9 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d11978654-Reviews-Escape_Hunt_Luxembourg-Luxembourg_City.html#REVIEWS">
101 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#3 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d11978654-r468654601-Escape_Hunt_Luxembourg-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">Great escape room; interesting</span><span class="has-left has-right"> setting and <span class="highlighted">immersive</span> soundtrack; riddles</span><span class="extra-snippet"> are varied, inventive, and make use of interesting technical gimmicks; difficulty is challenging without being unfair, pacing is great and g...</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d11978654-r477166666-Escape_Hunt_Luxembourg-Luxembourg_City.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">60 minutes to solve puzzles &amp; riddles in a very immersive (decors &amp; theme very</span><span class="has-left has-right"> well executed) and <span class="highlighted">fun</span> way - that&#39;s the</span><span class="extra-snippet"> place to go! We&#39;ve done that by the same activity while traveling abroad and that branch (Esca...</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d11978654-Reviews-Escape_Hunt_Luxembourg-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '11978654', 4)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d11978654-Reviews-Escape_Hunt_Luxembourg-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 4, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Escape Hunt Luxembourg" width="180" style="height: 180px; width: 269px; margin-left: -44px;" id="lazyload_1594226165_5" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:11978654_component_23' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
<div onclick="ta.trackEventOnPage('Attraction Page', 'POI_booking_option_CTA_click', '11978654', 4);             window.open( '/AttractionProductReview-g190356-d17989334-Escape_Hunt_Luxembourg_Escape_Game-Luxembourg_City.html' ,'_blank');
        (new Event(event)).stopPropagation();
;" class="display_text ui_button primary fullwidth">
See 1 Experience
</div>
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_9996956" class="attraction_element" data-locationid="9996956">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d9996956-Reviews-216k_Escape_Room-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 5, '/Attraction_Review')" target="_blank">
216k Escape Room
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 14.3 mi away">
<span>Luxembourg City, Luxembourg 14.3 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d9996956-Reviews-216k_Escape_Room-Luxembourg_City.html#REVIEWS">
60 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#4 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d9996956-r630013083-216k_Escape_Room-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">Everyone had a very nice experience, the rooms were designed fantastically, the stories were good, the riddles</span><span class="has-left "> were creative, <span class="highlighted">challenging</span> and diversified.</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d9996956-r657977356-216k_Escape_Room-Luxembourg_City.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">My daughter and her friends really enjoyed the &quot;Rose&quot; and &quot;Haunted&quot; rooms - they competed to see which team could finish</span><span class="has-left "> first and had a lot of <span class="highlighted">fun</span> in the process.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d9996956-Reviews-216k_Escape_Room-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '9996956', 5)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d9996956-Reviews-216k_Escape_Room-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 5, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="216k Escape Room" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_6" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:9996956_component_2' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_10440472" class="attraction_element" data-locationid="10440472">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1136773-d10440472-Reviews-Easy_Flight-Terville_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 6, '/Attraction_Review')" target="_blank">
easy Flight
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Terville, France 26.0 mi away">
<span>Terville, France 26.0 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_50" alt="5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1136773-d10440472-Reviews-Easy_Flight-Terville_Moselle_Grand_Est.html#REVIEWS">
40 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 5 Fun &amp; Games in Terville
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1136773-d10440472-Reviews-Easy_Flight-Terville_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '10440472', 6)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g1136773-d10440472-Reviews-Easy_Flight-Terville_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 6, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="easy Flight" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_7" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:10440472_component_5' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_9784130" class="attraction_element" data-locationid="9784130">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d9784130-Reviews-OUTperform_Luxembourg_Live_Escape_Game-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 7, '/Attraction_Review')" target="_blank">
OUTperform Luxembourg Live Escape Game
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 14.9 mi away">
<span>Luxembourg City, Luxembourg 14.9 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d9784130-Reviews-OUTperform_Luxembourg_Live_Escape_Game-Luxembourg_City.html#REVIEWS">
84 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#5 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d9784130-r464216777-OUTperform_Luxembourg_Live_Escape_Game-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">loved the intro, getting the vests on and getting locked to a teammate...then we went off to the rooms, all dark and spooky!</span><span class="has-left has-right"> in short: great <span class="highlighted">fun</span> among friends with a</span><span class="extra-snippet"> competitive edge against the clock</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d9784130-r483703354-OUTperform_Luxembourg_Live_Escape_Game-Luxembourg_City.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">The staff is bilingual,</span><span class="has-left has-right"> very friendly, <span class="highlighted">fun</span> and genuinely interested</span><span class="extra-snippet"> in providing a great experience for all involved.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d9784130-Reviews-OUTperform_Luxembourg_Live_Escape_Game-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '9784130', 7)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d9784130-Reviews-OUTperform_Luxembourg_Live_Escape_Game-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 7, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="OUTperform Luxembourg Live Escape Game" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_8" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:9784130_component_12' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_484392" class="attraction_element" data-locationid="484392">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g206532-d484392-Reviews-Casino_2000-Mondorf_les_Bains.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 8, '/Attraction_Review')" target="_blank">
Casino 2000
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Mondorf-les-Bains, Luxembourg 23.7 mi away">
<span>Mondorf-les-Bains, Luxembourg 23.7 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g206532-d484392-Reviews-Casino_2000-Mondorf_les_Bains.html#REVIEWS">
184 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Mondorf-les-Bains
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g206532-d484392-Reviews-Casino_2000-Mondorf_les_Bains.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '484392', 8)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g206532-d484392-Reviews-Casino_2000-Mondorf_les_Bains.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 8, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Casino 2000" width="180" style="height: 180px; width: 269px; margin-left: -44px;" id="lazyload_1594226165_9" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:484392_component_24' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_2526319" class="attraction_element" data-locationid="2526319">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1136778-d2526319-Reviews-Seven_Casino_Amneville-Amneville_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 9, '/Attraction_Review')" target="_blank">
Seven Casino Amneville
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Amneville, France 32.8 mi away">
<span>Amneville, France 32.8 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_35" alt="3.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1136778-d2526319-Reviews-Seven_Casino_Amneville-Amneville_Moselle_Grand_Est.html#REVIEWS">
168 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 6 Fun &amp; Games in Amneville
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1136778-d2526319-Reviews-Seven_Casino_Amneville-Amneville_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '2526319', 9)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g1136778-d2526319-Reviews-Seven_Casino_Amneville-Amneville_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 9, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Seven Casino Amneville" width="180" style="height: 180px; width: 320px; margin-left: -70px;" id="lazyload_1594226165_10" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:2526319_component_7' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div class="ad iab_leaBoa inlineBannerAd">
<div id="gpt-ad-728x90-b" class="adInner gptAd"></div>
</div>
<div id="ATTR_ENTRY_3462162" class="attraction_element" data-locationid="3462162">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d3462162-Reviews-Utopolis_Luxembourg-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 10, '/Attraction_Review')" target="_blank">
Utopolis Luxembourg
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 16.2 mi away">
<span>Luxembourg City, Luxembourg 16.2 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_35" alt="3.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d3462162-Reviews-Utopolis_Luxembourg-Luxembourg_City.html#REVIEWS">
116 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#6 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d3462162-r639961538-Utopolis_Luxembourg-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">5 rooms to enjoy movies and a nice little bar to have a coffee or a drink and a little snack chatting with your friends</span><span class="has-left "> while you wait for your chosen <span class="highlighted">movie</span> to start.</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d3462162-r452758047-Utopolis_Luxembourg-Luxembourg_City.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">They also have a mobile app and once you are there</span><span class="has-left has-right"> you can buy the <span class="highlighted">tickets</span> by card from a sort</span><span class="extra-snippet"> of ATM</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d3462162-Reviews-Utopolis_Luxembourg-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '3462162', 10)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d3462162-Reviews-Utopolis_Luxembourg-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 10, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Utopolis Luxembourg" width="180" style="height: 180px; width: 239px; margin-left: -29px;" id="lazyload_1594226165_11" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:3462162_component_19' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_10781921" class="attraction_element" data-locationid="10781921">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g2266077-d10781921-Reviews-Centre_aquatique_Feralia-Hayange_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 11, '/Attraction_Review')" target="_blank">
Centre aquatique Feralia
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Hayange, France 26.2 mi away">
<span>Hayange, France 26.2 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g2266077-d10781921-Reviews-Centre_aquatique_Feralia-Hayange_Moselle_Grand_Est.html#REVIEWS">
21 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Hayange
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g2266077-d10781921-Reviews-Centre_aquatique_Feralia-Hayange_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '10781921', 11)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g2266077-d10781921-Reviews-Centre_aquatique_Feralia-Hayange_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 11, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:10781921_component_3' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_13237977" class="attraction_element" data-locationid="13237977">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g12612069-d13237977-Reviews-NTKart-Lexy_Meurthe_et_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 12, '/Attraction_Review')" target="_blank">
NTKart
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Lexy, France 11.9 mi away">
<span>Lexy, France 11.9 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g12612069-d13237977-Reviews-NTKart-Lexy_Meurthe_et_Moselle_Grand_Est.html#REVIEWS">
17 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Lexy
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g12612069-d13237977-Reviews-NTKart-Lexy_Meurthe_et_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '13237977', 12)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g12612069-d13237977-Reviews-NTKart-Lexy_Meurthe_et_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 12, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:13237977_component_9' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_10235728" class="attraction_element" data-locationid="10235728">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g188658-d10235728-Reviews-Bowling_81_Arlon-Arlon_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 13, '/Attraction_Review')" target="_blank">
Bowling 81 Arlon
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Arlon">
<span>Arlon</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="rs popularity rankedin">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g188658-d10235728-Reviews-Bowling_81_Arlon-Arlon_Luxembourg_Province_The_Ardennes_Wallonia.html#REVIEWS">
20 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 4 Fun &amp; Games in Arlon
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g188658-d10235728-Reviews-Bowling_81_Arlon-Arlon_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '10235728', 13)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g188658-d10235728-Reviews-Bowling_81_Arlon-Arlon_Luxembourg_Province_The_Ardennes_Wallonia.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 13, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Bowling 81 Arlon" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_12" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:10235728_component_8' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_12822436" class="attraction_element" data-locationid="12822436">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d12822436-Reviews-Castle_Playground-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 14, '/Attraction_Review')" target="_blank">
Castle Playground
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 13.5 mi away">
<span>Luxembourg City, Luxembourg 13.5 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d12822436-Reviews-Castle_Playground-Luxembourg_City.html#REVIEWS">
11 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#7 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d12822436-r621054645-Castle_Playground-Luxembourg_City.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class=""><span class="highlighted">Fun</span> playground for kids</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d12822436-Reviews-Castle_Playground-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '12822436', 14)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d12822436-Reviews-Castle_Playground-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 14, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Castle Playground" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_13" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:12822436_component_22' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div class="ad iab_leaBoa inlineBannerAd">
<div id="gpt-ad-728x90-c" class="adInner gptAd"></div>
</div>
<div id="ATTR_ENTRY_6385689" class="attraction_element" data-locationid="6385689">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g2017564-d6385689-Reviews-Syrdall_Schwemm-Niederanven.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 15, '/Attraction_Review')" target="_blank">
Syrdall Schwemm
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Niederanven, Luxembourg 19.3 mi away">
<span>Niederanven, Luxembourg 19.3 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g2017564-d6385689-Reviews-Syrdall_Schwemm-Niederanven.html#REVIEWS">
37 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Niederanven
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g2017564-d6385689-Reviews-Syrdall_Schwemm-Niederanven.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '6385689', 15)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g2017564-d6385689-Reviews-Syrdall_Schwemm-Niederanven.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 15, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Syrdall Schwemm" width="180" style="height: 180px; width: 271px; margin-left: -45px;" id="lazyload_1594226165_14" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:6385689_component_26' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_12817573" class="attraction_element" data-locationid="12817573">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g2477135-d12817573-Reviews-Aquanat_our-Hosingen_Diekirch_District.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 16, '/Attraction_Review')" target="_blank">
Aquanat'our
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Hosingen, Luxembourg 25.8 mi away">
<span>Hosingen, Luxembourg 25.8 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g2477135-d12817573-Reviews-Aquanat_our-Hosingen_Diekirch_District.html#REVIEWS">
18 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Hosingen
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g2477135-d12817573-r623404913-Aquanat_our-Hosingen_Diekirch_District.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">There is a steam</span><span class="has-left has-right"> room, cold plunge <span class="highlighted">pool</span> (yes, 14C is very cold</span><span class="extra-snippet"> after a steam!), as well as a large warm water pool / hot tub with built in bubble seats and massaging water jets.</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g2477135-d12817573-r658952843-Aquanat_our-Hosingen_Diekirch_District.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">Can recomment Wenik session, in Russian</span><span class="has-left has-right"> style, it was <span class="highlighted">fun</span>: massage with leaves and a</span><span class="extra-snippet"> hot humid sauna at the same time.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g2477135-d12817573-Reviews-Aquanat_our-Hosingen_Diekirch_District.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '12817573', 16)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g2477135-d12817573-Reviews-Aquanat_our-Hosingen_Diekirch_District.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 16, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Aquanat&#39;our" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_15" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:12817573_component_20' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_7070130" class="attraction_element" data-locationid="7070130">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d7070130-Reviews-Centre_National_Sportif_et_Culturel_d_Coque_National_Sports_and_Cultural_Centre_d.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 17, '/Attraction_Review')" target="_blank">
Centre National Sportif et Culturel d’Coque (National Sports and Cultural Centre d’Coque)
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 15.5 mi away">
<span>Luxembourg City, Luxembourg 15.5 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d7070130-Reviews-Centre_National_Sportif_et_Culturel_d_Coque_National_Sports_and_Cultural_Centre_d.html#REVIEWS">
29 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#8 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190356-d7070130-r594778256-Centre_National_Sportif_et_Culturel_d_Coque_National_Sports_and_Cultural_Centre_.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">National sport and culture centre with indoor swimming pool, fitness- and sports classes, training</span><span class="has-left has-right"> site for <span class="highlighted">sports groups</span>, restaurants,</span><span class="extra-snippet"> conference rooms, accommodation.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190356-d7070130-Reviews-Centre_National_Sportif_et_Culturel_d_Coque_National_Sports_and_Cultural_Centre_d.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '7070130', 17)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d7070130-Reviews-Centre_National_Sportif_et_Culturel_d_Coque_National_Sports_and_Cultural_Centre_d.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 17, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Centre National Sportif et Culturel d’Coque (National Sports and Cultural Centre d’Coque)" width="180" style="height: 180px; width: 269px; margin-left: -44px;" id="lazyload_1594226165_16" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:7070130_component_13' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_12538987" class="attraction_element" data-locationid="12538987">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g12583085-d12538987-Reviews-Park_Sennesraich-Lullange_Diekirch_District.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 18, '/Attraction_Review')" target="_blank">
Park Sennesraich
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Lullange, Luxembourg 27.4 mi away">
<span>Lullange, Luxembourg 27.4 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_50" alt="5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g12583085-d12538987-Reviews-Park_Sennesraich-Lullange_Diekirch_District.html#REVIEWS">
9 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Lullange
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g12583085-d12538987-Reviews-Park_Sennesraich-Lullange_Diekirch_District.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '12538987', 18)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g12583085-d12538987-Reviews-Park_Sennesraich-Lullange_Diekirch_District.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 18, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Park Sennesraich" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_17" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:12538987_component_11' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_10765566" class="attraction_element" data-locationid="10765566">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1136773-d10765566-Reviews-Dock_39-Terville_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 19, '/Attraction_Review')" target="_blank">
Dock 39
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Terville, France 26.4 mi away">
<span>Terville, France 26.4 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1136773-d10765566-Reviews-Dock_39-Terville_Moselle_Grand_Est.html#REVIEWS">
38 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#5 of 5 Fun &amp; Games in Terville
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1136773-d10765566-Reviews-Dock_39-Terville_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '10765566', 19)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g1136773-d10765566-Reviews-Dock_39-Terville_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 19, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Dock 39" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_18" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:10765566_component_14' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div class="ad iab_leaBoa inlineBannerAd">
<div id="gpt-ad-728x90-d" class="adInner gptAd"></div>
</div>
<div id="ATTR_ENTRY_8766659" class="attraction_element" data-locationid="8766659">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1080347-d8766659-Reviews-Utopolis_Longwy-Longwy_Meurthe_et_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 20, '/Attraction_Review')" target="_blank">
Utopolis Longwy
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Longwy, France 10.2 mi away">
<span>Longwy, France 10.2 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_35" alt="3.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1080347-d8766659-Reviews-Utopolis_Longwy-Longwy_Meurthe_et_Moselle_Grand_Est.html#REVIEWS">
33 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Longwy
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1080347-d8766659-Reviews-Utopolis_Longwy-Longwy_Meurthe_et_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '8766659', 20)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g1080347-d8766659-Reviews-Utopolis_Longwy-Longwy_Meurthe_et_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 20, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Utopolis Longwy" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_19" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:8766659_component_4' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_9454066" class="attraction_element" data-locationid="9454066">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190355-d9454066-Reviews-Showtime-Esch_sur_Alzette.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 21, '/Attraction_Review')" target="_blank">
Showtime
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Esch-sur-Alzette, Luxembourg 14.5 mi away">
<span>Esch-sur-Alzette, Luxembourg 14.5 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190355-d9454066-Reviews-Showtime-Esch_sur_Alzette.html#REVIEWS">
14 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 2 Fun &amp; Games in Esch-sur-Alzette
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g190355-d9454066-Reviews-Showtime-Esch_sur_Alzette.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '9454066', 21)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g190355-d9454066-Reviews-Showtime-Esch_sur_Alzette.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 21, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:9454066_component_18' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_8772345" class="attraction_element" data-locationid="8772345">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190356-d8772345-Reviews-Cinematheque_de_la_Ville_de_Luxembourg-Luxembourg_City.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 22, '/Attraction_Review')" target="_blank">
Cinematheque de la Ville de Luxembourg
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Luxembourg City, Luxembourg 14.7 mi away">
<span>Luxembourg City, Luxembourg 14.7 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190356-d8772345-Reviews-Cinematheque_de_la_Ville_de_Luxembourg-Luxembourg_City.html#REVIEWS">
8 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#9 of 15 Fun &amp; Games in Luxembourg City
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g190356-d8772345-Reviews-Cinematheque_de_la_Ville_de_Luxembourg-Luxembourg_City.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '8772345', 22)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g190356-d8772345-Reviews-Cinematheque_de_la_Ville_de_Luxembourg-Luxembourg_City.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 22, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Cinematheque de la Ville de Luxembourg" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_20" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:8772345_component_29' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_7178686" class="attraction_element" data-locationid="7178686">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g230017-d7178686-Reviews-Bouillon_Cine-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 23, '/Attraction_Review')" target="_blank">
Bouillon-Cine
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Bouillon">
<span>Bouillon</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="rs popularity rankedin">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g230017-d7178686-Reviews-Bouillon_Cine-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html#REVIEWS">
10 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 2 Fun &amp; Games in Bouillon
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g230017-d7178686-Reviews-Bouillon_Cine-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '7178686', 23)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g230017-d7178686-Reviews-Bouillon_Cine-Bouillon_Luxembourg_Province_The_Ardennes_Wallonia.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 23, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:7178686_component_10' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_15813445" class="attraction_element" data-locationid="15813445">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1081531-d15813445-Reviews-Atypik_Games_Asbl-Marche_en_Famenne_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 24, '/Attraction_Review')" target="_blank">
Atypik Games Asbl
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Marche-en-Famenne">
<span>Marche-en-Famenne</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="rs popularity rankedin">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_50" alt="5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1081531-d15813445-Reviews-Atypik_Games_Asbl-Marche_en_Famenne_Luxembourg_Province_The_Ardennes_Wallonia.html#REVIEWS">
3 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 2 Fun &amp; Games in Marche-en-Famenne
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1081531-d15813445-Reviews-Atypik_Games_Asbl-Marche_en_Famenne_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '15813445', 24)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g1081531-d15813445-Reviews-Atypik_Games_Asbl-Marche_en_Famenne_Luxembourg_Province_The_Ardennes_Wallonia.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 24, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Atypik Games Asbl" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_21" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:15813445_component_25' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div class="ad iab_leaBoa inlineBannerAd">
<div id="gpt-ad-728x90-e" class="adInner gptAd"></div>
</div>
<div id="ATTR_ENTRY_14082270" class="attraction_element" data-locationid="14082270">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190343-d14082270-Reviews-Cine_Scala-Diekirch_Diekirch_District.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 25, '/Attraction_Review')" target="_blank">
Cine Scala
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Diekirch, Luxembourg 20.1 mi away">
<span>Diekirch, Luxembourg 20.1 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190343-d14082270-Reviews-Cine_Scala-Diekirch_Diekirch_District.html#REVIEWS">
4 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Diekirch
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190343-d14082270-r648285134-Cine_Scala-Diekirch_Diekirch_District.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">comfortable seats, modern facilities in an old building, great restaurant</span><span class="has-left "> right inside the <span class="highlighted">movie</span> house, RECOMMENDED!</span>&#x201d;</div></div><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190343-d14082270-r684538292-Cine_Scala-Diekirch_Diekirch_District.html', '1', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="">The prices are great with 6-8€ a <span class="highlighted">movie</span></span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190343-d14082270-Reviews-Cine_Scala-Diekirch_Diekirch_District.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '14082270', 25)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g190343-d14082270-Reviews-Cine_Scala-Diekirch_Diekirch_District.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 25, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:14082270_component_6' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_7714443" class="attraction_element" data-locationid="7714443">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g7739740-d7714443-Reviews-Gaume_Paintball-Saint_Leger_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 26, '/Attraction_Review')" target="_blank">
Gaume Paintball
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Saint-Leger">
<span>Saint-Leger</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="rs popularity rankedin">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g7739740-d7714443-Reviews-Gaume_Paintball-Saint_Leger_Luxembourg_Province_The_Ardennes_Wallonia.html#REVIEWS">
10 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Saint-Leger
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g7739740-d7714443-Reviews-Gaume_Paintball-Saint_Leger_Luxembourg_Province_The_Ardennes_Wallonia.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '7714443', 26)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g7739740-d7714443-Reviews-Gaume_Paintball-Saint_Leger_Luxembourg_Province_The_Ardennes_Wallonia.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 26, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Gaume Paintball" width="180" style="height: 180px; width: 269px; margin-left: -44px;" id="lazyload_1594226165_22" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:7714443_component_30' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_11929167" class="attraction_element" data-locationid="11929167">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g196616-d11929167-Reviews-Lazer_Five-Thionville_Moselle_Grand_Est.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 27, '/Attraction_Review')" target="_blank">
Lazer Five
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Thionville, France 25.2 mi away">
<span>Thionville, France 25.2 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g196616-d11929167-Reviews-Lazer_Five-Thionville_Moselle_Grand_Est.html#REVIEWS">
6 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#2 of 4 Fun &amp; Games in Thionville
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g196616-d11929167-Reviews-Lazer_Five-Thionville_Moselle_Grand_Est.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '11929167', 27)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g196616-d11929167-Reviews-Lazer_Five-Thionville_Moselle_Grand_Est.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 27, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Lazer Five" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_23" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:11929167_component_28' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_10730210" class="attraction_element" data-locationid="10730210">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1657404-d10730210-Reviews-Speelparadijs_Mared_Indoor_Deifelt-Gouvy_Luxembourg_Province_The_Ardennes_Wallo.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 28, '/Attraction_Review')" target="_blank">
Speelparadijs Mared Indoor Deifelt
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Gouvy">
<span>Gouvy</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="rs popularity rankedin">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_40" alt="4 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1657404-d10730210-Reviews-Speelparadijs_Mared_Indoor_Deifelt-Gouvy_Luxembourg_Province_The_Ardennes_Wallo.html#REVIEWS">
5 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Gouvy
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1657404-d10730210-Reviews-Speelparadijs_Mared_Indoor_Deifelt-Gouvy_Luxembourg_Province_The_Ardennes_Wallo.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '10730210', 28)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g1657404-d10730210-Reviews-Speelparadijs_Mared_Indoor_Deifelt-Gouvy_Luxembourg_Province_The_Ardennes_Wallo.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 28, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:10730210_component_1' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_13481965" class="attraction_element" data-locationid="13481965">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g190355-d13481965-Reviews-Les_Bains_du_Parc-Esch_sur_Alzette.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 29, '/Attraction_Review')" target="_blank">
Les Bains du Parc
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Esch-sur-Alzette, Luxembourg 13.9 mi away">
<span>Esch-sur-Alzette, Luxembourg 13.9 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g190355-d13481965-Reviews-Les_Bains_du_Parc-Esch_sur_Alzette.html#REVIEWS">
3 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#2 of 2 Fun &amp; Games in Esch-sur-Alzette
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"><div class="review_snippets "><div class="review_snippet"><div onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).trackAndOpenSURUrl(event, 'Attractions_List_Click', '/ShowUserReviews-g190355-d13481965-r589308337-Les_Bains_du_Parc-Esch_sur_Alzette.html', '0', 'Snippet', 'review_snippet_click', true);">&#x201c;<span class="extra-snippet">It has</span><span class="has-left has-right"> an inside/outside <span class="highlighted">pool</span> which is warmer and</span><span class="extra-snippet"> looks great for kids, a slide and a toddlers pool.</span>&#x201d;</div></div></div></DIV>
<a href="/Attraction_Review-g190355-d13481965-Reviews-Les_Bains_du_Parc-Esch_sur_Alzette.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '13481965', 29)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking">
<a href="/Attraction_Review-g190355-d13481965-Reviews-Les_Bains_du_Parc-Esch_sur_Alzette.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 29, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<div class="noImageBorder">
<div class="noImageContainer">
<div class=" nppCont" style="height: 180px; width: 180px;">
<img class="npp" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" style=" left: 60px; top: 60px; height:60px; width:60px; " alt="No photo provided"/>
</div>
</div>
</div>
<img class="no_image" src="https://static.tacdn.com/img2/social/no_photo_attraction.gif" alt="No photo provided"/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:13481965_component_16' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<div id="ATTR_ENTRY_3369365" class="attraction_element" data-locationid="3369365">
<div class="attraction_clarity_cell">
<div class="listing  ">
<div class="listing_details">
<div class="listing_info">
<div class="listing_callout">
</div>
<div class="listing_title  title_with_snippets ">
<a href="/Attraction_Review-g1763806-d3369365-Reviews-Steinfort_Adventure-Steinfort.html" onclick=" event.stopPropagation();ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'name', 30, '/Attraction_Review')" target="_blank">
Steinfort Adventure
</a>
<var class="parent-name-and-distance" onmouseover="uiOverlay(event, this)" data-popover="small" data-position="below" data-options="closeOnMouseAway" data-maxWidth="300" data-content="Steinfort, Luxembourg 4.5 mi away">
<span>Steinfort, Luxembourg 4.5 mi away</span>
</var>
</div>
<div class="listing_rating">
<div class="popRanking wrap ">
</div>
<div class="wrap">
<div class="rs rating">
<span class="ui_bubble_rating bubble_45" alt="4.5 of 5 bubbles"></span>
<span class="more" onclick=" ; ta.setEvtCookie('Attraction_List_Click', 'ReviewCount', '', 0, '/Attraction_Review');">
<a target="_blank" href="/Attraction_Review-g1763806-d3369365-Reviews-Steinfort_Adventure-Steinfort.html#REVIEWS">
13 reviews
</a>
</span>
</div>
</div>
<div class="popRanking wrap">
#1 of 1 Fun &amp; Games in Steinfort
</div>
</div>
<DIV class="prw_rup prw_attractions_attractions_review_snippets" data-prwidget-name="attractions_attractions_review_snippets" data-prwidget-init="handlers"></DIV>
<a href="/Attraction_Review-g1763806-d3369365-Reviews-Steinfort_Adventure-Steinfort.html" onclick="ta.trackEventOnPage('Attraction Page', 'POI_more_info_link_click', '3369365', 30)" target="_blank">
<div class="nested_commerce_link">
Learn More
</div>
</a>
</div>
<div class="photo_booking non_generic">
<a href="/Attraction_Review-g1763806-d3369365-Reviews-Steinfort_Adventure-Steinfort.html" class="photo_link " onclick="ta.setEvtCookie('Attraction_List_Click', 'POI_click', 'photo', 30, '/Attraction_Review')" data-navarea-linktype="Thumbnail" target="_blank">
<img alt="Steinfort Adventure" width="180" style="height: 200px; width: 180px; margin-top: -10px;" id="lazyload_1594226165_24" class="photo_image" height="180" src='https://static.tacdn.com/img2/x.gif'/>
</a>
<div class="react-container component-widget saveToTripWrapper" id='@ta/trips.save-to-trip:location:3369365_component_21' data-component-props='page-manifest' data-component='@ta/trips.save-to-trip'><div class="stat_wrapper"><div class="_15aaPtHM _1AZ4CTjH"><span class="_5SuCrejV _1rFMAnsi _2geKhlYH"><span class="RyVhIcmt"><span class="jdSbP47R _24GSU4qN _1AZ4CTjH"><span class="_1AuqFf68 _2HBN-k68"></span></span><span class="jdSbP47R LoHVO7nR _1AZ4CTjH"><span class="UCXgI3AN _2HBN-k68"></span></span></span></span></div></div></div>
</div>
<div class="central_listing_commerce">
</div>
</div> </div> </div> </div>
<script type='text/javascript'> injektReviewsContent(); </script>
<div class="al_border deckTools btm">
<div class="pagination">
<div class="unified pagination ">
<span class="nav previous disabled">
Previous
</span>
<a data-page-number="2" data-offset="30" href="/Attractions-g188657-Activities-c56-oa30-Luxembourg_Province_The_Ardennes_Wallonia.html#FILTERED_LIST" class="nav next rndBtn ui_button primary taLnk" onclick="      ta.setEvtCookie('STANDARD_PAGINATION', 'next', '2', 0, this.href);
  ">
Next
</a>
<div class="pageNumbers">
<span data-page-number="1" data-offset="0" class="pageNum current" onclick="ta.trackEventOnPage('STANDARD_PAGINATION', 'curpage', '1', 0)">1</span>
<a data-page-number="2" data-offset="30" href="/Attractions-g188657-Activities-c56-oa30-Luxembourg_Province_The_Ardennes_Wallonia.html#FILTERED_LIST" class="pageNum taLnk" onclick="      ta.setEvtCookie('STANDARD_PAGINATION', 'last', '2', 0, this.href);
  ">
2
</a>
</div>
</div>
<script>
ta.util.element.trackWhenScrolledIntoView('.unified.pagination', ['STANDARD_PAGINATION_VISIBLE', 'numPages', '2', 0]);
</script>
</div><!--/ pagination-->
</div> </div>
<script type="text/javascript">
ta.store('attractions.isRollupVersion', true);
ta.servlet.Attractions.narrow.initCgy(56);
ta.servlet.Attractions.narrow.initTypes('');
ta.servlet.Attractions.narrow.trackEvent('Attraction_Sort', 'InitialSortOrder', 'Ranking');
ta.servlet.Attractions.narrow.trackWhenScrolledIntoView('ATTRACTION_SORT_WRAPPER', ['Attraction_Sort', 'SortOrderVisible', 'Ranking']);
</script>
</div>
<script type="text/javascript">
// old page style tabs
ta.store("mapsv2.attractions_map_tab_name", '');
ta.store("mapsv2.attractions_map_filter_category", 56);
ta.servlet.Attractions.narrow.loadAnimatedCTA();
ta.servlet.Attractions.narrow.loadTGTargetBlank();
window.addEvent('onAttractionFilterChange', ta.servlet.Attractions.narrow.loadTGTargetBlank);
</script>
</div>
<form name="ttd_jsb_form">
<input type="hidden" id="ttd_rl_field" value=""/>
</form>
<script type='text/javascript'>
( function() {
ta.queueForLoad( function() {
ta.servlet.Attractions.narrow.updateFiltersOnBack();
});
})();
</script>
<script type='text/javascript'>
( function() {
if (history.replaceState) {
history.replaceState({ stateTag: false }, '', null);
}
ta.queueForLoad( function() {
ta.store('attractions.useStaticUrl', true);
ta.servlet.Attractions.narrow.setPopStateListner();
});
})();
</script>
<script type='text/javascript'>
( function() {
ta.queueForLoad( function() {
ta.servlet.Attractions.narrow.initShelfListeners(188657);
ta.servlet.Attractions.narrow.initPOIEventHandler();
ta.servlet.Attractions.narrow.initTrackingImpressions();
ta.servlet.Attractions.initGeobroadenListener();
});
})();
</script>
<script>
var _comscore = _comscore || [];
_comscore.push({ c1: '2', c2: '6036461', c3: '', c4: '' });
var _csload = function() {
var s = document.createElement('script'), el = document.getElementsByTagName('script')[0]; s.async = true;
s.src = (document.location.protocol == 'https:' ? 'https://sb' : 'http://b') + '.scorecardresearch.com/beacon.js';
el.parentNode.insertBefore(s, el);
};
ta.queueForLoad(_csload, 5, 'comscore');
</script>
<noscript>
<img class='tracking' style='display:none' height='1' width='1' src='https://sb.scorecardresearch.com/p?c1=2&c2=6036461&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1'/>
</noscript>
</div>
<div class="clearFix"></div>
<div class="al_border full_width recently_viewed">
<div id='lazyload_1594226165_25'><!-- lazy loaded --></div>
<script type="text/javascript">
ta.p13n.RV = {
onTabMouseover: function(evnt, elmt) {
elmt.addClass('activeHover');
},
onTabMouseout: function(evnt, elmt) {
elmt.removeClass('activeHover');
},
onTabClick: function(evnt, elmt, placeTypeId) {
ta.widgets.calendar.clearCalendarFlyouts();
try {
var old_key = 'ta.p13n.RV.' + ta.remove('ta.p13n.RV.active');
var old_val = ta.retrieve(old_key);
if(!old_val) {
ta.store(old_key, ta.id('history_carousel_content').innerHTML);
}
var key = 'ta.p13n.RV.' + placeTypeId;
var val = ta.retrieve(key);
if(val) {
ta.id('history_carousel_content').innerHTML = val;
$$("#history_carousel_tabs .active")[0].removeClass("active");
elmt.addClass("active");
}
else {
var location = ta.retrieve('page.location');
if(location) {
location = "-d" + location;
}
new Request( {
url : "/RecentlyViewed" + location,
evalScripts : true,
data : {
placeTypeOverride : placeTypeId,
narrow : 0
},
onSuccess : function(txt, xml) {
ta.id('history_carousel_content').innerHTML = txt;
$$("#history_carousel_tabs .active")[0].removeClass("active");
elmt.addClass("active");
var rvCallback = ta.remove('ta.p13n.RV.callback');
if(rvCallback) {
rvCallback();
}
}
}).send();
}
} catch(e) {
ta.util.error.record(e, 'recently viewed tab switching');
}
}
};
ta.queueForLoad( function() {
// ta.id returns null without the timeout.  This component can be lazy loaded
setTimeout( function() {
var xsElmt = ta.id('history_carousel_content');
ta.util.element.doIfElementIsVisible(xsElmt, ta.trackEventOnPage, ['history_carousel_content', 'inView']);
},1500);
}, 'history_carousel');
</script>
</div>
</div>
<div class="ftrAdParent">
<div class="ad iab_leaBoa ftrBanner">
<div id="gpt-ad-728x90-footer" class="adInner gptAd"></div>
</div>
</div>
</div>
<div id="FOOT_CONTAINER">
<!--trkP:qualtrics_survey-->
<!-- PLACEMENT qualtrics_survey -->
<DIV ID="taplc_qualtrics_survey_0" class="ppr_rup ppr_priv_qualtrics_survey" data-placement-name="qualtrics_survey">
</DIV>
<!--etk-->
<!--trkP:memx_registration_dialog-->
<div class="react-container" id='component_33' data-component-props='page-manifest' data-component='@ta/memx.registration-dialog-controller'></div><!--etk-->
<!--trkP:social_onboarding-->
<div class="react-container" id='component_35' data-component-props='page-manifest' data-component='@ta/social.onboarding-controller'></div><!--etk-->
<!--trkP:browser_mode_tracking-->
<!-- PLACEMENT browser_mode_tracking -->
<DIV ID="taplc_browser_mode_tracking_0" class="ppr_rup ppr_priv_browser_mode_tracking" data-placement-name="browser_mode_tracking">
</DIV>
<!--etk-->
<!--trkP:global_footer-->
<!-- PLACEMENT global_footer -->
<DIV ID="taplc_global_footer_0" class="ppr_rup ppr_priv_global_footer" data-placement-name="global_footer">
<div class="foot "><div class="ui_container"><div class="ui_columns is-multiline is-mobile"><div class="ui_column bottom_on_mobile is-7-tablet is-12-mobile"><div class="logo_slogan"><img class="logo_svg " src="https://static.tacdn.com/img2/branding/rebrand/TA_logo_primary.svg" alt="TripAdvisor"/><span class="footer-tag-line">know better <span class="ui_icon ui_single_bubble_rating"></span> book better <span class="ui_icon ui_single_bubble_rating"></span> go better </span></div><div class="legal_section">© 2019 TripAdvisor LLC All rights reserved. <DIV class="prw_rup prw_homepage_tripadvisor_horizontal_footer_links" data-prwidget-name="homepage_tripadvisor_horizontal_footer_links" data-prwidget-init="handlers"><a href="https://tripadvisor.mediaroom.com/us-terms-of-use" class="ui_link footer_link" data-track-action="terms_of_use">Terms of Use</a> | <a href="https://tripadvisor.mediaroom.com/us-privacy-policy" class="ui_link footer_link" data-track-action="privacy_policy">Privacy Policy</a> | <a href="/SiteIndex-g188634-Belgium.html" class="ui_link footer_link" data-track-action="site_map">Site Map</a> | <a href="/pages/serviceEN.html" class="ui_link footer_link" data-track-action="hamon_law">How the site works</a></DIV><div class="disclaimer is-hidden-mobile">* TripAdvisor LLC is not a booking agent and does not charge any service fees to users of our site... (<span id="TERMS" class="ui_link" onclick="ta.plc_global_footer_0_handlers.getFullDisclaimerText(this)">more</span>) </div><div class="external_disclaimer is-hidden-mobile">TripAdvisor LLC is not responsible for content on external web sites. Taxes, fees not included for deals content.</div> </div></div><div class="ui_column is-2-tablet is-12-mobile"><div class="footer_section"><DIV class="prw_rup prw_homepage_tripadvisor_footer_links" data-prwidget-name="homepage_tripadvisor_footer_links" data-prwidget-init="handlers"><div class="ftrLinkHeader">EXPLORE</div><div class="footerLinks" onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).checkForPid(event);"><a class="footerLink ui_link" href="https://tripadvisor.mediaroom.com/us-about-us" data-track-action="about_us">About Us</a><span class="footerLink ui_link js_click" data-id="help_center" data-url="/uvpages/helpCenterOverlay.html" data-track-action="help_center">Help Center</span></div></DIV></div></div><div class="ui_column top_on_mobile is-3-tablet is-12-mobile"><div class="footer_section section_with_border_separator_mobile"><DIV class="prw_rup prw_homepage_footer_pickers" data-prwidget-name="homepage_footer_pickers" data-prwidget-init="handlers"><div class="ftrHeader">CURRENCY/REGION</div><div class="unified-picker" onclick="(ta.prwidgets.getjs(this,&#39;handlers&#39;)).showCurrency(event, this)" data-sg-overlay="above right"data-header="Currency"><span class="picker-inner"><span class="picker-label"><span class="currency_symbol">UAH</span><span>UAH</span></span><span class="ui_icon caret-down open-close"></span><span class="ui_icon caret-up open-close hidden"></span></span></div><div class="unified-picker" onclick="widgetEvCall('handlers.showPos', event, this)" data-sg-overlay="above right"data-overlay="point_of_sale_picker"data-header="Region"><span class="picker-inner"><span class="picker-label"><span>United States</span><span class="point_of_sale_data hidden" data-page-feature="" data-locale-codes="" data-current-locale="en_US"></span></span><span class="ui_icon caret-down open-close"></span><span class="ui_icon caret-up open-close hidden"></span></span></div></DIV></div></div></div></div></div></DIV>
<!--etk-->
<!--trkP:trip_modal-->
<div class="react-container" id='component_38' data-component-props='page-manifest' data-component='@ta/trips.trip-modal-route'></div><!--etk-->
<img width="0" id="p13n_tp_stm" class="tracking hidden" height="0" src='https://static.tacdn.com/img2/x.gif'/>
</div>
<!--trkP:web_performance_rum-->
<div class="react-container" id='component_36' data-component-props='page-manifest' data-component='@ta/platform.rum-redux-container'></div><!--etk-->
</div>
<!--trkP:footer_js_globals-->
<!-- PLACEMENT footer_js_globals -->
<DIV ID="taplc_footer_js_globals_0" class="ppr_rup ppr_priv_footer_js_globals" data-placement-name="footer_js_globals">
<script>
var jsGlobalMonths =     new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var jsGlobalMonthsAbbrev =     new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
var jsGlobalDayMonthYearAbbrev =     new Array("{0} Jan {1}","{0} Feb {1}","{0} Mar {1}","{0} Apr {1}","{0} May {1}","{0} Jun {1}","{0} Jul {1}","{0} Aug {1}","{0} Sep {1}","{0} Oct {1}","{0} Nov {1}","{0} Dec {1}");
var jsGlobalDaysAbbrev =     new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
var jsGlobalDaysShort =     new Array("S","M","T","W","T","F","S");
var jsGlobalDaysFull =     new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var sInvalidDates = "The dates you entered are invalid. Please correct your dates and search again.";
var sSelectDeparture = "Please select a departure airport.";
var DATE_FORMAT_MMM_YYYY = "MMM YYYY";
var DATE_PICKER_SLASHES_NOY_FORMAT = "MMM d";
var DATE_PICKER_CLASSIC_FORMAT = "MM/dd/yyyy";
var DATE_PICKER_SHORT_FORMAT = "MM/dd";
var DATE_PICKER_META_FORMAT = "EEE, MMM d";
var DATE_PICKER_DAY_AND_SLASHES_FORMAT = "EEE MM/dd/yyyy";
var jsGlobalDayOffset = 1 - 1;
var DATE_FORMAT = { pattern: /(\d{1,2})\/(\d{1,2})\/(\d{2,4})/, month: 1, date: 2, year: 3 };
var formatDate = function(d, m, y) {return [++m,d,y].join("/");};
var cal_month_header = function(month, year) {return cal_months[month]+"&nbsp;"+year;};
window.crPageServlet = "Attractions";
</script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/polyfills/dist/intl.en-US-v2975869048a.js'></script>
<script>
typeof define !== 'undefined' && define('ta-i18n',['utils/IntlFormatter'],function(IntlFormatter){
Intl && Intl.__disableRegExpRestore && Intl.__disableRegExpRestore();
return (ta=ta||{}).i18n=new IntlFormatter("en-US","UAH");
});
</script>
<script type="text/javascript">
require(['ta/Core/TA.Store'], function(taStore) {
taStore.store('typeahead.typeahead2_mixed_ui', true);
taStore.store('typeahead.typeahead2_geo_segmented_ui', true);
taStore.store('typeahead.geoArea', 'Luxembourg Province area');     taStore.store('typeahead.worldwide', 'Worldwide');     taStore.store('typeahead.noResultsFound', 'No results found.');
taStore.store('typeahead.flight_enabled', true);
taStore.store('typeahead.localAirports', []);
taStore.store('typeahead.recentHistoryList', [{"lookbackServlet":null,"autobroadened":"false","normalized_name":"luxembourg province","title":"Destinations","type":"GEO","document_id":null,"is_vr":true,"url":"\/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","urls":[{"url_type":"geo","name":"Luxembourg Province Tourism","fallback_url":"\/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","type":"GEO","url":"\/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"},{"url_type":"vr","name":"Luxembourg Province Vacation Rentals","fallback_url":"\/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html","type":"VACATION_RENTAL","url":"\/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html"},{"url_type":"eat","name":"Luxembourg Province Restaurants","fallback_url":"\/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"EATERY","url":"\/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"url_type":"attr","name":"Luxembourg Province Attractions","fallback_url":"\/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"ATTRACTION","url":"\/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"url_type":"hotel","name":"Luxembourg Province Hotels","fallback_url":"\/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html","type":"HOTEL","url":"\/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html"},{"url_type":"flights_to","name":"Flights to Luxembourg Province","fallback_url":"\/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html","type":"FLIGHTS_TO","url":"\/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html"},{"url_type":"nbrhd","name":"Luxembourg Province Neighborhoods","fallback_url":"\/NeighborhoodList-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"NEIGHBORHOOD","url":null},{"url_type":"tg","name":"Luxembourg Province Travel Guides","fallback_url":"\/Travel_Guide-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"TRAVEL_GUIDE","url":null}],"is_broad":false,"scope":"global","name":"Luxembourg Province, Belgium, Europe","data_type":"LOCATION","details":{"placetype":10020,"parent_name":"Belgium","grandparent_name":"Europe","grandparent_id":4,"parent_id":188634,"grandparent_place_type":10000,"rac_enabled":true,"highlighted_name":"Luxembourg Province","name":"Luxembourg Province","parent_place_type":10001,"parent_ids":[188652,2263872,188634,4,1],"geo_name":"Belgium, Europe"},"value":188657,"coords":"49.67013,5.81474"},{"lookbackServlet":null,"autobroadened":"false","normalized_name":"new zealand","title":"Destinations","type":"GEO","document_id":null,"is_vr":true,"url":"\/Tourism-g255104-New_Zealand-Vacations.html","urls":[{"url_type":"geo","name":"New Zealand Tourism","fallback_url":"\/Tourism-g255104-New_Zealand-Vacations.html","type":"GEO","url":"\/Tourism-g255104-New_Zealand-Vacations.html"},{"url_type":"vr","name":"New Zealand Vacation Rentals","fallback_url":"\/VacationRentals-g255104-Reviews-New_Zealand-Vacation_Rentals.html","type":"VACATION_RENTAL","url":"\/VacationRentals-g255104-Reviews-New_Zealand-Vacation_Rentals.html"},{"url_type":"eat","name":"New Zealand Restaurants","fallback_url":"\/Restaurants-g255104-New_Zealand.html","type":"EATERY","url":"\/Restaurants-g255104-New_Zealand.html"},{"url_type":"attr","name":"New Zealand Attractions","fallback_url":"\/Attractions-g255104-Activities-New_Zealand.html","type":"ATTRACTION","url":"\/Attractions-g255104-Activities-New_Zealand.html"},{"url_type":"hotel","name":"New Zealand Hotels","fallback_url":"\/Hotels-g255104-New_Zealand-Hotels.html","type":"HOTEL","url":"\/Hotels-g255104-New_Zealand-Hotels.html"},{"url_type":"flights_to","name":"Flights to New Zealand","fallback_url":"\/Flights-g255104-New_Zealand-Cheap_Discount_Airfares.html","type":"FLIGHTS_TO","url":"\/Flights-g255104-New_Zealand-Cheap_Discount_Airfares.html"},{"url_type":"nbrhd","name":"New Zealand Neighborhoods","fallback_url":"\/NeighborhoodList-g255104-New_Zealand.html","type":"NEIGHBORHOOD","url":null},{"url_type":"tg","name":"New Zealand Travel Guides","fallback_url":"\/Travel_Guide-g255104-New_Zealand.html","type":"TRAVEL_GUIDE","url":null}],"is_broad":true,"scope":"global","name":"New Zealand, South Pacific","data_type":"LOCATION","details":{"placetype":10001,"parent_name":"South Pacific","parent_id":8,"rac_enabled":false,"highlighted_name":"New Zealand","name":"New Zealand","parent_place_type":10000,"parent_ids":[8,1],"geo_name":"South Pacific"},"value":255104,"coords":"-41.28894,174.77629"}]);
taStore.store('typeahead.restaurant', "Restaurant");         taStore.store('typeahead.attraction', "Attraction");         taStore.store('typeahead.hotel', "Hotel");                       taStore.store('typeahead.restaurant_list', "Restaurants");       taStore.store('typeahead.attraction_list', "Attractions");       taStore.store('typeahead.things_to_do', "Things to Do");                 taStore.store('typeahead.hotel_list', "Hotels");                 taStore.store('typeahead.flight_list', "Flights");                   taStore.store('typeahead.vacation_rental_list', "Vacation Rentals");     taStore.store('typeahead.scoped.static_local_label', '% area');     taStore.store('typeahead.scoped.result_title_text', 'Start typing, or try one of these suggestions...');     taStore.store('typeahead.scoped.poi_overview_geo', '<span class="poi_overview_item">Overview</span> of %');     taStore.store('typeahead.scoped.poi_hotels_geo', '<span class="poi_overview_item">Hotels</span> in %');     taStore.store('typeahead.scoped.poi_hotels_geo_near', '<span class="poi_overview_item">Hotels</span> near %');     taStore.store('typeahead.scoped.poi_vr_geo', '<span class="poi_overview_item">Vacation Rentals</span> in %');     taStore.store('typeahead.scoped.poi_vr_geo_near', '<span class="poi_overview_item">Vacation Rentals</span> near %');     taStore.store('typeahead.scoped.poi_attractions_geo', '<span class="poi_overview_item">Things to Do</span> in %');     taStore.store('typeahead.scoped.poi_eat_geo', '<span class="poi_overview_item">Restaurants</span> in %');     taStore.store('typeahead.scoped.poi_flights_geo', '<span class="poi_overview_item">Flights</span> to %');     taStore.store('typeahead.scoped.poi_nbrhd_geo', '<span class="poi_overview_item">Neighborhoods</span> in %');     taStore.store('typeahead.scoped.poi_travel_guides_geo', '<span class="poi_overview_item">Travel Guides</span> in %');     taStore.store('typeahead.scoped.overview', 'Overview');     taStore.store('typeahead.scoped.neighborhoods', 'Neighborhoods');     taStore.store('typeahead.scoped.travel_guides', 'Travel Guides');     taStore.store('typeahead.scoped.geo_area_template', '% area');     taStore.store('typeahead.searchMore', 'Find more results for "%"');
taStore.store('typeahead.history', 'Recently viewed');     taStore.store('typeahead.history.all_caps', 'RECENTLY VIEWED');     taStore.store('typeahead.popular_destinations', 'POPULAR DESTINATIONS');
});
</script>
<script type="text/javascript">
require(['ta/Core/TA.LocalStorage'], function(taStore) {
var key = "firstEntryServlet";
var ttl = 30 * 60 * 1000; // 30 min in milliseconds
var entryServlet = "Attractions";
var existingStorageEntry = taStore.get(key);
if (existingStorageEntry != null) {
entryServlet = existingStorageEntry; // if key already exists, just update its "now" timestamp by setting it again
}
taStore.set(key, entryServlet, ttl);
});
</script>
<script type="text/javascript">
require(['ta/Core/TA.Store'], function(taStore) {
taStore.store('rgPicker.nRooms',   [
'0 rooms',
'1 room',
'2 rooms',
'3 rooms',
'4 rooms',
'5 rooms',
'6 rooms',
'7 rooms',
'8 rooms'    ]
);      taStore.store("rgPicker.nGuests",   [
'0 guests',
'1 guest',
'2 guests',
'3 guests',
'4 guests',
'5 guests',
'6 guests',
'7 guests',
'8 guests',
'9 guests',
'10 guests',
'11 guests',
'12 guests',
'13 guests',
'14 guests',
'15 guests',
'16 guests',
'17 guests',
'18 guests',
'19 guests',
'20 guests',
'21 guests',
'22 guests',
'23 guests',
'24 guests',
'25 guests',
'26 guests',
'27 guests',
'28 guests',
'29 guests',
'30 guests',
'31 guests',
'32 guests',
'33 guests',
'34 guests',
'35 guests',
'36 guests',
'37 guests',
'38 guests',
'39 guests',
'40 guests',
'41 guests',
'42 guests',
'43 guests',
'44 guests',
'45 guests',
'46 guests',
'47 guests',
'48 guests',
'49 guests',
'50 guests',
'51 guests',
'52 guests',
'53 guests',
'54 guests',
'55 guests',
'56 guests',
'57 guests',
'58 guests',
'59 guests',
'60 guests',
'61 guests',
'62 guests',
'63 guests',
'64 guests'    ]
);
taStore.store('rgPicker.roomsLabel', 'Rooms');
;       taStore.store('rgPicker.adultsLabel', 'Adults');
;       taStore.store('rgPicker.childrenLabel', 'Children');
;       taStore.store('rgPicker.guestsLabel', 'Guests');
;
taStore.store("rgPicker.nAdults",   [
'0 adults',
'1 adult',
'2 adults',
'3 adults',
'4 adults',
'5 adults',
'6 adults',
'7 adults',
'8 adults',
'9 adults',
'10 adults',
'11 adults',
'12 adults',
'13 adults',
'14 adults',
'15 adults',
'16 adults',
'17 adults',
'18 adults',
'19 adults',
'20 adults',
'21 adults',
'22 adults',
'23 adults',
'24 adults',
'25 adults',
'26 adults',
'27 adults',
'28 adults',
'29 adults',
'30 adults',
'31 adults',
'32 adults'    ]
);           taStore.store("rgPicker.nChildren",   [
'0 children',
'1 child',
'2 children',
'3 children',
'4 children',
'5 children',
'6 children',
'7 children',
'8 children',
'9 children',
'10 children',
'11 children',
'12 children',
'13 children',
'14 children',
'15 children',
'16 children',
'17 children',
'18 children',
'19 children',
'20 children',
'21 children',
'22 children',
'23 children',
'24 children',
'25 children',
'26 children',
'27 children',
'28 children',
'29 children',
'30 children',
'31 children',
'32 children'    ]
);       taStore.store("rgPicker.nGuestsForChildren",   [
'0 guests',
'1 guest',
'2 guests',
'3 guests',
'4 guests',
'5 guests',
'6 guests',
'7 guests',
'8 guests',
'9 guests',
'10 guests',
'11 guests',
'12 guests',
'13 guests',
'14 guests',
'15 guests',
'16 guests',
'17 guests',
'18 guests',
'19 guests',
'20 guests',
'21 guests',
'22 guests',
'23 guests',
'24 guests',
'25 guests',
'26 guests',
'27 guests',
'28 guests',
'29 guests',
'30 guests',
'31 guests',
'32 guests',
'33 guests',
'34 guests',
'35 guests',
'36 guests',
'37 guests',
'38 guests',
'39 guests',
'40 guests',
'41 guests',
'42 guests',
'43 guests',
'44 guests',
'45 guests',
'46 guests',
'47 guests',
'48 guests',
'49 guests',
'50 guests',
'51 guests',
'52 guests',
'53 guests',
'54 guests',
'55 guests',
'56 guests',
'57 guests',
'58 guests',
'59 guests',
'60 guests',
'61 guests',
'62 guests',
'63 guests',
'64 guests'    ]
);       taStore.store("rgPicker.nChildIndex",   [
'Child 0',
'Child 1',
'Child 2',
'Child 3',
'Child 4',
'Child 5',
'Child 6',
'Child 7',
'Child 8',
'Child 9',
'Child 10',
'Child 11',
'Child 12',
'Child 13',
'Child 14',
'Child 15',
'Child 16',
'Child 17',
'Child 18',
'Child 19',
'Child 20',
'Child 21',
'Child 22',
'Child 23',
'Child 24',
'Child 25',
'Child 26',
'Child 27',
'Child 28',
'Child 29',
'Child 30',
'Child 31',
'Child 32'    ]
);       taStore.store("rgPicker.nAgeOfChildIndex",   [
'Age of child 0',
'Age of child 1',
'Age of child 2',
'Age of child 3',
'Age of child 4',
'Age of child 5',
'Age of child 6',
'Age of child 7',
'Age of child 8',
'Age of child 9',
'Age of child 10',
'Age of child 11',
'Age of child 12',
'Age of child 13',
'Age of child 14',
'Age of child 15',
'Age of child 16',
'Age of child 17',
'Age of child 18',
'Age of child 19',
'Age of child 20',
'Age of child 21',
'Age of child 22',
'Age of child 23',
'Age of child 24',
'Age of child 25',
'Age of child 26',
'Age of child 27',
'Age of child 28',
'Age of child 29',
'Age of child 30',
'Age of child 31',
'Age of child 32'    ]
);
taStore.store('rooms_guests_picker_update_da', 'Update');
taStore.store("best_prices_with_dates_21f3", 'Best prices for \074span class=\"dateHeader inDate\"\076checkIn\074/span\076 - \074span class=\"dateHeader outDate\"\076checkOut\074/span\076');
});
</script>
<script type="text/javascript">
require(['ta/Core/TA.Store'], function(taStore) {
ta.store('metaDatePickerEnabled', true);
var common_skip_dates = "Search without specific dates";
ta.store('multiDP.skipDates', "Search without specific dates");         ta.store('multiDP.inDate', "");
ta.store('multiDP.outDate', "");
ta.store('multiDP.minCheckInDate', '2019-12-22');
ta.store('multiDP.multiNightsText', "2 nights");         ta.store('multiDP.singleNightText', "1 night");         ta.store('calendar.preDateText', "mm/dd/yyyy");
ta.store('multiDP.adultsCount', "2");
ta.store('multiDP.singleAdultsText', "1 guest");         ta.store('multiDP.multiAdultsText', "2 guests");         ta.store('multiDP.enterDatesText', "Enter dates");                 ta.store('multiDP.isMondayFirstDayOfWeek', false);
ta.store('multiDP.dateSeparator', " - ");
ta.store('multiDP.dateRangeEllipsis', "Searching %%%...");
ta.store('multiDP.abbrevMonthList', ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);
ta.store('multiDP.checkIn', "mm/dd/yyyy");           ta.store('multiDP.checkOut', "mm/dd/yyyy");           });
var jsDesktopBackboneAsset = ["https://static.tacdn.com/js3/build/concat/desktop_modules_modbone-c-v22880201494a.js"];
</script>
</DIV>
<!--etk-->
<!--trkP:web_performance_rum_2-->
<div class="react-container" id='component_36' data-component-props='page-manifest' data-component='@ta/platform.rum-redux-container'></div><!--etk-->
<script type="text/javascript">
ta.queueForReady( function() {
ta.localStorage && ta.localStorage.updateSessionId('74CEA223E2F7FF7360867645B0B0FF33');
}, 1, "reset localStorage session id");
</script>
<script type="text/javascript">
require(['trjs!utils/bounceRateUtils'], function(bounceRate) {
bounceRate.init([15, 30]);
});
</script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/polyfills/dist/intl.en-US-v2975869048a.js'></script>
<script>
typeof define !== 'undefined' && define('ta-i18n',['utils/IntlFormatter'],function(IntlFormatter){
Intl && Intl.__disableRegExpRestore && Intl.__disableRegExpRestore();
return (ta=ta||{}).i18n=new IntlFormatter("en-US","UAH");
});
</script>
<script type="text/javascript">
ta.store("hotels_left_filters_redesign", true);
ta.store("hotels_left_filters_redesign_searching_text", 'Searching <span style="color:#FFCC00">up to 200 sites</span> for best prices: %%%');     ta.store("hotels_left_filters_redesign_so_text_short", "Special Offers");
ta.store("hac.suppress_updating_overlay", true);
</script>
<script type="text/javascript">
ta.store('ta.commerce.suppress_commerce_impressions.enabled', true);
</script>
<script type="text/javascript">
ta.store('ib_price_click_tracking.enabled', true);
</script>
<script type="text/javascript">
require(['ta/Core/TA.Store'], function(taStore) {
taStore.store('typeahead.typeahead2_mixed_ui', true);
taStore.store('typeahead.typeahead2_geo_segmented_ui', true);
taStore.store('typeahead.geoArea', 'Luxembourg Province area');     taStore.store('typeahead.worldwide', 'Worldwide');     taStore.store('typeahead.noResultsFound', 'No results found.');
taStore.store('typeahead.flight_enabled', true);
taStore.store('typeahead.localAirports', []);
taStore.store('typeahead.recentHistoryList', [{"lookbackServlet":null,"autobroadened":"false","normalized_name":"luxembourg province","title":"Destinations","type":"GEO","document_id":null,"is_vr":true,"url":"\/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","urls":[{"url_type":"geo","name":"Luxembourg Province Tourism","fallback_url":"\/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","type":"GEO","url":"\/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"},{"url_type":"vr","name":"Luxembourg Province Vacation Rentals","fallback_url":"\/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html","type":"VACATION_RENTAL","url":"\/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html"},{"url_type":"eat","name":"Luxembourg Province Restaurants","fallback_url":"\/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"EATERY","url":"\/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"url_type":"attr","name":"Luxembourg Province Attractions","fallback_url":"\/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"ATTRACTION","url":"\/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"url_type":"hotel","name":"Luxembourg Province Hotels","fallback_url":"\/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html","type":"HOTEL","url":"\/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html"},{"url_type":"flights_to","name":"Flights to Luxembourg Province","fallback_url":"\/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html","type":"FLIGHTS_TO","url":"\/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html"},{"url_type":"nbrhd","name":"Luxembourg Province Neighborhoods","fallback_url":"\/NeighborhoodList-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"NEIGHBORHOOD","url":null},{"url_type":"tg","name":"Luxembourg Province Travel Guides","fallback_url":"\/Travel_Guide-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","type":"TRAVEL_GUIDE","url":null}],"is_broad":false,"scope":"global","name":"Luxembourg Province, Belgium, Europe","data_type":"LOCATION","details":{"placetype":10020,"parent_name":"Belgium","grandparent_name":"Europe","grandparent_id":4,"parent_id":188634,"grandparent_place_type":10000,"rac_enabled":true,"highlighted_name":"Luxembourg Province","name":"Luxembourg Province","parent_place_type":10001,"parent_ids":[188652,2263872,188634,4,1],"geo_name":"Belgium, Europe"},"value":188657,"coords":"49.67013,5.81474"},{"lookbackServlet":null,"autobroadened":"false","normalized_name":"new zealand","title":"Destinations","type":"GEO","document_id":null,"is_vr":true,"url":"\/Tourism-g255104-New_Zealand-Vacations.html","urls":[{"url_type":"geo","name":"New Zealand Tourism","fallback_url":"\/Tourism-g255104-New_Zealand-Vacations.html","type":"GEO","url":"\/Tourism-g255104-New_Zealand-Vacations.html"},{"url_type":"vr","name":"New Zealand Vacation Rentals","fallback_url":"\/VacationRentals-g255104-Reviews-New_Zealand-Vacation_Rentals.html","type":"VACATION_RENTAL","url":"\/VacationRentals-g255104-Reviews-New_Zealand-Vacation_Rentals.html"},{"url_type":"eat","name":"New Zealand Restaurants","fallback_url":"\/Restaurants-g255104-New_Zealand.html","type":"EATERY","url":"\/Restaurants-g255104-New_Zealand.html"},{"url_type":"attr","name":"New Zealand Attractions","fallback_url":"\/Attractions-g255104-Activities-New_Zealand.html","type":"ATTRACTION","url":"\/Attractions-g255104-Activities-New_Zealand.html"},{"url_type":"hotel","name":"New Zealand Hotels","fallback_url":"\/Hotels-g255104-New_Zealand-Hotels.html","type":"HOTEL","url":"\/Hotels-g255104-New_Zealand-Hotels.html"},{"url_type":"flights_to","name":"Flights to New Zealand","fallback_url":"\/Flights-g255104-New_Zealand-Cheap_Discount_Airfares.html","type":"FLIGHTS_TO","url":"\/Flights-g255104-New_Zealand-Cheap_Discount_Airfares.html"},{"url_type":"nbrhd","name":"New Zealand Neighborhoods","fallback_url":"\/NeighborhoodList-g255104-New_Zealand.html","type":"NEIGHBORHOOD","url":null},{"url_type":"tg","name":"New Zealand Travel Guides","fallback_url":"\/Travel_Guide-g255104-New_Zealand.html","type":"TRAVEL_GUIDE","url":null}],"is_broad":true,"scope":"global","name":"New Zealand, South Pacific","data_type":"LOCATION","details":{"placetype":10001,"parent_name":"South Pacific","parent_id":8,"rac_enabled":false,"highlighted_name":"New Zealand","name":"New Zealand","parent_place_type":10000,"parent_ids":[8,1],"geo_name":"South Pacific"},"value":255104,"coords":"-41.28894,174.77629"}]);
taStore.store('typeahead.restaurant', "Restaurant");         taStore.store('typeahead.attraction', "Attraction");         taStore.store('typeahead.hotel', "Hotel");                       taStore.store('typeahead.restaurant_list', "Restaurants");       taStore.store('typeahead.attraction_list', "Attractions");       taStore.store('typeahead.things_to_do', "Things to Do");                 taStore.store('typeahead.hotel_list', "Hotels");                 taStore.store('typeahead.flight_list', "Flights");                   taStore.store('typeahead.vacation_rental_list', "Vacation Rentals");     taStore.store('typeahead.scoped.static_local_label', '% area');     taStore.store('typeahead.scoped.result_title_text', 'Start typing, or try one of these suggestions...');     taStore.store('typeahead.scoped.poi_overview_geo', '<span class="poi_overview_item">Overview</span> of %');     taStore.store('typeahead.scoped.poi_hotels_geo', '<span class="poi_overview_item">Hotels</span> in %');     taStore.store('typeahead.scoped.poi_hotels_geo_near', '<span class="poi_overview_item">Hotels</span> near %');     taStore.store('typeahead.scoped.poi_vr_geo', '<span class="poi_overview_item">Vacation Rentals</span> in %');     taStore.store('typeahead.scoped.poi_vr_geo_near', '<span class="poi_overview_item">Vacation Rentals</span> near %');     taStore.store('typeahead.scoped.poi_attractions_geo', '<span class="poi_overview_item">Things to Do</span> in %');     taStore.store('typeahead.scoped.poi_eat_geo', '<span class="poi_overview_item">Restaurants</span> in %');     taStore.store('typeahead.scoped.poi_flights_geo', '<span class="poi_overview_item">Flights</span> to %');     taStore.store('typeahead.scoped.poi_nbrhd_geo', '<span class="poi_overview_item">Neighborhoods</span> in %');     taStore.store('typeahead.scoped.poi_travel_guides_geo', '<span class="poi_overview_item">Travel Guides</span> in %');     taStore.store('typeahead.scoped.overview', 'Overview');     taStore.store('typeahead.scoped.neighborhoods', 'Neighborhoods');     taStore.store('typeahead.scoped.travel_guides', 'Travel Guides');     taStore.store('typeahead.scoped.geo_area_template', '% area');     taStore.store('typeahead.searchMore', 'Find more results for "%"');
taStore.store('typeahead.history', 'Recently viewed');     taStore.store('typeahead.history.all_caps', 'RECENTLY VIEWED');     taStore.store('typeahead.popular_destinations', 'POPULAR DESTINATIONS');
});
</script>
<script type="text/javascript">
require(['ta/Core/TA.LocalStorage'], function(taStore) {
var key = "firstEntryServlet";
var ttl = 30 * 60 * 1000; // 30 min in milliseconds
var entryServlet = "Attractions";
var existingStorageEntry = taStore.get(key);
if (existingStorageEntry != null) {
entryServlet = existingStorageEntry; // if key already exists, just update its "now" timestamp by setting it again
}
taStore.set(key, entryServlet, ttl);
});
</script>
<script type="text/javascript">
ta.store('metaCheckRatesUpdateDivInline', 'PROVIDER_BLOCK_INLINE');
ta.store('metaInlineGeoId', '');
</script>
<script>
</script>
<script type="text/javascript">
ta.store('metaCheckRatesUpdateDiv', 'PROVIDER_BLOCK');
ta.store('checkrates.one_second_xsell', true);
</script>
<script>
ta.store("lightbox_improvements", true);
ta.store("checkrates.hr_bc_see_all_click.lb", true);
</script>
<script type="text/javascript">
</script>
<script type="text/javascript">
var metaCheckRatesCSS = 'https://static.tacdn.com/css2/build/concat/meta_ui_sk_box_chevron-v2486729077a.css';
ta.store('metaCheckRatesFeatureEnabled', true);
</script>
<script type="text/javascript">
ta.store('mapProviderFeature.maps_api','ta-maps-gmaps3');
</script>
<script type="text/javascript">
var dropdownMetaCSS = "https://static.tacdn.com/css2/build/concat/meta_drop_down_overlay-v22009058768a.css";
</script>
<script type="text/javascript">
ta.store('metaDatePickerEnabled', true);
var common_skip_dates = "Search without specific dates";
ta.store('multiDP.skipDates', "Search without specific dates");         ta.store('multiDP.inDate', "");
ta.store('multiDP.outDate', "");
ta.store('multiDP.minCheckInDate', '2019-12-22');
ta.store('multiDP.multiNightsText', "2 nights");         ta.store('multiDP.singleNightText', "1 night");         ta.store('calendar.preDateText', "mm/dd/yyyy");
ta.store('multiDP.adultsCount', "2");
ta.store('multiDP.singleAdultsText', "1 guest");         ta.store('multiDP.multiAdultsText', "2 guests");         ta.store('multiDP.enterDatesText', "Enter dates");                 ta.store('multiDP.isMondayFirstDayOfWeek', false);
ta.store('multiDP.dateSeparator', " - ");
ta.store('multiDP.dateRangeEllipsis', "Searching %%%...");
ta.store('multiDP.abbrevMonthList', ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);
ta.store('multiDP.checkIn', "mm/dd/yyyy");           ta.store('multiDP.checkOut', "mm/dd/yyyy");         </script>
<script type="text/javascript">
(function(window,ta,undefined){
try {
ta = window.ta = window.ta || {};
ta.uid = 'Xf9oMwokIH0AAMxKCbEAAAEt';
var xhrProto = XMLHttpRequest.prototype;
var origSend = xhrProto.send;
xhrProto.send = function(data) {
try {
var localRE = new RegExp('^(/[^/]|(http(s)?:)?//'+window.location.hostname+')');
if(this._url && localRE.test(this._url)) {
this.setRequestHeader('X-Puid', 'Xf9oMwokIH0AAMxKCbEAAAEt');
}
}
catch (e2) {}
origSend.call(this, data);
}
var origOpen = xhrProto.open;
xhrProto.open = function (method, url) {
this._url = url;
return origOpen.apply(this, arguments);
};
ta.userLoggedIn = false;
ta.userSecurelyLoggedIn = false;
if (require.defined('ta/Core/TA.Prerender')) {
require('ta/Core/TA.Prerender')._init(true);
}
require(['ta/Core/TA.Record'], function(taRecord) {
taRecord.pushPageData(JSON.parse('{\"cv\":[[\"_deleteCustomVar\",1],[\"_deleteCustomVar\",47],[\"_setCustomVar\",12,\"Country\",\"Belgium-188634\",3],[\"_setCustomVar\",19,\"Region\",\"The Ardennes-188652\",3],[\"_setCustomVar\",25,\"Continent\",\"Europe-4\",3],[\"_setCustomVar\",20,\"PP\",\"--\",3],[\"_deleteCustomVar\",11],[\"_deleteCustomVar\",13],[\"_deleteCustomVar\",14],[\"_deleteCustomVar\",8],[\"_deleteCustomVar\",10]],\"url\":\"/Attractions\"}'));
});
require(['ta/Core/TA.Store'], function(taStore) {
taStore.keep("partials.pageProperties","");
taStore.store("gaMemberState","-");
});
}
catch (e) {
if (require.defined('ta/util/Error')) {
require('ta/util/Error').record(e,'global_ga.vm');
}
}
}(window,ta));
</script>
<script type="text/javascript">
var lazyImgs = [
{"data":"https://static.tacdn.com/img2/maps/icons/spinner24.gif","scroll":false,"tagType":"img","id":"lazyload_1594226165_0","priority":100,"logerror":false}
,   {"data":"https://static.tacdn.com/img2/widget/weather/logo_footer.gif","scroll":true,"tagType":"img","id":"lazyload_1594226165_1","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/16/f6/a5/50/photo0jpg.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_2","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/0e/28/38/c2/los-toboganes.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_3","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-s/0a/78/43/6c/team-beast-an-team-pensionsair.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_4","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/0f/70/7f/19/notre-salle-d-accueil.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_5","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/0f/dd/4f/4c/216k-escape-room.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_6","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/11/e1/fc/81/img-20180126-195331-largejpg.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_7","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/12/5a/35/bf/20180317-164743-largejpg.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_8","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/0a/16/f1/d4/espace-machines-a-sous.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_9","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-s/07/72/3c/a6/salade-de-chevres-panes.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_10","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/0a/77/92/ff/photo0jpg.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_11","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/0c/3e/10/df/bowling-81.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_12","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/10/57/2e/f6/view-of-castle-playground.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_13","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/09/a4/7e/93/syrdall-schwemm.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_14","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/11/cb/ef/6f/inside-the-pool-area.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_15","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/11/d0/36/29/spingbecken.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_16","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/0f/85/85/da/getlstd-property-photo.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_17","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/0e/94/d9/6e/photo0jpg.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_18","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/0d/64/76/e8/utopolis-2008.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_19","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/10/34/ec/e2/photo2jpg.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_20","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/16/42/4c/05/60-minutes-top-chrono.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_21","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-f/13/55/c8/39/lasergame-outdoor-gaume.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_22","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/11/ad/bc/de/sas-d-equipement-laser.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_23","priority":100,"logerror":false}
,   {"data":"https://media-cdn.tripadvisor.com/media/photo-i/12/31/88/f1/steinfort-adventure.jpg","scroll":false,"tagType":"img","id":"lazyload_1594226165_24","priority":100,"logerror":false}
,   {"data":"https://p.smartertravel.com/ext/pixel/ta/seed.gif?id=NY1QkB0y0N6_QpZghp4RCyL7yfFWuxGj8ucKEPGcYJc6d3Dxqo0Os_O3CIj1CUyD","scroll":false,"tagType":"img","id":"p13n_tp_stm","priority":1000,"logerror":false}
];
var lazyHtml = [
{ id: 'lazyload_1594226165_25', data: '   <div id="history_carousel" class="wrap">     <h2 class="history_carousel_header">       You recently viewed...     </h2>                                              <!--trkP:recently_viewed-->                                                                    <!--trkproperties-->                                                                             <!--etk-->                   <div id="history_carousel_content" class="history_carousel_content wrap"                     data-navArea-placement="Viewed_Recently"                   >  <div class="hotel_list_wrapper">   <h3>               Destinations you\'ve viewed       </h3>   <ul>                                             <!--trkN:1/L:255104-->               <li class="lodging wrap">              <div class="thumbnail fl avthumb">     <a onclick="ta.util.cookie.setPIDCookie(16217);ta.setEvtCookieAndPath(\'Thumbnail\')" target="_blank" href="/Tourism-g255104-New_Zealand-Vacations.html">                                                                                                                                       <div class="sizedThumb " style="height: 60px; width: 60px; "  >                                                 <img src="https://media-cdn.tripadvisor.com/media/photo-l/00/10/d1/cf/aucklands-last-volcano.jpg" class="photo_image" style="height: 60px; width: 60px;" alt="New Zealand"  width="60" height="60" />                            </div>               </a>   </div>           <div class="content">               <div class="propertyLink">     <a target="_blank"        href="/Tourism-g255104-New_Zealand-Vacations.html" onclick="ta.util.cookie.setPIDCookie(16216);ta.setEvtCookieAndPath(\'HotelName\');"          title="New Zealand"     >New Zealand</a>   </div>                           <div class="location">     South Pacific   </div>                         </div>         </li>            <!--etk-->                       </ul> </div>                                                  <!--trkP:rv_geo_recos-->                                                                  <!--trkproperties-->                                                                    <!--etk-->                   <div class="also_viewed_carousel_wrapper">     <h3>                     Hotels travelers are raving about...           </h3>           <div id="also_viewed_carousel">       <div class="carousel_content">         <div class="carousel_items_wrapper">                                                         <!--trkN:1/L:579065-->                     <div id="p13n_hotel_579065" class="carousel_item">                 <div class="sizedThumb">                   <a target="_blank" href="/Hotel_Review-g2492427-d579065-Reviews-Maruia_Hot_Springs-Maruia_West_Coast_Region_South_Island.html" onclick="ta.util.cookie.setPIDCookie(16219);ta.setEvtCookieAndPath(\'Thumbnail\');" class="photo_link ">                                                                                                                                             <div class="sizedThumb " style="height: 110px; width: 115px; "  >                                                 <img src="https://media-cdn.tripadvisor.com/media/photo-l/12/09/43/41/hot-springs-geothermal.jpg" class="photo_image" style="height: 110px; width: 115px;" alt="Maruia Hot Springs"  width="115" height="110" />                            </div>                             </a>                 </div>                                   <a class="ui_button original small w100p no_cpu cmAVTest win_test_3 " onclick="ta.trackEventOnPage(\'meta_lightbox_chevron\', \'open\',\'button\');" target="_blank" href="/Hotel_Review-g2492427-d579065-Reviews-Maruia_Hot_Springs-Maruia_West_Coast_Region_South_Island.html">Show Prices</a>                                <div class="content">                     <div class="propertyLink">   <a target="_blank"    href="/Hotel_Review-g2492427-d579065-Reviews-Maruia_Hot_Springs-Maruia_West_Coast_Region_South_Island.html"      onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'HotelName\');"      title="Maruia Hot Springs"   >Maruia Hot Springs</a></div>                         <div class="location parent_name">     Maruia, West Coast Region   </div>                         <div class="rating wrap">             <span class="ui_bubble_rating bubble_40"></span>             <div class="wsnw">         <a onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'ReviewCounts\');" target="_blank" href="/Hotel_Review-g2492427-d579065-Reviews-Maruia_Hot_Springs-Maruia_West_Coast_Region_South_Island.html#REVIEWS" >                           87 Reviews                  </a>       </div>     </div>                   </div>               </div>                  <!--etk-->                                                                         <!--trkN:2/L:13791764-->                     <div id="p13n_hotel_13791764" class="carousel_item">                 <div class="sizedThumb">                   <a target="_blank" href="/Hotel_Review-g6483419-d13791764-Reviews-Otematata_Eatery_Bar_Lodging-Otematata_Otago_Region_South_Island.html" onclick="ta.util.cookie.setPIDCookie(16219);ta.setEvtCookieAndPath(\'Thumbnail\');" class="photo_link ">                                                                                                                                             <div class="sizedThumb " style="height: 110px; width: 115px; "  >                                                 <img src="https://media-cdn.tripadvisor.com/media/photo-l/14/c5/50/0e/otematata-eatery-bar.jpg" class="photo_image" style="height: 110px; width: 115px;" alt="Otematata Eatery Bar &amp; Lodging"  width="115" height="110" />                            </div>                             </a>                 </div>                                   <a class="ui_button original small w100p no_cpu cmAVTest win_test_3 " onclick="ta.trackEventOnPage(\'meta_lightbox_chevron\', \'open\',\'button\');" target="_blank" href="/Hotel_Review-g6483419-d13791764-Reviews-Otematata_Eatery_Bar_Lodging-Otematata_Otago_Region_South_Island.html">Show Prices</a>                                <div class="content">                     <div class="propertyLink">   <a target="_blank"    href="/Hotel_Review-g6483419-d13791764-Reviews-Otematata_Eatery_Bar_Lodging-Otematata_Otago_Region_South_Island.html"      onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'HotelName\');"      title="Otematata Eatery Bar &amp; Lodging"   >Otematata Eatery Bar & Lodging</a></div>                         <div class="location parent_name">     Otematata, Otago Region   </div>                         <div class="rating wrap">             <span class="ui_bubble_rating bubble_35"></span>             <div class="wsnw">         <a onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'ReviewCounts\');" target="_blank" href="/Hotel_Review-g6483419-d13791764-Reviews-Otematata_Eatery_Bar_Lodging-Otematata_Otago_Region_South_Island.html#REVIEWS" >                           55 Reviews                  </a>       </div>     </div>                   </div>               </div>                  <!--etk-->                                                                         <!--trkN:3/L:318250-->                     <div id="p13n_hotel_318250" class="carousel_item">                 <div class="sizedThumb">                   <a target="_blank" href="/Hotel_Review-g255116-d318250-Reviews-Lake_Brunner_Lodge-South_Island.html" onclick="ta.util.cookie.setPIDCookie(16219);ta.setEvtCookieAndPath(\'Thumbnail\');" class="photo_link ">                                                                                                                                             <div class="sizedThumb " style="height: 110px; width: 115px; "  >                                                 <img src="https://media-cdn.tripadvisor.com/media/photo-l/0a/37/00/d9/main-lodge.jpg" class="photo_image" style="height: 110px; width: 115px;" alt="Lake Brunner Lodge"  width="115" height="110" />                            </div>                             </a>                 </div>                                   <a class="ui_button original small w100p no_cpu cmAVTest win_test_3 " onclick="ta.trackEventOnPage(\'meta_lightbox_chevron\', \'open\',\'button\');" target="_blank" href="/Hotel_Review-g255116-d318250-Reviews-Lake_Brunner_Lodge-South_Island.html">Show Prices</a>                                <div class="content">                     <div class="propertyLink">   <a target="_blank"    href="/Hotel_Review-g255116-d318250-Reviews-Lake_Brunner_Lodge-South_Island.html"      onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'HotelName\');"      title="Lake Brunner Lodge"   >Lake Brunner Lodge</a></div>                         <div class="location parent_name">     South Island, New Zealand   </div>                         <div class="rating wrap">             <span class="ui_bubble_rating bubble_45"></span>             <div class="wsnw">         <a onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'ReviewCounts\');" target="_blank" href="/Hotel_Review-g255116-d318250-Reviews-Lake_Brunner_Lodge-South_Island.html#REVIEWS" >                           27 Reviews                  </a>       </div>     </div>                   </div>               </div>                  <!--etk-->                                                                         <!--trkN:4/L:1765743-->                     <div id="p13n_hotel_1765743" class="carousel_item">                 <div class="sizedThumb">                   <a target="_blank" href="/Hotel_Review-g255105-d1765743-Reviews-Rangitikei_Farmstay-North_Island.html" onclick="ta.util.cookie.setPIDCookie(16219);ta.setEvtCookieAndPath(\'Thumbnail\');" class="photo_link ">                                                                                                                                             <div class="sizedThumb " style="height: 110px; width: 115px; "  >                                                 <img src="https://media-cdn.tripadvisor.com/media/photo-l/12/98/04/ca/the-bunkhouse.jpg" class="photo_image" style="height: 110px; width: 115px;" alt="Rangitikei Farmstay"  width="115" height="110" />                            </div>                             </a>                 </div>                                   <a class="ui_button original small w100p no_cpu cmAVTest win_test_3 " onclick="ta.trackEventOnPage(\'meta_lightbox_chevron\', \'open\',\'button\');" target="_blank" href="/Hotel_Review-g255105-d1765743-Reviews-Rangitikei_Farmstay-North_Island.html">Show Prices</a>                                <div class="content">                     <div class="propertyLink">   <a target="_blank"    href="/Hotel_Review-g255105-d1765743-Reviews-Rangitikei_Farmstay-North_Island.html"      onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'HotelName\');"      title="Rangitikei Farmstay"   >Rangitikei Farmstay</a></div>                         <div class="location parent_name">     North Island, New Zealand   </div>                         <div class="rating wrap">             <span class="ui_bubble_rating bubble_50"></span>             <div class="wsnw">         <a onclick="ta.util.cookie.setPIDCookie(16218);ta.setEvtCookieAndPath(\'ReviewCounts\');" target="_blank" href="/Hotel_Review-g255105-d1765743-Reviews-Rangitikei_Farmstay-North_Island.html#REVIEWS" >                           110 Reviews                  </a>       </div>     </div>                   </div>               </div>                  <!--etk-->                                   </div>       </div>     </div>   </div>                   <!--etk-->                        <div class="clearFix"></div> </div>                    <!--etk-->                  </div> ', scroll: true }
];
ta.queueForLoad( function() {
require('lib/LazyLoad').init({}, lazyImgs, lazyHtml);
}, 'lazy load images');
</script>
<script type="text/javascript">
ta.keep('startOffset', '1');
<!-- currentGeoId = 188657 -->
ta.store('page.geo', "188657");
ta.store('page.location', "188657");
ta.store('page.urlSafe', "__2F__Attractions__2D__g188657__2D__Activities__2D__c56__2D__Luxembourg__5F__Province__5F__The__5F__Ardennes__5F__Wallonia__2E__html");
ta.store('facebook.disableLogin', false);
ta.store('facebook.apiKey', "162729813767876");
ta.store('facebook.appId', "162729813767876");
ta.store('facebook.appName', "tripadvisor");
ta.store('facebook.taServerTime', "1577019443");
ta.store('facebook.skip.session.check',"false");
ta.store('facebook.apiVersion', "v3.2");
ta.store("facebook.invalidFBCreds", true);
window.fbAsyncInit = ta.support.Facebook.init;
ta.queueForLoad(function(){
ta.support.Facebook.loadSdkLite("//connect.facebook.net/en_US/sdk.js");
}, 0, 'LoadFBJSLite');
ta.store('fb.name', "");
ta.store('fb.icon', "");
ta.keep('facebook.data.request', ['IP_HEADER']);
ta.keep('facebook.onSessionAvail', function () {
var node = document.getElementById('MOBHDRLNK');
if (node)
{
node.parentNode.removeChild(node);
}
});
</script>
<!--trkP:enable_cpm_content-->
<!-- PLACEMENT enable_cpm_content -->
<DIV ID="taplc_enable_cpm_content_0" class="ppr_rup ppr_priv_enable_cpm_content" data-placement-name="enable_cpm_content">
<style type="text/css">.gptAd {position: relative;width: 100%; text-align: center;margin-left: auto;margin-right: auto;}.iab_leaBoa {text-align: center;}.ftrBanner { clear:both }.gptAd > div, .gptAd > div > iframe {display: block !important;margin-left: auto;margin-right: auto;}.gptAd.taEmpty {display: none !important;}</style> <script>function prfMark(lbl) {var perf = window.performance;if (perf && perf.mark){perf.mark(lbl);}  } require(["ta/Core/TA.Store", "common/trackingStreams"],function(taStore, ts) {prfMark('start_load_ads_js');       taStore.store("ads.adStubs", {"adTypes":[{"tgt":"gpt-ad-160x600","size":[[160,600],"fluid"],"type":"skyscraper_top","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["top"],"fluidType":"rail"}},{"tgt":"gpt-ad-300x250-300x600","size":[[300,250],[300,600],"fluid"],"type":"medium_rectangle_top","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["top"],"fluidType":"rail","videoType":"rail"}},{"tgt":"gpt-ad-3x1-globalnav","size":[[3,1]],"type":"other","isHidden":true,"base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["globalnav"],"kw":"lure","disable_event_refresh":true}},{"tgt":"gpt-ad-3x1-tripsearch","size":[[3,1]],"type":"other","isHidden":true,"base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["tripsearch"],"kw":"lure","disable_event_refresh":true}},{"tgt":"gpt-ad-3x1-quicklinks","size":[[3,1]],"type":"other","isHidden":true,"base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["quicklinks"],"kw":"lure","disable_event_refresh":true}},{"tgt":"gpt-ad-970x250-728x90-header","size":[[970,250],[728,90],"fluid"],"type":"leaderboard_header","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["header"],"fluidType":"banner"}},{"tgt":"gpt-ad-728x90-a","size":[[728,90],"fluid"],"type":"leaderboard_a","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["a"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-b","size":[[728,90],"fluid"],"type":"leaderboard_b","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["b"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-c","size":[[728,90],"fluid"],"type":"leaderboard_c","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["c"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-d","size":[[728,90],"fluid"],"type":"leaderboard_d","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["d"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-e","size":[[728,90],"fluid"],"type":"leaderboard_e","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["e"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-300x250-300x600-bottom","size":[[300,250],[300,600],"fluid"],"type":"medium_rectangle_bottom","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["bottom"],"fluidType":"rail","videoType":"rail"}},{"tgt":"gpt-ad-728x90-footer","size":[[728,90],"fluid"],"type":"leaderboard_footer","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["footer"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-970x250-728x90-footer","size":[[970,250],[728,90],"fluid"],"type":"leaderboard_footer","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["footer"],"fluidType":"banner","videoType":"inline"}}]}); taStore.store("ads.pageTargeting", {"country":"188634","drs":["BRAND_41","FL_98","SALES_28","P13N_39","PRT_98"],"d":"BRU","sess":"74CEA223E2F7FF7360867645B0B0FF33","loctype":"attractions","platform":"desktop","o":"IEV","dregion":"188644","aud_id":["15299","15460","15189","16062","16635"],"geo":"188657","rd":"com","r":"IEVBRU","seg":["fam"],"pv_id":"Xf9oMwokIH0AAMxKCbEAAAEt","oregion":"294474","attractype":["fun_and_games"],"detail":"0","region":["188657","188652","2263872"],"PageType":"Attractions","hname":"Luxembourg_Province"});taStore.store("ads.adTracking", {"56115731":"Onyx","125294291":"Onyx","439801571":"Onyx","439513691":"Onyx","268297691":"Onyx","146529491":"Onyx","56043851":"Onyx","55678451":"Hotwire","55721291":"Choice","55752491":"Choice","56107811":"Rakuten","444557411":"Rakuten"}); var initOpts = {gptBase: "/5349/ta.ta.ru.s/eu.belgium",gptConfig: {"adTrackingConfig":{"56115731":"Onyx","125294291":"Onyx","439801571":"Onyx","439513691":"Onyx","268297691":"Onyx","146529491":"Onyx","56043851":"Onyx","55678451":"Hotwire","55721291":"Choice","55752491":"Choice","56107811":"Rakuten","444557411":"Rakuten"},"enable_deferred_ads":true},pageTargeting: {"country":"188634","drs":["BRAND_41","FL_98","SALES_28","P13N_39","PRT_98"],"d":"BRU","sess":"74CEA223E2F7FF7360867645B0B0FF33","loctype":"attractions","platform":"desktop","o":"IEV","dregion":"188644","aud_id":["15299","15460","15189","16062","16635"],"geo":"188657","rd":"com","r":"IEVBRU","seg":["fam"],"pv_id":"Xf9oMwokIH0AAMxKCbEAAAEt","oregion":"294474","attractype":["fun_and_games"],"detail":"0","region":["188657","188652","2263872"],"PageType":"Attractions","hname":"Luxembourg_Province"},adStubs: {"adTypes":[{"tgt":"gpt-ad-160x600","size":[[160,600],"fluid"],"type":"skyscraper_top","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["top"],"fluidType":"rail"}},{"tgt":"gpt-ad-300x250-300x600","size":[[300,250],[300,600],"fluid"],"type":"medium_rectangle_top","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["top"],"fluidType":"rail","videoType":"rail"}},{"tgt":"gpt-ad-3x1-globalnav","size":[[3,1]],"type":"other","isHidden":true,"base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["globalnav"],"kw":"lure","disable_event_refresh":true}},{"tgt":"gpt-ad-3x1-tripsearch","size":[[3,1]],"type":"other","isHidden":true,"base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["tripsearch"],"kw":"lure","disable_event_refresh":true}},{"tgt":"gpt-ad-3x1-quicklinks","size":[[3,1]],"type":"other","isHidden":true,"base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["quicklinks"],"kw":"lure","disable_event_refresh":true}},{"tgt":"gpt-ad-970x250-728x90-header","size":[[970,250],[728,90],"fluid"],"type":"leaderboard_header","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["header"],"fluidType":"banner"}},{"tgt":"gpt-ad-728x90-a","size":[[728,90],"fluid"],"type":"leaderboard_a","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["a"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-b","size":[[728,90],"fluid"],"type":"leaderboard_b","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["b"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-c","size":[[728,90],"fluid"],"type":"leaderboard_c","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["c"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-d","size":[[728,90],"fluid"],"type":"leaderboard_d","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["d"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-728x90-e","size":[[728,90],"fluid"],"type":"leaderboard_e","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["e"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-300x250-300x600-bottom","size":[[300,250],[300,600],"fluid"],"type":"medium_rectangle_bottom","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["bottom"],"fluidType":"rail","videoType":"rail"}},{"tgt":"gpt-ad-728x90-footer","size":[[728,90],"fluid"],"type":"leaderboard_footer","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["footer"],"fluidType":"banner","videoType":"inline"}},{"tgt":"gpt-ad-970x250-728x90-footer","size":[[970,250],[728,90],"fluid"],"type":"leaderboard_footer","base":"/5349/ta.ta.ru.s/eu.belgium","custom_targeting":{"pos":["footer"],"fluidType":"banner","videoType":"inline"}}]}};require(['trjs!cpm/DesktopAds'], function(desktopAds) {desktopAds.initDoubleClick(initOpts);});});</script></DIV>
<!--etk-->
<!--trkP:enable_ad_rendering_tracking-->
<!-- PLACEMENT enable_ad_rendering_tracking -->
<DIV ID="taplc_enable_ad_rendering_tracking_0" class="ppr_rup ppr_priv_enable_ad_rendering_tracking" data-placement-name="enable_ad_rendering_tracking">
<script>require(["ta/Core/TA.Record"],function(taRecord) {var COLLAPSER_ID = 55978451;window.googletag = window.googletag || { cmd: [] };window.googletag.cmd.push(function () {window.googletag.pubads().addEventListener('slotRenderEnded', function (event) {if (event.slot &&!event.isEmpty &&COLLAPSER_ID !== event.advertiserId) {var domId = event.slot.getSlotElementId();taRecord.trackImpressionEventOnPage('gpt-ad', 'rendered', domId);}});});});</script></DIV>
<!--etk-->
<script type="text/javascript">
if(ta.meta && ta.meta.linkTracking) {
require(['trjs!retargeting/listeners/desktop-meta-click'], function(metaClickListener) {
metaClickListener();
});
}
var checkRatesCSS = "https://static.tacdn.com/css2/modules/checkrates-v23374364353a.css";
var regflowCss = "https://static.tacdn.com/css2/build/concat/registration-v22009309703a.css";
var overlayCss = "https://static.tacdn.com/css2/build/concat/overlays_defer-v23045660842a.css";
var amenityOverlayCss = "https://static.tacdn.com/css2/build/concat/amenities_flyout-v22310945057a.css";
var amenityLightboxCss = "https://static.tacdn.com/css2/build/concat/amenities_lightbox-v2742169547a.css";
var privateMsgCSS = "https://static.tacdn.com/css2/modules/private_messaging-v2580065107a.css";
var recentViewedCSS = "https://static.tacdn.com/css2/common/recently_viewed-v2628695694a.css";
var jfyOverlayCss = "https://static.tacdn.com/css2/p13n/jfy_onboarding.css";
var floatingMapCSS = "https://static.tacdn.com/css2/modules/floating_map-v21951364473a.css";
var g_mapV2Css = "https://static.tacdn.com/css2/build/concat/ta-mapsv2-v22185840089a.css";
var dhtml_cr_redesign_basic = "https://static.tacdn.com/css2/overlays/cr_flyout-v22873065740a.css";
var dhtml_cr_redesign_png24 = "https://static.tacdn.com/css2/overlays/cr_flyout-v22873065740a.css";
ta.store('checkrates.chrome_dates_entry_holding',true);
ta.store('checkrates.cr_popunder_by_shift_ctrl',true);
ta.store('p13n_client_tracking_tree',true);
ta.store('commerce_on_srp',true);
ta.store('useHotelsFilterState', true);
ta.store('ta.media.uploader.cssAsset', 'https://static.tacdn.com/css2/overlays/media_uploader-v21357956602a.css')
ta.meta && ta.meta.linkTracking && ta.queueForLoad(function() { ta.meta.linkTracking.setup(); }, 'setup meta link tracking event');
ta.store('assisted_booking_clicks_new_tab', true);
ta.store('access_control_headers', true);
ta.store('secure_registration.enabled',true);
ta.store( 'meta.disclaimerLinkText', 'Disclaimer' );
ta.store('restaurant_reserve_ui',true);
ta.store('hotels_placements_short_cells.overlaysCss', "https://static.tacdn.com/css2/build/concat/hotels_list_short_cells_overlays-v24264262611a.css" );
</script>
<script class="allowabsoluteurls" type="text/javascript">
(function(G,o,O,g,L,e){G[g]=G[g]||function(){(G[g]['q']=G[g]['q']||[]).push(
arguments)},G[g]['t']=1*new Date;L=o.createElement(O),e=o.getElementsByTagName(
O)[0];L.async=1;L.src='//www.google.com/adsense/search/async-ads.js';
e.parentNode.insertBefore(L,e)})(window,document,'script','_googCsa');
var renderedAds = 0;
var placementAds = 0;
var renderedTrackingFired = false;
var csa_tracking_timeout;
// this tracking should fire at most once
function trackRendered() {
if (renderedAds > 0 && !renderedTrackingFired) {
renderedTrackingFired = true;
require(["trjs!common/trackingStreams"], function(track) {
track.trackEvent('csa_inventory_rendered', 'impression', '', renderedAds, true);
});
}
}
(function(){
function addCallback(boxName, obj){
obj.adLoadedCallback = function(containerName, adsLoaded){
var el = document.getElementById(boxName);
if(el && !adsLoaded){
try {
// remove container if we do not have ads to show
el.parentNode.removeChild(el);
} catch(e){
ta.util.error.record(e, 'Google CSA');
}
} else {
// successfully rendered a AFS ad
renderedAds++;
window.clearTimeout(csa_tracking_timeout);// reset timeout
if (renderedAds == placementAds) {
trackRendered();
} else {
csa_tracking_timeout = setTimeout(trackRendered,1000);
}
}
};
return obj;
}
_googCsa(
'ads',
{
"pubId": "tripadvisor",
"channel": "Attractions-en_US",
"query": "Things to Do in Luxembourg Province",
"queryLink": "Attractions",
"queryContext": " Luxembourg Province, The Ardennes, Wallonia",
"adPage": 1,
"hl": "en",
"linkTarget": "_blank",
"plusOnes": false,
"sellerRatings": false,
"siteLinks": false,
"domainLinkAboveDescription": true
}
);
require(["trjs!common/trackingStreams"], function(track) {
track.trackEvent('csa_inventory', 'impression', '', placementAds, true);
});
}());
</script>
<script class="allowAbsoluteUrls" type="text/javascript">
ta.store('ta.registration.currentUrlDefaults', {'url' : 'https%3A__2F____2F__www__2E__tripadvisor__2E__com__2F__Attractions__2D__g188657__2D__Activities__2D__c56__2D__Luxembourg__5F__Province__5F__The__5F__Ardennes__5F__Wallonia__2E__html','partnerKey' : '1','urlKey' : 'cf31a05885a9c6dbf'} );
</script>
<script type="text/javascript">
ta.store('ta.isIE11orHigher', false);
</script>
<script type='text/javascript'>
ta.store('hac_timezone_awareness', true);
ta.store('ta.hac.locationTimezoneOffset', 3600000);
</script>
<script type='text/javascript'>
if (ta.localStorage && ta.localStorage.enabled) {
var previousSessionId = ta.localStorage.get('qualaroo-session-id');
var currentSessionId = '74CEA223E2F7FF7360867645B0B0FF33';
if (previousSessionId && previousSessionId == currentSessionId) {
var views = Number(ta.localStorage.get('qualaroo-page-views')) + 1;
ta.localStorage.set('qualaroo-page-views', views);
} else {
ta.localStorage.set('qualaroo-session-id', currentSessionId);
ta.localStorage.set('qualaroo-page-views', 1);
}
}
</script>
<script type='text/javascript'>
ta.store("calendar.serverTime", 1577019443443);
</script>
<script type="text/javascript">
ta.store("commerce_clicks_in_new_tab.isEnabled", true);
</script>
<script type="text/javascript">
ta.store('assisted_booking_desktop_entry', false);
ta.store('ibdm_impression_tracking', true);
ta.store('assisted_booking_desktop_entry.logTreePoll', true);
</script>
<script type="text/javascript">
ta.store("common_update_results","Update Results");    ta.store("airm_updateSearchLabel","Update Search");  </script>
<script type="text/javascript">
ta.store('guests_rooms_picker.enabled', true);
ta.queueForLoad(function() {
ta.widgets.calendar.updateGuestsRoomsPickerDataFromCookie();
ta.widgets.calendar.updateGuestsRoomsPickerUI();
}, 'update_guests_picker');
</script>
<script type="text/javascript">
require(['ta/Core/TA.Store'], function(taStore) {
taStore.store('rgPicker.nRooms',   [
'0 rooms',
'1 room',
'2 rooms',
'3 rooms',
'4 rooms',
'5 rooms',
'6 rooms',
'7 rooms',
'8 rooms'    ]
);      taStore.store("rgPicker.nGuests",   [
'0 guests',
'1 guest',
'2 guests',
'3 guests',
'4 guests',
'5 guests',
'6 guests',
'7 guests',
'8 guests',
'9 guests',
'10 guests',
'11 guests',
'12 guests',
'13 guests',
'14 guests',
'15 guests',
'16 guests',
'17 guests',
'18 guests',
'19 guests',
'20 guests',
'21 guests',
'22 guests',
'23 guests',
'24 guests',
'25 guests',
'26 guests',
'27 guests',
'28 guests',
'29 guests',
'30 guests',
'31 guests',
'32 guests',
'33 guests',
'34 guests',
'35 guests',
'36 guests',
'37 guests',
'38 guests',
'39 guests',
'40 guests',
'41 guests',
'42 guests',
'43 guests',
'44 guests',
'45 guests',
'46 guests',
'47 guests',
'48 guests',
'49 guests',
'50 guests',
'51 guests',
'52 guests',
'53 guests',
'54 guests',
'55 guests',
'56 guests',
'57 guests',
'58 guests',
'59 guests',
'60 guests',
'61 guests',
'62 guests',
'63 guests',
'64 guests'    ]
);
taStore.store('rgPicker.roomsLabel', 'Rooms');
;       taStore.store('rgPicker.adultsLabel', 'Adults');
;       taStore.store('rgPicker.childrenLabel', 'Children');
;       taStore.store('rgPicker.guestsLabel', 'Guests');
;
taStore.store("rgPicker.nAdults",   [
'0 adults',
'1 adult',
'2 adults',
'3 adults',
'4 adults',
'5 adults',
'6 adults',
'7 adults',
'8 adults',
'9 adults',
'10 adults',
'11 adults',
'12 adults',
'13 adults',
'14 adults',
'15 adults',
'16 adults',
'17 adults',
'18 adults',
'19 adults',
'20 adults',
'21 adults',
'22 adults',
'23 adults',
'24 adults',
'25 adults',
'26 adults',
'27 adults',
'28 adults',
'29 adults',
'30 adults',
'31 adults',
'32 adults'    ]
);           taStore.store("rgPicker.nChildren",   [
'0 children',
'1 child',
'2 children',
'3 children',
'4 children',
'5 children',
'6 children',
'7 children',
'8 children',
'9 children',
'10 children',
'11 children',
'12 children',
'13 children',
'14 children',
'15 children',
'16 children',
'17 children',
'18 children',
'19 children',
'20 children',
'21 children',
'22 children',
'23 children',
'24 children',
'25 children',
'26 children',
'27 children',
'28 children',
'29 children',
'30 children',
'31 children',
'32 children'    ]
);       taStore.store("rgPicker.nGuestsForChildren",   [
'0 guests',
'1 guest',
'2 guests',
'3 guests',
'4 guests',
'5 guests',
'6 guests',
'7 guests',
'8 guests',
'9 guests',
'10 guests',
'11 guests',
'12 guests',
'13 guests',
'14 guests',
'15 guests',
'16 guests',
'17 guests',
'18 guests',
'19 guests',
'20 guests',
'21 guests',
'22 guests',
'23 guests',
'24 guests',
'25 guests',
'26 guests',
'27 guests',
'28 guests',
'29 guests',
'30 guests',
'31 guests',
'32 guests',
'33 guests',
'34 guests',
'35 guests',
'36 guests',
'37 guests',
'38 guests',
'39 guests',
'40 guests',
'41 guests',
'42 guests',
'43 guests',
'44 guests',
'45 guests',
'46 guests',
'47 guests',
'48 guests',
'49 guests',
'50 guests',
'51 guests',
'52 guests',
'53 guests',
'54 guests',
'55 guests',
'56 guests',
'57 guests',
'58 guests',
'59 guests',
'60 guests',
'61 guests',
'62 guests',
'63 guests',
'64 guests'    ]
);       taStore.store("rgPicker.nChildIndex",   [
'Child 0',
'Child 1',
'Child 2',
'Child 3',
'Child 4',
'Child 5',
'Child 6',
'Child 7',
'Child 8',
'Child 9',
'Child 10',
'Child 11',
'Child 12',
'Child 13',
'Child 14',
'Child 15',
'Child 16',
'Child 17',
'Child 18',
'Child 19',
'Child 20',
'Child 21',
'Child 22',
'Child 23',
'Child 24',
'Child 25',
'Child 26',
'Child 27',
'Child 28',
'Child 29',
'Child 30',
'Child 31',
'Child 32'    ]
);       taStore.store("rgPicker.nAgeOfChildIndex",   [
'Age of child 0',
'Age of child 1',
'Age of child 2',
'Age of child 3',
'Age of child 4',
'Age of child 5',
'Age of child 6',
'Age of child 7',
'Age of child 8',
'Age of child 9',
'Age of child 10',
'Age of child 11',
'Age of child 12',
'Age of child 13',
'Age of child 14',
'Age of child 15',
'Age of child 16',
'Age of child 17',
'Age of child 18',
'Age of child 19',
'Age of child 20',
'Age of child 21',
'Age of child 22',
'Age of child 23',
'Age of child 24',
'Age of child 25',
'Age of child 26',
'Age of child 27',
'Age of child 28',
'Age of child 29',
'Age of child 30',
'Age of child 31',
'Age of child 32'    ]
);
taStore.store('rooms_guests_picker_update_da', 'Update');
taStore.store("best_prices_with_dates_21f3", 'Best prices for \074span class=\"dateHeader inDate\"\076checkIn\074/span\076 - \074span class=\"dateHeader outDate\"\076checkOut\074/span\076');
});
</script>
<script type="text/javascript">
</script>
<script type="text/javascript">
ta.localStorage && ta.localStorage.set('latestPageServlet', 'Attractions');
</script>
<script type="text/javascript">
ta.queueForLoad(function() {
if(!ta.overlays || !ta.overlays.Factory) {
var cancel = pageServlet == 'Hotels' && document.location.href.match(/-g\d/);
if (!cancel) {
ta.load('ta-overlays');
}
}
}, 'preload ta-overlays');
</script>
<script type="text/javascript">
ta.store('screenSizeRecord', true);
</script>
<script type='text/javascript'>
ta.store('feature.CHILDREN_SEARCH', true);
</script>
<script type='text/javascript'>
ta.store('feature.flat_buttons_sitewide', true);
</script>
<script type='text/javascript'>
ta.store('h_sponsored_coupon_respect_price_slider', true);
</script>
<script type='text/javascript'>
ta.store("dustGlobalContext", '{\"IS_IELE8\":false,\"LOCALE\":\"en_US\",\"IS_IE10\":false,\"CDN_HOST\":\"https:\/\/static.tacdn.com\",\"DEVICE\":\"desktop\",\"IS_RTL\":false,\"LANG\":\"en\",\"DEBUG\":false,\"READ_ONLY\":false,\"POS_COUNTRY\":191}');
</script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/desktop-calendar-templates-dust-en_US-c-v23794593892a.js' data-rup='desktop-calendar-templates-dust-en_US'></script>
<script type="text/javascript">
ta.store('tablet_google_search_app_open_same_tab', true);
</script>
<script>window.__WEB_CONTEXT__={pageManifest:{"assets":["/components/dist/@ta/platform.polyfill-web-modern.0849faed25.js","/components/dist/runtime.14b9eab2b6.js","/components/dist/@ta/platform.runtime.2bc3d10444.js","/components/dist/vendor-babel.7ddb8bc92f.js","/components/dist/vendor-react-libs.cd6e44d478.js","/components/dist/vendor-redux-libs.68ed94cf7a.js","/components/dist/ta-platform.f3bc0b0d9f.js","/components/dist/lithium-platform.e30b02edf1.js","/components/dist/@ta/platform.sentry.5df6f0afc2.js","/components/dist/@ta/platform.interactions.4ea84f560b.js","/components/dist/vendor-apollo-libs.4e3db1c3c6.js","/components/dist/vendor-common.676aec902d.js","/components/dist/@ta/common.responsive.695da0b9b8.js","/components/dist/lithium-routes.ed099931a7.js","/components/dist/@ta/platform.monikers.d66d6b4ab8.js","/components/dist/@ta/core-ui.toast.a37794d24c.js","/components/dist/@ta/platform.ssr-cache.ada7060f08.js","/components/dist/@ta/login.auth-gate-original.7ce5fc6291.js","/components/dist/@ta/login.auth-gate-lithium.79726719e6.js","/components/dist/@ta/login.login.ca2a63eb79.js","/components/dist/lithium-common.eca700237a.js","/components/dist/vendor-urql.07c25396b9.js","/components/dist/vendor-lodash-libs.8a8cd325a0.js","/components/dist/tslib.0824b5dc96.js","/components/dist/@ta/common.transitions.6cb671ce75.js","/components/dist/@ta/common.webview.ca9cc41943.js","/components/dist/@ta/modal.styleguide.fed4a29980.js","/components/dist/@ta/events.window.7231812912.js","/components/dist/@ta/common.image-preloader.0146a99f2a.js","/components/dist/ta-common.d0f083d05c.js","/components/dist/@ta/overlays.popover.0c2832d5fc.js","/components/dist/@ta/modal.fullscreen.0b7bfe32de.js","/components/dist/@ta/modal.vanilla.02c7192dbe.js","/components/dist/@ta/input.drop-zone.d3f12fd7ba.js","/components/dist/react-transition-group.13e0fb3c1f.js","/components/dist/@ta/overlays.pieces.436d8e29f1.js","/components/dist/@ta/overlays.attached-arrow-overlay.84d7008b98.js","/components/dist/@ta/modal.core.43a6af0efe.js","/components/dist/@ta/overlays.attached-overlay.20d90e53de.js","/components/dist/@ta/overlays.shift.29856641dc.js","/components/dist/@ta/events.keyboard-event-listener.90200be291.js","/components/dist/@ta/a11y.focus.6b37fe0769.js","/components/dist/@ta/events.window-resize.0b81d51539.js","/components/dist/@ta/platform.runtime.e7e9ab5e5c.css","/components/dist/@ta/platform.monikers.eccf1a862b.css","/components/dist/@ta/core-ui.toast.10039ee993.css","/components/dist/@ta/login.auth-gate-lithium.4eefc67f16.css","/components/dist/lithium-common.bb663001be.css","/components/dist/@ta/common.webview.dd67304f49.css","/components/dist/@ta/common.image-preloader.4b6612bd1c.css","/components/dist/ta-common.e887762988.css","/components/dist/@ta/overlays.popover.71723674ee.css","/components/dist/@ta/modal.fullscreen.7fa7f6c9a8.css","/components/dist/@ta/modal.vanilla.83b151c09d.css","/components/dist/@ta/input.drop-zone.a2a1035b2d.css","/components/dist/@ta/overlays.pieces.36a3e7fe3d.css","/components/dist/@ta/modal.core.e967143f16.css","/components/dist/brand.header.3e6ab3d01b.js","/components/dist/@ta/common.data-cacher.3c8391f070.js","/components/dist/@ta/brand.global-nav-context.f797489637.js","/components/dist/@ta/brand.global-nav-geopill.b4706157c7.js","/components/dist/@ta/brand.global-nav-action-shopping-cart.000d1f4790.js","/components/dist/@ta/brand.global-nav-action-inbox.75916fecd9.js","/components/dist/@ta/brand.global-nav-action-profile.8845aa7706.js","/components/dist/@ta/brand.global-nav-search.3ddcf5132f.js","/components/dist/@ta/brand.quick-links.4d665a5c24.js","/components/dist/@ta/styleguide.nav-tabs.fe693019b7.js","/components/dist/@ta/brand.sponsored-geopill.b3d2e9e685.js","/components/dist/@ta/overlays.slide-in.1622431eb6.js","/components/dist/@ta/brand.mobile-global-nav-content-collect.d4792e7458.js","/components/dist/@ta/brand.global-nav.db8f6b5dc5.js","/components/dist/@ta/onboarding.explicit-preferences-entry.32b9719636.js","/components/dist/@ta/onboarding.explicit-preferences-external-tracking.f6c90aa172.js","/components/dist/@ta/social.onboarding-state.c4c89cba0a.js","/components/dist/@ta/trips.states.af8b5e9c93.js","/components/dist/@ta/brand.global-nav-action-search.b9b7ea5fd1.js","/components/dist/@ta/brand.global-nav-action-content-collect.273ae63fc0.js","/components/dist/@ta/brand.global-nav-action-trips.b6f0b447f7.js","/components/dist/@ta/overlays.responsive-attached-overlay.3c21db58da.js","/components/dist/@ta/brand.geopill-search.34d6a23264.js","/components/dist/@ta/search.typeahead.e0057bb0c2.js","/components/dist/@ta/events.lifecycle.ea027d4b64.js","/components/dist/@ta/tracking.interactions.018c9df59f.js","/components/dist/@ta/brand.trip-search-geopill-flyout.3efe1fe961.js","/components/dist/@ta/cpm.590h3aaj2ykycy2oiul.2b527b4774.js","/components/dist/@ta/cpm.adsupport.aab176828e.js","/components/dist/@ta/modal.slide-in.6445abeb2e.js","/components/dist/@ta/common.authz.2701193ac4.js","/components/dist/@ta/social.login-gate.4593c01c4d.js","/components/dist/@ta/overlays.modal.3c2a764ecd.js","/components/dist/@ta/modal.headers.57d27ea05f.js","/components/dist/@ta/public.listing.d39b6aa411.js","/components/dist/@ta/common.hover-chain.c137ab74a5.js","/components/dist/@ta/onboarding.explicit-preferences.7742a447e4.js","/components/dist/@ta/trips.tracking.f98cbf27bb.js","/components/dist/@ta/common.geolocation.65d4a7da9e.js","/components/dist/@ta/common.text-html.b580189706.js","/components/dist/@ta/common.localstorage.abf4fa9103.js","/components/dist/@ta/social.tooltip-state.bc0243bf5d.js","/components/dist/@ta/common.sessionstorage.1d748b5bb9.js","/components/dist/@ta/cpm.hqwtxyh8w.45bc73fe7b.js","/components/dist/@ta/common.client.fc5db7311e.js","/components/dist/@ta/brand.geopill-util.68cb105b50.js","/components/dist/@ta/onboarding.common.1e0a3b73c6.js","/components/dist/@ta/trips.impressions.2656eac1dd.js","/components/dist/@ta/trips.trip-types.2ba0a6173a.js","/components/dist/@ta/cpm.utils.847a72dd97.js","/components/dist/@ta/common.typeahead.8fb66e6cbd.js","/components/dist/@ta/list.navigable-list.43933abc3a.js","/components/dist/@ta/trips.trip-util.02238eff50.js","/components/dist/@ta/common.keyboardCodes.cc06ab7cdb.js","/components/dist/@ta/styleguide.skeleton.42ed6d68c1.js","/components/dist/@ta/input.text-input.390c2be47f.js","/components/dist/@ta/trips.graphql.f80647db3f.js","/components/dist/brand.header.7734417ba7.css","/components/dist/@ta/brand.global-nav-geopill.9bba692d85.css","/components/dist/@ta/brand.global-nav-action-shopping-cart.238cae47b0.css","/components/dist/@ta/brand.global-nav-action-inbox.cd3a5cc00e.css","/components/dist/@ta/brand.global-nav-action-profile.508ed15570.css","/components/dist/@ta/brand.global-nav-search.d298f52543.css","/components/dist/@ta/brand.quick-links.33be5ce143.css","/components/dist/@ta/brand.mobile-global-nav-content-collect.d62dd58c3d.css","/components/dist/@ta/brand.global-nav.b96b130d39.css","/components/dist/@ta/onboarding.explicit-preferences-entry.599375b53d.css","/components/dist/@ta/trips.states.f7ac3bac87.css","/components/dist/@ta/brand.global-nav-action-search.3ce3a19ad5.css","/components/dist/@ta/brand.global-nav-action-content-collect.70caa4a2c2.css","/components/dist/@ta/brand.global-nav-action-trips.f69c1f5d0b.css","/components/dist/@ta/brand.geopill-search.1865e2c698.css","/components/dist/@ta/search.typeahead.d96b443814.css","/components/dist/@ta/brand.trip-search-geopill-flyout.db9b08f25f.css","/components/dist/@ta/cpm.590h3aaj2ykycy2oiul.632f504180.css","/components/dist/@ta/modal.slide-in.e8398e62b7.css","/components/dist/@ta/modal.headers.e98af0d89e.css","/components/dist/@ta/public.listing.397032d6fb.css","/components/dist/@ta/onboarding.explicit-preferences.b9b5430265.css","/components/dist/@ta/cpm.hqwtxyh8w.27bda00e18.css","/components/dist/@ta/onboarding.common.8ea4d373ea.css","/components/dist/@ta/common.typeahead.4660010722.css","/components/dist/@ta/styleguide.skeleton.22aac568bd.css","/components/dist/@ta/input.text-input.957ba6eb4c.css","/components/dist/@ta/trips.save-to-trip.5f76a1de02.js","/components/dist/@ta/trips.trip-flow-selector.61182f8c71.js","/components/dist/@ta/trips.save-to-trip-btn-hotspot-tooltip.7484da3ce9.js","/components/dist/@ta/trips.save-to-trip-btn-hotspot-poptoast.505d6b76c7.js","/components/dist/@ta/trips.bookmark-icon.da172473fd.js","/components/dist/@ta/memx.time-series-logger.0ed6d6a6c0.js","/components/dist/@ta/trips.trip-errors.0ccade9cae.js","/components/dist/@ta/trips.trip-toasts.f8fb10aaa1.js","/components/dist/@ta/trips.saver.10b7d7fa30.js","/components/dist/@ta/common.timer.6197ede415.js","/components/dist/@ta/trips.save-to-trip.097749e5b8.css","/components/dist/@ta/trips.trip-flow-selector.c3211583ab.css","/components/dist/@ta/trips.save-to-trip-btn-hotspot-tooltip.b3b4bb5314.css","/components/dist/@ta/trips.save-to-trip-btn-hotspot-poptoast.be4cfc78e8.css","/components/dist/@ta/trips.bookmark-icon.85f98d182d.css","/components/dist/@ta/trips.trip-toasts.264bc64f13.css","/components/dist/@ta/attractions.attractions-socialproof-shelf.8b8895515e.js","/components/dist/@ta/media.face-pile.dc8e55158a.js","/components/dist/@ta/social.scroll.b0193e5c7b.js","/components/dist/@ta/styleguide.bubble-rating.17ecf7d1a1.js","/components/dist/@ta/attractions.attractions-socialproof-shelf.4d905a713b.css","/components/dist/@ta/media.face-pile.689b753cde.css","/components/dist/@ta/social.scroll.0c59c51673.css","/components/dist/@ta/styleguide.bubble-rating.715d17688a.css","/components/dist/@ta/memx.registration-dialog-controller.f48b9efd99.js","/components/dist/@ta/memx.google-onetap.5fb908a0b6.js","/components/dist/@ta/memx.hard-gate-controller.49a1f6212a.js","/components/dist/@ta/memx.ta-twotap.ceb66fded8.js","/components/dist/@ta/memx.facebook-onetap.33aaf78097.js","/components/dist/@ta/memx.google-onetap-api.5631d3f1b9.js","/components/dist/@ta/hotels.trip-search-autopop.8d36871246.js","/components/dist/@ta/memx.home-location-prompt.8687a170b7.js","/components/dist/@ta/memx.exclusive-content-prompt.7369a54a19.js","/components/dist/@ta/memx.app-download-dialog.be0df2aa1a.js","/components/dist/@ta/memx.registration-dialog-utils.7fa4b15cde.js","/components/dist/@ta/memx.gating-utils.bef1ea196c.js","/components/dist/@ta/memx.gating-eligible-logic.ab6338d0b5.js","/components/dist/@ta/memx.gating-overlays.94b4bda61b.js","/components/dist/@ta/memx.partial-page-prompt.58e9ab1b92.js","/components/dist/@ta/memx.download-app-button.0f62ea407a.js","/components/dist/@ta/cpm.utitar1150yh3xhy9laeaz4g9.e41b3830bf.js","/components/dist/@ta/memx.detail-page-review-info.b4c3b605d1.js","/components/dist/@ta/memx.open-in-app-button.ea21be04a6.js","/components/dist/@ta/memx.sign-in-button.3f09beae19.js","/components/dist/@ta/memx.continue-with-button.dccb67cf38.js","/components/dist/@ta/memx.google-onetap.ab22cef07c.css","/components/dist/@ta/memx.ta-twotap.59c05af42a.css","/components/dist/@ta/memx.facebook-onetap.1241d2f738.css","/components/dist/@ta/memx.home-location-prompt.2a7f8b808c.css","/components/dist/@ta/memx.exclusive-content-prompt.a112c9d29b.css","/components/dist/@ta/memx.app-download-dialog.6b850ca3f6.css","/components/dist/@ta/memx.gating-overlays.38194d5b0f.css","/components/dist/@ta/memx.partial-page-prompt.b39477faa0.css","/components/dist/@ta/memx.download-app-button.d303f48907.css","/components/dist/@ta/cpm.utitar1150yh3xhy9laeaz4g9.98a1c5c722.css","/components/dist/@ta/memx.open-in-app-button.f64cd00e2b.css","/components/dist/@ta/memx.sign-in-button.c22f39a6f3.css","/components/dist/@ta/memx.continue-with-button.07b9f16ac8.css","/components/dist/@ta/social.onboarding-controller.20efba2da9.js","/components/dist/@ta/social.onboarding-controller.92ec88f576.css","/components/dist/@ta/platform.rum-redux-container.7a52460260.js","/components/dist/@ta/platform.rum.27838b4ade.js","/components/dist/@ta/trips.trip-modal-route.588e66f123.js","/components/dist/@ta/trips.trip-detail-layout.92e96908fb.js","/components/dist/@ta/trips.trip-detail-layout.8e8fbe7f5d.css"],"bundles":["@ta/platform.polyfill-web-modern","runtime","vendor-babel","vendor-react-libs","vendor-redux-libs","ta-platform","lithium-platform","@ta/platform.sentry","@ta/platform.interactions","@ta/platform.runtime","@ta/common.data-cacher","@ta/brand.global-nav-context","@ta/brand.global-nav-geopill","@ta/brand.global-nav-action-shopping-cart","@ta/brand.global-nav-action-inbox","@ta/brand.global-nav-action-profile","@ta/brand.global-nav-search","lithium-common","@ta/brand.quick-links","@ta/styleguide.nav-tabs","@ta/brand.sponsored-geopill","@ta/overlays.slide-in","ta-common","@ta/brand.mobile-global-nav-content-collect","@ta/brand.global-nav","@ta/onboarding.explicit-preferences-entry","@ta/onboarding.explicit-preferences-external-tracking","@ta/social.onboarding-state","@ta/trips.states","vendor-urql","@ta/brand.global-nav-action-search","@ta/brand.global-nav-action-content-collect","@ta/brand.global-nav-action-trips","brand.header","@ta/trips.trip-flow-selector","@ta/common.client","@ta/trips.save-to-trip-btn-hotspot-tooltip","@ta/trips.save-to-trip-btn-hotspot-poptoast","@ta/trips.bookmark-icon","@ta/memx.time-series-logger","@ta/trips.save-to-trip","@ta/media.face-pile","vendor-apollo-libs","@ta/social.scroll","@ta/styleguide.bubble-rating","@ta/attractions.attractions-socialproof-shelf","@ta/events.window-resize","@ta/cpm.utils","@ta/cpm.ad-target","@ta/memx.google-onetap","@ta/memx.hard-gate-controller","@ta/memx.ta-twotap","@ta/memx.facebook-onetap","@ta/memx.google-onetap-api","@ta/hotels.trip-search-autopop","@ta/memx.home-location-prompt","@ta/memx.exclusive-content-prompt","@ta/memx.app-download-dialog","@ta/memx.registration-dialog-utils","@ta/memx.gating-utils","@ta/memx.registration-dialog-controller","@ta/common.authz","@ta/tracking.interactions","@ta/social.login-gate","@ta/overlays.modal","@ta/modal.headers","@ta/public.listing","@ta/common.localstorage","@ta/social.tooltip-state","@ta/social.onboarding-controller","@ta/platform.rum","@ta/platform.rum-redux-container","@ta/trips.trip-detail-layout","@ta/trips.graphql","@ta/trips.trip-util","@ta/trips.trip-modal-route"],"redux":{"i18n":{"locale":"en_US","language":"en","ietfLocale":"en-US","isRtl":false,"currencyCode":"UAH","distanceUnit":"MILES","firstDayOfWeek":0},"api":{"requests":{"_data_1_0_cart_recaptureAlertType":{"loading":false,"result":["/data/1.0/cart/recaptureAlertType"],"url":"/data/1.0/cart/recaptureAlertType"},"_data_1_0_location_188657":{"loading":false,"result":["/data/1.0/location/188657"],"url":"/data/1.0/location/188657"},"_data_1_0_brand_logo_servlet_Attractions_locale_en_US_geoId_188657_viewportCategory_DESKTOP":{"loading":false,"result":["/data/1.0/brand/logo?servlet=Attractions&locale=en_US&geoId=188657&viewportCategory=DESKTOP"],"url":"/data/1.0/brand/logo?servlet=Attractions&locale=en_US&geoId=188657&viewportCategory=DESKTOP"},"_data_1_0_brand_navLinks_servlet_Attractions_locale_en_US_geoId_188657_viewportCategory_DESKTOP":{"loading":false,"result":["/data/1.0/brand/navLinks?servlet=Attractions&locale=en_US&geoId=188657&viewportCategory=DESKTOP"],"url":"/data/1.0/brand/navLinks?servlet=Attractions&locale=en_US&geoId=188657&viewportCategory=DESKTOP"},"_data_1_0_brand_geopill_servlet_Attractions_Filtered_geoId_188657":{"loading":false,"result":["/data/1.0/brand/geopill?servlet=Attractions_Filtered&geoId=188657"],"url":"/data/1.0/brand/geopill?servlet=Attractions_Filtered&geoId=188657"},"_data_1_0_inbox_navAction_isMember_false":{"loading":false,"result":["/data/1.0/inbox/navAction?isMember=false"],"url":"/data/1.0/inbox/navAction?isMember=false"},"_data_1_0_brand_header_servlet_Attractions_viewportCategory_DESKTOP_geoId_188657_pageName_Attractions_Filtered_isTaReferrer_false":{"loading":false,"result":["/data/1.0/brand/header?servlet=Attractions&viewportCategory=DESKTOP&geoId=188657&pageName=Attractions_Filtered&isTaReferrer=false"],"url":"/data/1.0/brand/header?servlet=Attractions&viewportCategory=DESKTOP&geoId=188657&pageName=Attractions_Filtered&isTaReferrer=false"},"_data_1_0_cart_info_servletName_Attractions":{"loading":false,"result":["/data/1.0/cart/info?servletName=Attractions"],"url":"/data/1.0/cart/info?servletName=Attractions"}},"responses":{"/data/1.0/cart/recaptureAlertType":{"data":{"type":"none"},"error":null},"/data/1.0/brand/navLinks?servlet=Attractions&locale=en_US&geoId=188657&viewportCategory=DESKTOP":{"data":{"links":[{"id":"tourism","text":"Luxembourg Province","url":"/Home-g188657","icon":null,"urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"tourism","isNewWindow":false,"hideFromSidebar":true,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"hotels","text":"Hotels","url":"/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html","icon":"hotels","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"hotels","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"attractions","text":"Things to do","url":"/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html","icon":"attractions","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"attractions","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"restaurants","text":"Restaurants","url":"/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","icon":"restaurants","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"restaurants","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"flights","text":"Flights","url":"/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html","icon":"flights","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"flights","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"vr","text":"Vacation Rentals","url":"/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html","icon":"vacation-rentals","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"vr","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"vp","text":"Vacation Packages","url":"/Vacation_Packages-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","icon":"on-the-beach","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"vp","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"cruises","text":"Cruises","url":"/CruiseDestination-g4-Europe","icon":"cruises","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"cruises","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"cars","text":"Rental Cars","url":"/RentalCars-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","icon":"parking","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":false,"trackingLabel":"cars","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"Forums","text":"Travel Forum","url":"/ShowForum-g188657-i1966-Luxembourg_Province_The_Ardennes_Wallonia.html","icon":"forums","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":true,"trackingLabel":"Forums","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"Airlines","text":"Airlines","url":"/Airlines","icon":"flights","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":true,"trackingLabel":"Airlines","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"TravelersChoice","text":"Best of 2019","url":"/TravelersChoice","icon":"travelers-choice-badge","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":true,"trackingLabel":"TravelersChoice","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"RoadTrips","text":"Road Trips","url":"/RoadTrip-g191-United_States.html","icon":null,"urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":true,"trackingLabel":"RoadTrips","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":false,"promoteAsNew":false,"subList":[]},{"id":"HelpDesk","text":"Help Center","url":"#","icon":"question-circle","urlWithGeoTemplate":null,"urlWithLatLngTemplate":null,"forceCollapse":true,"trackingLabel":"HelpDesk","isNewWindow":false,"hideFromSidebar":false,"sidebarPostCollapsed":true,"promoteAsNew":false,"subList":[]}],"activeLinkId":"attractions","isQuickLinksMoreNewLine":false,"isGeoScoped":true},"error":null},"/data/1.0/inbox/navAction?isMember=false":{"data":{"hasUnreadConvos":false},"error":null},"/data/1.0/cart/info?servletName=Attractions":{"data":{"count":null,"show":false},"error":null},"/data/1.0/brand/header?servlet=Attractions&viewportCategory=DESKTOP&geoId=188657&pageName=Attractions_Filtered&isTaReferrer=false":{"data":{"adjustForSmartBanner":false,"showGeopill":true,"numLines":2,"isPersistentHeader":false,"usePersistentIcons":true,"hideLogo":false,"liteHeader":false},"error":null},"/data/1.0/location/188657":{"data":{"location_id":"188657","name":"Luxembourg Province","latitude":"49.67013","longitude":"5.81474","num_reviews":"87560","timezone":"Europe/Brussels","location_string":"Luxembourg Province, The Ardennes, Wallonia","awards":[],"doubleclick_zone":"eu.belgium","preferred_map_engine":"default","geo_type":"narrow","category_counts":{"attractions":{"activities":"65","attractions":"142","nightlife":"19","shopping":"15","total":"241"},"restaurants":{"total":"825"},"accommodations":{"hotels":"100","bbs_inns":"252","others":"167","total":"519"},"neighborhoods":"0","airports":"0"},"nearby_attractions":[],"description":"","web_url":"https://www.tripadvisor.com/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","write_review":"https://www.tripadvisor.com/UserReview-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html","ancestors":[{"subcategory":[{"key":"region","name":"Region"}],"name":"The Ardennes","abbrv":null,"location_id":"188652"},{"subcategory":[{"key":"region","name":"Region"}],"name":"Wallonia","abbrv":null,"location_id":"2263872"},{"subcategory":[{"key":"country","name":"Country"}],"name":"Belgium","abbrv":null,"location_id":"188634"}],"category":{"key":"geographic","name":"Geographic"},"subcategory":[{"key":"province","name":"Province"}],"parent_display_name":"Belgium","is_jfy_enabled":false,"nearest_metro_station":[],"has_restaurant_coverpage":false,"has_attraction_coverpage":false,"has_curated_shopping_list":false,"photo":{"id":"24666490","published_date":"2010-03-29T04:12:14-0400","helpful_votes":"32","is_blessed":true,"uploaded_date":"2010-03-29T04:12:21-0400","images":{"small":{"url":"https://media-cdn.tripadvisor.com/media/photo-l/01/78/61/7a/durbuy.jpg","width":"150","height":"150"},"thumbnail":{"url":"https://media-cdn.tripadvisor.com/media/photo-t/01/78/61/7a/durbuy.jpg","width":"50","height":"50"},"original":{"url":"https://media-cdn.tripadvisor.com/media/photo-o/01/78/61/7a/durbuy.jpg","width":"720","height":"540"},"large":{"url":"https://media-cdn.tripadvisor.com/media/photo-s/01/78/61/7a/durbuy.jpg","width":"550","height":"412"},"medium":{"url":"https://media-cdn.tripadvisor.com/media/photo-f/01/78/61/7a/durbuy.jpg","width":"250","height":"187"}}},"tags":null,"display_hours":null},"error":null},"/data/1.0/brand/logo?servlet=Attractions&locale=en_US&geoId=188657&viewportCategory=DESKTOP":{"data":{"logoLink":"/","primary_logo_svg":"https://static.tacdn.com/img2/branding/rebrand/TA_logo_primary.svg","secondary_logo_png":"https://static.tacdn.com/img2/branding/rebrand/TA_logo_secondary.png","primary_logo_png":"https://static.tacdn.com/img2/branding/rebrand/TA_logo_primary.png","secondary_logo_svg":"https://static.tacdn.com/img2/branding/rebrand/TA_logo_secondary.svg","resize_logo":false},"error":null},"/data/1.0/brand/geopill?servlet=Attractions_Filtered&geoId=188657":{"data":{"isGeoScoped":true,"geoName":"Luxembourg Province","geoId":188657,"isNearby":false},"error":null}}},"page":{"name":"DEFAULT","geoId":188657,"detailId":0,"geoPoint":null},"travelerInfo":{"hotels":null,"vr":{"start":null,"end":null,"adults":2,"children":0},"attractions":{"singleDate":"","fromDate":"","toDate":"","attractionPaxAdults":0,"attractionPaxChildren":0},"restaurants":{"date":"2019-12-22","time":"8:00 PM","partySize":"2","isDefault":true,"displayDate":"Sun, 12/22"},"home":null},"auth":{"isMember":false,"csrfToken":"TNI1625!AN+khcbFl6Ff66zTBHWYPKAfN/dmgWxOl8yPmnagLdo8XdnKi80qOfoxJYglNrWcwycNirwWwqHD3T3k3wWmmURxHBjfrY9pr5VXcbYyrppTupNZVJBvD9D9t/v/segx5Onn3aiCa3v9u+aP80/jD9lp2A4fsbTxqf8o5IuPlw7J","altSessId":"6B45A30F0EE372671B9B1BBBC96522F0","loggedInUserId":null,"captcha":null,"fbApi":{"apiVersion":"v3.2","facebookConnectApiKey":"162729813767876","facebookConnectAppId":"162729813767876","facebookConnectAppName":"tripadvisor","taServerTime":1577019443,"skipFacebookSessionCheck":false,"sdkUrl":"//connect.facebook.net/en_US/sdk.js","facebookPermissions":"email,user_hometown,user_friends,user_likes,user_location,user_status,user_photos"}},"route":{"geo":"188657","zft":"11030","page":"Attractions_Filtered","categoryTag":11030,"cat":"56"},"lithiumRoute":[{"page":"Attractions","params":{},"path":"/Attractions-g188657-Activities-c56-Luxembourg_Province_The_Ardennes_Wallonia.html","fragment":""},{"uid":"Xf9oMwokIH0AAMxKCbEAAAEt"}],"overlays":{"global":null,"fab":null,"locals":{},"toasts":[]},"meta":{"initialServletName":"Attractions","device":{"viewportCategory":"DESKTOP","userAgentCategory":"DESKTOP","os":{"family":"UNKNOWN","majorVersion":-1},"browser":{"family":"CHROME","majorVersion":79},"securityToken":"c02542477afa6290d427992d41abf4c6d92801b35808d5ca9198bcdc18a2575a"},"readonlyMode":false,"initialRelativeUrl":"/Attractions-g188657-Activities-c56-Luxembourg_Province_The_Ardennes_Wallonia.html","initialAbsoluteUrl":"https://www.tripadvisor.com/Attractions-g188657-Activities-c56-Luxembourg_Province_The_Ardennes_Wallonia.html","baseUrl":"https://www.tripadvisor.com","imageCdnUrl":"https://static.tacdn.com","cookieDomain":".tripadvisor.com","taUnique":"web648a.95.67.26.233.16F140C8CB5","isTaReferrer":false,"referrerUrl":null,"forceFullSite":false,"environment":"Live","isNativeWebview":false,"commerceCountryId":294473,"impressionData":{"pageLoadUid":"Xf9oMwokIH0AAMxKCbEAAAEt"},"lineItemsByLoc":{}},"tracking":{"mcid":10568,"uid":"Xf9oMwokIH0AAMxKCbEAAAEt","analytics":{"cv":[["_deleteCustomVar",1],["_deleteCustomVar",47],["_setCustomVar",12,"Country","Belgium-188634",3],["_setCustomVar",19,"Region","The Ardennes-188652",3],["_setCustomVar",25,"Continent","Europe-4",3],["_setCustomVar",20,"PP","--",3],["_deleteCustomVar",11],["_deleteCustomVar",13],["_deleteCustomVar",14],["_deleteCustomVar",8],["_deleteCustomVar",10]],"url":"/Attractions"},"searchSessionId":"74CEA223E2F7FF7360867645B0B0FF331577019443316ssid","sessionId":"74CEA223E2F7FF7360867645B0B0FF33","uniqueId":"web648a.95.67.26.233.16F140C8CB5","serverName":"www.tripadvisor.com","hostName":"web650a.a.tripadvisor.com","vcsRevision":1398137,"vcsBranch":"releases/PRODUCTION_1398062_20191220_0400","drsInfo":"ABC.7*AFIL.61*ATTPromo.34*AUC.98*BBML.54*BMP.30*BRDTTD.22*Brand.41*CAKE.5*CAR.17*COM.5*CRS.11*Community.97*Content.7*CoreX.41*EATPIZZA.72*EID.15*EXP.71*Engage.73*FDP.79*FDS.46*FDU.96*FLTMERCH.37*FLTREV.54*Filters.75*Flights.98*HRATF.75*HSX.6*HSXB.41*IBEX.98*ING.64*INT1.70*INT2.67*ITR.20*L10N.3*ML.67*ML6.91*MM.40*MOBILEAPP.-1*MOF.64*MPS.66*MTA.32*Me2.78*Mem.95*Mobile.60*MobileCore.34*Notifications.25*Other.92*P13N.39*PIE.86*PLS.34*POS.3*PRT.98*RDS1.17*RDS2.37*RDS3.64*RDS4.70*RDS5.95*RET.57*REV.34*REVB.4*REVH.45*REVSD.31*REVSP.6*REVXS.70*RNA.21*RSE1.90*RSE2.90*Rooms.94*S3PO.93*SD40.95*SE2O.88*SEM.41*SEO.28*SORT1.12*Sales.28*Search.90*SiteX.33*Surveys.27*T4B.20*TGT.0*TRP.49*TTD.35*TX.97*Timeline.51*VP.75*VR.18*YM.80*YMB.16","uvmScore":"0.5470317949410499","retargetingUrl":"www.tamgrt.com/RT","domainName":"www.tripadvisor.com"}},"apolloCache":null,"urqlCache":{"3647544803":{"data":{"locations":[{"name":"Luxembourg Province"}],"globalNavLinks":{"sublinks":[{"linkId":"scoped-home","anchorText":"Luxembourg Province","url":"/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"},{"linkId":"hotels","anchorText":"Hotels","url":"/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html"},{"linkId":"attractions","anchorText":"Things to do","url":"/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"linkId":"restaurants","anchorText":"Restaurants","url":"/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"linkId":"flights","anchorText":"Flights","url":"/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html"},{"linkId":"vr","anchorText":"Vacation Rentals","url":"/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html"},{"linkId":"shopping","anchorText":"Shopping","url":"/Attractions-g188657-Activities-c26-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"linkId":"vp","anchorText":"Vacation Packages","url":"/Vacation_Packages-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"},{"linkId":"cruises","anchorText":"Cruises","url":"/CruiseDestination-g4-Europe"},{"linkId":"cars","anchorText":"Rental Cars","url":"/RentalCars-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"},{"linkId":null,"anchorText":null,"url":null}]},"insightProfile":{"locations":[{"location":{"locationId":188657,"parentId":188652,"name":"Luxembourg Province","url":"/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html","additionalNames":{"stateAndCountryOrEquivalent":"Wallonia, Belgium"},"thumbnail":{"photoSizes":[{"width":50,"height":50,"url":"https://media-cdn.tripadvisor.com/media/photo-t/11/33/fa/60/le-pont-de-cordemois.jpg"},{"width":150,"height":150,"url":"https://media-cdn.tripadvisor.com/media/photo-l/11/33/fa/60/le-pont-de-cordemois.jpg"},{"width":180,"height":200,"url":"https://media-cdn.tripadvisor.com/media/photo-i/11/33/fa/60/le-pont-de-cordemois.jpg"},{"width":250,"height":167,"url":"https://media-cdn.tripadvisor.com/media/photo-f/11/33/fa/60/le-pont-de-cordemois.jpg"},{"width":550,"height":367,"url":"https://media-cdn.tripadvisor.com/media/photo-s/11/33/fa/60/le-pont-de-cordemois.jpg"},{"width":1024,"height":682,"url":"https://media-cdn.tripadvisor.com/media/photo-w/11/33/fa/60/le-pont-de-cordemois.jpg"},{"width":2000,"height":1333,"url":"https://media-cdn.tripadvisor.com/media/photo-o/11/33/fa/60/le-pont-de-cordemois.jpg"}]}}},{"location":{"locationId":255104,"parentId":8,"name":"New Zealand","url":"/Tourism-g255104-New_Zealand-Vacations.html","additionalNames":{"stateAndCountryOrEquivalent":"South Pacific"},"thumbnail":{"photoSizes":[{"width":50,"height":50,"url":"https://media-cdn.tripadvisor.com/media/photo-t/07/2e/d1/37/shine-falls-close-up.jpg"},{"width":150,"height":150,"url":"https://media-cdn.tripadvisor.com/media/photo-l/07/2e/d1/37/shine-falls-close-up.jpg"},{"width":250,"height":167,"url":"https://media-cdn.tripadvisor.com/media/photo-f/07/2e/d1/37/shine-falls-close-up.jpg"},{"width":550,"height":367,"url":"https://media-cdn.tripadvisor.com/media/photo-s/07/2e/d1/37/shine-falls-close-up.jpg"},{"width":1024,"height":682,"url":"https://media-cdn.tripadvisor.com/media/photo-w/07/2e/d1/37/shine-falls-close-up.jpg"},{"width":2592,"height":1728,"url":"https://media-cdn.tripadvisor.com/media/photo-o/07/2e/d1/37/shine-falls-close-up.jpg"}]}}}]}}}},"messages":{"cx_explicit_preferences_profile_hometown":"I live in...","onetap_subhead_start_saving":"Sign in to start saving them","mx_nearby":"Nearby","common_Search":"Search","ugc_uploader_photo_v3":"Post photos","save_all_items_modal_header":"Save all items to a Trip","attractions.cart_recapture.abandoned_cart_overlay_cta":"Visit your shopping cart to see the items you saved last time \u2014 and check out when you\u2019re ready.","trips_error_default_update_comment":"There was a problem updating this comment. Please try again.","key_11_id_GOT2_ForumHead3":"Got questions? Get answers.","cx_explicit_preferences_end_body_geo":"Now start discovering great {destinationGeoName} ideas from other travelers like you.","app_download_toast_header":"Continue with our free app","stat_modal_view_trip_v2":"View Trip","cx_explicit_preferences_edit_cta_header":"Your trip details","utility_nav_search":"Search","mobile_owner_response_reviewed_by":"Reviewed {date} by {author}","mobile_gate_signin_for_best_tripadvisor":"Sign in for the best of TripAdvisor","onetap_message_genius_saves_travelideas":"You\u2019ve got great travel ideas!","reg_form_or":"OR","cx_explicit_preferences_profile_name_help":"This is how your name will appear on TripAdvisor","cx_explicit_preferences_cta_traveling_partner":"Traveling with your partner","trips_lander_title":"Trips on TripAdvisor","trips_error_save_trip_full":"Oh no! Your Trip has too many items in it. Please remove some items and try saving again.","key_3_GOT2_ExpSub3":"Get ideas of things to do, just for you","mobile_gate_get_hotel_flight_alerts":"Get hotel and flight price alerts","m1_trips_save_success_stat_d2":"Saved! Next, organize it in a Trip.","onetap_message_fomo_flightalerts":"Don't miss out. Get flight deal alerts.","key_2_GOT2_ExpSub2":"Sign in to discover amazing things to do","cx_explicit_preferences_cta_traveling_family":"Traveling with family","upload_video_processing_copy_modal":"Your post is processing. We will send you a notification when it is ready to view.","exp_social_proof_poi_card_single_experience":"\u003cspan class=\"{name_class}\">{userName}\u003c/span> rated this experience \u003cspan class=\"{rating_class}\">\"{ratingCategory}\"\u003c/span>","stat_modal_saved_to_tripname_with_bold":"Saved to \u003cb>{TripName}\u003c/b>","Nav_button_sign_in":"Sign in","onboarding_social_brand_splash_get_started_cta":"Get started","upload_link_posted_copy_modal_2":"Your link was posted! \u003ca href=\"{0}\" class=\"{1}\">View it on your profile now.\u003c/a>","cx_single_search_explore_tripadvisor":"EXPLORE TRIPADVISOR","cx_explicit_preferences_destination_header2":"Great. Where to?","reg_and_join":"JOIN","trips_education_amazing_ideas_one_place":"Trips: your amazing travel ideas, all in one place","cx_explicit_preferences_destination_subheader2":"We\u2019ll show you recommendations from other travelers who\u2019ve been there.","mem_settings":"Settings","cx_explicit_preferences_cta_family2":"With family","mobile_gate_save_restaurant_ideas":"Save restaurant ideas in one place","cx_explicit_preferences_segment_friends":"My friends","common_Close":"Close","key_6_GOT2_Reshead2":"Keep track of {geo_name} ideas","mw_softgate_app_download_continue":"Continue to mobile site","onetap_subhead_signin_alerts_deals":"Sign in to get price alerts and deals","onetap_message_saving_saves_restaurants":"Keep track of the restaurants you find","mobile_gate_save_hotels_on_a_map":"Save hotels + see them on a map","soical_loading_error_2":"Give it another try, please.","home_location_things_near_you":"Tell us where you live to get great ideas for things to do near you.","onetap_message_subhead_to_get_the_most":"Sign in to get the most out of TripAdvisor","abandon_cart_home_banner_2350":"Still interested?","common_btn_cancel_ffffe209":"Cancel","trips_error_default_add_item_to_trip":"There was a problem adding the item to this Trip. Please try again.","cx_explicit_preferences_end_body_nearby":"Now start discovering nearby ideas from other travelers.","mem_account_info":"Account info","I_live_in":"I live in...","memx_onboarding_unlock_TA":"Unlock the best of TripAdvisor","mobile_try_again":"Try again","home_location_travel_ideas":"Tell us where you live to get nearby travel ideas.","utility_nav_profile":"Profile","attractions.cart_recapture.alert_body":"Click here at any time to finish your booking. Be sure to log-in or register to access your cart from any device.","attractions.cart_button_acc":"Cart","cx_explicit_preferences_cta_month2":"Traveling in {month}","cx_explicit_preferences_cta_solo2":"Solo","key_8_id_GOT2_ForumSub1":"Sign in to ask your own question","trips_inline_profanity_check":"Public Trips cannot contain profanity","onetap_message_unlock":"Unlock the best of TripAdvisor","cx_explicit_preferences_edit_trip_details":"Edit trip details","utility_nav_join":"Join","mobile_no_results_found_8e0":"No results found","mobile_gate_see_reviews_travelers_like_you":"See reviews from travelers like you","trips_stat_modal_profanity_check_native":"Your Trip could not be created because public Trips cannot contain profanity. Please try again.","utility_nav_cart":"Shopping Cart","ugc_uploader_linkPost_v3":"Post links","social_no_permission":"You don't have permission to take this action.","mobile_gate_view_restaurants_on_a_map":"View your saved restaurants on a map","map_out_places":"Want to map out places travelers recommend? Download the app.","sign_in_geo_v3":"Sign in for great {geo_name} ideas","Nav_button_sign_up":"Sign up","mobile_gate_save_things_on_a_map":"Save things to do + see them on a map","attractions.cart_recapture.alert.headline":"Now you can pick up where you left off!","mobile_back_8e0":"Back","mobile_reviews_plural":"{0, plural, one{# review} other{# reviews}}","typeAheadSearchFor_fffff81b":"Search for \"{0}\"","key_1_GOT2_FlightsSub2":"Sign in for the best trip ideas for you","trips_error_duplicate":"You already have a Trip with this name.","stat_modal_saved_to_tripname_with_bold_v3":"Saved to \u003ca href=\"{TripLink}\" class=\"{TripClass}\">\u003cb>{TripName}\u003c/b>\u003c/a>","create_trip_success_toast_with_bold":"\u003cb>{TripName}\u003c/b> created!","key_5_GOT2_Reshead1":"You\u2019ve got great {geo_name} ideas!","cx_single_search_home_ghost_text2":"Try \u201Cboutique hotels in Paris\u201D","cx_explicit_preferences_interests_header2":"What do you want to do on your trip?","stat_modal_save_to_trip_v2":"Save to a Trip","cx_explicit_preferences_welcome_no":"No thanks","memx_gating_mw_attraction_values":"Read reviews, save things to do, get free 24 hour cancellation, and more.","cx_explicit_preferences_welcome_subheader2":"Answer some questions about your trip so we can show you more personalized ideas.","cx_explicit_preferences_welcome_header_no_name2":"Thanks. Now, let's help you plan a trip you'll love.","trips_error_default_edit_trip":"There was a problem editing this Trip. Please try again.","stat_modal_change":"Change","download_the_app":"Download the App","cx_explicit_preferences_cta_traveling_friends":"Traveling with friends","global_nav_content_cta_post":"Post","cx_explicit_preferences_profile_hometown_help2":"Get travel ideas and flight deals based on where you live","cx_explicit_preferences_profile_end_screen_no_name":"Thanks.","onetap_message_saving_money":"Like saving money?","open_in_the_app":"Open in the app","common_Signout":"Sign out","cx_explicit_preferences_cta_partner2":"With your partner","nearby_use_my_location":"Use my location","trips_error_default_edit_privacy":"There was a problem updating the privacy of this Trip. Please try again.","subhead_plan_right_for_you_free_app":"Plan a trip that&#39;s right for you with the free app","memx_mw_gating_hybrid_title2":"Continue by signing in or with the app","key_9_id_GOT2_ForumHead1":"Not seeing the answer to your question?","cx_explicit_preferences_segment_header":"Who are you traveling with?","key_7_id_GOT2_ForumHead1":"Still have travel questions?","cx_explicit_preferences_cta_dates2":"Traveling from {date1} to {date2}","stat_modal_undo":"Undo","cx_explicit_preferences_cta_months2":"Traveling from {month1} to {month2}","ugc_uploader_video_v3":"Post videos","onetap_message_saving_saves_thingstodo":"Save things to do on your trip","common_Excellent":"Excellent","onetap_message_genius_saves_ideas":"You\u2019ve got great ideas!","linkify_url_error":"You have entered an inappropriate URL","upload_link_posted_copy_modal_profile":"Your link was posted!","common_Poor":"Poor","memx_gating_mw_appal_or_signin":"Continue on the TripAdvisor app or sign in","already_have_an_account":"Already have an account?","mobile_gate_signin_continue_tripadvisor":"\u003cb>Sign in\u003c/b> to continue using TripAdvisor.","mobile_search_filter_clear_26e8":"Clear","stat_modal_general_error":"There was a problem saving this item. Please try again.","exclusive_content_dismiss":"No thanks","mw_js_positionPermissionDenied":"TripAdvisor was denied permission to access your location.  Give your browser and TripAdvisor permission to use your current location and try again.","common_Verygood_fffffabd":"Very good","stat_modal_removed_from_tripname_with_bold_v3":"Removed from \u003ca href=\"{TripLink}\" class=\"{TripClass}\">\u003cb>{TripName}\u003c/b>\u003c/a>","home_location_ideas_near_you":"Tell us where you live to get great ideas for things to do near you.","cx_single_search_explore_geo":"EXPLORE {geoName}","ip_view_profile_1cf1":"View profile","upload_photo_posted_copy_modal_2":"Your photo was posted! \u003ca href=\"{0}\" class=\"{1}\">View it on your profile now.\u003c/a>","cx_explicit_preferences_dates_flexible":"My dates are flexible","memx_gating_mw_restaurant_values":"Read reviews, then save your restaurant finds to a map.","cx_explicit_preferences_cta_interested_in":"Interested in","see_all_results_for":"See all results for \"{query}\"","upload_photo_posted_copy_modal_profile":"Your photo was posted!","dual_search_recently_viewed_all_caps":"RECENTLY VIEWED","hotels_h_social_proof_poicard_multiple_v2":"See ratings from \u003cspan class=\"{customClass}\">people you follow\u003c/span>","cx_explicit_preferences_profile_header3":"Welcome! Tell us about yourself.","trip_contains_profanity":"Your Trip contains profanity and cannot be made public. Please modify your Trip and try again. Questions? View TripAdvisor's \u003ca href=\"https://www.tripadvisorsupport.com/hc/articles/360008133913-TripAdvisor-s-Content-Policy\">Content Guidelines\u003c/a>.","m1_trips_my_saves_header":"My Saves","common_Average":"Average","cx_explicit_preferences_dates_header":"When are you traveling to {destinationGeoName}?","cx_explicit_preferences_cta_subheader3":"You\u2019ll see personalized ideas from other travelers like you.","new_trip_name_error_msg":"Please select a new name for your Trip.","mobile_gate_get_hotel_alerts":"Get hotel price alerts + more","Nav_button_log_in":"Log in","social_mobile_reason_for_sponsored":"Sponsored","select_trip_header":"Select a Trip","common_91d":"Sign In","trips_lander_md":"Trips makes it easy to save travel plans, build wish lists and map out all your ideas for places to eat, things to do and where to stay \u2014 and bring them with you, wherever you go.","exclusive_content_sign_in":"Sign in to unlock","trips_education_easy_save_orgaize_map_bring_with_you":"Trips makes it easy to save, organize and map out all your ideas for places to eat, things to do and where to stay \u2014 and bring them with you, wherever you go.","exp_see_number_experiences_with_strong":"{0, plural, one{\u003cstrong>See #\u003c/strong> Experience} other{\u003cstrong>See #\u003c/strong> Experiences}}","mobile_discovery_where_to":"Where to?","onetap_message_saving_saves_hotels":"Save hotels for your trip","trips_error_default_move_item":"There was a problem moving this Trip item. Please try again.","common_Terrible":"Terrible","memx_mw_gating_hybrid_title":"Continue with the app or by signing in","attractions.coverpage.native.from_price.strong_tax_included":"from \u003cstrong>{price}\u003c/strong>","mobile_gate_signin_keep_planning":"Sign in to keep planning","alerts_center_log_in":"Log in","common_TripAdvisor":"TripAdvisor","dual_search_ghost_im_going_to":"I'm going to...","m1_trips_unsave_error":"There was a problem removing this item. Please try again.","hotels_save_money":"SAVE {0}","exp_social_proof_multiple_connections_visited":"\u003cspan class=\"{name_class}\">{userName}\u003c/span> and {numConnections, plural, one{# more connection} other{# more connections}} have been to {geoName}. \u003cspan class=\"{see_link_class}\">See what they reviewed\u003c/span>","terms_and_policy_links":"By proceeding, you agree to our \u003ca rel=\"nofollow\" class=\"{2}\" target=\"_blank\" href=\"{0}\">Terms of Use\u003c/a> and confirm you have read our \u003ca rel=\"nofollow\" class=\"{2}\" target=\"_blank\" href=\"{1}\">Privacy Policy\u003c/a>.","trips_error_default_add_item_comment_v2":"There was a problem adding a note to this Trip item. Please try again.","rebrand_recently_viewed_shelf_title":"Recently viewed","inbox_title":"Inbox","stat_modal_create_a_trip_v2":"Create a Trip","common_more_capital_ffffe27f":"More","trips_lander_copy_1":"Save traveler-recommended places for your trip","trips_lander_copy_2":"View the things to do, restaurants and hotels you saved on a map","exp_social_proof_poi_card_single_attraction":"\u003cspan class=\"{name_class}\">{userName}\u003c/span> rated this attraction \u003cspan class=\"{rating_class}\">\"{ratingCategory}\"\u003c/span>","local_reco_header":"Want local recommendations?","common_NEW_1bd8":"NEW","cx_explicit_preferences_interests_subheader3":"Take a look at what {destinationGeoName} travelers are talking about and select what you might like.","mg2019_fbot_see_where_friends_traveled":"See where your friends have traveled","trips_error_unsave":"There was a problem removing this item from your Trip. Please try again.","social_Saved":"Saved","cx_explicit_preferences_cta_date2":"Traveling on {date}","memx_gating_mw_hotel_values":"Read reviews, save your hotel finds, get price alerts and more.","love_quick_getaways":"Love quick getaways?","trips_lander_copy_3b":"Easily access all your saves while traveling, wherever you go","common_Destination_3dd":"Destination","post_video_typeahead_placeholder_text_search":"Search","trips_error_general_default":"There was a problem with this Trip. Please try again.","cx_explicit_preferences_cta_header":"Tell us about your trip","mem_sign_in_now":"Sign In Now","exp_social_proof_single_connection_visited":"\u003cspan class=\"{name_class}\">{userName}\u003c/span> has been to {geoName}. \u003cspan class=\"{see_link_class}\">See what they reviewed\u003c/span>","trips_lander_header":"Traveling soon? Save your amazing ideas all in one place with Trips.","mobile_dropdown_collapse":"Collapse","my_bookings_headtext_fffff9b3":"Bookings","cx_explicit_preferences_profile_name":"My first name is...","trips_product_name":"Trips","post_video_location_typeahead_add_location":"Add another location ","explicit_preferences_who_are_you_traveling_with_skip_button":"SKIP","cx_explicit_preferences_welcome_header3":"Hi, {displayName}. Let\u2019s help you plan a trip you\u2019ll love.","key_12_id_GOT2_ForumHead4":"Join the conversation.","cx_explicit_preferences_segment_family":"My family","post_a_video_modal_header":"Post a video","ugc_uploader_review_v2":"Write review","key_10_id_GOT2_ForumHead2":"Get advice from travelers","memx_mw_gating_cta":"Continue with:","mobile_gate_save_trip_on_a_map":"Save trip ideas + see them on a map","common_Next":"Next","trips_log_in_now":"Log in now","empty_trip_home_get_started":"Get started","memx_gating_mw_generic_value":"Read reviews, save trip ideas, get price alerts, and more.","mw_partial_page_sign_in":"Sign in:","dual_search_worldwide":"Worldwide","memx_gating_mw_hybrid":"Sign in","global_nav_profile_my_business":"My business","cx_explicit_preferences_cta_friends3":"With friends","link_uploader_header":"Post a link","social_loading_error_1":"Whoops, something went wrong.","cx_explicit_preferences_profile_end_screen2":"Thanks, {displayName}","trips_error_default_add_note":"There was a problem adding a note to this Trip. Please try again.","cx_explicit_preferences_segment_solo":"Myself","cx_explicit_preferences_cta_traveling_solo":"Traveling solo","stat_modal_removed_from_tripname":"Removed from {sTripName}","common_Populardestinations":"Popular destinations","post_photos_form_header":"Post photos","reg_back":"Back","cx_explicit_preferences_segment_partner":"My partner","create_trip_general_error_v2":"There was a problem creating this Trip. Please try again.","cx_explicit_preferences_welcome_yes":"Yes, let\u2019s go","mobile_gate_24_hour_cancellation":"Book with free 24 hour cancellation","trips_save_CTA":"Save"},"features":{"signup_gate_2pv_mw_test":false,"ungate_sponsored_listing_clicks":true,"prod_runtime_tracking":false,"post_signup_attr_promo":true,"currency_change_for_th_ko":false,"global_nav_geopill":true,"t10565_got_contextual_v2_variant_2":false,"mw_hard_gate_training_data_5pv_ghost":false,"media_responsive_image_use_dynamic_size":false,"hybrid_gate_improved_cta_2pv_mw_test":false,"t11214_mip_2_trip_questions":false,"digital_turbine_high_intent":false,"google_onetap_timeout_10s":true,"ml_hard_gate_model_v2_excl_hotels":false,"trips_heart_icon":true,"mw_hard_gate_en_uk_mod_test":false,"breadcrumbs_and_masthead_h1_on_new_tourism":false,"saves":true,"mw_hard_gate_ghost":false,"mw_no_hero_photo":false,"enhanced_gate_google_one_tap_2pv_mw":false,"currency_change_for_ca_au_sg":false,"t11208_variant_a_curated_broad_interest_categories":false,"currency_change_for_it_in_ar_nl":false,"react_tracking_impressions":true,"t11213_mip_2_account_screen":false,"ml_home_tourism_about_tab":false,"app_download_toast":false,"seo_vacation_packages_servlet":true,"global_nav_links_APR":false,"hydrate_while_loading":false,"mw_hard_gate_training_data_2pv":false,"t10566_got_contextual_v2_variant_3":false,"mw_hard_gate_training_data_6pv":false,"memx_reg_dialogs_12h_suppression":true,"h_defer_facebook_sdk":false,"hybrid_gate_improved_cta_2pv_mw_incl_hotels_test":false,"log_saves_engage":false,"member_profile_bookings":true,"me2_control":false,"mw_hard_gate_training_data_6pv_ghost":false,"tripadvisor_two_tap_desktop":false,"facebook_onetap_mobile":false,"hr_disable_cpm_ads":false,"timed_refresh_after_15s":true,"mobile_web_feature_dual_search_geo_navi":false,"hard_gate_excl_restaurants_mw_2pv":false,"persistent_header_unscoped_bu_home":true,"facebook_onetap_hotel_servlets":true,"gating_mod_test_restaurants_2pv":false,"exclusive_content_prompt_master":false,"post_signup_attr_promo_control":false,"global_nav_links_test":false,"cx_explicit_preferences_geopill":false,"restaurant_booking_click_ungates_all":false,"cx_explicit_preferences_onboarding":false,"google_onetap_web_component_desktop":true,"skip_username_screen_during_flow":true,"social_link_posting_enabled":true,"t11216_mip_2_traditional_sign_up_ll":false,"gating_mod_test_attraction_review_4pv":false,"mw_unlock_bookable_restaurants":true,"vacation_rentals":true,"google_onetap_web_component":true,"app_dl_for_got_and_fbot":false,"mw_hard_gate_nth_pv_training_data_control":false,"google_onetap_web_component_mobile":false,"h_pop_on_geo_switch":true,"mw_unlock_bookable_restaurants_v3":false,"hard_gate_google_one_tap_2pv_mw":false,"mw_unlock_bookable_restaurants_v1":false,"mw_unlock_bookable_restaurants_v2":false,"t10567_got_contextual_v2_variant_4":false,"rental_cars_winning_quick_link":true,"apr_lithium_control":false,"app_download_toast_including_members":false,"hr_dark_green_icons":false,"corex_ghost_tracking":false,"tripadvisor_two_tap_mobile_adhesion":false,"cx_single_search_variant3":false,"cx_explicit_preferences_scoped_home_cta":false,"home_location_prompt_control":false,"cx_single_search_variant1":false,"cx_single_search_variant2":true,"google_onetap_web_component_hotel_servlets":true,"mw_hard_gate_training_data_5pv":false,"google_onetap_contextual_message_desktop":true,"t11210_mip_variant_c":false,"mw_hard_gate_training_data_3pv_ghost":false,"hard_gate_excl_disable_domain_direct":false,"legacy_nav_links":true,"react_concurrent_mode":false,"ungate_restaurant_booking_clicks":false,"add_cta_to_global_nav":true,"t10568_got_contextual_v2_variant_5":false,"mw_partial_page_prompt_master":false,"trips_pop_stat_modal":true,"daodao_unify_nav_links_title":false,"global_sign_up_button_variant_2":false,"t11519_mw_ml_rollout_variant1_18slices":false,"shopping_cart_desktop":true,"global_sign_up_button_variant_1":false,"global_sign_up_button_variant_4":false,"global_sign_up_button_variant_3":false,"trips_skip_check_whitelist_public_trips":true,"hr_defer_facebook_sdk":false,"mw_partial_page_prompt_v1":false,"t11517_mw_ml_rollout_vairant1_10slices":false,"mw_partial_page_prompt_v3":false,"mw_partial_page_prompt_v2":false,"restaurant_booking_click_ungates_single":false,"sentryio_js":false,"hybrid_gate_improved_cta_2pv_mw_var1":false,"hybrid_gate_2pv_mw_rollout_logic":false,"memx_profile_avatar_mw":false,"hybrid_gate_improved_cta_2pv_mw_var4":false,"hybrid_gate_improved_cta_2pv_mw_var3":false,"hybrid_gate_improved_cta_2pv_mw_var2":false,"tripadvisor_two_tap_hotel_servlets":false,"trips_saves_heart":true,"hybrid_gate_2pv_mw_test":false,"mobile_web":false,"memx_reg_dialogs_2pg_12h_30d_suppression":true,"apr_lithium_login":false,"google_onetap_web_component_autologin":true,"ml_hard_gate_master":false,"google_onetap_web_component_mobile_adhesion":false,"mw_no_hero_photo_pinned_nav":false,"facebook_onetap_desktop":false,"bcom_partner_photos":true,"review_detail_hard_gate_dt_dynamic_pv":false,"hybrid_gate_improved_cta_2pv_mw_incl_hotels_ghost":false,"gating_mod_test_show_topic_4pv":false,"cruise":true,"ml_hard_gate_model_v2_reevaluate_on_page_view":false,"social_at_referencing_profile_links":true,"mw_hard_gate_training_data_4pv":false,"facebook_limited_permissions":false,"unified_inbox_v2":true,"qualtrics_surveys_any":false,"exclusive_content_prompt_control":false,"mw_hard_gate_training_data_4pv_ghost":false,"any_restaurant_booking_click_ungates":false,"t11215_mip_2_full_flow":false,"home_location_prompt_v2":false,"google_onetap_contextual_message_mobile":false,"home_location_prompt_v3":false,"ml_hard_gate_model_v2":false,"gating_mod_test_show_topic_2pv":false,"quicklinks_sorting_model":false,"trips_bookmark":true,"ml_hard_gate_model_v1":false,"search_engine_referrer":false,"serialized_hydration_promises":true,"cx_explicit_preferences_onetap":false,"social_homepage_autopop_geopill":false,"where_to_top_featured_destination":true,"mw_hard_gate_allow_page_revisit":true,"facebook_onetap_mobile_adhesion":false,"media_video_upload_enabled":true,"t10564_got_contextual_v2_variant_1":false,"detail_hard_gate_dt_1_pv_per_servlet":true,"t10349_facebook_onetap_w_value_copy":false,"map_click_gate_mw":false,"navigation_to_scoped_home":false,"tripadvisor_two_tap_mobile":false,"gating_mod_test_restaurants_4pv":false,"trips_2018_collab":true,"google_onetap_inline":false,"select_restaurants_booking_click_ungates":false,"home_location_prompt_master":false,"gating_mod_test_attraction_review_2pv":false,"t11518_mw_ml_rollout_variant5_13slices":false,"dummy_cache_on_client":false,"social_homepage_new_headline":false,"cx_brand_refresh_phase0":false,"disable_reg_dialog_for_hardgate":false,"mobile_fixed_ad":false,"ml_hard_gate_model_v1_reevaluate_on_page_view":false,"digital_turbine_max_flow":false,"trips_2018":true,"rebrand_masthead_search":true,"media_photo_upload_enabled":true,"components_header":true,"breadcrumbs_as_global_nav":false,"t11209_mip_variant_b":false,"onetap_onboarding":false,"mw_hard_gate_training_data_3pv":false},"renders":[{"id":"component_31","props":{"className":"extra_padding"},"package":"@ta/attractions.attractions-socialproof-shelf"},{"id":"component_33","props":{},"package":"@ta/memx.registration-dialog-controller"},{"id":"mobile-global-nav-content-collect_component_34","props":{"isRoot":true},"package":"@ta/brand.mobile-global-nav-content-collect"},{"id":"component_36","props":{},"package":"@ta/platform.rum-redux-container"}],"profilables":[],"strictModeRoots":[],"hydrations":[{"id":"component_37","props":{},"package":"brand.header"},{"id":"@ta/trips.save-to-trip:location:10730210_component_1","props":{"object":{"__typename":"LocationInformation","locationId":10730210},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:9996956_component_2","props":{"object":{"__typename":"LocationInformation","locationId":9996956},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:10781921_component_3","props":{"object":{"__typename":"LocationInformation","locationId":10781921},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:8766659_component_4","props":{"object":{"__typename":"LocationInformation","locationId":8766659},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:10440472_component_5","props":{"object":{"__typename":"LocationInformation","locationId":10440472},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:14082270_component_6","props":{"object":{"__typename":"LocationInformation","locationId":14082270},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:2526319_component_7","props":{"object":{"__typename":"LocationInformation","locationId":2526319},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:10235728_component_8","props":{"object":{"__typename":"LocationInformation","locationId":10235728},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:13237977_component_9","props":{"object":{"__typename":"LocationInformation","locationId":13237977},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:7178686_component_10","props":{"object":{"__typename":"LocationInformation","locationId":7178686},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:12538987_component_11","props":{"object":{"__typename":"LocationInformation","locationId":12538987},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:9784130_component_12","props":{"object":{"__typename":"LocationInformation","locationId":9784130},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:7070130_component_13","props":{"object":{"__typename":"LocationInformation","locationId":7070130},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:10765566_component_14","props":{"object":{"__typename":"LocationInformation","locationId":10765566},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:12981670_component_15","props":{"object":{"__typename":"LocationInformation","locationId":12981670},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:13481965_component_16","props":{"object":{"__typename":"LocationInformation","locationId":13481965},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:8610465_component_17","props":{"object":{"__typename":"LocationInformation","locationId":8610465},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:9454066_component_18","props":{"object":{"__typename":"LocationInformation","locationId":9454066},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:3462162_component_19","props":{"object":{"__typename":"LocationInformation","locationId":3462162},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:12817573_component_20","props":{"object":{"__typename":"LocationInformation","locationId":12817573},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:3369365_component_21","props":{"object":{"__typename":"LocationInformation","locationId":3369365},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:12822436_component_22","props":{"object":{"__typename":"LocationInformation","locationId":12822436},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:11978654_component_23","props":{"object":{"__typename":"LocationInformation","locationId":11978654},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:484392_component_24","props":{"object":{"__typename":"LocationInformation","locationId":484392},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:15813445_component_25","props":{"object":{"__typename":"LocationInformation","locationId":15813445},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:6385689_component_26","props":{"object":{"__typename":"LocationInformation","locationId":6385689},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:9996705_component_27","props":{"object":{"__typename":"LocationInformation","locationId":9996705},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:11929167_component_28","props":{"object":{"__typename":"LocationInformation","locationId":11929167},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:8772345_component_29","props":{"object":{"__typename":"LocationInformation","locationId":8772345},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"@ta/trips.save-to-trip:location:7714443_component_30","props":{"object":{"__typename":"LocationInformation","locationId":7714443},"widgetStyle":"listing","tooltipCopy":null,"toastCopy":null,"toastCopySubhead":null,"allowPopStatModal":false},"package":"@ta/trips.save-to-trip"},{"id":"component_32","props":{"minWinSize":"768","size":"970x250-728x90","position":"header"},"package":"@ta/cpm.ad-target"},{"id":"component_35","props":{},"package":"@ta/social.onboarding-controller"},{"id":"component_38","props":{},"package":"@ta/trips.trip-modal-route"}],"lazyLoadedModules":[],"ssrPreloadedModules":["t4b.t4b-header","@ta/brand.global-nav-satellite-geopill","@ta/brand.quick-links","@ta/social.onboarding-modal","@ta/social.terms-of-use-gate","t4b.t4b-header-mw"]}};(window.$WP=window.$WP||[]).push({id:'@ta/features',e:['@ta/features/bootstrap'],m:{'@ta/features/bootstrap':function(m){m.exports=__WEB_CONTEXT__.pageManifest.features;}}});</script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.polyfill-web-modern.0849faed25.js' data-rup='@ta/platform.polyfill-web-modern'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/runtime.14b9eab2b6.js' data-rup='runtime'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.runtime.2bc3d10444.js' data-rup='@ta/platform.runtime'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-babel.7ddb8bc92f.js' data-rup='vendor-babel'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-react-libs.cd6e44d478.js' data-rup='vendor-react-libs'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-redux-libs.68ed94cf7a.js' data-rup='vendor-redux-libs'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/ta-platform.f3bc0b0d9f.js' data-rup='ta-platform'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/lithium-platform.e30b02edf1.js' data-rup='lithium-platform'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.sentry.5df6f0afc2.js' data-rup='@ta/platform.sentry'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.interactions.4ea84f560b.js' data-rup='@ta/platform.interactions'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-apollo-libs.4e3db1c3c6.js' data-rup='vendor-apollo-libs'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-common.676aec902d.js' data-rup='vendor-common'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.responsive.695da0b9b8.js' data-rup='@ta/common.responsive'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/lithium-routes.ed099931a7.js' data-rup='lithium-routes'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.monikers.d66d6b4ab8.js' data-rup='@ta/platform.monikers'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/core-ui.toast.a37794d24c.js' data-rup='@ta/core-ui.toast'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.ssr-cache.ada7060f08.js' data-rup='@ta/platform.ssr-cache'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/login.auth-gate-original.7ce5fc6291.js' data-rup='@ta/login.auth-gate-original'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/login.auth-gate-lithium.79726719e6.js' data-rup='@ta/login.auth-gate-lithium'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/login.login.ca2a63eb79.js' data-rup='@ta/login.login'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/lithium-common.eca700237a.js' data-rup='lithium-common'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-urql.07c25396b9.js' data-rup='vendor-urql'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/vendor-lodash-libs.8a8cd325a0.js' data-rup='vendor-lodash-libs'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/tslib.0824b5dc96.js' data-rup='tslib'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.transitions.6cb671ce75.js' data-rup='@ta/common.transitions'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.webview.ca9cc41943.js' data-rup='@ta/common.webview'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/modal.styleguide.fed4a29980.js' data-rup='@ta/modal.styleguide'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/events.window.7231812912.js' data-rup='@ta/events.window'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.image-preloader.0146a99f2a.js' data-rup='@ta/common.image-preloader'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/ta-common.d0f083d05c.js' data-rup='ta-common'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.popover.0c2832d5fc.js' data-rup='@ta/overlays.popover'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/modal.fullscreen.0b7bfe32de.js' data-rup='@ta/modal.fullscreen'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/modal.vanilla.02c7192dbe.js' data-rup='@ta/modal.vanilla'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/input.drop-zone.d3f12fd7ba.js' data-rup='@ta/input.drop-zone'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/react-transition-group.13e0fb3c1f.js' data-rup='react-transition-group'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.pieces.436d8e29f1.js' data-rup='@ta/overlays.pieces'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.attached-arrow-overlay.84d7008b98.js' data-rup='@ta/overlays.attached-arrow-overlay'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/modal.core.43a6af0efe.js' data-rup='@ta/modal.core'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.attached-overlay.20d90e53de.js' data-rup='@ta/overlays.attached-overlay'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.shift.29856641dc.js' data-rup='@ta/overlays.shift'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/events.keyboard-event-listener.90200be291.js' data-rup='@ta/events.keyboard-event-listener'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/a11y.focus.6b37fe0769.js' data-rup='@ta/a11y.focus'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/events.window-resize.0b81d51539.js' data-rup='@ta/events.window-resize'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/brand.header.3e6ab3d01b.js' data-rup='brand.header'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.data-cacher.3c8391f070.js' data-rup='@ta/common.data-cacher'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-context.f797489637.js' data-rup='@ta/brand.global-nav-context'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-geopill.b4706157c7.js' data-rup='@ta/brand.global-nav-geopill'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-shopping-cart.000d1f4790.js' data-rup='@ta/brand.global-nav-action-shopping-cart'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-inbox.75916fecd9.js' data-rup='@ta/brand.global-nav-action-inbox'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-profile.8845aa7706.js' data-rup='@ta/brand.global-nav-action-profile'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-search.3ddcf5132f.js' data-rup='@ta/brand.global-nav-search'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.quick-links.4d665a5c24.js' data-rup='@ta/brand.quick-links'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/styleguide.nav-tabs.fe693019b7.js' data-rup='@ta/styleguide.nav-tabs'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.sponsored-geopill.b3d2e9e685.js' data-rup='@ta/brand.sponsored-geopill'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.slide-in.1622431eb6.js' data-rup='@ta/overlays.slide-in'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.mobile-global-nav-content-collect.d4792e7458.js' data-rup='@ta/brand.mobile-global-nav-content-collect'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav.db8f6b5dc5.js' data-rup='@ta/brand.global-nav'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/onboarding.explicit-preferences-entry.32b9719636.js' data-rup='@ta/onboarding.explicit-preferences-entry'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/onboarding.explicit-preferences-external-tracking.f6c90aa172.js' data-rup='@ta/onboarding.explicit-preferences-external-tracking'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/social.onboarding-state.c4c89cba0a.js' data-rup='@ta/social.onboarding-state'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.states.af8b5e9c93.js' data-rup='@ta/trips.states'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-search.b9b7ea5fd1.js' data-rup='@ta/brand.global-nav-action-search'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-content-collect.273ae63fc0.js' data-rup='@ta/brand.global-nav-action-content-collect'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.global-nav-action-trips.b6f0b447f7.js' data-rup='@ta/brand.global-nav-action-trips'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.responsive-attached-overlay.3c21db58da.js' data-rup='@ta/overlays.responsive-attached-overlay'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.geopill-search.34d6a23264.js' data-rup='@ta/brand.geopill-search'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/search.typeahead.e0057bb0c2.js' data-rup='@ta/search.typeahead'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/events.lifecycle.ea027d4b64.js' data-rup='@ta/events.lifecycle'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/tracking.interactions.018c9df59f.js' data-rup='@ta/tracking.interactions'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.trip-search-geopill-flyout.3efe1fe961.js' data-rup='@ta/brand.trip-search-geopill-flyout'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/cpm.590h3aaj2ykycy2oiul.2b527b4774.js' data-rup='@ta/cpm.590h3aaj2ykycy2oiul'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/cpm.adsupport.aab176828e.js' data-rup='@ta/cpm.adsupport'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/modal.slide-in.6445abeb2e.js' data-rup='@ta/modal.slide-in'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.authz.2701193ac4.js' data-rup='@ta/common.authz'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/social.login-gate.4593c01c4d.js' data-rup='@ta/social.login-gate'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/overlays.modal.3c2a764ecd.js' data-rup='@ta/overlays.modal'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/modal.headers.57d27ea05f.js' data-rup='@ta/modal.headers'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/public.listing.d39b6aa411.js' data-rup='@ta/public.listing'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.hover-chain.c137ab74a5.js' data-rup='@ta/common.hover-chain'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/onboarding.explicit-preferences.7742a447e4.js' data-rup='@ta/onboarding.explicit-preferences'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.tracking.f98cbf27bb.js' data-rup='@ta/trips.tracking'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.geolocation.65d4a7da9e.js' data-rup='@ta/common.geolocation'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.text-html.b580189706.js' data-rup='@ta/common.text-html'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.localstorage.abf4fa9103.js' data-rup='@ta/common.localstorage'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/social.tooltip-state.bc0243bf5d.js' data-rup='@ta/social.tooltip-state'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.sessionstorage.1d748b5bb9.js' data-rup='@ta/common.sessionstorage'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/cpm.hqwtxyh8w.45bc73fe7b.js' data-rup='@ta/cpm.hqwtxyh8w'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.client.fc5db7311e.js' data-rup='@ta/common.client'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/brand.geopill-util.68cb105b50.js' data-rup='@ta/brand.geopill-util'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/onboarding.common.1e0a3b73c6.js' data-rup='@ta/onboarding.common'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.impressions.2656eac1dd.js' data-rup='@ta/trips.impressions'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-types.2ba0a6173a.js' data-rup='@ta/trips.trip-types'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/cpm.utils.847a72dd97.js' data-rup='@ta/cpm.utils'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.typeahead.8fb66e6cbd.js' data-rup='@ta/common.typeahead'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/list.navigable-list.43933abc3a.js' data-rup='@ta/list.navigable-list'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-util.02238eff50.js' data-rup='@ta/trips.trip-util'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.keyboardCodes.cc06ab7cdb.js' data-rup='@ta/common.keyboardCodes'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/styleguide.skeleton.42ed6d68c1.js' data-rup='@ta/styleguide.skeleton'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/input.text-input.390c2be47f.js' data-rup='@ta/input.text-input'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.graphql.f80647db3f.js' data-rup='@ta/trips.graphql'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.save-to-trip.5f76a1de02.js' data-rup='@ta/trips.save-to-trip'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-flow-selector.61182f8c71.js' data-rup='@ta/trips.trip-flow-selector'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.save-to-trip-btn-hotspot-tooltip.7484da3ce9.js' data-rup='@ta/trips.save-to-trip-btn-hotspot-tooltip'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.save-to-trip-btn-hotspot-poptoast.505d6b76c7.js' data-rup='@ta/trips.save-to-trip-btn-hotspot-poptoast'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.bookmark-icon.da172473fd.js' data-rup='@ta/trips.bookmark-icon'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.time-series-logger.0ed6d6a6c0.js' data-rup='@ta/memx.time-series-logger'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-errors.0ccade9cae.js' data-rup='@ta/trips.trip-errors'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-toasts.f8fb10aaa1.js' data-rup='@ta/trips.trip-toasts'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.saver.10b7d7fa30.js' data-rup='@ta/trips.saver'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/common.timer.6197ede415.js' data-rup='@ta/common.timer'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/attractions.attractions-socialproof-shelf.8b8895515e.js' data-rup='@ta/attractions.attractions-socialproof-shelf'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/media.face-pile.dc8e55158a.js' data-rup='@ta/media.face-pile'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/social.scroll.b0193e5c7b.js' data-rup='@ta/social.scroll'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/styleguide.bubble-rating.17ecf7d1a1.js' data-rup='@ta/styleguide.bubble-rating'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.registration-dialog-controller.f48b9efd99.js' data-rup='@ta/memx.registration-dialog-controller'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.google-onetap.5fb908a0b6.js' data-rup='@ta/memx.google-onetap'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.hard-gate-controller.49a1f6212a.js' data-rup='@ta/memx.hard-gate-controller'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.ta-twotap.ceb66fded8.js' data-rup='@ta/memx.ta-twotap'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.facebook-onetap.33aaf78097.js' data-rup='@ta/memx.facebook-onetap'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.google-onetap-api.5631d3f1b9.js' data-rup='@ta/memx.google-onetap-api'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/hotels.trip-search-autopop.8d36871246.js' data-rup='@ta/hotels.trip-search-autopop'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.home-location-prompt.8687a170b7.js' data-rup='@ta/memx.home-location-prompt'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.exclusive-content-prompt.7369a54a19.js' data-rup='@ta/memx.exclusive-content-prompt'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.app-download-dialog.be0df2aa1a.js' data-rup='@ta/memx.app-download-dialog'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.registration-dialog-utils.7fa4b15cde.js' data-rup='@ta/memx.registration-dialog-utils'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.gating-utils.bef1ea196c.js' data-rup='@ta/memx.gating-utils'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.gating-eligible-logic.ab6338d0b5.js' data-rup='@ta/memx.gating-eligible-logic'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.gating-overlays.94b4bda61b.js' data-rup='@ta/memx.gating-overlays'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.partial-page-prompt.58e9ab1b92.js' data-rup='@ta/memx.partial-page-prompt'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.download-app-button.0f62ea407a.js' data-rup='@ta/memx.download-app-button'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/cpm.utitar1150yh3xhy9laeaz4g9.e41b3830bf.js' data-rup='@ta/cpm.utitar1150yh3xhy9laeaz4g9'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.detail-page-review-info.b4c3b605d1.js' data-rup='@ta/memx.detail-page-review-info'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.open-in-app-button.ea21be04a6.js' data-rup='@ta/memx.open-in-app-button'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.sign-in-button.3f09beae19.js' data-rup='@ta/memx.sign-in-button'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/memx.continue-with-button.dccb67cf38.js' data-rup='@ta/memx.continue-with-button'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/social.onboarding-controller.20efba2da9.js' data-rup='@ta/social.onboarding-controller'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.rum-redux-container.7a52460260.js' data-rup='@ta/platform.rum-redux-container'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/platform.rum.27838b4ade.js' data-rup='@ta/platform.rum'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-modal-route.588e66f123.js' data-rup='@ta/trips.trip-modal-route'></script><script type='text/javascript' crossorigin='anonymous' async onerror='__scriptLoadError(this,true);' src='https://static.tacdn.com/components/dist/@ta/trips.trip-detail-layout.92e96908fb.js' data-rup='@ta/trips.trip-detail-layout'></script>
<script type="text/javascript">window.ta=window.ta||{};ta.pageModuleName='servlets/attractionsnarrow';
ta.pageModuleName='servlets/attractionsnarrow';
define('ta/page',[ta.pageModuleName], function(module) {
ta.page = module;
ta.page.init(
JSON.parse('{\"calendar\":{\"demandLoadAssets\":true,\"thaiOffset\":false,\"didCreateDefaultDates\":false,\"calendarPopupDirection\":\"\",\"popCheckInFirst\":true,\"supportsPrePopWithDefaultDates\":false,\"supportsPrePopWithVisibilityOnly\":false,\"supportsPrePopWithVisibilityOnlyBreakpoint\":\"\",\"calendarTitle\":\"Select dates to view deals\",\"popCalendarType\":\"doNot\",\"calendarStyle\":{\"clientKey\":\"control\",\"assets\":{\"cssRollup\":\"responsive_calendars_control\",\"dustRollup\":\"responsive-calendar-templates-dust\",\"calendarTemplate\":\"calendars\/responsive_stay-dates\/calendar.dust\",\"monthTemplate\":\"calendars\/responsive_stay-dates\/month.dust\",\"cssAssets\":[\"src\/build\/styleguide\/ui_popovers\/ui_popover\",\"src\/build\/styleguide\/ui_icons\/single-chevron-left-circle\",\"src\/build\/styleguide\/ui_icons\/single-chevron-right-circle\",\"src\/build\/calendars\/responsive\/stay-dates-classic\"]}},\"moveIntoView\":false,\"hasMetaMarketingDefaultDates\":false,\"maxEnabledDaysOut\":\"\",\"qualtricsSurveyEnabled\":false,\"isDetailPage\":false,\"heatmapStyle\":null,\"heatmap\":{},\"colorAccessibilityTestClass\":\"accessible_red_3\",\"calendarTitleTestClass\":\"title_bold\",\"headerProminenceTestClass\":\"\",\"popularDates\":[],\"heatmapPercentiles\":{},\"dualCalendar\":true,\"useClassicSkin\":false,\"maxStayLength\":330},\"remarketingOptions\":{\"pixelsByType\":{\"SAVE_TO_TRIP\":[\"facebook_save_to_trip\",\"ttd_save_to_trip\",\"youtube_save_to_trip\"],\"SAVE_TO_TRIP_INTENT\":[\"facebook_save_to_trip_intent\",\"ttd_save_to_trip_intent\",\"youtube_save_to_trip_intent\"],\"MEMBER_REGISTRATION_FORM\":[\"facebook_tv_member_registration_form_pixel\"],\"PAGEVIEW\":[\"facebook_vi_attraction_pixel\",\"facebook_vi_attraction_dat_pixel\",\"facebook_vi_attraction_log_attribution\",\"criteo_attraction_pixel\",\"rtb_attr_list_products_pxl\",\"google_pixel_attractions\",\"google_display_pixel_attractions\",\"bing_pixel_attractions_page\",\"clicktripz_attr_aud_pixel\",\"facebook_tv_landing\",\"ttd_visit_tracking\",\"youtube_visit_tracking\",\"stm_new_sync_pixel\"],\"MEMBER_CREATE\":[\"facebook_tv_member_create_pixel\"]},\"pixelServlet\":\"PageMoniker\",\"offerViewPixelsEnabled\":false,\"clickoutPixelsEnabled\":true,\"hotelPricesEnabled\":true,\"pixelContext\":{\"servlet\":\"Attractions\",\"userUnique\":\"008d58d4e0d3852f20c9e26f5006393305bba43a\",\"geoId\":188657,\"curLocId\":188657,\"locIds\":\"10730210,9996956,10781921,8766659,10440472,14082270,2526319,10235728,13237977,7178686,12538987,9784130,7070130,10765566,12981670,13481965,8610465,9454066,3462162,12817573,3369365,12822436,11978654,484392,15813445,6385689,9996705,11929167,8772345,7714443\"},\"ibPixelsEnabled\":true,\"pixelsEnabled\":true,\"cacheMobileClickoutResponse\":false},\"pageDates\":{}}')
);
return ta.page;});
require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_day_trip_single_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_day_trip_double_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_day_trip_triple_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_day_trip_standard_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_day_trip_shelf_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfSeeAllClick(event, element) {
ta.fireEvent('shelf_see_all_click_event', event, element);
event.stopPropagation();
}
function trackShelfSeeAllClick(event, element) {
ta.fireEvent('track_shelf_see_all_click_event', event, element);
event.stopPropagation();
}
return {
shelfSeeAllClick: shelfSeeAllClick,
trackShelfSeeAllClick: trackShelfSeeAllClick
};
});
});if (require) {require(['ta/rollupAmdShim'], function(rollupAmdShim) { rollupAmdShim.install([], ["ta"]); });
}
else {if (window.ta&&ta.rollupAmdShim) {ta.rollupAmdShim.install([],["ta"]);}
}require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'attractions_attractions_review_snippets','handlers',['handlers']);
define(['widget', 'ta'], function (widget, ta) {
function trackAndOpenSURUrl(event, pageProperty, url, id, attribute, action, newWindow) {
event.stopPropagation();
event.preventDefault();
ta.setEvtCookie(pageProperty, action, attribute, id, "/ShowUserReviews");
if(newWindow) {
window.open(url);
}
else {
window.location = url;
}
return false;
}
return {
'trackAndOpenSURUrl': trackAndOpenSURUrl
}
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'attractions_attraction_merchandising_product','handlers',['handlers']);
/**
* Private JS for attraction_merchandising_product prwidget
* Forked from Private js for attraction_products_list_clarity placement (Originally written by nberggren)
*
* @author cahuja, nberggren
* @since 5/22/18
*/
define(['widget', 'ta/Core/TA.Event', 'ta/Core/TA.Record', 'ta/util/Element'], function (widget, taEvent, taRecord, taElement) {
taEvent.queueForLoad(_trackImpressions);
function trackLangSupport(productCode, displayEnabled, langSupported) {
// TTD-10318: tracking for lang support
if (displayEnabled) {
taRecord.trackEventOnPage('Attractions', 'language_attraction_product_click', productCode, langSupported ? 1 : 0, false);
}
}
function trackAndOpenUrl(event, url, pageProperty, action, attribute, id) {
taRecord.trackEventOnPage(pageProperty, action, attribute, id);
window.open(url);
event.stopPropagation();
return false;
}
function _trackImpressions() {
var container = widget.element;
var el = container.getElementsByClassName('listing_details')[0];
if (el) {
var pageProperty = el.getAttribute('data-tpp');
var pageAction = 'product_in_view';
var productAttr = el.getAttribute('data-tpatt');
var pid = el.getAttribute('data-pid');
taElement.trackWhenScrolledIntoView(widget.element, [pageProperty, pageAction, productAttr, pid]);
}
}
return {
'trackLangSupport': trackLangSupport,
'trackAndOpenUrl': trackAndOpenUrl
}
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_shelf_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget", "ta/Core/TA.Event", "lib/jquery-amd"], function(widget, taEvent, $) {
var pathname = window.location.pathname; //pathname returns "/" for home and "hotels" or "restaurants" etc. for other servlets
var brandTrackArg = (pathname === '/') ? 'servletname_Home' : 'servletname_' + pathname.substring(1);
function shelfSeeAllClick(event, element, sameTab, noTracking) {
taEvent.fireEvent('shelf_see_all_click_event', event, element, sameTab, noTracking);
event.stopPropagation();
}
function trackShelfSeeAllClick(event, element) {
taEvent.fireEvent('track_shelf_see_all_click_event', event, element);
event.stopPropagation();
}
function leftClick(){
var shelfWrapper = $('.unscoped_brand_scroll');
var leftArrow = $('.brand_scroll_arrow.left');
var rightArrow = $('.brand_scroll_arrow.right');
leftArrow.hide();
rightArrow.show();
shelfWrapper.removeClass('scrolled');
trackScrollClick();
}
function rightClick(){
var shelfWrapper = $('.unscoped_brand_scroll');
var leftArrow = $('.brand_scroll_arrow.left');
var rightArrow = $('.brand_scroll_arrow.right');
leftArrow.show();
rightArrow.hide();
shelfWrapper.addClass('scrolled');
trackScrollClick();
}
function trackFeaturedClick(){
require(["trjs!ta/Core/TA.Record"], function(taRecord) {
taRecord.trackEventOnPage('pcb_campaign_trendinglander', 'click', brandTrackArg);
});
}
function trackScrollClick(){
require(["trjs!ta/Core/TA.Record"], function(taRecord) {
taRecord.trackEventOnPage('pcb_campaign_trendingscroll', 'click', brandTrackArg);
});
}
return {
shelfSeeAllClick: shelfSeeAllClick,
trackShelfSeeAllClick: trackShelfSeeAllClick,
leftClick: leftClick,
rightClick: rightClick,
trackFeaturedClick: trackFeaturedClick
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_multi_shelf_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget", "ta/Core/TA.Event", "lib/jquery-amd"], function(widget, taEvent, $) {
var pathname = window.location.pathname; //pathname returns "/" for home and "hotels" or "restaurants" etc. for other servlets
var brandTrackArg = (pathname === '/') ? 'servletname_Home' : 'servletname_' + pathname.substring(1);
function shelfSeeAllClick(event, element) {
taEvent.fireEvent('shelf_see_all_click_event', event, element);
event.stopPropagation();
}
function trackShelfSeeAllClick(event, element) {
taEvent.fireEvent('track_shelf_see_all_click_event', event, element);
event.stopPropagation();
}
function leftClick(){
var shelfWrapper = $('.unscoped_brand_scroll');
var leftArrow = $('.brand_scroll_arrow.left');
var rightArrow = $('.brand_scroll_arrow.right');
leftArrow.hide();
rightArrow.show();
shelfWrapper.removeClass('scrolled');
trackScrollClick();
}
function rightClick(){
var shelfWrapper = $('.unscoped_brand_scroll');
var leftArrow = $('.brand_scroll_arrow.left');
var rightArrow = $('.brand_scroll_arrow.right');
leftArrow.show();
rightArrow.hide();
shelfWrapper.addClass('scrolled');
trackScrollClick();
}
function trackFeaturedClick(){
require(["trjs!ta/Core/TA.Record"], function(taRecord) {
taRecord.trackEventOnPage('pcb_campaign_trendinglander', 'click', brandTrackArg);
});
}
function trackScrollClick(){
require(["trjs!ta/Core/TA.Record"], function(taRecord) {
taRecord.trackEventOnPage('pcb_campaign_trendingscroll', 'click', brandTrackArg);
});
}
return {
shelfSeeAllClick: shelfSeeAllClick,
trackShelfSeeAllClick: trackShelfSeeAllClick,
leftClick: leftClick,
rightClick: rightClick,
trackFeaturedClick: trackFeaturedClick
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_attraction_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget", "ta", "ta/util/Element", "lib/jquery-amd"], function(widget, ta, taElement, $) {
ta.queueForLoad(trackTitleImpression);
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackTitleImpression() {
var el = $(widget.element).find('.name');
taElement.trackWhenScrolledIntoView(el, ['attraction_title', 'impression', el.attr('data-tpatt'), el.attr('data-tpid')]);
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_reservation_shelf_item_widget','handlers',['handlers']);
define(["widget", "ta/Core/TA.Record", 'mobile/lite/image-loader'], function(widget, taRecord, imageLoader) {
// Does element have tracking data
function _hasData(element) {
return element && element.getAttribute && !!element.getAttribute('data-tpp');
}
// Get the data
function _getData(element) {
if(_hasData(element)) {
return {
'property': element.getAttribute('data-tpp'),
'action': element.getAttribute('data-tpact'),
'attrib': element.getAttribute('data-tpatt'),
'pid': element.getAttribute('data-tpid')
};
}
return null;
}
// Shelf Item clicks target same window, so use cookie
function itemClick(event, element) {
var data = _getData(element);
if(data && element.href) {
taRecord.setEvtCookie(data.property, data.action, data.attrib, data.pid, element.href);
}
}
imageLoader.init(200); // load lazy images in shelf items
return {
shelfItemClick: itemClick
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_embedded_taxonomy_shelf_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget", "ta/Core/TA.Event"], function(widget, taEvent) {
function shelfSeeAllClick(event, element) {
taEvent.fireEvent('shelf_see_all_click_event', event, element);
event.stopPropagation();
}
function trackShelfSeeAllClick(event, element) {
taEvent.fireEvent('track_shelf_see_all_click_event', event, element);
event.stopPropagation();
}
return {
shelfSeeAllClick: shelfSeeAllClick,
trackShelfSeeAllClick: trackShelfSeeAllClick
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_attraction_product_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget", "ta/Core/TA.Event", "ta", "ta/util/Element", "lib/jquery-amd"], function(widget, taEvent, ta, taElement, $) {
ta.queueForLoad(trackTitleImpression);
function shelfItemClick(event, element) {
taEvent.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
taEvent.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackTitleImpression() {
var el = $(widget.element).find('.product_name');
taElement.trackWhenScrolledIntoView(el, ['attraction_product_title', 'impression', el.attr('data-tpatt'), el.attr('data-tpid')]);
}
function trackKidPricing(productCode, displayEnabled, hasKidPricing) {
// TTD-11098: tracking for kids pricing
var kidPricingClick = displayEnabled ? 'kidpricing_attraction_product_click' : 'kidpricing_attraction_product_click_control';
ta.trackEventOnPage('Attractions', kidPricingClick, productCode, hasKidPricing ? 1 : 0, false);
}
function trackCancelLabel(productCode, displayEnabled, has24HourCancellation) {
// TTD-11243: tracking for free cancellation label
var cancelLabelClick = displayEnabled ? 'freecancel_attraction_product_click' : 'freecancel_attraction_product_click_control';
ta.trackEventOnPage('AttractionProducts', cancelLabelClick, productCode, has24HourCancellation ? 1 : 0, false);
}
function hoverTooltip(event, elmt) {
require(['trjs!overlays/uiOverlay'], function(uiOverlay) {
uiOverlay(event, elmt);
});
}
function trackBookNowCtaClick() {
ta.trackEventOnPage('CoverPage', 'Shelf_Product_CTA', '', false);
}
return {
shelfItemClick: shelfItemClick,
trackKidPricing: trackKidPricing,
trackCancelLabel: trackCancelLabel,
trackShelfItemClick: trackShelfItemClick,
hoverTooltip: hoverTooltip,
trackBookNowCtaClick: trackBookNowCtaClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_attraction_product_small_shelf_item_widget','handlers',['handlers']);
define(["widget", "ta/Core/TA.Record", "mobile/lite/image-loader", "utils/urlDecoder", "ta/Core/TA.Event"], function(widget, taRecord, imageLoader, urlDecoder, taEvent) {
// Does element have tracking data
function _hasData(element) {
return element && element.getAttribute && !!element.getAttribute('data-tpp');
}
// Get the data
function _getData(element) {
if(_hasData(element)) {
return {
'property': element.getAttribute('data-tpp'),
'action': element.getAttribute('data-tpact'),
'attrib': element.getAttribute('data-tpatt'),
'pid': element.getAttribute('data-tpid')
};
}
return null;
}
function _getUrl(element) {
return urlDecoder.getUrl(element);
}
// Shelf Item clicks target same window, so use cookie
function itemClick(event, element) {
var data = _getData(element);
var url = _getUrl(element);
if(data && url) {
taRecord.setEvtCookie(data.property, data.action, data.attrib, data.pid, url);
}
taEvent.fireEvent('shelf_item_click_event', event, element);
event.preventDefault();
event.stopPropagation();
}
imageLoader.init(200); // load lazy images in shelf items
return {
shelfItemClick: itemClick
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_featured_attraction_product_shelf_item_widget','handlers',['handlers']);
define(["widget", "ta/Core/TA.Event"], function(widget, taEvent) {
function shelfItemClick(event, element) {
taEvent.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
taEvent.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_filter_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_embedded_taxonomy_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget"], function(widget) {
function shelfItemClick(event, element) {
ta.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
function trackShelfItemClick(event, element) {
ta.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick,
trackShelfItemClick: trackShelfItemClick
};
});});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_ticketed_event_category_shelf_item_widget','handlers',['handlers']);
/*jshint unused:false */
define(["widget", "ta/Core/TA.Event"], function(widget, taEvent) {
function shelfItemClick(event, element) {
taEvent.fireEvent('shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'shelves_ticketed_event_performer_shelf_item_widget','handlers',['handlers']);
define(["widget", "ta/Core/TA.Event", 'ta/Core/TA.Record'], function(widget, taEvent, taRecord) {
function shelfItemClick(event, element, performerId, geoId) {
require(["trjs!overlays/widgetoverlays"], function(widgetOverlays){
var overlay = widgetOverlays.showStyleguideModal("TICKETED_EVENT_PERFORMER_OVERLAY",
{
performerId: performerId,
geoId: geoId
},
{
noCache : true //do not cache the results as we need to recalculate the event list each time
});
overlay.on('hide', function(){
taRecord.trackEventOnPage('CoverPage', 'ticketmaster_shelf_item_modal_close', performerId);
});
});
taEvent.fireEvent('track_shelf_item_click_event', event, element);
event.stopPropagation();
}
return {
shelfItemClick: shelfItemClick
};
});});if (require) {require(['ta/rollupAmdShim'], function(rollupAmdShim) { rollupAmdShim.install([], ["page-model"]); });
}
else {if (window.ta&&ta.rollupAmdShim) {ta.rollupAmdShim.install([],["page-model"]);}
}if (require) {require(['ta/rollupAmdShim'], function(rollupAmdShim) { rollupAmdShim.install([], ["ta/util/RecordInterruption"]); });
}
else {if (window.ta&&ta.rollupAmdShim) {ta.rollupAmdShim.install([],["ta/util/RecordInterruption"]);}
}require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'qualtrics_survey','handlers',['handlers']);
/** Private javascript for qualtrics survey placement
* We want to show on the 2nd pageview, no more than once every 30 days
* The div id is generated from the qualtrics site-intercept code.
* The placement render will decide which survey to displace.
*/
define([
"placement",
"lib/jquery-amd",
"ta",
'ta/Core/TA.LocalStorage',
'page-model',
'ta/util/RecordInterruption',
'ta/support/Qualtrics',
'utils/throttle',
'common/Radio'
],
function (placement, $, ta, taLocalStore, model, recordInterruption, taQualtrics, throttle, Radio) {
"use strict";
ta.queueForLoad(function () {
// For surveys that should hide when the user begins to scroll, this is the how much give they have
var SCROLL_BUFFER = 318;
// Campaign ID for event tracking
var CAMPAIGN_ID = 'qualtrics_surveys';
taQualtrics.setSmartSurvey(!!placement.params.smartSurvey);
taQualtrics.updatePageViews();
if (taLocalStore.enabled && ( taQualtrics.isDebug() || taQualtrics.canDisplaySmart() || ( !taQualtrics.getSmartSurvey() && taQualtrics.canDisplay() ) )) {
var surveyKey = placement.params.surveyId;
var surveyContainerClassName = '.' + surveyKey + '_InfoBarContainer';
var surveyName = placement.params.surveyName;
var surveyProperties = 'Qualtrics_Survey' + '|' + window.pageServlet + '|' + surveyName;
if (placement.params.smartSurvey) {
var getSurveyProperties = function (_ss, _qa) {
return _ss + '|' + ['sc-' + _qa.getSessionCount(), 'ir-' + _qa.getInterceptReqs(), 'iv-' + _qa.getInterceptViews(), 'pv-'+_qa.getPageViews()].join('|');
};
$('body').on('qxInterceptShown', function () {
ta.trackEventOnPage(CAMPAIGN_ID, 'interceptShown', getSurveyProperties(surveyProperties, taQualtrics), null, true);
taQualtrics.updateInterceptViews();
taQualtrics.updateSessionCount();
});
$('body').on('qxInterceptAccept', function () {
ta.trackEventOnPage(CAMPAIGN_ID, 'interceptAccept', getSurveyProperties(surveyProperties, taQualtrics), null, false);
taQualtrics.setResponded(true);
});
$('body').on('qxInterceptDecline', function () {
ta.trackEventOnPage(CAMPAIGN_ID, 'interceptDecline', getSurveyProperties(surveyProperties, taQualtrics), null, false);
taQualtrics.setResponded(true);
});
}
if (surveyKey) {
taQualtrics.displaySurvey(surveyKey);
recordInterruption.record('popup', surveyProperties, taQualtrics.getPageViews());
if (placement.params.smartSurvey) {
taQualtrics.updateInterceptReqs();
}
// TV-1243 - Mobile Surveys cover a commerce component, so they should be hidden when the user begins to scroll
if (placement.params.hideOnScroll) {
var hide = function () {
var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
if (scrollTop > SCROLL_BUFFER) {
$(surveyContainerClassName).hide();
}
};
$(window).on('scroll', throttle(hide, 100));
}
var surveyRadio = Radio("QualtricsSurvey"); // use radio so this functionality can be added to WC footer easily
window.addEventListener("qsi_js_loaded", function() { // this event is fired when the Qualtrics external JS has finished loading
if (surveyRadio.requestAny("shouldSuppress", true)) {
$(surveyContainerClassName).hide();
}
});
surveyRadio.on("hide", function() {$(surveyContainerClassName).hide();});
surveyRadio.on("show", function() {$(surveyContainerClassName).show();});
}
}
});
return {
};
});
});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'masthead_search','handlers',['deferred/lateHandlers','handlers']);
/* jshint newcap:false */
/**
* Private javascript for masthead_search placement
*/
define(["placement",
"ta/Core/TA.Store",
"common/Radio"],
function (placement, taStore, Radio) {
function prepareTypeaheadParameters() {
if (placement.params && 'typeahead_to_store' in placement.params) {
var propertiesToStore = placement.params.typeahead_to_store;
if (propertiesToStore) {
for (var property in propertiesToStore) {
if (propertiesToStore.hasOwnProperty(property)) {
taStore.store(property, propertiesToStore[property]);
}
}
}
}
}
prepareTypeaheadParameters();
var options = taStore.retrieve("typeahead_dual_search_options");
placement.require(["trjs!deferred/lateHandlers"], function (lh) {
Radio("masthead_search").on('open', function () {
lh.showSearchOverlay();
});
});
return {
getOptions: function () {
return options;
}
};
});
});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'ip_redir','handlers',['handlers']);
// More notes in the dust renderer for how IP Redirect works.
define([
'placement', 'lib/jquery-amd', 'ta/util/ActionRecord', 'utils/cookieutils'
], function(
placement, $, Tracking, Cookies
){
'use strict';
var $placement = $('#' + placement.id);
var $root = $('.ui_alert', $placement);
var action = $root.data('action'); // either auto or prst ("persistent")
var redirUrl = $root.data('redirUrl');
var redirDomain = $root.data('redirDomain').replace(/^\./, '');
var currentDomain = $root.data('currentDomain').replace(/^\./, '');
var checkbox = $('input[type=checkbox]', $root);
var smartbanner = $('#smartbanner');
var _setCookieViaIframe = function(url) {
$('<iframe>')
.attr({
src: url,
style: 'display:none'
})
.appendTo($root)
.on('load', function () {
$(this).remove();
});
};
// the banner should only display if the 'TASession' cookie is present
if (Cookies.getCookie('TASession')) {
if (smartbanner && smartbanner.length) {
$placement.addClass('smart-banner-top');
}
$placement.show();
}
// Close-banner handler
$('.ui_icon.times', $root)
.on('click', function(){
Tracking.record('auto_redir_close_banner');
$placement.remove();
// Special case for persistent. It's persistent, so it's programmed to show on each page (auto should only show once).
// Closing banner with checkbox checked should stop the persistent banner from showing on the next page.
// Use case: User goes to .com with browser set to German language. User sees banner, closes banner, stays on .com
if (checkbox.is(':checked') && "prst" == action) {
$.get('/LangRedirect?TAPD=' + currentDomain);
} // no need for unchecked action here -- checkbox click handler will remove cookie below.
});
// Continue-link click handler
$('.continue', $root)
.on('click', function(){
if ('auto' == action){
Tracking.record('auto_redir_go_back')
.success(function(){
var loc = redirUrl;
// if checked, set cookie to remember. if not checked, unset cookie to not remmeber.
if (!checkbox.is(':checked')){
loc = loc.replace('auto=1&TAPD=' + redirDomain, 'TAPD=clear&auto=clear');
}
window.location = loc;
});
}
else { // prst = persistent (rather than 'auto')
Tracking.record('prst_redir_continue')
.success(function(){
window.location = redirUrl;
});
}
});
// "Remember your choice" checkbox handler
$('input[type=checkbox]', $root)
.on('click', function(){
// set the preferred domain cookie (TAPD)
if ($(this).is(':checked')){
Tracking.record(action+'_redir_pref_checked');
$.get('/LangRedirect?TAPD=' + currentDomain);
}
else {
Tracking.record(action+'_redir_pref_unchecked');
$.get('/LangRedirect?TAPD=clear&auto=clear');
if ('auto' == action){
var x = redirUrl.indexOf('LangRedirect');
if (x >= 0){
_setCookieViaIframe(redirUrl.substring(0,x) + 'LangRedirect?auto=clear&TAPD=clear');
}
}
}
});
// On pageload for mode "auto" (i.e., not "persistent"), we want to ping server to set cookie
// so banner does not repeatedly show forever.
if(action == "auto") {
$.get('/LangRedirect?TAPD=' + currentDomain);
}
return {};
});
});
define('overlays/options/autosize', ['vanillajs', 'api-mod'], function(vanilla, api) {
'use strict';
return function(padding){
return function(){
var autosize = function (){
var el = api.find('.autosize', this.container);
if (el){
var vH = Math.max(document.documentElement.clientHeight, window.innerHeight || 0) - padding;
var oH = api.getSize(this.container).y;
if (oH > vH){
var eH = api.getSize(el).y;
this.container.style.height = vH + 'px';
var h = (eH + vH - oH) + 'px';
var css = document.createElement('style');
css.type = 'text/css';
css.innerHTML = this.container.className
.split(' ')
.map(function(c){ return '.' + c; })
.join('') + ' .autosize { height: ' + h + '; }';
document.head.appendChild(css);
}
}
};
this.on('show', autosize);
};
};
});
require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'shopping_cart_simple_flyout','handlers',['handlers']);
define(
[
'placement',
'lib/jquery-amd',
'overlays/Overlay',
'overlays/options/autosize',
'overlays/options/autoReposition',
'overlays/options/centerArrowOnSrcElement',
'overlays/options/closeOnChildClick',
'overlays/options/closeOnEscape',
'overlays/position',
'overlays/styles/popover',
'ta/Core/TA.Record'
],
function(
placement,
$,
Overlay,
Autosize,
AutoReposition,
CenterArrowOnSrcElement,
CloseOnChildClick,
CloseOnEscape,
Position,
Popover,
taRecord
) {
'use strict';
function SimpleFlyout(targetElement, header, body, cookieId, pageProperty) {
var overlay = undefined;
function _showAlert() {
if (overlay) {
return;
}
overlay = new Overlay(
targetElement,
[
Popover(targetElement, 'below', '', header.html(), body.html()),
Autosize(0),
AutoReposition,
CloseOnEscape,
CloseOnChildClick,
Position.below([8, -20]),
CenterArrowOnSrcElement(targetElement)
]);
if (overlay) {
overlay.on('hide', function() {
taRecord.trackEventOnPage(pageProperty, 'close');
});
overlay.show();
// bounce the cart
$(targetElement).addClass('animated');
// request to mark session as seen.
if (cookieId) {
$.get('/AttractionCommerceAjax?a=' + cookieId);
}
}
}
this.show = _showAlert;
}
var content = $('.scream_overlay');
var flyout = new SimpleFlyout($('.shopping-cart-link').get(0), $('.scream_header'), $('.scream_body'), content.attr('data-cookieId'), content.attr('data-pageProperty'));
$(document).ready(flyout.show);
return {};
});
});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'vr_srp_listings','handlers',['handlers']);
define(['placement',
'lib/jquery-amd',
'utils/ajax',
'ta/util/Error',
'ta/Core/TA.LocalStorage'
], function (placement,
$,
ajax,
taError,
localStorage
) {
var ABANDONED_CART_INFO = "abandonedCart";
var _placement = $('#' + placement.id);
var addAbandonedCartCell = function () {
var abandonedCart = localStorage.getObject(ABANDONED_CART_INFO);
if (abandonedCart) {
ajax({
url: '/MetaPlacementAjax',
data:
{
/* MetaPlacementAjax parameters */
placementName: 'vr_abandoned_cart_cell',
skipLocation: true,
assets: false,
packagePrivateAssets: true,
wrap: true,
/* AbandonedCartCellRenderer parameters */
metaReferer: placement.servletName,
geo: placement.location_id, // UrlArg.LOCATION_ID
locationId: abandonedCart.locationId, // UrlArg.LOCATIONID
checkIn: abandonedCart.checkIn, // UrlArg.CHECK_IN
checkOut: abandonedCart.checkOut, // UrlArg.CHECK_OUT
inquiryAdults: abandonedCart.inquiryAdults, // VacationRentalsAjax.PARAM_ADULTS
numOfKids: abandonedCart.numOfKids // VRDetailUtil.PARAM_N_KIDS
},
type: 'POST',
evalScripts: false,
success: function (data) {
if (data.indexOf("vr_listing") < 0) {
return;
}
var duplicateListing = $("#vrListing_" + abandonedCart.locationId);
if (duplicateListing) {
duplicateListing.closest(".vr_listing").remove();
}
_placement.find(".vr_listing:eq(1)").after(data);
},
error: function(e) {
taError.record(e, 'Failed to retrieve abandoned cart cell');
}
});
}
};
addAbandonedCartCell();
return {
};
});});
define('ta/util/CommonMessagingUtil',
[
"lib/jquery-amd", 'ta/Core/TA.LocalStorage', "ta/support/Qualtrics", "ta/util/SessionStorage", "ta/Core/TA.Event"
],
function( $, localStorage, qualtrics, taSessionStorage, taEvent ) {
'use strict';
var storageViewString = "_view_count";
var storageDisabledString = "_is_disabled";
var storageDismissedString = "_times_dismissed";
var storageDisabledForTodayString = "_disabled_for_day";
function getCurrentPageViews(thumbPrint) {
if (localStorage.enabled) {
var storedViews = localStorage.get(thumbPrint + storageViewString);
return storedViews ? parseInt(storedViews) : 0;
}
return null;
}
function incrementPageViews(thumbPrint) {
if (localStorage.enabled && thumbPrint) {
var pageViewKey = thumbPrint + storageViewString;
localStorage.set(pageViewKey, getCurrentPageViews(thumbPrint) + 1);
}
}
function getNumberOfTimesDismissed(thumbPrint) {
if (localStorage.enabled) {
var timesDismissed = localStorage.get(thumbPrint + storageDismissedString);
return timesDismissed ? parseInt(timesDismissed) : 0;
}
return 0;
}
function incrementNumberOfTimesDismissed(thumbPrint) {
if (localStorage.enabled && thumbPrint) {
var timesDismissedKey = thumbPrint + storageDismissedString;
localStorage.set(timesDismissedKey, getNumberOfTimesDismissed(thumbPrint) + 1);
}
}
function isPlacementDisabled(thumbPrint) {
if (localStorage.enabled) {
var keyExists = localStorage.get(thumbPrint + storageDisabledString);
return !!keyExists;
}
return false;
}
function disablePlacement(thumbPrint) {
if (localStorage.enabled && thumbPrint) {
localStorage.set(thumbPrint + storageDisabledString, "true");
}
}
function setPlacementDisabledForToday(thumbPrint) {
var today = new Date().getDate();
if(localStorage.enabled && thumbPrint) {
var closedTodayKey = thumbPrint + storageDisabledForTodayString;
localStorage.set(closedTodayKey, today.toString());
}
}
function isPlacementDisabledForToday(thumbPrint) {
var today = new Date().getDate();
if(localStorage.enabled && thumbPrint) {
var closedTodayKey = thumbPrint + storageDisabledForTodayString;
var keyFound = localStorage.get(closedTodayKey);
return keyFound ? keyFound === today.toString() : false;
}
return false;
}
function setPlacementGroupKey(groupKey) {
var today = new Date().getDate();
if (localStorage.enabled) {
localStorage.set(groupKey, today.toString());
}
}
function checkPlacementGroupKey(groupKey) {
var today = new Date().getDate();
if (localStorage.enabled) {
var keyFound = localStorage.get(groupKey);
return keyFound ? keyFound === today.toString() : false;
}
}
function _displayPlacementIfNoSurveyNorAdIsPresent(_shouldCheckSurvey, _suppressPlacement, _displayPlacement) {
if (_shouldCheckSurvey && typeof(_shouldCheckSurvey) === "function" && _shouldCheckSurvey()) {
if (qualtrics.seenThisPageView() || qualtrics.canDisplaySmart() || qualtrics.canDisplay()) {
return;
}
}
if (_suppressPlacement && typeof(_suppressPlacement) === "function" && _suppressPlacement()) {
return;
}
if (_displayPlacement && typeof(_displayPlacement) === "function") {
if (document.getElementById("FIXED_AD")) {
if (taSessionStorage.canUseSessionStore() && taSessionStorage.getObject('ads.fixed.close')) {
_displayPlacement();
}
else {
taEvent.on("ad_div_collapsed", function () {
_displayPlacement();
});
}
}
else {
_displayPlacement();
}
}
}
function parseServletName(servletName) {
return servletName.toLowerCase().replace("mobile", "");
}
return {
getCurrentPageViews: getCurrentPageViews,
incrementPageViews: incrementPageViews,
getNumberOfTimesDismissed: getNumberOfTimesDismissed,
incrementNumberOfTimesDismissed: incrementNumberOfTimesDismissed,
isPlacementDisabled: isPlacementDisabled,
disablePlacement: disablePlacement,
setPlacementDisabledForToday : setPlacementDisabledForToday,
isPlacementDisabledForToday: isPlacementDisabledForToday,
setPlacementGroupKey: setPlacementGroupKey,
checkPlacementGroupKey: checkPlacementGroupKey,
parseServletName: parseServletName,
displayPlacementIfNoSurveyNorAdIsPresent:_displayPlacementIfNoSurveyNorAdIsPresent
}
});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'global_nav_action_inbox','handlers',['handlers']);
/**
* Private handlers of global_nav_action_inbox
*/
define([
'placement', 'vanillajs', 'lib/jquery-amd', 'common/Radio', 'ta/Core/TA.Record', 'ta/util/CommonMessagingUtil'
], function(
placement, vanilla, $, Radio, taRecord, commonMessagingUtil
) {
var overlay;
var INBOX_TRACKING_PID = 40186;
// TRVX-5924
var INBOX_JEWEL_TEST_PID = 40405;
var inboxJewelTestThumbprint = 'Membership_Inbox_Jewel_Test';
var maxViewsForJewelTest = 3;
var test_click = false;
var login_click = false;
Radio('global-nav-inbox').on('open', function(triggerEl, bottomLeftOffset) { _showDropdownForComponentTrigger(triggerEl, bottomLeftOffset); });
function _showDropdownForComponentTrigger(context) {
context.receivedCallback && context.receivedCallback();
if ($('.inbox-flyout-container').length && overlay) {
overlay.destroy();
} else {
var triggerEl = context.el;
var bottomLeftOffset = context.bottomLeftOffset;
_showDropdownAtTrigger(undefined, triggerEl, bottomLeftOffset);
}
}
function _showDropdownForPlacementTrigger(inboxJewelTestEl) {
_showDropdownAtTrigger(inboxJewelTestEl, $('.masthead-inbox-icon')[0]);
}
function _showDropdownAtTrigger(inboxJewelTestEl, target, bottomLeftOffset) {
var container = $('#' + placement.id);
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/flyout',
'trjs!overlays/options/closeOnDocClick',
'trjs!overlays/position',
'trjs!overlays/options/destroyOnHide',
'trjs!overlays/options/autoReposition',
'ta/registration/RegOverlay',
'trjs!unifiedinbox/inbox-lander',
'trcss!unified_inbox_lander'
];
require(reqs, function(Overlay, Flyout, CloseOnDocClick, Position, DestroyOnHide, AutoReposition, RegOverlay, InboxLander, styleSheetOK) {
// Create a new overlay
var contents = $('.inbox-nav-contents', container).clone()[0];
contents.classList.remove("hidden");
// Login clicks should bring up the registration overlay.
if ($(".login-cta", contents).length) {
var loginButton = $('.login-cta span', contents);
loginButton.click(function () {
// Tracking for if the login click occurred as a result of the Inbox Jewel Test
if (inboxJewelTestEl && test_click){
login_click = true;
taRecord.trackEventOnPage('reg_trigger', 'mgp_click_login', 'Inbox Jewel Notification Log In Click | Nav | mgp_drs_mem', INBOX_JEWEL_TEST_PID);
}
overlay.destroy();
RegOverlay.show({type: 'dummy'}, null, {
flow: 'CORE_COMBINED',
pid: 40472,
userRequestedForce: true,
onSuccess: function() {
$(".login-cta", container).remove();
$(".inbox-nav-dropdown", container).removeClass("with-login-cta");
}.bind(this),
});
});
} else {
// Add the loading skeleton
var loadingItem = $(".js-inbox-lander-thread-list-item.loading", contents);
var inboxMastheadWrapper = $(".inbox-masthead-wrapper", contents);
var newLoadingItem;
for (var loadingCount = 0; loadingCount < 10; ++loadingCount) {
newLoadingItem = loadingItem.clone();
newLoadingItem.removeClass('hidden');
inboxMastheadWrapper.append(newLoadingItem);
}
}
var blOffset = bottomLeftOffset;
if (!blOffset) {
if ($(target).data('nav-2018-enabled')) {
blOffset = [($(target).width()/2)-34, 7];
} else {
blOffset = [-20, -3];
}
}
// Create the overlay.
overlay = new Overlay(
target,
new Flyout(contents, 'inbox-flyout-container'),
CloseOnDocClick.withoutTouchEvents,
Position.bottomLeft(blOffset),
DestroyOnHide,
AutoReposition
);
overlay.show();
// For TRVX-5924 track when inbox login flyout closes
if (inboxJewelTestEl && !inboxJewelTestEl.hasClass('hidden')) {
overlay.on('hide', function() {
if (!login_click) {
taRecord.trackEventOnPage('reg_trigger', 'mgp_close', 'Inbox Jewel Notification | Nav | mgp_drs_mem', INBOX_JEWEL_TEST_PID);
}
login_click = false;
test_click = false;
});
}
// Load the thread list.
if (!$(".login-cta", container).length) {
InboxLander.loadMastheadDropdown();
}
});
}
/**
* TRVX-5924 Inbox Jewel Test
* On load of placement, handle some logic/tracking for jewel
*/
function _setUpJewelTest(container, inboxJewelTestEl) {
// If part of the test:
if (inboxJewelTestEl) {
// If Control - track on page
if (inboxJewelTestEl.hasClass('is-control')) {
taRecord.trackEventOnPage('reg_trigger', 'mgp_view_control', 'Inbox Jewel Notification Control| Nav | mgp_drs_mem');
}
else {
// Double check that the page-view limit has not been reached
var currentPageViews = commonMessagingUtil.getCurrentPageViews(inboxJewelTestThumbprint);
if (currentPageViews >= maxViewsForJewelTest) {
commonMessagingUtil.disablePlacement(inboxJewelTestThumbprint);
}
// Show jewel as part of test if not disabled
if (!commonMessagingUtil.isPlacementDisabledForToday(inboxJewelTestThumbprint)
&& !commonMessagingUtil.isPlacementDisabled(inboxJewelTestThumbprint)
&& inboxJewelTestEl.hasClass('valid-for-test')) {
$('.inbox-jewel-test', container).removeClass('hidden');
// If jewel shows, track on page
taRecord.trackEventOnPage('reg_trigger', 'mgp_view', 'Inbox Jewel Notification | Nav | mgp_drs_mem', INBOX_JEWEL_TEST_PID);
}
}
}
}
/*
* Setup click and event handlers.
*/
function _setupHandlers() {
var container = $('#' + placement.id);
var inboxJewelTestEl = $(".inbox-jewel-test", container);
/**
*  Hide ui_jewel for inbox jewel test if view limit has been reached and track
*/
_setUpJewelTest(container, inboxJewelTestEl)
// Clicks on the jewel should show or hide the overlay.
$('.masthead-inbox-icon, .ui_jewel', container).click(function (e) {
e.stopPropagation();
// If jewel showing as part of TRVX-5924
if (inboxJewelTestEl && !inboxJewelTestEl.hasClass('hidden')) {
taRecord.trackEventOnPage('reg_trigger', 'mgp_click', 'Inbox Jewel Notification | Nav | mgp_drs_mem', INBOX_JEWEL_TEST_PID);
commonMessagingUtil.setPlacementDisabledForToday(inboxJewelTestThumbprint);
commonMessagingUtil.incrementPageViews(inboxJewelTestThumbprint);
test_click = true;
// Adding 'no_unread' tracking here
// If inbox jewel test is active, the jewel will not be hidden and there are no unread inbox messages
taRecord.trackEventOnPage('Inbox|Dropdown', 'icon_jewel_click', 'no_unread', INBOX_TRACKING_PID);
} else if ($('.ui_jewel', container).length && $('.ui_jewel', container).hasClass('hidden')) {
taRecord.trackEventOnPage('Inbox|Dropdown', 'icon_jewel_click', 'no_unread', INBOX_TRACKING_PID);
} else if ($('.ui_jewel', container).length) {
taRecord.trackEventOnPage('Inbox|Dropdown', 'icon_jewel_click', 'has_unread', INBOX_TRACKING_PID);
}
if ($('.masthead-inbox-icon', container).attr('data-on-inbox')) {
window.location = '/Inbox';
} else {
if ($(".inbox-flyout-container").length && overlay) {
overlay.destroy();
} else {
_showDropdownForPlacementTrigger(inboxJewelTestEl);
}
}
});
// Clicks on a thread should hide the overlay.
Radio('inbox').on(
'thread_clicked',
function(evnt) {
if (overlay) {
overlay.destroy();
}
}
);
// Hide or show the jewel as appropriate.
Radio('inbox').on(
'has_unread_conversations',
function(evnt) {
var jewelEls = $('.ui_jewel', container);
if(jewelEls !== 'undefined' && jewelEls.length > 0) {
jewelEls.each(function (i, elem) {
if (!$(elem).hasClass('inbox-jewel-test')) {
$(elem).removeClass('hidden');
}
})
}
}
);
Radio('inbox').on(
'no_unread_conversations',
function(evnt) {
var jewelEls = $('.ui_jewel', container);
if(jewelEls !== 'undefined' && jewelEls.length > 0) {
jewelEls.each(function(i, elem) {
if (!$(elem).hasClass('inbox-jewel-test')) {
$(elem).addClass('hidden');
}
})
}
}
);
Radio('inbox').on(
'setup_handler',
function() {
_setupHandlers();
}
);
}
/*
* Setup the icon click handler.
*/
_setupHandlers();
return {
};
});
});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'global_nav','handlers',['deferred/lateHandlers','handlers']);
/* jshint newcap:false */
define([
'placement',
'lib/jquery-amd',
'common/Radio',
'ta/registration/RegEvents',
'utils/throttle',
'widget/components',
'utils/asdf-encoder'
], function(
placement,
$,
Radio,
RegEvents,
throttle,
Components,
asdf
) {
'use strict';
var TRACKING_CATEGORY = "TopNav";
var placementEl = $('#' + placement.id);
var radio = Radio('global-nav');
var oldOverlay = null;
var mastheadSavesApp = null;
var persistentIcons = $('.persistent-icons', placementEl);
var navIcons = $('.global-nav-icons', persistentIcons);
var logo = $('.global-nav-logo', persistentIcons);
var logo2018 = $('.global-nav-logo-2018', placementEl);
var pill = $('[data-placement-name="global_nav_geopill"]', placementEl);
var radioCandyBarLinks = Radio('candy-bar-quick-links');
var $global_nav_bottom = $('.global-nav-bottom', placementEl);
var radioScrollGeoPill = Radio('tripsearch-scroll-geo-pill');
// Trigger in 'placements/global_nav_action_trips/handlers'
radio.on('run-my-trips-test-3', function() {
openMyTrips(false, true);
});
radioScrollGeoPill.on('hide-on-header', function(shouldHide) {
if (logo2018)
{
logo2018.toggleClass('is-hidden-mobile', !shouldHide);
}
});
// Update Global Nav content
var _onSuccessLoginRefresh = (function(response) {
window.userLoggedIn = true;
// We need this refresh logic only in the placements version of the header.
// The web components header is used inside of this placement so we need to specifically
// avoid replacing this content upon login.
var isComponents = placementEl.find('[data-non-components]').length == 0;
if (!isComponents) {
var container = document.querySelector('#' + placement.id);
var responseDOM = document.createElement('div');
responseDOM.innerHTML = response;
// preserve web components by moving each from page DOM into response DOM
// assumes only one instance of each web component
[].forEach.call(responseDOM.querySelectorAll('.react-container'), function(newComponent) {
var oldComponent = container.querySelector('[data-component="' + newComponent.getAttribute('data-component') + '"]');
if (oldComponent) {
newComponent.parentNode.replaceChild(oldComponent, newComponent);
}
});
// refresh
var oldGlobalNav = container.querySelector('.global-nav');
var newGlobalNav = responseDOM.querySelector('.global-nav');
oldGlobalNav.parentNode.replaceChild(newGlobalNav, oldGlobalNav);
if (oldOverlay) {
oldOverlay.hide('replace-el');
}
} else {
// If this is the components nav then we need to pull in the inbox placement contents from the
// response and drop them into a special area meant for placements that we currently still depend
// on. E.g., inbox dropdown can't be made into a component without API rework.
var $legacyActions = placementEl.find('.components-nav-legacy-actions');
var actionsResponse = $("<div>").html(response).find('.components-nav-legacy-actions').html();
$legacyActions.html(actionsResponse);
}
// Trip links are potentially coming in client-side only, initialize them!
if (placementEl[0]) {
Components.initComponentWidgets(placementEl[0], '@ta/trips.trip-link');
Components.initComponentWidgets(placementEl[0], '@ta/brand.global-nav-action-content-collect');
}
Radio('inbox').trigger('setup_handler');
}).bind(placementEl);
var _getRequestOptionsForLoginRefresh = function() {
return {
// This should not be necessary, but for some reason placements
// seems tightly coupled with the location store
skipLocation: placement.location_id <= 0,
returnTo: document.location.pathname + (document.location.search||'') + (document.location.hash||'')
};
};
// When login state changes, request the updated global nav
RegEvents.on('success', function() {
placement.requestAJAXPlacement( _onSuccessLoginRefresh, null, _getRequestOptionsForLoginRefresh());
});
// When mousing over the global nav links, show their submenus
placementEl.on('mouseenter', '.global-nav-links-container [data-element]', function(evt) {
var elmt = $(this);
var linkEl = elmt.find('a').first();
if (oldOverlay) {
oldOverlay.hide('new-overlay');
}
// Is there a submenu to show?
var menuEl = placementEl.find(elmt.data('element')).clone();
if (!menuEl.length) {
return;
}
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/flyout',
'trjs!overlays/options/closeOnMouseAway',
'trjs!overlays/position',
'trjs!overlays/options/destroyOnHide'
];
require(reqs, function(Overlay, Flyout, CloseOnMouseAway, Position, DestroyOnHide) {
var overlay = new Overlay(elmt[0], new Flyout(menuEl[0], 'global-nav-flyout global-nav-menu'), CloseOnMouseAway, Position.bottomRight([0, 1]), DestroyOnHide);
overlay.domParent = placementEl.find('.global-nav-overlays-container')[0];
overlay.show();
// For tracking clicks to submenu links, we add an attribute to the link being hovered over so we can retrieve
// the tracking prefix from the link's tracking-label attribute.
linkEl.attr('data-active-menu-trigger', true);
$(evt.currentTarget).find('.ui_tab').addClass('hovering');
overlay.on('hide', function() {
// Remove attribute used for tracking
linkEl.removeAttr('data-active-menu-trigger');
$(evt.currentTarget).find('.ui_tab').removeClass('hovering');
});
oldOverlay = overlay;
});
});
// Make sure to close the submenus
placementEl.on('mouseenter', '.subItem', function(evt) {
$(this).siblings('.expandSubItem').removeClass('active');
});
// When mousing over a menu in the dropdown, open the submenu
placementEl.on('mouseenter', '.expandSubItem', function(evt) {
var elmt = $(this);
// CX-2715 avoid opening a duplicate submenu
if (elmt.hasClass('active')) {
return;
}
elmt.addClass('active');
elmt.siblings('.expandSubItem').removeClass('active');
var submenuEl = elmt.find('.secondSubNav').clone();
var targetEl = elmt.parents('.ui_overlay');
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/flyout',
'trjs!overlays/options/closeOnMouseOut',
'trjs!overlays/options/destroyOnHide'
];
require(reqs, function(Overlay, Flyout, CloseOnMouseOut, DestroyOnHide) {
var overlay = new Overlay(elmt[0], new Flyout(submenuEl[0]), CloseOnMouseOut, DestroyOnHide);
overlay.domParent = targetEl[0];
submenuEl.css('display', 'block');
overlay.show();
});
});
// If we're opening the more menu, add any elements that are hidden or collapsed due to space
placementEl.on('mouseenter', '.global-nav-links-ellipsis', function(evt) {
var elmt = $(this);
if (oldOverlay) {
oldOverlay.hide('new-overlay');
}
var allEls = placementEl.find(".global-nav-links-container li");
var hiddenEls = allEls.filter(":hidden");
var collapsedEls = allEls.filter(function(idx, el) { return $(el).offset().top > allEls.offset().top; });
var elsToShow = $().add(hiddenEls).add(collapsedEls).clone();
var menuEl = placementEl.find('.global-nav-links-menu-more').clone();
menuEl.prepend(elsToShow);
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/flyout',
'trjs!overlays/options/closeOnMouseAway',
'trjs!overlays/position',
'trjs!overlays/options/destroyOnHide'
];
require(reqs, function(Overlay, Flyout, CloseOnMouseAway, Position, DestroyOnHide) {
var overlay = new Overlay(elmt[0], new Flyout(menuEl[0], 'global-nav-flyout global-nav-menu'), CloseOnMouseAway, Position.bottomRight([0, 1]), DestroyOnHide);
overlay.domParent = placementEl.find('.global-nav-overlays-container')[0];
overlay.show();
elmt.find('.ui_tab').addClass('hovering');
overlay.on('hide', function() {
elmt.find('.ui_tab').removeClass('hovering');
});
oldOverlay = overlay;
});
});
// Help Center MW Overlay
placementEl.on('click', '#global-nav-HelpDesk', function (evt) {
evt.preventDefault();
var sourceElem = this;
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/modal',
'trjs!overlays/options/closeOnEscape',
'trjs!overlays/position',
'trjs!overlays/options/closeOnDocClick',
'trjs!overlays/options/ajax',
'trcss!src/build/required/help_center_overlay'
];
require(reqs, function(Overlay, Modal, CloseOnEscape, Position, CloseOnDocClick, Ajax, styleSheetOK){
var overlay = new Overlay(sourceElem, [
Modal(null, '', 'help_center'),
CloseOnEscape,
Position.cssCentered(),
CloseOnDocClick,
Ajax("/uvpages/helpCenterOverlay.html")
]);
overlay.show();
radio.emit('overlay-show');
});
});
// When clicking on my trips
placementEl.on('click', '.masthead-saves', function(evt) {
if (mastheadSavesApp) {
if (oldOverlay) {
oldOverlay.hide('new-overlay');
}
mastheadSavesApp && mastheadSavesApp.destroy() && (mastheadSavesApp = null);
require(['trjs!ta/Core/TA.Record'], function(taRecord) {
taRecord.trackEventOnPage('TopNav', 'mytrips_dropdown_cancel');
});
} else {
openMyTrips(false, false, evt.currentTarget);
$(evt.currentTarget).find('.ui_icon').addClass('hovering');
}
});
// My Trips - Remove through CX-2542
var openMyTrips = function(inCreateTripFlow, runTest3, elmt) {
if (oldOverlay) {
oldOverlay.hide('new-overlay');
}
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/flyout',
'trjs!overlays/options/closeOnDocClick',
'trjs!overlays/position',
'trjs!overlays/options/destroyOnHide',
'trjs!overlays/options/autoReposition',
'trjs!ta/Core/TA.Record'
];
require(reqs, function(Overlay, Flyout, CloseOnDocClick, Position, DestroyOnHide, AutoReposition, taRecord) {
// Get reference element
var $refElem = $('.masthead-saves');
// Create a new overlay
var overlay = new Overlay(
$refElem[0],
new Flyout('', 'global-nav-flyout global-nav-utility trips-flyout-container'),
CloseOnDocClick.withoutTouchEvents,
$refElem.data('nav-2018-enabled') ? Position.bottomLeft([($refElem.width()/2)-34, 9]) : Position.bottomLeft([-20, -3]),
DestroyOnHide,
AutoReposition
);
overlay.domParent = placementEl.find('.global-nav-overlays-container')[0];
overlay.show();
placementEl.find('.trips-flyout-container').addClass('hide-arrow'); // To make sure the overlay arrow is shown together with the masthead saves view
oldOverlay = overlay;
require(['trdust!masthead-saves-dust', 'trdust!styleguide-dust', 'trjs!masthead-saves', 'trcss!masthead-saves'],
function(dustModule, module, styleSheetOK) {
setTimeout(function () {
mastheadSavesApp = new window.MastheadSavesApp();
mastheadSavesApp.start({
inCreateTripFlow: inCreateTripFlow,
runTest3: runTest3
});
overlay.on('hide', function(evt) {
mastheadSavesApp && mastheadSavesApp.destroy() && (mastheadSavesApp = null);
taRecord.trackEventOnPage('TopNav', 'mytrips_dropdown_cancel');
if (elmt) {
$(elmt).find('.ui_icon').removeClass('hovering');
}
});
placementEl.find('.trips-flyout-container').removeClass('hide-arrow');
}, 0);
});
});
}.bind(placementEl);
// Profile Link: When clicking on a utility link, open the submenu, if one is available
placementEl.on('click', '.global-nav-utility-activator', function(evt) {
var elm = $(this);
// Is there a submenu to show?
var menuEl = placementEl.find(elm.data('element')).clone();
if (!menuEl.length) {
return;
}
if (oldOverlay) {
if (oldOverlay.sourceElement == this){
oldOverlay.isOpen() ? oldOverlay.hide('close') : oldOverlay.show();
return; // don't re-open the same overlay.
}
else {
oldOverlay.hide('new-overlay');
}
}
// Create a new overlay
menuEl = menuEl.clone();
var reqs = ['trjs!overlays/Overlay',
'trjs!overlays/styles/flyout',
'trjs!overlays/options/closeOnDocClick',
'trjs!overlays/position',
'trjs!overlays/options/autoReposition'
];
require(reqs, function(Overlay, Flyout, CloseOnDocClick, Position, AutoReposition) {
var overlay = new Overlay(elm[0], new Flyout(menuEl[0], 'global-nav-flyout global-nav-utility'), CloseOnDocClick, elm.data('nav-2018-enabled') ? Position.bottomLeft([(elm.outerWidth()/2)-34, 12]) : Position.bottomLeft([-20, -3]), AutoReposition);
overlay.domParent = placementEl.find('.global-nav-overlays-container')[0];
overlay.show();
elm.addClass('menu-open');
$(evt.currentTarget).find('.ui_icon').addClass('hovering');
overlay.on('hide', function() {
elm.removeClass('menu-open');
$(evt.currentTarget).find('.ui_icon').removeClass('hovering');
});
oldOverlay = overlay;
});
});
// Trackng: Logo clicks
placementEl.on('click', '.global-nav-logo', function() {
require(['trjs!ta/Core/TA.Record'], function(taRecord) {
taRecord.setEvtCookie('TopNav_' + window.pageServlet, 'click', 'TAlogo', 0, '/Home');
});
});
// Hide or show the jewel as appropriate.
Radio('inbox').on(
'has_unread_conversations',
function(evnt) {
placementEl.find('.global-nav-hamburger .ui_jewel.unread').removeClass('hidden');
placementEl.find('.nav-sub-link.inbox .icon-and-jewel').removeClass('hidden');
}
);
Radio('inbox').on(
'no_unread_conversations',
function(evnt) {
placementEl.find('.global-nav-hamburger .ui_jewel.unread').addClass('hidden');
placementEl.find('.nav-sub-link.inbox .icon-and-jewel').addClass('hidden');
}
);
// Mobile Web Global Nav Persistent Icons
function checkForPersistentIcons() {
var offsetPosition = $(window).scrollTop();
if (navIcons.length) {
// A - Sideways default state: Logo and icons together, geo pill on second line
// B - Sideways 1st scroll (down): Icons animate to geo pill, logo scrolls out of view
// C - Sideways 2nd scroll (down): Icons locked to geo pill, all elements scroll out of view
//
// A - Internal default state: No logo, geo pill and icons on first line
// B - Internal 1st scroll (down): Icons locked to geo pill, all elements scroll out of view
// C - Internal 1st scroll (up): Icons animate to logo, logo scrolls into view
//
// Adjust icons to placements: Logo then Geopill when available
if (pill.is(':visible')) {
var calculatePlacementInView = placementEl.height() - offsetPosition;
// Keep icons confined to scrollable area on DW & MW (avoids snap-into-view on MW)
if (offsetPosition <= 0) {
navIcons.css({
'position': 'absolute',
'top': 0
});
}
// As long as the icons are w/n the scrollable area, animate position of icons
if (calculatePlacementInView > 0) {
if (offsetPosition > 0 && offsetPosition <= 50) {
navIcons.css({
'position': 'absolute',
'top': offsetPosition,
'bottom': 'auto'
});
}
// When the icons reach the end of the scrollable area, lock them to the geo pill
else if (calculatePlacementInView <= 50) {
navIcons.css({
'position': 'absolute',
'top': 'auto',
'bottom': 0
});
}
}
}
}
}
// Login
placementEl.on('click', 'a.login-button.mobile', function(evt) {
var flow = $('.join-button').data('flowName') || 'CORE_COMBINED';
var pid = $('.join-button').data('pid') || 40422;
var tracking =  $('.join-button').data('tracking');
var flowOrigin = 'login'; // default
if ($(this).hasClass('join-button')) {
flowOrigin = 'join';
}
var regOptions = {
flow: flow,
pid: pid, // see https://docs.dev.tripadvisor.com/display/CMN/Product+Guide%3A+Registration+and+Login+Tracking
userRequestedForce: 'true',
locationId: require('page-model').GEO_ID,
onSuccess: function(regData) {
// Use available info to make onboarding pop immediately if the user has definitely not seen it yet.
if(require.defined('@ta/social.onboarding-state')){
var immediateLoad = regData && (regData.hasCreatedMember || !regData.hasAcceptedTermsOfUse);
var setShouldFireAction = require('@ta/social.onboarding-state').ACTIONS.setShouldFire;
var entrypoint = pid === 40664 ? 'SIGN_UP_AND_SAVE' : 'MASTHEAD'; // MEMX-1003
if (tracking === 'emailPromo') {
require(['trjs!ta/Core/TA.Record'], function(taRecord) {
taRecord.trackEventOnPage('signup_promo_prompt', 'eligible_promo_test');
});
}
require('redux-init').dispatch(setShouldFireAction(immediateLoad, entrypoint));
}
}
};
var extraOptions = {
extraQueryParams: {
flowOrigin: flowOrigin
}
};
regOptions = $.extend(regOptions, extraOptions);
require(['trjs!ta/registration/RegOverlay'], function (RegOverlay) {
RegOverlay.showForMobile(evt, evt.target, regOptions);
});
evt.preventDefault();
});
// Auto scroll to desired position based on traffic type
function positionSecondView() {
var hideLogo = $('.second-view', placementEl);
var offsetPosition = $(window).scrollTop();
if (navIcons.length) {
logo.css({
'display': 'block'
});
if (hideLogo.length && pill.is(':visible')) {
offsetPosition = persistentIcons.height() - logo.height();
window.scroll(0, offsetPosition);
navIcons.css({
'position': 'absolute',
'top': 'auto',
'bottom': 0
});
}
}
}
// Global Nav Persistent Single-line Header
function checkForPersistentGlobalNav() {
var persistentGlobalNav = $('.global-nav-persistent', placementEl);
if (persistentGlobalNav.length) {
persistentGlobalNav.toggleClass('fixed', $(window).scrollTop() > placementEl.offset().top);
}
}
// Default scroll position for responsive views
positionSecondView();
var positionGlobalNav = throttle(checkForPersistentGlobalNav, 100);
$(window).scroll( function() {
checkForPersistentIcons();
positionGlobalNav();
});
radioCandyBarLinks.on('border-top', function(shouldHide) {
$global_nav_bottom.toggleClass('home_ui_tabs', shouldHide);
});
// Tracking for links in submenus works by looking up the active-menu-trigger
// (link that triggered the dropdown) and using it's tracking-label as a prefix
placementEl.on('click', 'a.global-nav-link[data-tracking-label]', function(event) {
var trackingLabel = $(event.target).data('trackingLabel');
// Handle links to /# (Help Center) or links opening new window
require(['trjs!ta/Core/TA.Record'], function(taRecord) {
if("HelpDesk" === trackingLabel || event.target.target == '_blank') {
taRecord.trackEventOnPage(TRACKING_CATEGORY, 'click', trackingLabel);
} else {
taRecord.setEvtCookie(TRACKING_CATEGORY, 'click', trackingLabel, 0, event.target.href);
}
});
});
function clickLogoLink(event, target) {
event.preventDefault();
var link = target.getAttribute('data-ahref') ? asdf.asdf(target.getAttribute('data-ahref')).replace(/&amp;/g, '&') : '/';
window.open(link, '_self');
}
return {
checkForPersistentIcons: checkForPersistentIcons,
checkForPersistentGlobalNav: checkForPersistentGlobalNav,
clickLogoLink: clickLogoLink
};
});});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'global_nav_links','handlers',['handlers']);
/**
* Private handler of global_nav_links
*/
define(['utils/asdf-encoder'],
function (asdf) {
function clickAboutGeoLink(event, target) {
window.open(asdf.asdf(target.getAttribute('data-ahref')).replace(/&amp;/g, '&'), '_self');
}
return {
clickAboutGeoLink: clickAboutGeoLink
}
});});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'browser_mode_tracking','handlers',['handlers']);
define([
'placement', 'ta/Core/TA.Event', 'ta/Browser', 'ta/Core/TA.Record', 'ta/util/SessionStorage'
], function(placement, taEvent, taBrowser, taRecord, taSessionStorage){
var browserName;
var sessionStoreKey = placement.id + '_browser_mode_tracked';
function _trackBrowserMode (resultStr) {
taRecord.trackEventOnPage('BROWSER_TRACKING', browserName, resultStr, null, true);
}
taEvent.queueForLoad(function(){
if (taSessionStorage.canUseSessionStore() && sessionStorage.getItem(sessionStoreKey)) {
// already tracked
return;
}
else {
if (taBrowser.isChrome()) {
browserName = "Chrome";
taBrowser.isChromeIncognito(_trackBrowserMode);
taSessionStorage.canUseSessionStore() && sessionStorage.setItem(sessionStoreKey, '1');
}
}
});
});});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'comscore','handlers',['handlers']);
/* globals COMSCORE */
define([
'placement', 'ta/Core/TA.Event', 'vanillajs'
], function(
placement, TAEvent
){
'use strict';
TAEvent.queueForLoad(function(){
var _root = document.getElementById(placement.id)
, _dataHolder = _root.querySelector('.dataHolder')
, commscoreId = _dataHolder.getAttribute('data-id')
, beacon = { c1: '2', c2: commscoreId, c3: '', c4: '' }
;
if (typeof COMSCORE != 'undefined'){
COMSCORE.beacon(beacon);
}
else {
window._comscore = window._comscore || [];
window._comscore.push(beacon);
var s = document.createElement('script');
s.async = true;
s.src = (document.location.protocol == 'https:' ? 'https://sb' : 'http://b') + '.scorecardresearch.com/beacon.js';
_root.appendChild(s);
}
}, 5, 'comscore');
// prioritized before default things (100+), and after 'really important' things, which seem to be meta things. Before GA, which is 10.
});
});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'trip_planner_breadcrumbs','handlers',['handlers']);
define(["placement", "ta/Core/TA.FireEvent", "utils/urlDecoder"],
function(placement, taEvent, decoder) {
"use strict";
function updateContents(contentDiv) {
var placementDiv = document.getElementById(placement.id);
if(placementDiv) {
placementDiv.innerHTML = contentDiv.innerHTML;
}
}
function _goToLink(event, element) {
decoder.goToLink(event, element);
}
function onClick(key, value) {
return require.defined('ta/util/Cookie') && require('ta/util/Cookie').setOneTimeCookie(key, value);
}
taEvent.on("update-" + placement.name, updateContents);
return {
goToLink: _goToLink,
onClick : onClick
};
});});require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'global_footer','handlers',['handlers']);
define([
'ta/Core/TA.LocalStorage', 'ta/Core/TA.PageVisibility', 'placement', 'vanillajs', 'utils/ajax'
], function(
localStorage, pageVisibility, placement, vanillajs, ajax
) {
function _trackScrollIntoView() {
var pathname = window.location.pathname; //pathname returns "/" for home and "/Hotels" or "/Restaurants" etc. for other servlets
var dashIndex = pathname.indexOf("-");  //pathname is Restaurant_Review-g#### for others
var servletTracking = (pathname.length <= 1)? 'Home' : (dashIndex > 0)? pathname.substring(1, dashIndex) : pathname.substring(1);
require(['trjs!ta/util/Element'], function(taElement) {
ta.util.element.trackWhenScrolledIntoView('#' + placement.id, [servletTracking, 'in_view', 'global_footer']);
});
};
function _trackDwellTime() {
require(['trjs!common/PageDwell'], function(pageDwell) {
pageDwell.init(window.pageServlet);
});
}
_trackScrollIntoView();
if(placement.params.dwell_tracking) {
_trackDwellTime();
}
localStorage.set('lastPageFocusTimestamp', Date.now());
pageVisibility.addFocusListener(function() {
localStorage.set('lastPageFocusTimestamp', Date.now());
});
pageVisibility.addBlurListener(function() {
localStorage.set('lastPageBlurTimestamp', Date.now());
});
return {
getFullDisclaimerText: function(el){
ajax({
url: "/TAMGFooterAjax",
success: function(e) {
el.parentElement && (el.parentElement.innerHTML = e);
},
data: {'a':'SHOW_FULL_DISCLAIMER'},
evalScripts: true,
method:'get'
});
}
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'homepage_tripadvisor_footer_links','handlers',['handlers']);
define([
"widget", 'lib/jquery-amd',
"ta/util/Cookie", 'ta/util/ActionRecord', 'page-model'
], function(
widget, $,
taCookie, Track, pageModel
) {
'use strict';
// called onclick by the wrapper div
function _checkForPid(event) {
var target = event ? (event.srcElement || event.target) : null;
if (target && target.getAttribute("data-pid")) {
taCookie.setPIDCookie(target.getAttribute("data-pid"));
}
}
$(widget.element).on("click", '.js_click[data-id="help_center"]', function(){
var el = this;
var url = $(el).data('url');
widget.require(['trjs!brand/HelpCenterOverlay', 'trcss!src/build/required/help_center_overlay'], function(o) {
o.open(el, url);
});
});
$(widget.element).on("click", '.js_click[data-id="rs_footer_link"]', function(){
var $link = $(this);
var _redirectCallback = function() {
if ($link.data('url')) {
window.location = $link.data('url');
}
};
require(['ta/Core/TA.Record'], function(taRecord) {
// This record represents when the link clicked on this page
taRecord.trackEventOnPage(pageModel["session"]["pageServlet"], $link.data('trackAction'));
_redirectCallback();
});
});
$(widget.element).on("click", ".footerLink", function(event) {
var actionPrefix = "Footer_";
var $link = $(this);
var action = $link.data('trackAction');
if (!action) {
return;
}
var opensNewWindow = ("_blank" == $link.attr("target"));
if ($link.is("a") && !opensNewWindow) {
event.preventDefault();
Track.record(actionPrefix + action)
.always(function() {
window.location = $link.attr("href");
});
} else {
Track.record(actionPrefix + action);
}
});
return {
checkForPid : _checkForPid
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'homepage_footer_pickers','handlers',['handlers']);
/* jshint newcap:false */
define([
'widget', 'lib/jquery-amd',
'ta/Core/TA.Record'
], function(
widget, $,
taRecord
) {
'use strict';
function _dropdown(evnt, elmt, widgetType, data) {
evnt && evnt.stopPropagation();
elmt.onclick = null;
widget.require([
'trjs!styleguide/overlays/Flyout',
'trjs!overlays/support/widgets', 'trjs!overlays/support/remoteWidget',
'trcss!src/build/styleguide/ui_overlays/flyouts'
], function(Flyout, Widget, RemoteWidget) {
Flyout(evnt, elmt, Widget(widget), RemoteWidget(widgetType, {}, data));
});
}
return {
showPos: function _togglePosPickerOverlay(evnt, elmt){
var posDataEl = $(widget.element).find('.point_of_sale_data');
_dropdown(
evnt, elmt, 'POS_PICKER',
{
pageFeature: posDataEl.data('page-feature') || window.pageFeature || '',
localeCodes: posDataEl.data('locale-codes') || window.localeCodes || '',
relativeUrl: document.location.pathname + (document.location.search||'') + (document.location.hash||'')
}
);
var currLocale = posDataEl.data('currentLocale');
taRecord.trackEventOnPage('POS_PICKER', 'Open', currLocale);
},
showCurrency : function(evnt, elmt){
_dropdown(evnt, elmt, 'CURRENCY_PICKER');
}
};
});
});require(['ta/prwidgets'], function(widgets) {
var define = widgets.define.bind(widgets,'homepage_tripadvisor_horizontal_footer_links','handlers',['handlers']);
define(["widget", 'lib/jquery-amd', "ta/popups/CookieSettingsPanel", 'ta/util/ActionRecord'],
function(widget, $, cookieSettingsPanel, Track) {
'use strict';
$(widget.element).on('click', '.js_click[data-id="cookie-consent"]', function () {
cookieSettingsPanel();
});
$(widget.element).on('click', '.footer_link', function(event) {
var elmt = $(this);
var actionPrefix = "Footer_";
var action = elmt.data('trackAction');
if (!action) {
return;
}
if (elmt.is('a')) {
event.preventDefault();
Track.record(actionPrefix + action)
.always(function() {
window.location = elmt[0].href;
});
}
Track.record(actionPrefix + action);
});
});});
define("cpm/AdBlockDetect", ["lib/jquery-amd","utils/browserutils","ta/Core/TA.Event","ta/Core/TA.Record","ta/util/Error"],
function( $, Browser, taEvent, taRecord, taError) {
'use strict';
var exports = {};
var _testImg;
var DEFAULT_LABEL = "ab_chk";
var _isPixelLoadError;
var _logged = false;
var _cdn = window.CDNHOST || "";
var _pixelUrl = "/img2/x.gif?&ads=1&adsize=2&adslot=3&rnd=";
var _generatePixel = function() {
var rnd = Math.floor(Math.random() * 100000);
return $('<img src="' + _cdn + _pixelUrl + rnd + '" style="position:absolute" class="ad ad_column" height="0" width="0" />');
};
var _getAdCount = function() {
var count = document.querySelectorAll(".gptAd:not(.inactive)").length;
if (screen.width < 768) {
count += document.querySelectorAll(".inline_ad_wrapper").length;
}
return count;
};
var _log = function(blocked, trackingLabel, trackUnblocked){
if ((!_logged && trackingLabel === DEFAULT_LABEL) ||
(trackingLabel && trackingLabel !== DEFAULT_LABEL)){
if (blocked || trackUnblocked) {
taRecord.trackEventOnPage(trackingLabel, Browser.name, blocked, _getAdCount(), false);
}
_logged = true;
}
};
var _detect = function(onDetectedHandler, trackingLabel, trackUnblocked, isLoadError){
if (typeof isLoadError != undefined) {
_isPixelLoadError = isLoadError;
}
if (_testImg){
var blocked = _isPixelLoadError ? true : !_testImg[0].offsetParent;
_log(blocked, trackingLabel, trackUnblocked);
if (blocked) {
onDetectedHandler();
}
}
};
exports.runIfDetected = function(onDetectedHandler, trackingLabel, trackUnblocked) {
if ( typeof onDetectedHandler != "function") {
taError.record(null, "runIfDetected requires a function");
return;
}
taEvent.queueForLoad( function() {
_logged = false;
if (_testImg) {
_detect(onDetectedHandler, trackingLabel, trackUnblocked);
} else {
_testImg = _generatePixel();
_testImg.on("load", function(){ _detect(onDetectedHandler, trackingLabel, trackUnblocked, false); });
_testImg.on("error", function(){ _detect(onDetectedHandler, trackingLabel, trackUnblocked, true); });
$("body").append(_testImg);
}
}, "AdBlockDetect");
};
return exports;
});
require(['ta/p13n/placements'], function(placements) {
var define = placements.define.bind(placements,'ab_chk','handlers',['handlers']);
/*
* ADS-3472: ad blocker detection running permanently on sales drs 99
* Works in Chrome, Firefox, Safari & IE.
*/
define(["placement","cpm/AdBlockDetect"], function(placement,abDetect) {
// a fn is required,
abDetect.runIfDetected(function(){}, "ab_chk", true);
});
});require(['ta/p13n/placements','ta/page','$prp/ab_chk/handlers'], function(placements, impl) {
window.ta.plc_ab_chk_handlers = placements.load('ab_chk','handlers.js', { 'name': 'ab_chk', 'id': 'taplc_ab_chk', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/ip_redir/handlers'], function(placements, impl) {
window.ta.plc_ip_redir_0_handlers = placements.load('ip_redir','handlers.js', { 'name': 'ip_redir', 'occurrence': 0, 'id': 'taplc_ip_redir_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/global_nav/handlers'], function(placements, impl) {
window.ta.plc_global_nav_0_handlers = placements.load('global_nav','handlers.js', { 'name': 'global_nav', 'occurrence': 0, 'id': 'taplc_global_nav_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["deferred/lateHandlers","handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/global_nav_dropdowns/handlers'], function(placements, impl) {
window.ta.plc_global_nav_dropdowns_0_handlers = placements.load('global_nav_dropdowns','handlers.js', { 'name': 'global_nav_dropdowns', 'occurrence': 0, 'id': 'taplc_global_nav_dropdowns_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/global_nav_links/handlers'], function(placements, impl) {
window.ta.plc_global_nav_links_0_handlers = placements.load('global_nav_links','handlers.js', { 'name': 'global_nav_links', 'occurrence': 0, 'id': 'taplc_global_nav_links_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {"geopillOnHome":false}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/global_nav_action_inbox/handlers'], function(placements, impl) {
window.ta.plc_global_nav_action_inbox_empty_0_handlers = placements.load('global_nav_action_inbox','handlers.js', { 'name': 'global_nav_action_inbox:empty', 'occurrence': 0, 'id': 'taplc_global_nav_action_inbox_empty_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/trip_planner_breadcrumbs/handlers'], function(placements, impl) {
window.ta.plc_trip_planner_breadcrumbs_0_handlers = placements.load('trip_planner_breadcrumbs','handlers.js', { 'name': 'trip_planner_breadcrumbs', 'occurrence': 0, 'id': 'taplc_trip_planner_breadcrumbs_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/trip_search_attractions/handlers'], function(placements, impl) {
window.ta.plc_trip_search_attractions_attraction_for_feature_attractions_responsive_attraction_overview_0_handlers = placements.load('trip_search_attractions','handlers.js', { 'name': 'trip_search_attractions:attraction_for_feature_attractions_responsive_attraction_overview', 'occurrence': 0, 'id': 'taplc_trip_search_attractions_attraction_for_feature_attractions_responsive_attraction_overview_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {"showClearDates":"true","dateType":"ATTRACTIONRANGE"}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/masthead_search/handlers'], function(placements, impl) {
window.ta.plc_masthead_search_empty_0_handlers = placements.load('masthead_search','handlers.js', { 'name': 'masthead_search:empty', 'occurrence': 0, 'id': 'taplc_masthead_search_empty_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["deferred/lateHandlers","handlers"], 'params': {"typeahead_to_store":{"typeahead_new_location_label":"NEW LOCATION","typeahead.aliases.flight_reviews":["flight reviews","airline reviews"],"typeahead_throttle_requests":"true","typeahead.aliases.rental_cars":["Rental Cars"],"typeahead_cruise_ships_enabled":"true","typeahead.aliases.activities":["Tours and Tickets","Tours & Tickets"],"typeahead.aliases.things_to_do":["Things to do","Thing to do","attractions","activities","what to do","sightseeing","Sights","Tourist Attractions","Activity","Attraction","What to see","Where to go","Where to visit","Best Attractions","Best Things to do","Best Tourist Attractions","Best Sightseeing","Top Attractions","Top Things to do","Top Tourist Attractions","Top Sightseeing","Top 10 Attractions","Top 10 Things to do","Top 10 Tourist Attractions","Top 10 Sightseeing"],"typeahead.enable_nearby":true,"typeahead_cruise_cruiselines_enabled":"true","typeahead_divClasses":null,"typeahead.scoped.cur_loc_denied":"TripAdvisor was denied permission to access your location.  Give your browser and TripAdvisor permission to use your current location and try again.","typeahead.scoped.cur_loc":"Nearby","typeahead.aliases.travel_forums":["forum","forums","Travel Forum","Travel Forums"],"typeahead.aliases.travel_guides":["guides","city guides"],"typeahead.aliases.vacation_rentals":["vacation rentals","vacation rental","Airbnb","Holiday rental","Holiday rentals"],"typeahead.aliases.flights":["Flights","Flight","Flight to","flights to","nonstop flights","business class flights","return flights","airline flights","air flights","cheap flights","flight from","cheapest flights","flight only","one way flights","direct flights","domestic flights","air fare","cheap flights to","air flights to","airline flights to","business class flights to","cheapest flights to","direct flights to","domestic flights to","nonstop flights to","one way flights to","air fares","airfare","airfares","air fare to","air fares to","airfare to","airfares to"],"typeahead_moved_label":"MOVED","typeahead_dual_search_options":{"geoID":188657,"bypassSearch":true,"staticTypeAheadOptions":{"minChars":3,"defaultValue":"Search","injectNewLocation":true,"typeahead1_5":true,"geoBoostFix":true},"debug":false,"navSearchTypeAheadEnabled":true,"isMobileWeb":false,"geoInfo":{"geoId":188657,"geoName":"Luxembourg Province","parentName":"Belgium","shortParentName":"Belgium","categories":{"GEO":{"url":"/Tourism-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Vacations.html"},"HOTEL":{"url":"/Hotels-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Hotels.html"},"VACATION_RENTAL":{"url":"/VacationRentals-g188657-Reviews-Luxembourg_Province_The_Ardennes_Wallonia-Vacation_Rentals.html"},"ATTRACTION":{"url":"/Attractions-g188657-Activities-Luxembourg_Province_The_Ardennes_Wallonia.html"},"EATERY":{"url":"/Restaurants-g188657-Luxembourg_Province_The_Ardennes_Wallonia.html"},"FLIGHTS_TO":{"url":"/Flights-g188657-Luxembourg_Province_The_Ardennes_Wallonia-Cheap_Discount_Airfares.html"},"CAR_RENTAL_OFFICE":{"url":"/RentalCars_Review?detail=188657"}}}},"typeahead_closed_label":"CLOSED","typeahead.scoped.all_of_trip":"Worldwide","typeahead_attraction_activity_search":"true","typeahead.aliases.hotels":["hotels","hotel","lodging","places to stay","where to stay","accommodation","accommodations","hotel reviews","Hotels & Motels","Best Hotels","Best Places to Stay","Best Lodging","Best Hotels & Motels","Lodgings","Place to stay","Top Hotels","Top Places to Stay","Top Lodging","Top Hotels & Motels","Top 10 Hotels","Top 10 Places to Stay","Top 10 Lodging","Top 10 Hotels & Motels"],"typeahead.aliases.restaurants":["food","places to eat","eateries","dining","restaurants","restaurant","Place to eat","Eatery","Where to eat","What to eat","Best Restaurants","Best Places to Eat","Best Food","Best Dining","Top Restaurants","Top Places to Eat","Top Food","Top Dining","Top 10 Restaurants","Top 10 Places To Eat","Top 10 Food","Top 10 Dining"],"typeahead.searchMore.v2":"Search for \"%\"","typeahead.searchSessionId":"74CEA223E2F7FF7360867645B0B0FF331577019443664ssid"}}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/attraction_filters_clarity/handlers'], function(placements, impl) {
window.ta.plc_attraction_filters_clarity_0_handlers = placements.load('attraction_filters_clarity','handlers.js', { 'name': 'attraction_filters_clarity', 'occurrence': 0, 'id': 'taplc_attraction_filters_clarity_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/attraction_returning_users/handlers'], function(placements, impl) {
window.ta.plc_attraction_returning_users_0_handlers = placements.load('attraction_returning_users','handlers.es6', { 'name': 'attraction_returning_users', 'occurrence': 0, 'id': 'taplc_attraction_returning_users_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/attraction_promo_header/handlers'], function(placements, impl) {
window.ta.plc_attraction_promo_header_0_handlers = placements.load('attraction_promo_header','handlers.js', { 'name': 'attraction_promo_header', 'occurrence': 0, 'id': 'taplc_attraction_promo_header_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/attraction_coverpage/handlers'], function(placements, impl) {
window.ta.plc_attraction_coverpage_attraction_0_handlers = placements.load('attraction_coverpage','handlers.js', { 'name': 'attraction_coverpage:attraction', 'occurrence': 0, 'id': 'taplc_attraction_coverpage_attraction_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/qualtrics_survey/handlers'], function(placements, impl) {
window.ta.plc_qualtrics_survey_0_handlers = placements.load('qualtrics_survey','handlers.js', { 'name': 'qualtrics_survey', 'occurrence': 0, 'id': 'taplc_qualtrics_survey_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/browser_mode_tracking/handlers'], function(placements, impl) {
window.ta.plc_browser_mode_tracking_0_handlers = placements.load('browser_mode_tracking','handlers.js', { 'name': 'browser_mode_tracking', 'occurrence': 0, 'id': 'taplc_browser_mode_tracking_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/p13n/placements','ta/page','$prp/global_footer/handlers'], function(placements, impl) {
window.ta.plc_global_footer_0_handlers = placements.load('global_footer','handlers.js', { 'name': 'global_footer', 'occurrence': 0, 'id': 'taplc_global_footer_0', 'location_id': 188657, 'servletClass': 'com.TripResearch.servlet.attraction.AttractionOverview', 'servletName': 'Attractions', 'modules': ["handlers"], 'params': {}, 'data': {}});});
require(['ta/prwidgets', 'ta/page'], function(prwidgets) {
prwidgets.initWidgets(document);
});
</script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/long_lived_global_legacy-c-v24294967295a.js' data-rup='long_lived_global_legacy'></script>
<script type='text/javascript' crossorigin='anonymous' src='https://static.tacdn.com/js3/build/concat/short_lived_global_legacy-c-v24093412514a.js' data-rup='short_lived_global_legacy'></script>
<div id="IP_IFRAME_HOLDER"></div>
</body>
<!-- st: 441 dc: 0 sc: 44 -->
<!-- uid: Xf9oMwokIH0AAMxKCbEAAAEt -->
</html>
