<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->orderBy('created_at', 'desc')
            ->paginate(50);

        return Inertia::render('Users/Index', [
            'users' => $users,
            'debug' => $users->toArray(),
        ]);
    }
}
