<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
    public function __construct()

    
    {
        $contact=DB::table('contact')->first();


         View::share('contact',$contact);
    
}}
