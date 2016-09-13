<?php
namespace App\Storage\Eloquent;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Storage\UserRepositoryInterface', function() {
            return new \App\Storage\Eloquent\UserRepository(new \App\Models\User);
        });
    }
}
?>