<?php

namespace App\Providers;
use App\SubjectModel;
use App\ResultModel;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->share('subject', SubjectModel::all());
       view()->share('results', ResultModel::all());
       view()->share('user', User::all());
         
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
