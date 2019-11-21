<?php

namespace App\Providers;

use App\Event;
use App\Gallery;
use App\Policies\EventPolicy;
use App\Policies\GalleryPolicy;
use App\Policies\PackagePolicy;
use App\Policies\PayPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Event::class => EventPolicy::class,
        Gallery::class => GalleryPolicy::class,
        Package::class => PackagePolicy::class,
        Pay::class => PayPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
