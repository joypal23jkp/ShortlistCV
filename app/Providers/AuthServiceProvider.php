<?php

namespace App\Providers;

use App\Extensions\SocialiteUserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\UserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Auth::provider('mongo', function ($app, array $config){
//            return new MongoUserProvider($app->make('mongo.connection'));
//        });

        Auth::extend('socialite', function($app, $name, array $config) {
            return new AuthService(new SocialiteUserProvider($config['provider']));
        });

    }
}
