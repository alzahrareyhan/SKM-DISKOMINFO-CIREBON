<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            Session::flash('danger', 'Anda tidak punya akses.');
            return route('index');
        }
        return null;
    }
}
