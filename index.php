<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = '1anc59';


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






<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>jaraxxturn</title><meta name="author" content="jaraxxturn"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://jaraxxturn.appspot.com/"/>
<meta property="og:site_name" content="jaraxxturn"/>
<meta property="og:title" content="Welcome to jaraxxturn"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/3122"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="jaraxxturn"/>
<meta name="twitter:description" content="Welcome to jaraxxturn"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/3122"/>
<meta name="twitter:image:alt" content="jaraxxturn"/>
<meta name="theme-color" content="#bc905b"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright 2011 The Montserrat Project Authors (https://github.com/JulietaUla/Montserrat)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gTD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3g3D_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gbD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gfD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gnD_vx3rCs.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gTD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3g3D_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gbD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gfD_vx3rCubqg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gnD_vx3rCs.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc3CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc-CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc2CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc5CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc1CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc0CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc6CsTYl4BO.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xFIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xMIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xEIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xLIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xHIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xGIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xIIzIXKMny.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic3CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic-CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic2CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic5CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic1CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic0CsTYl4BOQ3o.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic6CsTYl4BO.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxFIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxMIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxEIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxLIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxHIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxGIzIXKMnyrYk.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxIIzIXKMny.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCRc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfABc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCBc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBxc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCxc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfChc4AMP6lbBP.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBBc4AMP6lQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/a6b7677e008577b8/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:24px}}@media (max-width: 767px){.x .c1-m{padding-bottom:24px}}@media (max-width: 767px){.x .c1-20{width:100%}}@media (max-width: 767px){.x .c1-3e{padding-top:40px}}@media (max-width: 767px){.x .c1-5e > :nth-child(n){margin-bottom:16px}}@media (max-width: 767px){.x .c1-5f  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-97{padding-bottom:32px}}@media (max-width: 767px){.x .c1-9c{display:flex}}@media (max-width: 767px){.x .c1-9d{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/f1a1d2feb050562b/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/efdad30be8b781e5/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-14{width:1160px}}@media (min-width: 1280px){.x .c1-2p{font-size:30px}}@media (min-width: 1280px){.x .c1-3s{font-size:22px}}@media (min-width: 1280px){.x .c1-3x{font-size:18px}}@media (min-width: 1280px){.x .c1-41 > div{max-width:1160px}}@media (min-width: 1280px){.x .c1-6m{font-size:44px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-15{width:1280px}}@media (min-width: 1536px){.x .c1-2q{font-size:36px}}@media (min-width: 1536px){.x .c1-3t{font-size:24px}}@media (min-width: 1536px){.x .c1-3y{font-size:20px}}@media (min-width: 1536px){.x .c1-6n{font-size:48px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(246, 246, 246); min-height: 100vh; }</style></head>
<body class="x  x-fonts-montserrat" context="[object Object]"><div id="layout-0-a-655-b-14-60-a-1-4-d-3-e-964-e-aff-617864-e-62" class="layout layout-layout layout-layout-layout-25 locale-en-US lang-en"><div data-ux="Page" id="page-1342" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="27f67d5a-a196-4571-a176-7fc20c0c579e" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-q c1-r c1-s c1-b c1-c c1-d c1-t c1-u c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-1k c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-1n c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-1s c1-1t c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1y c1-1z c1-z c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83" title="jaraxxturn" href="/" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1346.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1347" logoText="jaraxxturn" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-2h c1-2i c1-2j c1-1a c1-1c c1-z c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-1y c1-4 c1-1z c1-2l c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route">jaraxxturn</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-13431349-navBarId" class="x-el x-el-div c1-1 c1-2 c1-2r c1-17 c1-18 c1-2s c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-2t c1-2u c1-2v c1-2w c1-2x c1-2y c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-2z c1-1m c1-1n c1-30 c1-1o c1-1p c1-1q c1-1r c1-16 c1-1f c1-1e c1-1s c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1y c1-1z c1-z c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83" title="jaraxxturn" href="/" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1350.click,click"><div id="bs-2"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1351" logoText="jaraxxturn" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-2h c1-2i c1-2j c1-1a c1-1c c1-z c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-1y c1-4 c1-1z c1-2l c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route">jaraxxturn</span></h3></div></a></div></div></div></div></nav></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-p c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div id="guacBg1352" role="img" data-guac-image="loading" data-ux="Background" data-ht="Fill" data-aid="BACKGROUND_IMAGE_RENDERED" data-route="hasMedia:mediaData" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-31 c1-32 c1-33 c1-34 c1-35 c1-p c1-4 c1-36 c1-37 c1-38 c1-b c1-c c1-d c1-39 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-ht x-d-aid x-d-route"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/3122/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg1352'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-1f c1-3a c1-i c1-3b c1-4 c1-3c c1-3d c1-b c1-c c1-3e c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2i c1-2j c1-3f c1-3g c1-z c1-3h c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h1 typography="HeadingGamma" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-1c c1-1s c1-z c1-2r c1-1z c1-2k c1-2l c1-2m c1-2n c1-o c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route">Welcome to jaraxxturn</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-1353" class="x-el x-el-div c1-1 c1-2 c1-25 c1-26 c1-2h c1-n c1-b c1-c c1-d c1-1k c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingGamma" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-1c c1-3j c1-1s c1-z c1-1y c1-4 c1-c c1-1z c1-2d c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to jaraxxturn</h1><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-1353" class="x-el x-el-span c1-3k c1-3l c1-2r c1-3m c1-3n c1-3o c1-2l c1-1z c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-size x-d-scaler-id">Welcome to jaraxxturn</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-1353" class="x-el x-el-span c1-3k c1-3l c1-2r c1-3m c1-3n c1-3o c1-3p c1-1z c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-size x-d-scaler-id">Welcome to jaraxxturn</span><span data-ux="Element" data-size="mlarge" data-scaler-id="scaler-tagline-container-1353" class="x-el x-el-span c1-3k c1-3l c1-2r c1-3m c1-3n c1-3o c1-3u c1-1z c1-3v c1-3w c1-3x c1-3y x-d-ux x-d-size x-d-scaler-id">Welcome to jaraxxturn</span></div></div></div></div></div></div></section> </div></div></div></div><div id="738e5884-fd26-49ac-b161-46900942907c" class="widget widget-about widget-about-about-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-3z c1-40 c1-41 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-42 c1-3b c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-43 c1-v c1-2j c1-1a c1-44 c1-45 c1-1s c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-d c1-4a c1-4b c1-4c c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-1y c1-p c1-4d c1-4e c1-b c1-c c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-d c1-e c1-f c1-g x-d-ux">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2s c1-1a c1-1b c1-4z c1-1d c1-b c1-c c1-1g c1-1h c1-50 c1-1j c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-52 c1-1r c1-b c1-c c1-1u c1-1v c1-53 c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2s c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-54 c1-1e c1-b c1-c c1-55 c1-56 c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/0/image" class="x-el x-el-div c1-1 c1-2 c1-44 c1-1s c1-b c1-c c1-d c1-57 c1-58 c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/60501/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/60501/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/60501/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/60501/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/60501/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image1" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED0" class="x-el x-el-img c1-1 c1-2 c1-z c1-59 c1-v c1-w c1-1a c1-1c c1-5a c1-5b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-5c c1-1f c1-b c1-c c1-55 c1-56 c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-3a c1-4 c1-5d c1-1f c1-1s c1-3c c1-3d c1-b c1-c c1-5e c1-5f c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-1c c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-52 c1-1r c1-b c1-c c1-1u c1-1v c1-53 c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-6f c1-2s c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-54 c1-1e c1-b c1-c c1-55 c1-56 c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/1/image" class="x-el x-el-div c1-1 c1-2 c1-44 c1-1s c1-b c1-c c1-d c1-57 c1-58 c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/3127/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/3127/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/3127/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/3127/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/3127/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image2" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED1" class="x-el x-el-img c1-1 c1-2 c1-z c1-59 c1-v c1-w c1-1a c1-1c c1-5a c1-5b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-5c c1-1f c1-b c1-c c1-55 c1-56 c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-3a c1-4 c1-5d c1-1f c1-1s c1-3c c1-3d c1-b c1-c c1-5e c1-5f c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-1c c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-52 c1-1r c1-b c1-c c1-1u c1-1v c1-53 c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2s c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-54 c1-1e c1-b c1-c c1-55 c1-56 c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/2/image" class="x-el x-el-div c1-1 c1-2 c1-44 c1-1s c1-b c1-c c1-d c1-57 c1-58 c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/3124/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/3124/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/3124/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/3124/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/3124/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image3" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED2" class="x-el x-el-img c1-1 c1-2 c1-z c1-59 c1-v c1-w c1-1a c1-1c c1-5a c1-5b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-5c c1-1f c1-b c1-c c1-55 c1-56 c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-3a c1-4 c1-5d c1-1f c1-1s c1-3c c1-3d c1-b c1-c c1-5e c1-5f c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-1c c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you.</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="f1557a5b-8689-46fd-89fe-0430881406fa" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-3z c1-40 c1-41 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-42 c1-3b c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-2h c1-2i c1-2j c1-6g c1-6h c1-1s c1-1z c1-2k c1-6i c1-2m c1-6j c1-6k c1-6l c1-6m c1-6n x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="f1557a5b-8689-46fd-89fe-0430881406fa-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2s c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-6o c1-z c1-1o c1-1p c1-1q c1-1r c1-b c1-c c1-6p c1-6q c1-6r c1-1u c1-1v c1-1w c1-1x c1-d c1-6s c1-6t c1-6u c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-6v c1-1s c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-1c c1-16 c1-3a c1-1e c1-1f c1-1s c1-35 c1-b c1-c c1-d c1-6w c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-44 c1-4 c1-b c1-c c1-d c1-6x c1-6y c1-6z c1-58 c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input1354" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-70 c1-71 c1-4 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-b c1-7c c1-c c1-49 c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input1354" class="x-el x-el-label c1-1 c1-2 c1-25 c1-26 c1-3n c1-7n c1-7o c1-7p c1-7q c1-b c1-7c c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-6y c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-1 c1-2 c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-1y c1-1s c1-24 c1-28 c1-26 c1-25 c1-z c1-4 c1-7x c1-7y c1-7z c1-b c1-80 c1-6b c1-35 c1-3u c1-81 c1-7e c1-82 c1-83 c1-3v c1-3w c1-3x c1-3y x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></section> </div></div></div><div id="b3d66049-e7e8-4f75-a55e-be9990906c32" class="widget widget-contact widget-contact-contact-4"><div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-7 c1-8 c1-9 c1-a c1-84 c1-85 c1-3z c1-40 c1-41 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-2i c1-2j c1-3f c1-3g c1-z c1-16 c1-3a c1-p c1-3 c1-86 c1-b c1-c c1-d c1-2w c1-6w c1-87 c1-e c1-f c1-g x-d-ux"><div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-16 c1-1l c1-88 c1-z c1-p c1-b c1-c c1-89 c1-8a c1-8b c1-d c1-8c c1-8d c1-2u c1-8e c1-e c1-8f c1-8g c1-8h c1-8i c1-f c1-g x-d-ux"><section data-ux="SectionSplit" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-section c1-1 c1-2 c1-3 c1-42 c1-3b c1-4 c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="SectionSplitContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-3f c1-3g c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-6k c1-8j c1-58 c1-4b c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionSplitHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-43 c1-v c1-2j c1-1a c1-44 c1-45 c1-8k c1-46 c1-47 c1-b c1-c c1-48 c1-49 c1-d c1-8l c1-4b c1-4c c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-1y c1-p c1-4d c1-4e c1-b c1-c c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-d c1-e c1-f c1-g x-d-ux">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-44 c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route">Better yet, see us in person!</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-44 c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We love our customers, so feel free to visit during normal business hours.</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-44 c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route">jaraxxturn</h4></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-route="hoursTitle" data-aid="CONTACT_HOURS_TITLE_REND" data-field-route="/hours" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-44 c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-route x-d-aid x-d-field-route">Hours</h4><div data-ux="Block" data-aid="CONTACT_HOURS_REND" data-route="structuredHours" data-field-route="/hours" class="x-el x-el-div c1-1 c1-2 c1-44 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><div id="bs-4"><table style="border-spacing:0;text-align:left;display:inline-table"><tr data-aid="CONTACT_HOURS_COLLAPSED_REND" style="cursor:pointer"><td style="padding-right:medium"><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_LABEL" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Today</p></td><td><p typography="BodyAlpha" data-ux="ContentText" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-8o c1-8p c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux"><span rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_HOURS_COLLAPSED_HR_LABEL" class="x-el x-el-span c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CONTACT.contact4.Content.Default.Link.Default.1355.click,click">Closed</span></p></td><td><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_ARROW" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><span rel="" typography="LinkAlpha" data-ux="Link" class="x-el x-el-span c1-22 c1-23 c1-24 c1-25 c1-26 c1-16 c1-28 c1-7y c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux" data-tccl="ux2.CONTACT.contact4.Group.Default.Link.Default.1356.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-4d c1-1y c1-8q c1-8r c1-5a c1-p c1-8s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><path fill-rule="evenodd" d="M19.774 7.86c.294-.335.04-.839-.423-.84L4.538 7c-.447-.001-.698.48-.425.81l7.204 8.693a.56.56 0 0 0 .836.011l7.621-8.654z"></path></svg></span></p></td></tr></table></div></div><div typography="BodyAlpha" data-ux="ContentText" data-route="hoursCustomMessage" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-field-route="/hours" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-b c1-69 c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route x-rt"></div></div></div><div><div id="b3d66049-e7e8-4f75-a55e-be9990906c32-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-8t c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_MOBILE" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-1k c1-e c1-f c1-g x-d-ux x-d-aid"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c1-1 c1-2 c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-1y c1-1s c1-24 c1-28 c1-26 c1-25 c1-z c1-4 c1-7x c1-8u c1-7z c1-b c1-80 c1-6b c1-35 c1-3u c1-81 c1-7e c1-82 c1-83 c1-3v c1-3w c1-3x c1-3y x-d-ux x-d-aid x-d-route x-d-field-route" data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.1358.click,click">Drop us a line!</button></div><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP" class="x-el x-el-div c1-1 c1-2 c1-2r c1-8v c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux x-d-aid"><div><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP_REND" class="x-el x-el-div c1-1 c1-2 c1-3n c1-8w c1-3o c1-8x c1-q c1-i c1-j c1-8y c1-8z c1-90 c1-4 c1-3 c1-16 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3 c1-x c1-y c1-s c1-91 c1-p c1-16 c1-3a c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3i c1-2i c1-2j c1-1a c1-44 c1-1z c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" aria-live="polite" id="contact-form1359" formFieldVariationOptions="[object Object]" formTitle="Drop us a line!" formFields="[object Object],[object Object],[object Object],[object Object]" formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="jaraxxturn.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteId="0a655b14-60a1-4d3e-964e-aff617864e62" pageId="e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83" accountId="1000e874-3a0f-11ea-81b5-3417ebe72601" staticContent="[object Object]" emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address." infoTitle="Better yet, see us in person!" info="We love our customers, so feel free to visit during normal business hours." class="x-el x-el-form c1-1 c1-2 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value=""/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2s c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" data-aid="CONTACT_FORM_COL1" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-1p c1-1q c1-1r c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input1360" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-70 c1-71 c1-4 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-b c1-7c c1-c c1-49 c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input1360" class="x-el x-el-label c1-1 c1-2 c1-25 c1-26 c1-3n c1-7n c1-7o c1-7p c1-7q c1-b c1-7c c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input1361" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-70 c1-71 c1-4 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-b c1-7c c1-c c1-49 c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input1361" class="x-el x-el-label c1-1 c1-2 c1-25 c1-26 c1-3n c1-7n c1-7o c1-7p c1-7q c1-b c1-7c c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="6" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c1-1 c1-2 c1-70 c1-71 c1-4 c1-72 c1-73 c1-74 c1-75 c1-7r c1-7s c1-78 c1-79 c1-7a c1-7b c1-92 c1-b c1-7c c1-c c1-49 c1-7d c1-7e c1-7l c1-7m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></textarea></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTROLS" class="x-el x-el-div controls c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c1-1 c1-2 c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-1y c1-1s c1-24 c1-28 c1-26 c1-25 c1-z c1-4 c1-7x c1-7y c1-7z c1-b c1-80 c1-6b c1-35 c1-3u c1-81 c1-7e c1-82 c1-83 c1-3v c1-3w c1-3x c1-3y x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button><span typography="BodyAlpha" data-ux="Text" data-aid="CONTACT_CANCEL_BUTTON_REND" class="x-el x-el-span c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-93 c1-6e c1-2d c1-1s c1-27 c1-2j c1-94 c1-b c1-c c1-49 c1-95 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Cancel</span></div></div></div><div style="width:1px;height:1px;visibility:hidden"></div></form></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c1-1 c1-2 c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-1y c1-1s c1-24 c1-28 c1-26 c1-25 c1-z c1-4 c1-7x c1-8u c1-7z c1-b c1-80 c1-6b c1-35 c1-3u c1-81 c1-7e c1-82 c1-83 c1-3v c1-3w c1-3x c1-3y x-d-ux x-d-aid x-d-route x-d-field-route" data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.1362.click,click">Drop us a line!</button></div></div></div></div></div></div></div></div></div></section></div></div> </div></div></div><div id="142b2971-6076-46f3-998b-fa2bf000fdeb" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-96 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-96 c1-42 c1-3b c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-s c1-b c1-c c1-97 c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1s c1-98 c1-99 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9a c1-1o c1-3g c1-1q c1-3f c1-1a c1-2j c1-1c c1-2i c1-9b c1-b c1-c c1-9c c1-9d c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-6v c1-6b c1-b c1-9e c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">jaraxxturn</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-2s c1-1a c1-2j c1-1c c1-2i c1-1f c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-3g c1-1q c1-3f c1-b c1-c c1-d c1-9f c1-9g c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-1a c1-1c c1-b c1-9h c1-c c1-49 c1-d c1-8l c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 jaraxxturn - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-51 c1-z c1-1o c1-3g c1-1q c1-3f c1-b c1-c c1-d c1-9f c1-9g c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-5g c1-9i c1-1c c1-b c1-9h c1-c c1-49 c1-d c1-9j c1-6k c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-9i c1-b c1-9k c1-c c1-2e c1-9l c1-9m c1-d c1-9j c1-6k c1-e c1-f c1-g x-d-ux" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.1363.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/3e9d600212be85cb/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["montserrat","default",""],"colors":["#bc905b"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83":{"isFlyoutMenu":false,"active":true,"pageId":"e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme25"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"jaraxxturn"},"fontPackLogoId":null,"widgetId":"27f67d5a-a196-4571-a176-7fc20c0c579e","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"27f67d5a-a196-4571-a176-7fc20c0c579e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"jaraxxturn"},"fontPackLogoId":null,"widgetId":"27f67d5a-a196-4571-a176-7fc20c0c579e","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"27f67d5a-a196-4571-a176-7fc20c0c579e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"Welcome to jaraxxturn","scaledFontSizes":["xlarge","large","mlarge"],"style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"27f67d5a-a196-4571-a176-7fc20c0c579e","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"27f67d5a-a196-4571-a176-7fc20c0c579e","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-f1557a5b-8689-46fd-89fe-0430881406fa-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["montserrat","default",""],"colors":["#bc905b"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83":{"isFlyoutMenu":false,"active":true,"pageId":"e516b6dc-6ef3-4fe9-a97f-3ea8204e0f83","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme25"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/d237b4256ba5ffc0/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2f76d8ff4bd4eba1/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/4c9bf809fd3a4bf/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/c40062615e78890b/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/0a655b14-60a1-4d3e-964e-aff617864e62/gpub/f2e9bd4bcf32593e/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-1342').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"0a655b14-60a1-4d3e-964e-aff617864e62"}),_trfd.push({"pd":"2020-01-18T16:25:59.995Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
