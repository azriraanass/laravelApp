<?php

    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Pagination\Paginator;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap services.
         */
        public function boot(): void
        {
            Model::preventLazyLoading();
            Paginator::useBootstrapFive();
        }
    }
