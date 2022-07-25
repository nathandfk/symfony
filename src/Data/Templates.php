<?php
namespace App\Data;
class templates{
    public static function header(){
        $header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="x-apple-disable-message-reformatting" /><meta name="apple-mobile-web-app-capable" content="yes" /><meta name="apple-mobile-web-app-status-bar-style" content="black" /><meta name="format-detection" content="telephone=no" /><title></title><link href="https://www.fonts.com/font/monotype/monotype-franklin-gothic" rel="stylesheet" type="text/css" /><link href="https://www.fonts.com/font/my-creative-land/above-the-sky/condensed" rel="stylesheet" type="text/css" /><style type="text/css">
            /* Resets */
            .ReadMsgBody { width: 100%; background-color: #ebebeb;}
            .ExternalClass {width: 100%; background-color: #ebebeb;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
            a[x-apple-data-detectors]{
            color:inherit !important;
            text-decoration:none !important;
            font-size:inherit !important;
            font-family:inherit !important;
            font-weight:inherit !important;
            line-height:inherit !important;
            }
            body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
            body {margin:0; padding:0;}
            .yshortcuts a {border-bottom: none !important;}
            .rnb-del-min-width{ min-width: 0 !important; }
            /* Add new outlook css start */
            .templateContainer{
            max-width:590px !important;
            width:auto !important;
            }
            /* Add new outlook css end */
            /* Image width by default for 3 columns */
            img[class="rnb-col-3-img"] {
            max-width:170px;
            }
            /* Image width by default for 2 columns */
            img[class="rnb-col-2-img"] {
            max-width:264px;
            }
            /* Image width by default for 2 columns aside small size */
            img[class="rnb-col-2-img-side-xs"] {
            max-width:180px;
            }
            /* Image width by default for 2 columns aside big size */
            img[class="rnb-col-2-img-side-xl"] {
            max-width:350px;
            }
            /* Image width by default for 1 column */
            img[class="rnb-col-1-img"] {
            max-width:550px;
            }
            /* Image width by default for header */
            img[class="rnb-header-img"] {
            max-width:590px;
            }
            /* Ckeditor line-height spacing */
            .rnb-force-col p, ul, ol{margin:0px!important;}
            .rnb-del-min-width p, ul, ol{margin:0px!important;}
            /* tmpl-2 preview */
            .rnb-tmpl-width{ width:100%!important;}
            /* tmpl-11 preview */
            .rnb-social-width{padding-right:15px!important;}
            /* tmpl-11 preview */
            .rnb-social-align{float:right!important;}
            /* Ul Li outlook extra spacing fix */
            li{mso-margin-top-alt: 0; mso-margin-bottom-alt: 0;}
            /* Outlook fix */
            table {mso-table-lspace:0pt; mso-table-rspace:0pt;}
            /* Outlook fix */
            table, tr, td {border-collapse: collapse;}
            /* Outlook fix */
            p,a,li,blockquote {mso-line-height-rule:exactly;}
            /* Outlook fix */
            .msib-right-img { mso-padding-alt: 0 !important;}
            @media only screen and (min-width:590px){
            /* mac fix width */
            .templateContainer{width:590px !important;}
            }
            @media screen and (max-width: 360px){
            /* yahoo app fix width "tmpl-2 tmpl-10 tmpl-13" in android devices */
            .rnb-yahoo-width{ width:360px !important;}
            }
            @media screen and (max-width: 380px){
            /* fix width and font size "tmpl-4 tmpl-6" in mobile preview */
            .element-img-text{ font-size:24px !important;}
            .element-img-text2{ width:230px !important;}
            .content-img-text-tmpl-6{ font-size:24px !important;}
            .content-img-text2-tmpl-6{ width:220px !important;}
            }
            @media screen and (max-width: 480px) {
            td[class="rnb-container-padding"] {
            padding-left: 10px !important;
            padding-right: 10px !important;
            }
            /* force container nav to (horizontal) blocks */
            td.rnb-force-nav {
            display: inherit;
            }
            /* fix text alignment "tmpl-11" in mobile preview */
            .rnb-social-text-left {
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
            }
            .rnb-social-text-right {
            width: 100%;
            text-align: center;
            }
            }
            @media only screen and (max-width: 600px) {
            /* center the address &amp; social icons */
            .rnb-text-center {text-align:center !important;}
            /* force container columns to (horizontal) blocks */
            th.rnb-force-col {
            display: block;
            padding-right: 0 !important;
            padding-left: 0 !important;
            width:100%;
            }
            table.rnb-container {
            width: 100% !important;
            }
            table.rnb-btn-col-content {
            width: 100% !important;
            }
            table.rnb-col-3 {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            /* change left/right padding and margins to top/bottom ones */
            margin-bottom: 10px;
            padding-bottom: 10px;
            /*border-bottom: 1px solid #eee;*/
            }
            table.rnb-last-col-3 {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            }
            table.rnb-col-2 {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            /* change left/right padding and margins to top/bottom ones */
            margin-bottom: 10px;
            padding-bottom: 10px;
            /*border-bottom: 1px solid #eee;*/
            }
            table.rnb-col-2-noborder-onright {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            /* change left/right padding and margins to top/bottom ones */
            margin-bottom: 10px;
            padding-bottom: 10px;
            }
            table.rnb-col-2-noborder-onleft {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            /* change left/right padding and margins to top/bottom ones */
            margin-top: 10px;
            padding-top: 10px;
            }
            table.rnb-last-col-2 {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            }
            table.rnb-col-1 {
            /* unset table align="left/right" */
            float: none !important;
            width: 100% !important;
            }
            img.rnb-col-3-img {
            /**max-width:none !important;**/
            width:100% !important;
            }
            img.rnb-col-2-img {
            /**max-width:none !important;**/
            width:100% !important;
            }
            img.rnb-col-2-img-side-xs {
            /**max-width:none !important;**/
            width:100% !important;
            }
            img.rnb-col-2-img-side-xl {
            /**max-width:none !important;**/
            width:100% !important;
            }
            img.rnb-col-1-img {
            /**max-width:none !important;**/
            width:100% !important;
            }
            img.rnb-header-img {
            /**max-width:none !important;**/
            width:100% !important;
            margin:0 auto;
            }
            img.rnb-logo-img {
            /**max-width:none !important;**/
            width:100% !important;
            }
            td.rnb-mbl-float-none {
            float:inherit !important;
            }
            .img-block-center{text-align:center !important;}
            .logo-img-center
            {
            float:inherit !important;
            }
            /* tmpl-11 preview */
            .rnb-social-align{margin:0 auto !important; float:inherit !important;}
            /* tmpl-11 preview */
            .rnb-social-center{display:inline-block;}
            /* tmpl-11 preview */
            .social-text-spacing{margin-bottom:0px !important; padding-bottom:0px !important;}
            /* tmpl-11 preview */
            .social-text-spacing2{padding-top:15px !important;}
            /* UL bullet fixed in outlook */
            ul {mso-special-format:bullet;}
            }@media screen{body{font-family:"Franklin Gothic","Impact",Charcoal,sans-serif;}}@media screen{body{font-family:"Above the sky","Trebuchet MS",Helvetica,sans-serif;}}</style><!--[if gte mso 11]><style type="text/css">table{border-spacing: 0; }table td {border-collapse: separate;}</style><![endif]--><!--[if !mso]><!--><style type="text/css">table{border-spacing: 0;} table td {border-collapse: collapse;}</style> <!--<![endif]--><!--[if gte mso 15]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]--><!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]--></head><body>';
            return $header;
    }

    public static function template($prenom, $nom, $emailUser, $emailAdmin, $title, $subtitle, $message){
        self::header().
            $message.'
            <div>&nbsp;</div>
            
            <div>Toutefois vous pourrez toujours regarder nos contenus sur le site <a href="https://allcaresante.com" style="text-decoration: solid; color: rgb(128, 116, 116);">allcaresante.com</a> et nous laisser votre avis sur notre fiche entreprise présente sur les moteurs de recherche.</div>
            
            <div>&nbsp;</div>
            
            <div>A très bientôt,</div>
            
            <div>L\'équipe AtypikHouse.</div>';

            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=utf-8';

            $headers[] = 'From: AtypikHouse <'.$emailAdmin.'>';
            mail($emailUser, $subtitle, $message, implode("\r\n", $headers));
        }

    }
    