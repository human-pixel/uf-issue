<?php
return array(
	'typography' => '{"h1":{"weight":"300","style":"normal","size":"40","line_height":"2.5","font_face":"Lato","font_family":"sans-serif","color":"#ufc2"},"h2":{"weight":"400","style":"normal","size":"28","line_height":"1.429","font_face":"Lato","font_family":"sans-serif","color":"#ufc3"},"h3":{"weight":"300","style":"normal","size":"22","line_height":"1.136","font_face":"Lato","font_family":"sans-serif","color":"#ufc9"},"h4":{"weight":"400","style":"normal","size":"18","line_height":"2.727","font_face":"Lato","font_family":"sans-serif","color":"#ufc5"},"h5":{"weight":"400","style":"normal","size":"18","line_height":"3.333","font_face":"Lato","font_family":"sans-serif","color":"#ufc3"},"h6":{"weight":"300","style":"normal","size":"14","line_height":"2.857","font_face":"Lato","font_family":"sans-serif","color":"#ufc3"},"p":{"weight":"300","style":"normal","size":"22","line_height":"1.364","font_face":"Lato","font_family":"sans-serif","color":"#ufc0"},"a":{"weight":"300","style":"normal","size":false,"line_height":false,"font_face":"Lato","font_family":"sans-serif","color":"#ufc1"},"a:hover":{"weight":"300","style":"normal","size":false,"line_height":false,"font_face":"Lato","font_family":"sans-serif","color":"#ufc7"},"ul":{"weight":"300","style":"normal","size":"18","line_height":"1.944","font_face":"Lato","font_family":"sans-serif","color":"#ufc3"},"ol":{"weight":"300","style":"normal","size":"18","line_height":"1.944","font_face":"Lato","font_family":"sans-serif","color":"#ufc3"},"blockquote":{"weight":"300","style":"normal","size":"22","line_height":"1.25","font_face":"Lato","font_family":"sans-serif","color":"#ufc2"},"blockquote.upfront-quote-alternative":{"weight":"300","style":"normal","size":"25","line_height":"2","font_face":"Lato","font_family":"sans-serif","color":"#ufc3"}}',
	'layout_style' => '/* -------------------------------------------------------
 Global
 ------------------------------------------------------ */
html {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
/* selection highlighting */
::-moz-selection {
    background: #ufc1;
    color: #ufc6;
}
::selection {
    background: #ufc1;
    color: #ufc6;
}

/* -------------------------------------------------------
 General Styles
 ------------------------------------------------------ */
 
/* links */
.upfront-object a,
.upfront-output-object a {
    -webkit-transition: color 0.4s;
    -moz-transition: color 0.4s;
    -o-transition: color 0.4s;
    transition: color 0.4s;
}

/* headings */
.upfront-object h1,
.upfront-output-object h1,
.upfront-object h2,
.upfront-output-object h2,
.upfront-object h3,
.upfront-output-object h3,
,.upfront-object h4,
.upfront-output-object h4,
,.upfront-object h5,
.upfront-output-object h5,
,.upfront-object h6,
.upfront-output-object h6 {
    margin: 0;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}

/* lists */
.upfront-object ul,
.upfront-output-object ul,
.upfront-object ol,
.upfront-output-object ol {
    list-style-type: none;
}
.upfront-object ol ol,
.upfront-output-object ol ol {
    margin-left: 25px;
}
.upfront-object ol ul,
.upfront-output-object ol ul {
    margin-left: 45px;
}
.upfront-object ul,
.upfront-output-object ul,
.upfront-object ul ol,
.upfront-output-object ul ol,
.upfront-object ul ol ul,
.upfront-output-object ul ol ul {
    margin-left: 20px;
}

.upfront-object ul li,
.upfront-output-object ul li {
    list-style: none;
}
.upfront-object ul li:before,
.upfront-output-object ul li:before {
    color: #ufc2;
    content:\\\'\\\\25A0\\\';
    display: block;
    font-size: inherit;
    left: -20px;
    max-width: 0px;
    max-height: 0px;
    position: relative;
}
.upfront-object ol,
.upfront-output-object ol {
    counter-reset: section;
}
.upfront-object ol li,
.upfront-output-object ol li {
    counter-increment: section;
}
.upfront-object ol li:before,
.upfront-output-object ol li:before {
    color: #ufc2;
    content: counter(section)".";
    margin-right: 10px;
}
.upfront-object ul ol > li:before,
.upfront-output-object ul ol > li:before {
    color: #ufc2;
    content: counter(section)".";
    margin-right: 10px;
}
.upfront-object ol ul > li:before,
.upfront-output-object ol ul > li:before {
    color: #ufc2;
    content:\\\'\\\\25A0\\\';
    margin-right: 0;
}
/* blockquote */
.upfront-object blockquote,
.upfront-output-object blockquote {
    display: block;
    overflow: hidden;
    position: relative;
}
.upfront-object blockquote:before,
.upfront-output-object blockquote:before {
    background: url("UPFRONT_THEME_BASE/ui/issue-sprite.png") no-repeat;
    background-position: -55px -377px;
    content: "";
    display: block;
    float: left;
    height: 48px;
    margin-right: 15px;
    width: 50px;
}
.upfront-object blockquote.upfront-quote-alternative:before,
.upfront-output-object blockquote.upfront-quote-alternative:before,
.upfront-object blockquote.upfront-quote-alternative:after,
.upfront-output-object blockquote.upfront-quote-alternative:after {
    background: none;
    color: #ufc3;
    display: inline-block;
    float: none;
    font-size: 25px;
    line-height: 2em;
    height: inherit;
    width: inherit;
}
.upfront-object blockquote.upfront-quote-alternative:before,
.upfront-output-object blockquote.upfront-quote-alternative:before {
    content: \\\'“\\\';
}
.upfront-object blockquote.upfront-quote-alternative:after,
.upfront-output-object blockquote.upfront-quote-alternative:after {
    content: \\\'”\\\';
    margin-left: 15px;
}
/* forms */
.upfront-object input::-moz-input-placeholder,
.upfront-output-object input::-moz-input-placeholder {
    color: #ufc4;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;
}
.upfront-object textarea::-moz-input-placeholder,
.upfront-output-object textarea::-moz-input-placeholder {
    color: #ufc4;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;
}
.upfront-object input::-ms-input-placeholder,
.upfront-output-object input::-ms-input-placeholder {
    color: #ufc4;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;
}
.upfront-object textarea::-ms-input-placeholder,
.upfront-output-object textarea::-ms-input-placeholder {
    color: #ufc4;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;
}
.upfront-object input::-webkit-input-placeholder,
.upfront-output-object input::-webkit-input-placeholder {
    color: #ufc4;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;

}
.upfront-object textarea::-webkit-input-placeholder,
.upfront-output-object textarea::-webkit-input-placeholder {
    color: #ufc4;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;
}
.upfront-object input[type="text"],
.upfront-object input[type="email"],
.upfront-object input[type="password"],
.upfront-object input[type="search"],
.upfront-object textarea,
.upfront-output-object input[type="text"],
.upfront-output-object input[type="email"],
.upfront-output-object input[type="password"],
.upfront-output-object input[type="search"],
.upfront-output-object textarea {
    background: #edf3f2;
    border: 1px solid transparent;
    color: #ufc2;
    display: inline-block;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-weight: 300;
    font-size: 14px;
    height: 45px;
    line-height: 3.214em;
    padding: 0 10px;
    -webkit-transition: border-color .4s;
    -moz-transition: border-color .4s;
    -o-transition: border-color .4s;
    transition: border-color .4s;
    width: 100%;
}
.upfront-object textarea,
.upfront-output-object textarea {
    line-height: 1.786em;
    height: 10em;
    padding: 5px 10px;
    resize: vertical;
}
.upfront-object input[type="text"]:focus,
.upfront-object input[type="email"]:focus,
.upfront-object input[type="password"]:focus,
.upfront-object input[type="search"]:focus,
.upfront-object textarea:focus,
.upfront-output-object input[type="text"]:focus,
.upfront-output-object input[type="email"]:focus,
.upfront-output-object input[type="password"]:focus,
.upfront-output-object input[type="search"]:focus,
.upfront-output-object textarea:focus {
    border-color: #ufc2;
}
.upfront-object input[type="submit"],
.upfront-output-object input[type="submit"],
.upfront-object button[type="submit"],
.upfront-output-object button[type="submit"] {
    background: #ufc1;
    color: #ufc6;
    display: inline-block;
    font-family: \\\'Titillium Web\\\', Arial, sans-serif;
    font-size: 14px;
    line-height: 3.214em;
    min-height: 45px;
    min-width: 30px;
    padding: 0 10px;
    -webkit-transition: all .4s;
    -moz-transition: all .4s;
    -o-transition: all .4s;
    transition: all .4s;
}
.upfront-object input[type="submit"]:hover,
.upfront-output-object input[type="submit"]:hover,
.upfront-object button[type="submit"]:hover,
.upfront-output-object button[type="submit"]:hover {
    background: #ufc7;
}

/* gallery lightbox */
div.mfp-bg.mfp-ready {
    background: #ufc0;
    opacity: 0.7;
}
.mfp-content .mfp-counter {
    color: #ufc6;
    font-family: \\\'Lato\\\', Arial, sans-serif;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.667em;
    white-space: nowrap;
}
div.mfp-title,
div.mfp-title p {
    color: #ufc6;
    font-family: \\\'Lato\\\', Arial, sans-serif;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.667em;
}
div.mfp-title p > span {
    color: #ufc6;
}
.mfp-arrow-right.mfp-arrow:before,
.mfp-arrow-right.mfp-arrow:after,
.mfp-arrow-left.mfp-arrow:before,
.mfp-arrow-left.mfp-arrow:after {
    display: none;
}
button.mfp-arrow.mfp-arrow-right,
button.mfp-arrow.mfp-arrow-left {
    background: url("UPFRONT_THEME_BASE/ui/issue-sprite.png") no-repeat;
    height: 49px;
    margin: 0;
    opacity: 0.5;
    -moz-transition: opacity .4s;
    -o-transition: opacity .4s;
    -webkit-transition: opacity .4s;
    transition: opacity .4s;
    width: 49px;
}
button.mfp-arrow.mfp-arrow-left {
    background-position: -376px -536px;
    margin-left: 2em;
}
button.mfp-arrow.mfp-arrow-right {
    background-position: -536px -536px;
    margin-right: 2em;
}
button.mfp-arrow.mfp-arrow-left:hover,
button.mfp-arrow.mfp-arrow-right:hover {
    opacity: 1;
}
div.mfp-image-holder .mfp-close {
    background: url("UPFRONT_THEME_BASE/ui/issue-sprite.png") no-repeat;
    background-position: -215px -536px;
    font-size: 0;
    height: 49px;
    opacity: .5;
    padding: 0;
    right: 0;
    -moz-transition: opacity .4s;
    -o-transition: opacity .4s;
    -webkit-transition: opacity .4s;
    transition: opacity .4s;
    width: 50px !important;
}
div.mfp-image-holder .mfp-close:hover {
    opacity: 1;
}
div.mfp-image-holder .mfp-img {
    padding-top: 60px;
}
div.mfp-image-holder .mfp-figure:after {
    top: 60px;
}
/* hide featured image (region) when empty */
.upfront-region-container-content-cover .upfront-region-container-bg.no-featured_image {
    display: none;
}

/* non-desktop styles */
@media only screen and (max-width: 1079px) {
    iframe,
    embed {
        display: block;
        max-width: 100%;
    }
}',
	'layout_properties' => '[{"name":"background_color","value":"rgba(243,243,243,1)"},{"name":"grid","value":{"column_widths":{"desktop":"45"},"column_paddings":{"desktop":"15"},"baselines":{"desktop":"5"},"type_paddings":{"desktop":"10"}}},{"name":"background_type","value":"color"},{"name":"use_padding","value":0},{"name":"contained_region_width","value":1080}]',
	'theme_colors' => '{"colors":[{"color":"#2e3332","prev":"#2e3332","highlight":"#2e3332","shade":"#2e3332","selected":"","luminance":""},{"color":"#de7854","prev":"#de7854","highlight":"#de7854","shade":"#de7854","selected":"","luminance":""},{"color":"#5aadaa","prev":"#5aadaa","highlight":"#5aadaa","shade":"#5aadaa","selected":"","luminance":""},{"color":"#373d3c","prev":"#373d3c","highlight":"#373d3c","shade":"#373d3c","selected":"","luminance":""},{"color":"#7c8a87","prev":"#7c8a87","highlight":"#7c8a87","shade":"#7c8a87","selected":"","luminance":""},{"color":"#a4b2b0","prev":"#a4b2b0","highlight":"#a4b2b0","shade":"#a4b2b0","selected":"","luminance":""},{"color":"#ffffff","prev":"#ffffff","highlight":"#ffffff","shade":"#ffffff","selected":"","luminance":""},{"color":"#b96446","prev":"#b96446","highlight":"#b96446","shade":"#b96446","selected":"","luminance":""},{"color":"#c5d6d3","prev":"#c5d6d3","highlight":"#c5d6d3","shade":"#c5d6d3","selected":"","luminance":""},{"color":"#58aca9","prev":"#58aca9","highlight":"#58aca9","shade":"#58aca9","selected":"","luminance":""}],"range":"0"}',
	'post_image_variants' => '[{"vid":"variant-1414082154417-1612","label":"Full Width","group":{"margin_left":"0","margin_right":"0","col":"24","row":"60","left":"0","float":"none","height":"300","width_cls":"c24","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1414082173807-1526","label":"Center","group":{"margin_left":"0","margin_right":"0","col":"16","row":"63","left":"4","float":"none","height":"300","width_cls":"c16","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"16","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}}]',
	'responsive_settings' => '{"breakpoints":[{"name":"Default Desktop","short_name":"Default","default":true,"id":"desktop","width":1080,"columns":24,"enabled":true,"fixed":true,"active":"true","styles":"","column_width":"45","column_padding":"15","baseline":"5","type_padding":"10"},{"name":"Tablet","short_name":"Tablet","id":"tablet","width":570,"columns":12,"enabled":true,"fixed":true,"default":false,"active":"false","styles":""},{"name":"Mobile","short_name":"Mobile","id":"mobile","width":315,"columns":7,"enabled":true,"fixed":true,"default":false,"active":"false","styles":""}]}',
	'theme_fonts' => '[{"id":"Pathway Gothic Oneregular","font":{"family":"Pathway Gothic One","category":"sans-serif","variants":["regular"]},"variant":"regular","displayVariant":"regular"},{"id":"Vast Shadowregular","font":{"family":"Vast Shadow","category":"display","variants":["regular"]},"variant":"regular","displayVariant":"regular"},{"id":"Titillium Web200","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"200","displayVariant":"200 normal"},{"id":"Titillium Web200italic","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"200italic","displayVariant":"200 italic"},{"id":"Titillium Web300","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"300","displayVariant":"300 normal"},{"id":"Titillium Web300italic","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"300italic","displayVariant":"300 italic"},{"id":"Titillium Webregular","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"regular","displayVariant":"regular"},{"id":"Titillium Webitalic","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"italic","displayVariant":"italic"},{"id":"Titillium Web700","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"700","displayVariant":"700 normal"},{"id":"Titillium Web700italic","font":{"family":"Titillium Web","category":"sans-serif","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"]},"variant":"700italic","displayVariant":"700 italic"},{"id":"Lato300","font":{"family":"Lato","category":"sans-serif","variants":["100","100italic","300","300italic","regular","italic","700","700italic","900","900italic"]},"variant":"300","displayVariant":"300 normal"},{"id":"Latoregular","font":{"family":"Lato","category":"sans-serif","variants":["100","100italic","300","300italic","regular","italic","700","700italic","900","900italic"]},"variant":"regular","displayVariant":"regular"},{"id":"Lato700","font":{"family":"Lato","category":"sans-serif","variants":["100","100italic","300","300italic","regular","italic","700","700italic","900","900italic"]},"variant":"700","displayVariant":"700 normal"}]',
	'button_presets' => '[{"id":"icon and text","bordertype":"none","borderwidth":"1","bordercolor":"rgba(0, 0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"18","fontface":"Lato","color":"#ufc6","hov_duration":"0.4","hov_transition":"ease","hov_bordercolor":"rgba(0, 0, 0, 0)","hov_bgcolor":"rgba(0, 0, 0, 0)","theme_style":"uf-button-icon-twitter","hov_color":"#ufc1"},{"id":"logo","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc1","fontsize":"16","fontface":"Lato","color":"#ufc3","hov_duration":"0.4","hov_transition":"ease","hov_bgcolor":"#ufc1","theme_style":"uf-button-logo-mobile"}]',
	'menus' => '[{"id":false,"slug":"issue-footer-menu","name":"Issue - Footer Menu","description":"","items":[{"ID":9,"post_author":"1","post_date":"2015-08-24 13:06:44","post_date_gmt":"2015-08-24 13:06:44","post_content":"","post_title":"\\u00a9 2015","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"9","to_ping":"","pinged":"","post_modified":"2015-08-26 13:03:49","post_modified_gmt":"2015-08-26 13:03:49","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=9","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":9,"menu_item_parent":"0","object_id":"9","object":"custom","type":"custom","type_label":"Custom Link","title":"\\u00a9 2015","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":4,"post_author":"1","post_date":"2015-08-24 12:29:01","post_date_gmt":"2015-08-24 12:29:01","post_content":"","post_title":"ABOUT","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"archive","to_ping":"","pinged":"","post_modified":"2015-08-26 13:03:49","post_modified_gmt":"2015-08-26 13:03:49","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=4","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":4,"menu_item_parent":"0","object_id":"19","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/about\\/","title":"ABOUT","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":5,"post_author":"1","post_date":"2015-08-24 12:29:15","post_date_gmt":"2015-08-24 12:29:15","post_content":"","post_title":"ADVERTISE","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"advertise","to_ping":"","pinged":"","post_modified":"2015-08-26 13:08:42","post_modified_gmt":"2015-08-26 13:08:42","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=5","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":5,"menu_item_parent":"0","object_id":"36","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/advertise\\/","title":"ADVERTISE","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":7,"post_author":"1","post_date":"2015-08-24 12:29:23","post_date_gmt":"2015-08-24 12:29:23","post_content":"","post_title":"TERMS OF USE","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"terms-of-use","to_ping":"","pinged":"","post_modified":"2015-08-26 13:11:44","post_modified_gmt":"2015-08-26 13:11:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=7","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":7,"menu_item_parent":"0","object_id":"38","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/terms-of-use\\/","title":"TERMS OF USE","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":6,"post_author":"1","post_date":"2015-08-24 12:29:18","post_date_gmt":"2015-08-24 12:29:18","post_content":"","post_title":"CONTACT","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"contact","to_ping":"","pinged":"","post_modified":"2015-08-26 13:03:49","post_modified_gmt":"2015-08-26 13:03:49","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=6","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":6,"menu_item_parent":"0","object_id":"21","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/contact\\/","title":"CONTACT","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"issue-menu","name":"Issue - Menu","description":"","items":[{"ID":12,"post_author":"1","post_date":"2015-08-24 15:24:02","post_date_gmt":"2015-08-24 15:24:02","post_content":"","post_title":"Front Page","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"front-page","to_ping":"","pinged":"","post_modified":"2015-08-26 07:53:59","post_modified_gmt":"2015-08-26 07:53:59","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=12","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":12,"menu_item_parent":"0","object_id":"12","object":"custom","type":"custom","type_label":"Custom Link","title":"Front Page","url":"%siteurl%","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":13,"post_author":"1","post_date":"2015-08-24 15:24:06","post_date_gmt":"2015-08-24 15:24:06","post_content":"","post_title":"Issues","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"issues","to_ping":"","pinged":"","post_modified":"2015-08-26 07:53:59","post_modified_gmt":"2015-08-26 07:53:59","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=13","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":13,"menu_item_parent":"0","object_id":"22","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/gallery\\/","title":"Issues","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":15,"post_author":"1","post_date":"2015-08-24 15:24:10","post_date_gmt":"2015-08-24 15:24:10","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"about","to_ping":"","pinged":"","post_modified":"2015-08-26 07:53:59","post_modified_gmt":"2015-08-26 07:53:59","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=15","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":15,"menu_item_parent":"0","object_id":"15","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"%siteurl%\\/about","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":14,"post_author":"1","post_date":"2015-08-24 15:24:08","post_date_gmt":"2015-08-24 15:24:08","post_content":"","post_title":"FAQ","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"faq","to_ping":"","pinged":"","post_modified":"2015-08-26 08:25:36","post_modified_gmt":"2015-08-26 08:25:36","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=14","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":14,"menu_item_parent":"0","object_id":"31","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/faq\\/","title":"FAQ","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":16,"post_author":"1","post_date":"2015-08-24 15:24:13","post_date_gmt":"2015-08-24 15:24:13","post_content":" ","post_title":"","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"contacts","to_ping":"","pinged":"","post_modified":"2015-08-26 07:53:59","post_modified_gmt":"2015-08-26 07:53:59","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/issue.upfront.local\\/?p=16","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":16,"menu_item_parent":"0","object_id":"21","object":"page","type":"post_type","type_label":"Page","url":"%siteurl%\\/contact\\/","title":"Contact","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":null,"name":null,"description":null,"items":false}]',
	'required_pages' => '{"subscribe":{"name":"Subscribe","slug":"subscribe","layout":"single-page-subscribe"},"about":{"name":"About","slug":"about","layout":"single-page-about"},"contact":{"name":"Contact","slug":"contact","layout":"single-page-contact"},"gallery":{"name":"Gallery","slug":"gallery","layout":"single-page-gallery"},"faq":{"name":"Faq","slug":"faq","layout":"single-page-faq"},"advertise":{"name":"Advertise","slug":"advertise","layout":"single-page-advertise"},"terms-of-use":{"name":"Terms Of Use","slug":"terms-of-use","layout":"single-page-terms-of-use"},"uf-elements":{"name":"Uf Elements","slug":"uf-elements","layout":"single-page-uf-elements"}}',
	'accordion_presets' => '[{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc3","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"rgb(240, 246, 245)","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"#ufc6","active-triangle-icon-color":"rgb(255, 255, 255)","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc3","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"rgb(240, 246, 245)","static-triangle-icon-color":"rgb(255, 255, 255)","id":"faq","name":"faq"},{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc1","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"rgba(0, 0, 0, 0)","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgba(0, 0, 0, 0)","active-triangle-icon-color":"rgba(0, 0, 0, 0)","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc3","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"rgba(0, 0, 0, 0)","static-triangle-icon-color":"rgba(0, 0, 0, 0)","id":"default-accordion","name":"default accordion"},{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc6","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"#ufc1","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgba(0, 0, 0, 0)","active-triangle-icon-color":"rgba(0, 0, 0, 0)","static-font-size":"18","static-font-family":"Arial","static-font-color":"#ufc6","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"#ufc3","static-triangle-icon-color":"rgba(0, 0, 0, 0)","id":"alt-accordion","name":"alt accordion"},{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc6","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"#ufc1","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgba(0, 0, 0, 0)","active-triangle-icon-color":"rgba(0, 0, 0, 0)","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc1","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"rgba(0, 0, 0, 0)","static-triangle-icon-color":"rgb(255, 255, 255)","id":"border-accordion","name":"border accordion"}]',
	'tab_presets' => '[{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc3","hover-font-size":"18","hover-font-family":"Lato","hover-font-color":"#ufc3","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc4","id":"default-tabs","name":"default tabs"},{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc6","hover-font-size":"18","hover-font-family":"Lato","hover-font-color":"#ufc6","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc6","id":"alt-tabs","name":"alt tabs"},{"active-font-size":"18","active-font-family":"Lato","active-font-color":"#ufc6","hover-font-size":"18","hover-font-family":"Lato","hover-font-color":"#ufc6","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc1","id":"border-tabs","name":"border tabs"},{"active-font-size":"18","active-font-family":"Arial","active-font-color":"#ufc1","hover-font-size":"18","hover-font-family":"Lato","hover-font-color":"#ufc6","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"18","static-font-family":"Lato","static-font-color":"#ufc2","id":"border-alt-tabs","name":"border alt tabs"}]',
);