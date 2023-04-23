<?php

namespace ChatGPT\Doc;

use Illuminate\Support\ServiceProvider;

class ChatGPTDoc extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/web.php');
    }
}