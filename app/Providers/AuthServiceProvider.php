<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
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
    // public function boot()
    // {
    //     $this->registerPolicies();

    //     //
    // }

    public function boot()
    {
        $this->registerPolicies();
        // MEMBUAT GATE DARI USER.php  hasAnyRoles(['admin', 'dosen', 'gkm']);
        Gate::define('Hanya_Untuk_Administrator', function(User $user){
          return $user->hasAnyRoles(['admin', 'dosen', 'gkm', ]);
        });
  
        // Coba roles home selain mereka bertiga
        Gate::define('Coba_Homeless', function(User $user){
          return $user->hasRole(['homeless']);
        });

        Gate::define('Hanya_Admin_Edit', function(User $user){
          return $user->hasRole('admin');
        }); 

        Gate::define('Hanya_Dosen_Edit', function(User $user){
          return $user->hasRole('dosen');
        });

        Gate::define('Hanya_Gkm_Edit', function(User $user){
          return $user->hasRole('gkm');
        });

        Gate::define('Hanya_Admin_Delete', function(User $user){
          return $user->hasRole('admin');
        });



    }

}
