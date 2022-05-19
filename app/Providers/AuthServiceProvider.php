<?php

namespace App\Providers;

use App\Models\Question;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        //admin role gate
        Gate::define("isAdmin", function($user){
            return $user->role == 'admin';
        });

        //user role gate
        Gate::define("isUser", function($user){
            return $user->role == 'user';
        });

        //check if user is question owner,
        Gate::define('edit-question',function($user, Question $question){
            return $user->id === $question->user_id;
        });
    }
}