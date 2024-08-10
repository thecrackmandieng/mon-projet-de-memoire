<?php

// app/Http/Controllers/PropositionController.php
namespace App\Http\Controllers;

use App\Models\Proposition;
use App\Models\Sujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropositionController extends Controller
{
    public function index()
    {
        $sujets = Proposition::all();
        return view('sujet.index', compact('sujets'));
    }

    public function create()
    {
        return view('propositions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
            'description' => 'required|string',
            'profile' => 'required|string',
        ]);

        Sujet::create([
            'theme' => $request->theme,
            'description' => $request->description,
            'profile' => $request->profile,
        ]);

        return redirect()->route('propositions.create')->with('success', 'Sujet bien ajouté');
    }

    public function validateProposition($id)
{
    $proposition = Proposition::findOrFail($id);
    Sujet::create(['theme' => $proposition->theme]);
    $proposition->delete();

    $sujets = Proposition::all(); // Récupérer à nouveau la liste des propositions
    return view('propositions.create', ['sujets' => $sujets])->with('success', 'Proposition validée et ajoutée à la liste des sujets.');
}


    public function destroy($id)
    {
        $proposition = Proposition::findOrFail($id);
        $proposition->delete();

        return redirect()->route('propositions.index')->with('success', 'Proposition supprimée avec succès.');
    }
}
