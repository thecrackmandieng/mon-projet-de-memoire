<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Depot;

class DepotController extends Controller
{
    /**
     * Affiche la liste des dépôts.
     */
    public function index()
    {
        // Récupérer tous les dépôts de la base de données
        $depots = Depot::all();

        // Retourner les données à une vue
        return view('depots', compact('depots'));
    }

    /**
     * Enregistre un nouveau dépôt.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'theme' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,docx,zip',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }

        Depot::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'theme' => $request->theme,
            'file_path' => $filePath,
        ]);

        return redirect()->route('depots')->with('success', 'Depot added successfully.');
    }

    public function edit($id)
{
    $depot = Depot::findOrFail($id);
    return view('depots', compact('depot'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'description' => 'required',
        'theme' => 'required',
        'file' => 'nullable|file|mimes:pdf,doc,docx,zip',
    ]);

    $depot = Depot::findOrFail($id);

    // Mise à jour des champs du dépôt
    $depot->nom = $request->nom;
    $depot->description = $request->description;
    $depot->theme = $request->theme;

    // Traitement du fichier s'il est fourni
    if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('uploads', 'public');
        $depot->file_path = $filePath;
    }

    // Enregistrement des modifications
    $depot->save();

    return redirect()->route('edit-depots')->with('success', 'Dépôt mis à jour avec succès.');
}

}
