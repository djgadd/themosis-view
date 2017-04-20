<?php

/**
 * Plugin Name: Themosis View
 * Plugin URI: https://keltiecochrane.com
 * Description: A plugin that overrides some default behaviour for blade
 * Version: 0.1.0
 * Author: Daniel Gadd @ Keltie Cochrane Ltd.
 * Author URI: https://keltiecochrane.com
 * Text Domain: themosis-view.
 * Domain Path: /languages
 */

add_filter('themosis_service_providers', function ($providers) {
  // Remove themosis ViewServiceProvider
  $providers = array_diff($providers, [Themosis\View\ViewServiceProvider::class]);

  // Add our own in
  $providers[] = KeltieCochrane\View\ViewServiceProvider::class;

  return $providers;
});
