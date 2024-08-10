<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\SujetSelection;


class ProductController extends Controller
{
    public function consulter()
    {
        // Récupérer les sujets validés
        $validatedSelections = SujetSelection::where('status', 'confirmed')->with('sujet')->get();

        return view('products.sujet_valide', compact('validatedSelections'));
    }

}

