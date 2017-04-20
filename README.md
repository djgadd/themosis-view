# Themosis Views
A WordPress plugin for Themosis that extends BladeCompiler. It replaces the `BladeCompiler::isExpired()` method to check to see if we're in production. If we are then it will always return `false`, as our build pipeline compiles and minifies the HTML for us, and we don't want BladeCompiler overriding it. This works for us because our hosting platform is empherical and there won't ever be any changes made to views when in production.

## Install
Require the package in composer: -

`composer require keltiecochrane/themosis-criticalcss`

You'll also need to make sure it installs into the `mu-plugins` directory, to do that in a typical Themosis install you'd add the below to your `composer.json` file: -

```
  "extra": {
    "installer-paths": {
      "htdocs/content/mu-plugins/{$name}/": [
  			"themosis/framework",
        "keltiecochrane/themosis-view"
      ],
    }
  }
```

## Support
This plugin is provided as is, though we'll endeavour to help where we can.

## Contributing
Any contributions would be encouraged and much appreciated, you can contribute by: -

* Reporting bugs
* Suggesting features
* Sending pull requests
