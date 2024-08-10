<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfessorController extends Controller
{
    public function index()
    {
        // Récupérer tous les utilisateurs avec le type 'professor'
        $professors = User::where('usertype', 'professor')->get();

        // Retourner les données à une vue
        return view('professor.index', compact('professors'));
    }

    public function show($id)
    {
        $professor = User::findOrFail($id);
        return view('professor.show', compact('professor'));
    }
    public function consulter()
    {
        // Récupérer tous les produits depuis la base de données
        $products = Product::all();

        // Retourner la vue avec les données récupérées
        return view('products.consulter', compact('products'));
    }
}
