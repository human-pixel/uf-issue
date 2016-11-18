<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$breadcrumbs = upfront_create_region(
			array (
  'name' => 'breadcrumbs',
  'title' => 'Breadcrumbs',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'breadcrumbs',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 6,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_type' => 'color',
  'background_color' => '#ufc6',
  'bg_padding_type' => 'varied',
  'top_bg_padding_num' => '4',
  'bottom_bg_padding_num' => '15',
  'bg_padding_num' => 0,
)
			);

$breadcrumbs->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1479425403488-1499',
  'options' => 
  array (
    'content' => '<h6 style="text-align: right;"><a target="_self" data-upfront-link-type="homepage" href="{{upfront:home_url}}"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Home</span></a> <span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">/</span> <a target="_self" data-upfront-link-type="entry" href="{{upfront:home_url}}/store/"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Store</span></a> <span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">/</span> Products</h6>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1479425403487-1399',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'default',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '15',
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'anchor' => '',
    'current_preset' => 'default',
    'row' => 6,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'wrapper_id' => 'wrapper-1479425489171-1776',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$regions->add($breadcrumbs);

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => '#ufc6',
  'version' => '1.0.0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
       'bottom_bg_padding_num' => '40',
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'current_property' => 'bottom_bg_padding_num',
  )),
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => '125',
  'bg_padding_num' => 0,
)
			);

$main->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1479425779488-1719',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1479425779487-1565',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1479425779487-1178',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
));

$main->add_element("PlainTxt", array (
  'columns' => '16',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1479425489345-1516',
  'options' => 
  array (
    'content' => '<h2><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1"><span class="upfront_theme_bg_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_bg_color_6">&nbsp;Products&nbsp;</span></span></h2>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1479425489344-1447',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'box-title',
    'padding_slider' => '15',
    'top_padding_num' => '13',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '30',
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'anchor' => '',
    'current_preset' => 'box-title',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'box-title',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '13',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '30',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 10,
  'wrapper_id' => 'wrapper-1479425685851-1639',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1479425784269-1338',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1479425784269-1567',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1479425784268-1769',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1479425787615-1011',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1479425787614-1673',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1479425787614-1238',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
));

$main->add_element("PostData", array (
  'columns' => '16',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467787537272-1394',
  'id' => 'module-1467787537272-1394',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'mp-products',
    'row' => 40,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'element_id' => 'post-data-object-1467787537271-1215',
    'top_padding_num' => '0',
    'bottom_padding_num' => 15,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'left_padding_num' => '5',
    'right_padding_num' => 15,
    'lock_padding' => '',
    'anchor' => '',
    'current_preset' => 'mp-products',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'mp-products',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'mp-products-for-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'mp-products-for-mobile',
      )),
    )),
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Lato',
    'static-date_posted-weight' => '300',
    'static-date_posted-fontstyle' => '300 normal',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '14',
    'static-date_posted-line-height' => '1.45',
    'static-date_posted-font-color' => 'rgb(37, 37, 37)',
    'static-title-use-typography' => 'yes',
    'static-title-font-family' => 'Lato',
    'static-title-weight' => '400',
    'static-title-fontstyle' => 'regular',
    'static-title-style' => 'normal',
    'static-title-font-size' => '45',
    'static-title-line-height' => '1.35',
    'static-title-font-color' => 'rgb(45, 45, 45)',
    'preset_style' => '#page .default.upost-data-object-post_data  .title h1 {
    margin-top: 0;
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data  .content h1, #page .default.upost-data-object-post_data  .content h2, #page .default.upost-data-object-post_data  .content h3, #page .default.upost-data-object-post_data  .content h4, #page .default.upost-data-object-post_data  .content h5, #page .default.upost-data-object-post_data  .content h6, #page .default.upost-data-object-post_data  .content p, #page .default.upost-data-object-post_data  .content ul, #page .default.upost-data-object-post_data  .content ol, #page .default.upost-data-object-post_data  .content blockquote {
    margin-bottom: 30px;
}
#page .default.upost-data-object-post_data  .content a {
    border-bottom: 1px solid /*#ufc7*/#b96446;
    transition: 0.2s ease-in-out;
    -ms-transition: 0.2s ease-in-out;
    -moz-transition: 0.2s ease-in-out;
    -webkit-transition: 0.2s ease-in-out;
}
#page .default.upost-data-object-post_data  .content a:hover, #page .default.upost-data-object-post_data  {
    border-bottom-color: #d43f0a;
}
#page .default.upost-data-object-post_data  .content a:visited {
    color: #993917;
    border-bottom-color: #993917;
}
#page .default.upost-data-object-post_data  .content ol, #page .default.upost-data-object-post_data  .content ul:not(.upfront-field-select-options) {
    list-style: none;
}
#page .default.upost-data-object-post_data  .content ol {
    counter-reset: uf-counter;
}
#page .default.upost-data-object-post_data  .content ol li, #page .default.upost-data-object-post_data  .content ul:not(.upfront-field-select-options) li {
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data  .content ol li:before {
    margin-right: 10px;
    color: #86b7bb;
    content: counter(uf-counter) ".";
    counter-increment: uf-counter;
}
#page .default.upost-data-object-post_data  .content ul:not(.upfront-field-select-options) li:before {
    content: "";
    width: 8px;
    height: 8px;
    display: inline-block;
    margin-top: -4px;
    margin-right: 15px;
    vertical-align: middle;
    background: /*#ufc2*/#5aadaa;
}
#page .default.upost-data-object-post_data  .content p {
    text-align: justify;
}
#page .default.upost-data-object-post_data  .content blockquote {
    position: relative;
    padding-left: 73px;
}
#page .default.upost-data-object-post_data  .content blockquote * {
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data  .content blockquote:before {
    content: "";
    width: 48px;
    height: 48px;
    display: block;
    position: absolute;
    top: 10px;
    left: 0;
    background: url("//issue.upfront.mp/wp-content/themes/uf-issue/ui/sprite.png") no-repeat transparent;
    background-image: url("//issue.upfront.mp/wp-content/themes/uf-issue/ui/sprite.svg"), none;
    background-position: -56px -376px;
}
#page .default.upost-data-object-post_data  .content blockquote:not(.upfront-quote-alternative) {
    min-height: 55px;
}
#page .default.upost-data-object-post_data  .content blockquote.upfront-quote-alternative {
    text-transform: uppercase;
}
#page .default.upost-data-object-post_data  .content blockquote.upfront-quote-alternative {
    padding-left: 0;
}
#page .default.upost-data-object-post_data  .content blockquote.upfront-quote-alternative:before {
    display: none;
}
#page .default.upost-data-object-post_data  .content .ueditor-insert.upfront-inserted_image-wrapper, #page .default.upost-data-object-post_data  .content .ueditor-insert.upfront-inserted_image-wrapper:hover {
    margin-bottom: 30px;
    margin-left: 0 !important;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-image-style-full-width, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-image-style-center {
    max-width: 100%;
    display: block;
    margin-right: auto !important;
    margin-left: auto !important;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-right {
    margin-right: 0 !important;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-left {
    margin-left: 0 !important;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-right .uinsert-image-wrapper, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-left .uinsert-image-wrapper {
    min-height: auto !important;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .uinsert-image-wrapper {
    padding: 0;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .uinsert-image-wrapper a {
    display: block;
    position: relative;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .uinsert-image-wrapper a:before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    opacity: 0;
    background: /*#ufc1*/#de7854;
    transition: 0.2s ease-in;
    -moz-transition: 0.2s ease-in;
    -webkit-transition: 0.2s ease-in;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .uinsert-image-wrapper a:hover:before {
    opacity: 0.7;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .uinsert-image-wrapper img {
    display: block;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .wp-caption-text {
    padding-right: 0;
    padding-bottom: 0;
    padding-left: 0;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .wp-caption-text, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .wp-caption-text p {
    margin-bottom: 0;
    color: #838e8d;
    font-size: 16px;
    line-height: 35px;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-right .wp-caption-text, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-right .wp-caption-text p, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-left .wp-caption-text, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-left .wp-caption-text p {
    line-height: 28px;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-left, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-right {
    width: auto;
    max-width: 500px !important;
    height: auto;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-image-style-center img, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-left img, #page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-insert-variant-group.ueditor-insert-float-right img {
    width: auto;
    max-width: 100%;
    height: auto;
    margin: 0 auto;
}
#page .default.upost-data-object-post_data  .content .upfront-inserted_image-wrapper .ueditor-image-style-center .uinsert-image-wrapper {
    min-height: 1px !important;
}
',
    'predefined_date_format' => 'M d Y',
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'theme_preset' => 'true',
    'hidden_parts' => 
    array (
      0 => 'title',
      1 => 'date_posted',
    ),
    'left_indent' => '0',
    'left_padding_use' => 'yes',
    'left_padding_slider' => '5',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '0',
         'top_padding_num' => '0',
         'right_padding_use' => 'yes',
         'right_padding_slider' => '0',
         'right_padding_num' => '0',
         'left_padding_use' => 'yes',
         'left_padding_slider' => '0',
         'left_padding_num' => '0',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
    'theme_style' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467787553104-1347',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '16',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1467787537270-1603',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537271-1078',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'clear' => true,
          'order' => 1,
        ),
        'mobile' => 
        array (
          'col' => 7,
          'clear' => true,
          'order' => 1,
        ),
        'current_property' => 
        array (
          0 => 'order',
        ),
      ),
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'current_preset' => 'default',
      'preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
        'mobile' => 
        array (
          'col' => 7,
          'use_padding' => 'yes',
        ),
      ),
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1479425789988-1510',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1479425789987-1491',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1479425789987-1189',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
));

$regions->add($main);

$region_container = 'main';
$region_sub = 'right';
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'sidebar-left.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'sidebar-left.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
