<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('customLivewireScripts', function () {
            $csrf = csrf_token();
            $updateUri = url('/livewire/update');
            $scriptUrl = asset('/livewire/livewire.js'); // Adjust the path if necessary

            return <<<EOT
            <script src="$scriptUrl" data-csrf="$csrf" data-update-uri="$updateUri" data-navigate-once="true"></script>
            EOT;
        });
    }
}
