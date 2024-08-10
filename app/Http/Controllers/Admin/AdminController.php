<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SujetSelection; // Ajustez le nom du modèle ici
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');


    }


    public function dashboard()
    {
        // Récupérez les sujets sélectionnés depuis la base de données
        $sujetsSelectionnes = SujetSelection::all(); // Ajustez le nom du modèle ici

        // Passez les sujets sélectionnés à la vue
        return view('admin.dashboard', ['sujetsSelectionnes' => $sujetsSelectionnes]);
    }
}
