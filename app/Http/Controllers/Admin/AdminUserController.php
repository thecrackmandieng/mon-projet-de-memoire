<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    /**
     * Affiche la liste des utilisateurs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Affiche le formulaire d'édition d'un utilisateur.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Met à jour le type d'utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->has('usertype')) {
            $user->usertype = $request->input('usertype');
            $user->save();
            return redirect()->route('admin.user.index')->with('message', 'Usertype modifié avec succès.');
        }

        return redirect()->route('admin.user.index')->with('error', 'Le type d\'utilisateur est invalide.');
    }

    /**
     * Supprime un utilisateur.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user.index')->with('message', 'Utilisateur supprimé avec succès.');
    }
}
