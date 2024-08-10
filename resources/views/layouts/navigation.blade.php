<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre espace GMD-TIC</title>
    <style>
        /* Styles pour le texte de bienvenue */
        .text-welcome {
            color: #ffffff; /* Couleur du texte en blanc */
            font-size: 18px; /* Taille de police */
            font-weight: bold; /* Gras */
            margin-left: 1rem; /* Marge à gauche pour le texte */
            font-family: Arial, sans-serif; /* Police */
        }

        /* Styles pour la barre de menu */
        nav {
            background: linear-gradient(to right, #0067A3, #66ccff); /* Dégradé bleu-blanc */
            color: #ffffff; /* Couleur du texte en blanc */
        }

    </style>
</head>
<body>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    @auth
                        <a href="{{ auth()->user()->usertype == 'admin' ? route('admin.dashboard')  : route('dashboard') }}">
                            <img src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png" class="block h-9 w-auto" alt="Votre Logo" />
                        </a>
                    @else
                        <a href="{{ route('home') }}">
                            <img src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png" class="block h-9 w-auto" alt="Votre Logo" />
                        </a>
                    @endauth
                </div>
                <!-- admin-->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="Auth::user()->usertype == 'admin' ? route('admin.dashboard'): route('dashboard')" :active="Auth::user()->usertype == 'admin' ? request()->routeIs('admin.dashboard')  : route('dashboard')" style="color:#5b3a01; font-family: Arial">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    @if (Auth::user()->usertype == 'admin')
                    <div class="flex justify-center mb-4">
                        <div class="text-right"> <!-- Ajoutez la classe text-right pour aligner le texte à droite -->
                            <marquee behavior="scroll" direction="left" scrollamount="5">
                                <span class="text-blue-700 text-lg font-semibold" style="color: #5b3a01; font-family: Georgia, 'Times New Roman', Times, serif">ESPACE ADMIN GDM-TIC</span>
                            </marquee>
                        </div>
                    </div>

                    <x-nav-link :href="route('sujet.index')" :active="request()->routeIs('')" style="color: #5b3a01; font-family: Arial">
                        {{ __('Sujets') }}
                    </x-nav-link>

                    <x-nav-link :href="route('admin.sujet_selections')" :active="request()->routeIs('admin.sujet_selections')" style="color: #5b3a01; font-family: Arial">
                        {{ __('sélectionné') }}
                    </x-nav-link>

                    <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" style="color:#5b3a01; font-family: Arial">
                        {{ __('Memoire') }}
                    </x-nav-link>

                    <x-nav-link :href="route('admin.user')" :active="request()->routeIs('admin.user')" style="color: #5b3a01; font-family: Arial">
                        {{ __('User') }}
                    </x-nav-link>
                    @endif
                    <!-- etudiant-->
                    @if (Auth::user()->usertype == 'user')
                    <div class="flex justify-center mb-4">
                        <div class="text-right">
                            <marquee behavior="scroll" direction="left" scrollamount="5">
                                <span class="text-blue-700 text-lg font-semibold" style="color: #5b3a01; font-family: Georgia, 'Times New Roman', Times, serif">ESPACE ETUDIANT GDM-TIC</span>
                            </marquee>
                        </div>
                    </div>

                    <x-nav-link :href="route('select')" :active="request()->routeIs('select')" style="color: #5b3a01;">
                        {{ __('Sujets') }}

                    </x-nav-link>

                    <x-nav-link :href="route('conversations.index')" :active="request()->routeIs('conversations.index')" style="color: #5b3a01;">
                        {{ __('Sujets validés') }}
                    </x-nav-link>

                    <x-nav-link :href="route('depots')" :active="request()->routeIs('depots')" style="color: #5b3a01;">
                        {{ __('Depot') }}
                    </x-nav-link>

                @endif
            <!-- professeur-->

            @if (Auth::user()->usertype == 'professor')
            <div class="flex justify-center mb-4">
                <div class="text-right">
                    <marquee behavior="scroll" direction="left" scrollamount="5">
                        <span class="text-blue-700 text-lg font-semibold" style="color: #5b3a01; font-family: Georgia, 'Times New Roman', Times, serif">ESPACE PROFESSEUR GDM-TIC</span>
                    </marquee>
                </div>
            </div>

            <x-nav-link :href="route('propositions.create')" :active="request()->routeIs('propositions.index')" style="color: #5b3a01;">
                {{ __('Proposer Sujet') }}

            </x-nav-link>

            <x-nav-link :href="route('conversations.index')" :active="request()->routeIs('conversations.index')" style="color: #5b3a01;">
                {{ __('sujet validé') }}
            </x-nav-link>



        @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <img src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png" alt="Votre Logo" class="h-4 w-4" />

                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

</body>
</html>
