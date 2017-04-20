# Themosis Views
A WordPress plugin for Themosis that extends BladeCompiler. It replaces the `BladeCompiler::isExpired()` method to check to see if we're in production. If we are then it will return `false` if a pre-compiled view exists (irrespective of the compiled/raw view timestamp), as our build pipeline compiles and minifies the HTML for us, and we don't want BladeCompiler overriding it. This works for us because our hosting platform is empherical and there won't ever be any changes made to views when in production, YMMV.

## Install
Require the package in composer: -

`composer require keltiecochrane/themosis-criticalcss`

You'll need to make sure the plugin is loaded in before Themosis, to give it chance to setup it's hook to replace the default `ViewServiceProvider`. You can copy the `themosis-view.php` file into your `mu-plugins` directory, but you'll need to make sure it's alphabetically before the file that loads Themosis, otherwise the hook won't run.

## Support
This plugin is provided as is, though we'll endeavour to help where we can.

## Contributing
Any contributions would be encouraged and much appreciated, you can contribute by: -

* Reporting bugs
* Suggesting features
* Sending pull requests
