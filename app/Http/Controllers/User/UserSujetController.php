<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sujet;
use App\Models\SujetSelection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSujetController extends Controller
{
    /**
     * Affiche le formulaire de sélection de sujet.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        $options = Sujet::all();

        return view('form', compact('options'));
    }

    /**
     * Sélectionne un sujet.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {
        $request->validate([
            'options' => 'required|array|min:1',
            'options.*' => 'exists:sujets,id'
        ]);

        $optionsSelected = $request->input('options');

        foreach ($optionsSelected as $optionId) {
            SujetSelection::create([
                'user_id' => Auth::id(),
                'sujet_id' => $optionId,
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Sujets sélectionnés avec succès.');
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

    return redirect()->route('sujet.index')->with('success', 'Sujet ajouté avec succès');
}

public function update(Request $request, $id)
{
    $request->validate([
        'theme' => 'required|string|max:255',
        'description' => 'required|string',
        'profile' => 'required|string',
    ]);

    $sujet = Sujet::findOrFail($id);
    $sujet->update([
        'theme' => $request->theme,
        'description' => $request->description,
        'profile' => $request->profile,
    ]);

    return redirect()->route('sujet.index')->with('success', 'Sujet mis à jour avec succès');
}
public function destroy($id)
{
    $sujet = Sujet::findOrFail($id);

    // Supprimer les enregistrements dans sujet_selections qui référencent ce sujet
    SujetSelection::where('sujet_id', $sujet->id)->delete();

    // Maintenant, vous pouvez supprimer le sujet
    $sujet->delete();

    return redirect()->route('sujet.index')->with('msg', 'Sujet bien supprimé');
}

}
