<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Auth;

/**
 * ブレードのディレクティブ拡張のサービスプロバイダ
 *
 * Class BladeServiceProvider
 * @package App\Providers
 */
class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('admin', function () {
            return "<?php if (Auth::user()->type === 'admin'): ?>";
        });

        Blade::directive('endadmin', function () {
            return "<?php endif; ?>";
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
