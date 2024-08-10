<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="font-family: 'Times New Roman', Times, serif; background: linear-gradient(to right, #0067A3, #ffffff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; animation: moveBanner 5s linear infinite;">
            {{ __('BIENVENUE! VOUS ETES DANS VOTRE ESPACE ADMINISTRATEUR') }}
        </h2>

        <!-- Style pour l'animation -->
        <style>
            @keyframes moveBanner {
                0% {
                    transform: translateX(0px); /* Déplace le texte de -40 pixels horizontalement */
                }
                50% {
                    transform: translateX(100px); /* Déplace le texte de 60 pixels horizontalement */
                }
                100% {
                    transform: translateX(-50px); /* Retourne le texte à sa position initiale */
                }
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vous êtes dans votre page admin") }}

                    <!-- Afficher les sujets sélectionnés -->
                    @foreach ($sujetsSelectionnes as $sujet)
                        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">{{ $sujet->theme }}</div>
                    @endforeach

                    <p>Bienvenue sur votre page administrateur !</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
