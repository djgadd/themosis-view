<?php

namespace KeltieCochrane\View\Compilers;

use Illuminate\View\Compilers\BladeCompiler as BaseCompiler;

class BladeCompiler extends BaseCompiler
{
  /**
   * Determine if the view at the given path is expired, or if we're in production
   * determine if it exists, if it does, use it.
   *
   * @param  string  $path
   * @return bool
   */
  public function isExpired($path)
  {
    // If we are in production/staging all we want to know is if the file exists
    if (in_array(getenv('ENVIRONMENT'), ['production', 'staging'])) {
      $compiled = $this->getCompiledPath($path);
      return !$this->files->exists($compiled);
    }
    // Otherwise use the default behaviour
    else {
      return parent::isExpired($path);
    }
  }
}
