<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserRoleMiddleware
{
    private array $roleMap = [
        'admin' => 1,
        'user' => 0,
    ];

    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            Log::error('User is not authenticated.');
            abort(403, 'Unauthorized access.');
        }

        $user = Auth::user();

        Log::info('User role check:', [
            'user_id' => $user->id,
            'user_role' => $user->user_role,
            'required_role' => $this->roleMap[$role] ?? null,
        ]);

        // Cast user role to integer for proper comparison
        if ((int) $user->user_role === ($this->roleMap[$role] ?? null)) {
            return $next($request);
        }

        Log::error('Unauthorized access attempt:', [
            'user_id' => $user->id,
            'user_role' => $user->user_role,
            'required_role' => $this->roleMap[$role] ?? null,
        ]);

        abort(403, 'Unauthorized access.');
    }


}
