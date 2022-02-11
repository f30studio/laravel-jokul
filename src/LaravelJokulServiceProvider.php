<?php
/*
//  ______ ____   ___   _____ _             _ _
// |  ____|___ \ / _ \ / ____| |           | (_)
// | |__    __) | | | | (___ | |_ _   _  __| |_  ___
// |  __|  |__ <| | | |\___ \| __| | | |/ _` | |/ _ \
// | |     ___) | |_| |____) | |_| |_| | (_| | | (_) |
// |_|    |____/ \___/|_____/ \__|\__,_|\__,_|_|\___/
//
//
// Written by Fathalfath30.
// Email : fathalfath30@gmail.com
// Follow me on:
//  Github : https://github.com/fathalfath30
//  Gitlab : https://gitlab.com/Fathalfath30
*/

namespace F30Studio\LaravelJokul;

use App\Http\Kernel;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * class LaravelJokulServiceProvider
 *
 * @package F30Studio\LaravelJokul
 *
 * @version 1.0.0
 * @since 1.0.0
 *
 * @see \Illuminate\Support\ServiceProvider
 */
class LaravelJokulServiceProvider extends ServiceProvider
{
  /**
   * @param \Illuminate\Routing\Router $router
   * @param \App\Http\Kernel $kernel
   *
   * @version 1.0.0
   * @since 1.0.0
   */
  public function boot(Router $router, Kernel $kernel)
  {
    // todo: boot
  }
}
