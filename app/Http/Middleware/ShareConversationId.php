<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Conversation;

class ShareConversationId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Récupérer l'ID de la première conversation ou définir un ID par défaut
        $conversationId = Conversation::first()->id ?? 1;

        // Partager la variable $conversationId avec toutes les vues
        View::share('conversationId', $conversationId);

        return $next($request);
    }
}

