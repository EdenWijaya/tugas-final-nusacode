<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Daftar event dan listener untuk aplikasi.
     *
     * @var array
     */
    protected $listen = [
        // Daftarkan event dan listener Anda di sini
    ];

    /**
     * Daftarkan event untuk aplikasi.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();

        //
    }
}
