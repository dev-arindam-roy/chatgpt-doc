<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('chatgpt-doc', function() {
    return Redirect::to('https://platform.openai.com/docs/introduction/overview');
});
