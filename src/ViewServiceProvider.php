<?php

namespace KeltieCochrane\View;

use Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Themosis\View\ViewServiceProvider as ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
  /**
   * Register the Blade engine to the EngineResolver.
   *
   * @param string $engine
   * @param \Illuminate\View\Engines\EngineResolver $resolver
   */
  protected function registerBladeEngine($engine, EngineResolver $resolver)
  {
    $container = $this->app;

    $storage = $container['path.storage'].'views'.DS;
    $filesystem = $container['filesystem'];

    $bladeCompiler = new BladeCompiler($filesystem, $storage);
    $this->app->instance('blade', $bladeCompiler);

    $resolver->register($engine, function() use ($bladeCompiler) {
        return new CompilerEngine($bladeCompiler);
    });
  }
}
