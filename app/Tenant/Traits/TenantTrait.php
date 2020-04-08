<?php

namespace App\Tenant\Traits;

use App\Tenant\Observers\TenantObserver;
use App\Tenant\Scopes\TenantScope;

trait TenantTrait
{
    /**
     *  The "booting" method of the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::observe(TenantObserver::class);

        static::addGlobalScope(new TenantScope);
    }
}

/**
 * 30s - 1280 - 1090
 * 60s - 1900 - 1620
 * 90s - 2470 - 2100
 */