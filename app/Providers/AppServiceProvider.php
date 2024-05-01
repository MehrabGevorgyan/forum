<?php
 
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Http\Requests\UserRequest;
use Illuminate\Pagination\Paginator;
use App\Models\Theme;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

    //     $themes = Theme::select("*")->offset(0)->limit(10)->get();
    //     view()->share('themes', $themes);
    }
}

