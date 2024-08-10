<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SujetSelection;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index()
    {
        // Récupérer tous les sujets validés avec les utilisateurs et sujets associés
        $validatedSelections = SujetSelection::where('status', 'confirmed')
                                             ->with('user', 'sujet')
                                             ->get();

        // Passer les données à la vue
        return view('conversations.index', compact('validatedSelections'));
    }
}
