<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }


    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('message', 'user supprimé');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'birth_date' => ['required'],
            'password' => ['required','confirmed',Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ],
        ]);

        User::whereId($id)->update($validated);
        return('Information enregistrée');

    }

    public function create(User $user)
    {
        return view('users.create', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'birth_date' => ['required'],
            'password' => ['required','confirmed',Password::min(8)
                ->numbers()
                ->symbols()
                ],
        ]);

        User::create($validated);

        return('Informations enregistrées');
    }
}
