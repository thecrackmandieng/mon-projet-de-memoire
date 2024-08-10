<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SujetSelection;
use Illuminate\Http\Request;
use App\Models\Sujet;
use App\Models\Proposition;


class AdminSujetController extends Controller
{
    // Méthodes pour la gestion des sujets
    public function index()
    {
        $sujets = Sujet::all();
        $propositions = Proposition::all();
        return view('sujet.index', compact('sujets','propositions'));
    }



    public function ajouter()
    {
        return view('sujet.ajouter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
        ]);

        $sujet = new Sujet();
        $sujet->theme = $request->theme;
        $sujet->save();

        return redirect()->route('sujet.index')->with('msg', 'Sujet bien ajouté');
    }

    public function editer($id)
    {
        $sujet = Sujet::findOrFail($id);
        return view('sujet.editer', compact('sujet'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
        ]);

        $sujet = Sujet::findOrFail($id);
        $sujet->theme = $request->theme;
        $sujet->save();

        return redirect()->route('sujet.index')->with('msg', 'Sujet bien mis à jour');
    }

    public function destroy($id)
    {
        $sujet = Sujet::findOrFail($id);
        $sujet->delete();

        return redirect()->route('sujet.index')->with('msg', 'Sujet bien supprimé');
    }

    // Méthodes pour la gestion des sélections de sujets
    public function indexSelections()
    {
        $selections = SujetSelection::with(['user', 'sujet'])->get();
        return view('admin.sujet_selections', compact('selections'));
    }

    public function confirm($id)
    {
        $selection = SujetSelection::findOrFail($id);
        $selection->status = 'confirmed';
        $selection->save();

        return redirect()->route('admin.sujet_selections')->with('success', 'Sujet confirmé avec succès');
    }

    public function reject($id)
    {
        $selection = SujetSelection::findOrFail($id);
        $selection->status = 'rejected';
        $selection->save();

        return redirect()->route('admin.sujet_selections')->with('success', 'Sujet rejeté avec succès');
    }


    public function renvoyer($id)
    {
        // Récupérer la sélection par ID
        $selection = SujetSelection::findOrFail($id);
        // Récupérer l'utilisateur qui a sélectionné le sujet
        $user = $selection->user;
        // Rediriger vers la page des conversations avec un message de succès
        return redirect()->route('conversations.index')
                         ->with('renvoye_sujet', $selection);
    }


}
