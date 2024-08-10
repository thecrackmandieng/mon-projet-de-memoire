<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Assurez-vous de remplacer par le modèle que vous souhaitez rechercher

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Exemple de recherche simple sur le modèle Product
        $results = Product::where('name', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%")
                        ->get();

        return view('search.results', compact('results'));
    }
}
