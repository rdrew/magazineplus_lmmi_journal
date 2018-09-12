<?php

function magazineplus_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#attached']['library'][] = 'magazineplus/theme-settings';

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
  );

  $form['mtt_settings']['basic_tab']['basic_settings'] = array(
    '#type' => 'details',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-angle-right. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('breadcrumb_separator', 'magazineplus'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop'] = array(
    '#type' => 'fieldset',
    '#title' => t('Scroll to top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll to top button'),
    '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scroll_to_top_display', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_icon'] = array(
    '#type' => 'textfield',
    '#title' => t('Scroll to top icon'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-long-arrow-up. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('scroll_to_top_icon','magazineplus'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_region'] = array(
    '#type' => 'select',
    '#title' => t('Region'),
    '#description'   => t('Select the region that you want the scroll-to-top button to be displayed in.'),
    '#default_value' => theme_get_setting('scroll_to_top_region', 'magazineplus'),
    '#options' => array(
    'footer-to-top-enabled' => t('Footer'),
    'footer-bottom-to-top-enabled' => t('Footer Bottom'),
    'subfooter-to-top-enabled' => t('Subfooter'),
    ),
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel'] = array(
    '#type' => 'details',
    '#title' => t('Look\'n\'Feel'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel']['color_scheme'] = array(
    '#type' => 'select',
    '#title' => t('Color Schemes'),
    '#description'   => t('From the drop-down menu, select the color scheme you prefer.'),
    '#default_value' => theme_get_setting('color_scheme', 'magazineplus'),
    '#options' => array(
    'blue' => t('Blue'),
    'khaki' => t('Khaki'),
    'gold' => t('Gold'),
    'gray' => t('Gray (Default)'),
    'green' => t('Green'),
    'lime' => t('Lime'),
    'night-blue' => t('Night Blue'),
    'orange' => t('Orange'),
    'pink' => t('Pink'),
    'purple' => t('Purple'),
    'red' => t('Red'),
    ),
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel']['page_container_border'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable full-page body border'),
    '#description'   => t('Adds a body border around your page, right inside the browser window.'),
    '#default_value' => theme_get_setting('page_container_border', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions'] = array(
    '#type' => 'details',
    '#title' => t('Region settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['regions_tab']['regions']['animations_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Animations'),
    '#description'   => t('Enable or disable animations globally. You can further adjust this for individual regions below.'),
    '#default_value' => theme_get_setting('animations_state', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['slideout'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slideout'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['slideout']['slideout_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('slideout_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['slideout']['slideout_side'] = array(
    '#type' => 'select',
    '#title' => t('Slideout Side'),
    '#description'   => t('From the drop-down menu, select which side of the website you would like the slideout to appear.'),
    '#default_value' => theme_get_setting('slideout_side', 'magazineplus'),
    '#options' => array(
    'left' => t('Left'),
    'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['slideout']['slideout_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Slideout Touch Swipe'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe event in mobile devices.'),
    '#default_value' => theme_get_setting('slideout_touch_swipe', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['slideout']['slideout_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('slideout_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['slideout']['slideout_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('slideout_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Pre Header'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_header']['pre_header_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('pre_header_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_header']['pre_header_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('pre_header_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_header']['pre_header_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('pre_header_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_header']['pre_header_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('pre_header_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top_highlighted'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header Top Highlighted'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_top_highlighted_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('header_top_highlighted_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('header_top_highlighted_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('header_top_highlighted_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('header_top_highlighted_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top']['header_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_top_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top']['header_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('header_top_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top']['header_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('header_top_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top']['header_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('header_top_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header_top']['header_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('header_top_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['header_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Container'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_layout_container', 'magazineplus'),
    '#options' => array(
    'container-fluid' => t('Full Width'),
    'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['header_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('header_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['header_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('header_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['header_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('header_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['fixed_header_settings'] = array(
   '#type' => 'item',
   '#markup' => t('<div class="theme-settings-title">Fixed Header</div>'),
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['fixed_header'] = array(
    '#type' => 'checkbox',
    '#title' => t('Fixed Header'),
    '#description'   => t('Use the checkbox to apply fixed position to the header.'),
    '#default_value' => theme_get_setting('fixed_header', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['display_fixed_site_name'] = array(
    '#type' => 'checkbox',
    '#title' => t('Site Name in fixed Header'),
    '#description'   => t('Use the checkbox to display the Site Name in the fixed Header.'),
    '#default_value' => theme_get_setting('display_fixed_site_name', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['header']['display_fixed_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Logo in fixed Header'),
    '#description'   => t('Use the checkbox to display the Logo in the fixed Header.'),
    '#default_value' => theme_get_setting('display_fixed_logo', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['banner'] = array(
    '#type' => 'fieldset',
    '#title' => t('Banner'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['banner']['banner_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('banner_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['banner']['banner_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('banner_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['banner']['banner_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('banner_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['banner']['banner_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('banner_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Highlighted Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('highlighted_top_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('highlighted_top_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('highlighted_top_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('highlighted_top_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('highlighted_top_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('highlighted_top_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted'] = array(
    '#type' => 'fieldset',
    '#title' => t('Highlighted'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('highlighted_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('highlighted_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('highlighted_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('highlighted_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('highlighted_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['highlighted']['highlighted_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('highlighted_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Content Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_top_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_top_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_top_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('content_top_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top']['content_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('content_top_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted'] = array(
    '#type' => 'fieldset',
    '#title' => t('Content Top Highlighted'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('content_top_highlighted_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('content_top_highlighted_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('content_top_highlighted_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content'] = array(
    '#type' => 'fieldset',
    '#title' => t('Pre Content'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content']['pre_content_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('pre_content_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content']['pre_content_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('pre_content_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content']['pre_content_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('pre_content_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content']['pre_content_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('pre_content_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content']['pre_content_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('pre_content_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['pre_content']['pre_content_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('pre_content_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content'] = array(
    '#type' => 'fieldset',
    '#title' => t('Main Content'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content']['main_content_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('main_content_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content']['main_content_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('main_content_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content']['main_content_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('main_content_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['main_content']['main_content_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('main_content_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_first'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sidebar First'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sidebar_first_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('sidebar_first_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('sidebar_first_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_second'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sidebar Second'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sidebar_second_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('sidebar_second_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('sidebar_second_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Content Bottom'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('content_bottom_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('content_bottom_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['content_bottom']['content_bottom_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('content_bottom_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Featured Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_top_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('featured_top_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_top_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_top_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('featured_top_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_top']['featured_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('featured_top_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured'] = array(
    '#type' => 'fieldset',
    '#title' => t('Featured'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('featured_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('featured_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured']['featured_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('featured_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Featured Bottom'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('featured_bottom_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('featured_bottom_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('featured_bottom_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sub Featured'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured']['sub_featured_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('sub_featured_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured']['sub_featured_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('sub_featured_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured']['sub_featured_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('sub_featured_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured']['sub_featured_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sub_featured_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured']['sub_featured_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('sub_featured_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['sub_featured']['sub_featured_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('sub_featured_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_top_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('footer_top_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_top_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('footer_top_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('footer_top_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_top']['footer_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('footer_top_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('footer_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('footer_animation_effect', 'magazineplus'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('footer_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer']['footer_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('footer_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Bottom'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_bottom_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('footer_bottom_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_bottom_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('footer_bottom_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('footer_bottom_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter'] = array(
    '#type' => 'fieldset',
    '#title' => t('Subfooter'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('subfooter_layout_container', 'magazineplus'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('subfooter_separator', 'magazineplus'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('subfooter_background_color', 'magazineplus'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('subfooter_blocks_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['regions_tab']['regions']['subfooter']['subfooter_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('subfooter_region_paddings', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post'] = array(
    '#type' => 'details',
    '#title' => t('Post features'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['post_tab']['post']['reading_time'] = array(
    '#type' => 'checkbox',
    '#title' => t('Time to read'),
    '#description'   => t('Enable "Time to read" indicator.'),
    '#default_value' => theme_get_setting('reading_time', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['font_resize'] = array(
    '#type' => 'checkbox',
    '#title' => t('Font resize'),
    '#description'   => t('Enable function that allows to increase or decrease the font-size.'),
    '#default_value' => theme_get_setting('font_resize', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['post_progress'] = array(
    '#type' => 'checkbox',
    '#title' => t('Read so far'),
    '#description'   => t('Enable reading progress indicator.'),
    '#default_value' => theme_get_setting('post_progress', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['affix_side'] = array(
    '#type' => 'checkbox',
    '#title' => t('Affixed side'),
    '#description'   => t('Apply affixed position to the node features sidebar.'),
    '#default_value' => theme_get_setting('affix_side', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['share_links_print'] = array(
    '#type' => 'fieldset',
    '#title' => t('Share links and Print'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['share_links_print']['share_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Share links'),
    '#description'   => t('Enable social media sharing functionality'),
    '#default_value' => theme_get_setting('share_links', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['share_links_print']['print_button'] = array(
    '#type' => 'checkbox',
    '#title' => t('Post print'),
    '#description'   => t('Enable "Print this page" function.'),
    '#default_value' => theme_get_setting('print_button', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['post_tab']['post']['share_links_print']['share_links_print_position'] = array(
    '#type' => 'select',
    '#title' => t('Positioning'),
    '#default_value' => theme_get_setting('share_links_print_position', 'magazineplus'),
    '#options' => array(
    'node-side' => t('Node Side'),
    'bottom' => t('Bottom'),
    ),
  );

  $form['mtt_settings']['layout_tab']['layout_modes'] = array(
    '#type' => 'details',
    '#title' => t('Theme Layout'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['layout_tab']['layout_modes']['layout_mode'] = array(
    '#type' => 'select',
    '#title' => t('Global Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer. This global setting overrides the individual region-specific layout settings.'),
    '#default_value' => theme_get_setting('layout_mode', 'magazineplus'),
    '#options' => array(
      'wide' => t('Wide'),
      'boxed' => t('Boxed'),
    ),
  );

  $form['mtt_settings']['font_tab']['font'] = array(
    '#type' => 'details',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['font_tab']['font']['font_title'] = array(
    '#type' => 'item',
    '#markup' => 'For every region pick the <strong>font-family</strong> that corresponds to your needs.',
  );

  $form['mtt_settings']['font_tab']['font']['sitename_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Site name'),
    '#default_value' => theme_get_setting('sitename_font_family', 'magazineplus'),
    '#options' => array(
      'sff-fyf' => t('@font-your-face'),
      'sff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'sff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'sff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'sff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'sff-16' => t('Cinzel, Georgia, Times, Serif'),
      'sff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'sff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'sff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'sff-13' => t('Georgia, Times, Serif'),
      'sff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'sff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'sff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'sff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'sff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'sff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'sff-01' => t('Merriweather, Georgia, Times, Serif'),
      'sff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'sff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'sff-15' => t('Philosopher, Georgia, Times, Serif'),
      'sff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'sff-14' => t('Playfair Display, Times, Serif'),
      'sff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'sff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'sff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'sff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'sff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'sff-30' => t('Times, Times New Roman, Serif'),
      'sff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'sff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'sff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'sff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['sitename_italic'] = array(
    '#type' => 'checkbox',
    '#title' => t('Apply italic font style to Site name'),
    '#default_value' => theme_get_setting('sitename_italic', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['font_tab']['font']['slogan_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Slogan'),
    '#default_value' => theme_get_setting('slogan_font_family', 'magazineplus'),
    '#options' => array(
      'slff-fyf' => t('@font-your-face'),
      'slff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'slff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'slff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'slff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'slff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'slff-16' => t('Cinzel, Georgia, Times, Serif'),
      'slff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'slff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'slff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'slff-13' => t('Georgia, Times, Serif'),
      'slff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'slff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'slff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'slff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'slff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'slff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'slff-01' => t('Merriweather, Georgia, Times, Serif'),
      'slff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'slff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'slff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'slff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'slff-15' => t('Philosopher, Georgia, Times, Serif'),
      'slff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'slff-14' => t('Playfair Display, Times, Serif'),
      'slff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'slff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'slff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'slff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'slff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'slff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'slff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'slff-30' => t('Times, Times New Roman, Serif'),
      'slff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'slff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'slff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'slff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'slff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['headings_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Headings'),
    '#default_value' => theme_get_setting('headings_font_family', 'magazineplus'),
    '#options' => array(
      'hff-fyf' => t('@font-your-face'),
      'hff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'hff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'hff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'hff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'hff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'hff-16' => t('Cinzel, Georgia, Times, Serif'),
      'hff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'hff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'hff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'hff-13' => t('Georgia, Times, Serif'),
      'hff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'hff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'hff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'hff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'hff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'hff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'hff-01' => t('Merriweather, Georgia, Times, Serif'),
      'hff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'hff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'hff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'hff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'hff-15' => t('Philosopher, Georgia, Times, Serif'),
      'hff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'hff-14' => t('Playfair Display, Times, Serif'),
      'hff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'hff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'hff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'hff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'hff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'hff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'hff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'hff-30' => t('Times, Times New Roman, Serif'),
      'hff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'hff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'hff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'hff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'hff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['headings_wide_spacing'] = array(
    '#type' => 'checkbox',
    '#title' => t('Apply wide letter spacing and uppercase to Headings'),
    '#default_value' => theme_get_setting('headings_wide_spacing', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['font_tab']['font']['paragraph_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Paragraph'),
    '#default_value' => theme_get_setting('paragraph_font_family', 'magazineplus'),
    '#options' => array(
      'pff-fyf' => t('@font-your-face'),
      'pff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'pff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'pff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'pff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'pff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'pff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'pff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'pff-13' => t('Georgia, Times, Serif'),
      'pff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'pff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'pff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'pff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'pff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'pff-01' => t('Merriweather, Georgia, Times, Serif'),
      'pff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'pff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'pff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'pff-15' => t('Philosopher, Georgia, Times, Serif'),
      'pff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'pff-14' => t('Playfair Display, Times, Serif'),
      'pff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'pff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'pff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'pff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'pff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'pff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'pff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'pff-30' => t('Times, Times New Roman, Serif'),
      'pff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'pff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'pff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'pff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'pff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
    ),
  );

  $form['mtt_settings']['font_tab']['font']['paragraph_responsive_typography'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable responsive typography for paragraphs'),
    '#default_value' => theme_get_setting('paragraph_responsive_typography', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow'] = array(
    '#type' => 'details',
    '#title' => t('Slideshow Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen'] = array(
    '#type' => 'fieldset',
    '#title' => t('Full Screen (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_effect', 'magazineplus'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_navigation_style', 'magazineplus'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'vertical_thumbs' => t('Vertical Thumbs'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_bullets_position', 'magazineplus'),
    '#options' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_touch_swipe', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['transparent_header_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Transparent Header'),
    '#description'   => t('Use the checkbox to display the header over the slideshow in a transparent style.'),
    '#default_value' => theme_get_setting('transparent_header_state', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['transparent_header_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Transparent Header Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the transparent header over the full screen slideshow.'),
    '#default_value' => theme_get_setting('transparent_header_opacity', 'magazineplus'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth'] = array(
    '#type' => 'fieldset',
    '#title' => t('Boxed Width/Full Width (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_effect', 'magazineplus'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_initial_height', 'magazineplus'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_navigation_style', 'magazineplus'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'vertical_thumbs' => t('Vertical Thumbs'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_bullets_position', 'magazineplus'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_touch_swipe', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal'] = array(
    '#type' => 'fieldset',
    '#title' => t('Internal Banner (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_effect', 'magazineplus'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_initial_height', 'magazineplus'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_navigation_style', 'magazineplus'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'vertical_thumbs' => t('Vertical Thumbs'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_bullets_position', 'magazineplus'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_touch_swipe', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['rs_global'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slider Revolution global settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['rs_global']['rs_slideshow_caption_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Caption Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the captions in all sliders implemented with Slider Revolution.'),
    '#default_value' => theme_get_setting('rs_slideshow_caption_opacity', 'magazineplus'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['in_page_slider'] = array(
    '#type' => 'fieldset',
    '#title' => t('In Page Images Slider (Flexslider)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['in_page_slider']['in_page_slider_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('in_page_slider_effect', 'magazineplus'),
    '#options' => array(
    'fade' => t('fade'),
    'slide' => t('slide'),
    ),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_posts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Posts (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_posts']['owl_posts_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_posts_autoplay', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_posts']['owl_posts_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_posts_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_square_posts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Square Posts (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_square_posts']['owl_square_posts_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_square_posts_autoplay', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_square_posts']['owl_square_posts_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_square_posts_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_posts_slider'] = array(
    '#type' => 'fieldset',
    '#title' => t('Posts Slider (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_posts_slider']['owl_posts_slider_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_posts_slider_autoplay', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_posts_slider']['owl_posts_slider_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_posts_slider_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_testimonials'] = array(
    '#type' => 'fieldset',
    '#title' => t('Testimonials (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_testimonials']['owl_testimonials_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_testimonials_autoplay', 'magazineplus'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['slideshows_tab']['slideshow']['carousel']['owl_testimonials']['owl_testimonials_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_testimonials_effect_time', 'magazineplus'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['mtt_settings']['google_maps_tab'] = array(
    '#type' => 'details',
    '#title' => t('Google Maps Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['google_maps_tab']['google_maps_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Maps API Key'),
    '#description'   => t('Google requires an API key to be included to all calls to Google Maps API. Please create an API key and populate the above field.'),
    '#default_value' => theme_get_setting('google_maps_key','magazineplus'),
    '#size'          => 50,
    '#maxlength'     => 50,
  );

}
