<?php
/**
 * @file
 * template.php
 *
 * This file should only contain light helper functions and stubs pointing to
 * other files containing more complex functions.
 *
 * The stubs should point to files within the `theme` folder named after the
 * function itself minus the theme prefix. If the stub contains a group of
 * functions, then please organize them so they are related in some way and name
 * the file appropriately to at least hint at what it contains.
 *
 * All [pre]process functions, theme functions and template implementations also
 * live in the 'theme' folder. This is a highly automated and complex system
 * designed to only load the necessary files when a given theme hook is invoked.
 * @see _bootstrap_theme()
 * @see theme/registry.inc
 *
 * Due to a bug in Drush, these includes must live inside the 'theme' folder
 * instead of something like 'includes'. If a module or theme has an 'includes'
 * folder, Drush will think it is trying to bootstrap core when it is invoked
 * from inside the particular extension's directory.
 * @see https://drupal.org/node/2102287
 */

/**
 * Include common functions used through out theme.
 */
include_once dirname(__FILE__) . '/theme/common.inc';

/**
 * Implements hook_theme().
 *
 * Register theme hook implementations.
 *
 * The implementations declared by this hook have two purposes: either they
 * specify how a particular render array is to be rendered as HTML (this is
 * usually the case if the theme function is assigned to the render array's
 * #theme property), or they return the HTML that should be returned by an
 * invocation of theme().
 *
 * @see _bootstrap_theme()
 */
function bootstrap_theme(&$existing, $type, $theme, $path) {
  bootstrap_include($theme, 'theme/registry.inc');
  return _bootstrap_theme($existing, $type, $theme, $path);
}


if( $_SERVER['REQUEST_URI'] == '/content/contact-form'){
  $options['absolute'] = TRUE;

  $url = url($path, $options).'contact-us';

  header('Location: ' . $url, TRUE, $http_response_code);
}


if( $_SERVER['REQUEST_URI'] == '/content/discuss-team-bridge'){

  $options['absolute'] = TRUE;

  if( isset( $_COOKIE['current_path_discuss'] ) ){

    $current_path = ltrim ( $_COOKIE['current_path_discuss'], '/' );

    $url = url($path, $options).$current_path;
  }else{
    $url = url($path, $options);
  }

  header('Location: ' . $url, TRUE, $http_response_code);
}


/**
 * Declare various hook_*_alter() hooks.
 *
 * hook_*_alter() implementations must live (via include) inside this file so
 * they are properly detected when drupal_alter() is invoked.
 */
bootstrap_include('bootstrap', 'theme/alter.inc');
