<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Depot;

class AdminProductController extends Controller
{
    public function index()
{
    // Récupérer tous les produits de la base de données
    $products = Product::all();

    // Récupérer tous les dépôts de la base de données
    $depots = Depot::all();

    // Retourner les données à une vue
    return view('products.index', compact('products', 'depots'));

      // Récupérer tous les utilisateurs avec le type 'professor'
      $professors = User::where('usertype', 'professor ')->get();

      // Retourner les données à une vue
      return view('professor.index', compact('professors'));
}


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    // Validation des données du formulaire
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
        'theme' => 'required|string|max:255',
        'file' => 'required|file', // Validation du fichier
    ]);

    // Traitement du fichier téléchargé
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        // Nom du fichier original
        $filename = $file->getClientOriginalName();
        // Stocker le fichier dans le dossier 'public/files' avec un nom unique généré
        $filePath = $file->storeAs('storage\app\files', $filename);
       // Transformer le chemin pour qu'il soit accessible publiquement
        $filePath = str_replace('public', 'storage', 'files', $filePath);

    } else {
        // Gérer le cas où aucun fichier n'est téléchargé (si nécessaire)
        $filePath = null;
    }

    // Créer un nouveau produit avec les données du formulaire et le chemin du fichier
    $product = new Product();
    $product->nom = $request->nom;
    $product->description = $request->description;
    $product->theme = $request->theme;
    $product->file_path = $filePath; // Stocker le chemin du fichier dans la colonne "file_path"
    $product->save();

    return redirect()->route('products.index')->with('msg', 'Produit bien ajouté');
}


    public function edit($id)
{
    $product = Product::find($id);
    if (!$product) {
        // Si le produit n'est pas trouvé, rediriger avec un message d'erreur
        return redirect()->route('products.index')->with('error', 'Produit non trouvé');
    }
    return view('products.editer', compact('product'));
}

public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
        'theme' => 'required|string|max:255',
        'file' => 'nullable|file', // 'nullable' pour permettre les mises à jour sans changer le fichier
    ]);

    // Trouver le produit à mettre à jour
    $product = Product::findOrFail($id);

    // Mettre à jour les attributs du produit
    $product->nom = $validated['nom'];
    $product->description = $validated['description'];
    $product->theme = $validated['theme'];

    // Si un nouveau fichier est téléchargé, traiter le fichier
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filePath = $file->store('files');
        $product->file_path = $filePath;
    }

    // Sauvegarder les changements
    if ($product->save()) {
        // Rediriger avec un message de succès
        return redirect()->route('products.index')->with('msg', 'Produit bien mis à jour');
    } else {
        // Ajouter un message d'erreur si la sauvegarde échoue
        return redirect()->route('products.index')->with('error', 'Échec de la mise à jour du produit');
    }
}


    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Produit non trouvé');
        }
        $product->delete();
        return redirect()->route('products.index')->with('msg', 'Produit supprimé avec succès');
    }
    public function consulterMemoire()
    {
        // Autoriser les administrateurs et les professeurs à accéder à la liste des mémoires
        if (Auth::user()->usertype == 'admin') {
            $this->authorize('view-any', Product::class);
        } elseif (Auth::user()->usertype == 'professeur') {
            // Pour les professeurs, autoriser uniquement la lecture des mémoires
            $this->authorize('view', Product::class);
        } else {
            // Refuser l'accès pour les autres utilisateurs
            abort(403);
        }

        $products = Product::select('file_path', 'theme')->get();
        return view('products.consulter', compact('products'));
    }



}
