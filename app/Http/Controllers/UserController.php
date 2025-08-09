<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::with('role')->oldest()->get();
        return view('pages.users.index', compact('users'));
    }

    public function create() {
        return view('pages.users.create');
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Male,Female'
        ]);

        User::create($validate);
        return to_route('users.index');
    }

    public function edit(User $user) {
        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $validate = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Male,Female'
        ]);

        $user->update($validate);
        return to_route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return to_route('users.index');
    }
}
