<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>GDM-TIC</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Autres balises head... -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

        <!-- Styles -->
        <style>
        body {
             /* Définir l'image de fond et ses propriétés */
             background-image: url('https://uadb.edu.sn/images/img-slide/SLID-ECOMIJ.jpg');
            background-size: cover; /* Ajuste l'image pour qu'elle couvre tout l'arrière-plan */
            background-position: center; /* Centre l'image de fond */
            background-repeat: no-repeat; /* Empêche la répétition de l'image */
            font-family: Arial, sans-serif; /* Définit la police par défaut */
        }



        *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: none;
        }
        #background {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1; /* Place l'image derrière le contenu */
        }
        .main-content {
            position: relative;
            z-index: 1; /* Assure que le contenu principal reste au-dessus de l'image de fond */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0px 14px 34px 0px rgba(254, 254, 254, 0.08);
            border: 1px solid #eaeaea;
        }
        .card h2 {
            font-size: 1.5em;
            color: #0067A3;
        }
        .card p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }
        .card a {
            display: flex;
            align-items: center;
            color: #5581b5;
            text-decoration: none;
            margin-top: 20px;
        }
        .card a:hover {
            color: #004d80;
        }
        .icon {
            width: 50px;
            height: 50px;
            margin-right: 20px;
        }
        .icon svg {
            fill: #5581b5;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .text-sm {
            font-size: 0.875rem;
        }
        .relaxed {
            line-height: 1.625;
        }

        .banner {
            background: linear-gradient(to right, #5581b5, white); /* Dégradé bleu à blanc */
            color: rgb(91, 58, 1); /* Couleur du texte */
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            position: relative;
            animation: moveBanner 5s linear infinite;
        }

        @keyframes moveBanner {
            0% { left: 0; }
            50% { left: calc(100% - 100vw); } /* Ajustez cette valeur selon la largeur de la bannière */
            100% { left: 0; }
        }

        .relative {
            position: relative;
        }

        .flex {
            display: flex;
        }

        .items-stretch {
            align-items: stretch;
        }

        .w-full {
            width: 100%;
        }

        .flex-1 {
            flex: 1;
        }

        .aspect-video {
            aspect-ratio: 16/9;
        }

        .h-full {
            height: 100%;
        }

        .rounded-[10px] {
            border-radius: 10px;
        }

        .object-top {
            object-position: top;
        }

        .object-cover {
            object-fit: cover;
        }

        .drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] {
            box-shadow: 0px 4px 34px rgba(0, 0, 0, 0.06);
        }

        .border-transparent {
            border: none; /* ou border-color: transparent; */
        }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-transparent">
          <!-- Autres contenus de la page... -->
    <div class="banner-carousel">
        <div><img src="https://uadb.edu.sn/images/img-slide/SLID-ECOMIJ.jpg" alt="les amphithatres"></div>
        <div><img src="https://uadb.edu.sn/images/img-slide/SLID-SATIC.jpg" alt="UFR SATIC"></div>
        <div><img src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png" alt="Universite Alioune Diop"></div>
        <!-- Ajoutez autant de divs que nécessaire pour vos images -->
    </div>

    <script>
        $(document).ready(function(){
            $('.banner-carousel').slick({
                autoplay: true, // Démarre le défilement automatique
                autoplaySpeed: 4000, // Vitesse de défilement en millisecondes
                arrows: false, // Masque les flèches de navigation
                dots: false, // Masque les indicateurs de pagination
                fade: true, // Effet de fondu entre les images
                infinite: true // Défilement infini
            });
        });
    </script>

    <div class="banner" style="font-family: Arial Black">
        BIENVENUE DANS GDM-TIC GESTION DES MEMOIRES
    </div>
<!-- Barre de recherche -->
<div class="bg-gray-800 py-2" style="background-color: #0067A3; color: white;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-10">
            <div class="flex-shrink-0">
                <img class="h-8 w-auto" src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png"/>
            </div>
            <div class="flex flex-1 justify-center sm:justify-end">
                <div class="w-full sm:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600" >
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Heroicon name: search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" >
                                <path fill-rule="evenodd" d="M9 17a8 8 0 100-16 8 8 0 000 16zM18.707 17.293a1 1 0 01-1.414 1.414l-5.3-5.3a7 7 0 111.414-1.414l5.3 5.3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" name="search" class="block w-full bg-gray-900 border border-transparent rounded-md py-2 pl-10 pr-3 text-gray-100 placeholder-gray-400 focus:outline-none focus:bg-white focus:text-gray-900 sm:text-sm" placeholder="Search" type="search" style="background-color: #0067A3; color: white;">
                    </div>
                </div>
                <!-- Les instructions suivantes concernent la navigation -->
                @if (Route::has('login'))
                    <nav class="ml-4 flex items-center">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="ml-4 px-3 py-2 text-white rounded-md text-sm font-medium"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="ml-4 px-3 py-2 text-white rounded-md text-sm font-medium"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="ml-4 px-3 py-2 text-white rounded-md text-sm font-medium"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>

        <!-- Contenu principal -->
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#0067A3] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <!-- En-tête -->
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3" style="background-color: transparent;">
                        <!-- Logo -->
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img class="h-12 w-auto lg:h-16" src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png"/>
                        </div>


                    </header>
                            <!-- Contenu principal -->
    <main class="mt-6" >
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            <!-- Lien vers la documentation uadb -->
            <a
                href="https://uadb.edu.sn/"
                id="docs-card"
                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#0067A3] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#0067A3]"
            >
            <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch border-transparent">
                <!-- Image de la documentation uadb -->
                <img
                    src="https://uadb.edu.sn/images/img-slide/SLID-ECOMIJ.jpg"
                    alt="UADB documentation screenshot"
                    class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] border-transparent"
                    onerror="
                        document.getElementById('screenshot-container').classList.add('!hidden');
                        document.getElementById('docs-card').classList.add('!row-span-1');
                        document.getElementById('docs-card-content').classList.add('!flex-row');
                    "
                />
            </div>
            <div id="docs-card-content" class="flex flex-col items-start gap-6 text-black dark:text-white">
                <h2 class="text-2xl font-semibold">Documentation UADB</h2>
                <p class="text-lg">Consultez la documentation complète de l'Université Alioune Diop de Bambey.</p>
            </div>
            </a>
        </div>
    </main>
    <div class="container">
        <div class="card">
            <h2>Université Alioune Diop</h2>
            <p class="mt-4 text-sm relaxed">
                Créé en janvier 2007, le Collège universitaire régional (CUR) de Bambey se transforme en université en novembre 2009 (décret n° 2009-1221).
                En août 2011, l'établissement prend le nom de « Université Alioune Diop de Bambey » (décret no 2011-1160), en hommage à Alioune Diop, intellectuel engagé et fondateur de la revue Présence africaine.
            </p>
            <a href="https://uadb.edu.sn/ufr-et-instituts/sciences-appliquees-et-technologies-de-l-information-et-de-la-communication">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                </div>
                <span>UFR SATIC</span>
            </a>
        </div>

        <div class="card">
            <h2>UFR SATIC</h2>
            <p>
                Aujourd’hui nos universités sont en proie à toutes sortes de difficultés, qui ont pour noms : massification des effectifs, insuffisance de ressources budgétaires et parfois inadéquation entre les programmes de formation et le besoin du marché de l’emploi. Une tendance que le nouveau système LMD tente d’ailleurs de redresser. C’est surtout avec un travail assidu, une réflexion continue, une persévérance que nous arriverons à faire avancer les choses dans notre université implantée au Baol, en plein milieu rural. Aujourd'hui, nous devons continuer de nous interroger sur la mission de l’Université et demeurer à l'avant-garde de la réflexion et des réformes nécessaires pour mieux l'accomplir. C’est par la recherche que les acteurs de l’UADB, à travers des thématiques centrées autour des préoccupations des populations locales, parviendront à trouver les solutions aux problèmes posés. Ainsi nous devons réfléchir, tous ensemble, à la vision d’avenir que nous souhaitons pour l’UFR SATIC, pour une formation de qualité, un encouragement à la recherche, à l’innovation et au partenariat afin que l’excellence soit toujours la constance à l’UADB.
            </p>
            <a href="https://uadb.edu.sn/ufr-et-instituts/sciences-appliquees-et-technologies-de-l-information-et-de-la-communication">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                </div>
                <span>Mémoires de Licence</span>
            </a>
        </div>

        <div class="card">
            <h2>Mémoires de Licence</h2>
            <p>
                Les mémoires de fin d’études des filières Développement et Administration d’Applications (D2A) et Système, Réseau et Télécom (SRT) sont évalués devant un jury. Chaque filière du département TIC de l'UFR SATIC de l'Université Alioune Diop de Bambey exige la rédaction et la soutenance d’un mémoire en fin de licence.
            </p>
            <a href="https://uadb.edu.sn/ufr-et-instituts/sciences-appliquees-et-technologies-de-l-information-et-de-la-communication">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                </div>
                <span>Équipe du Projet</span>
            </a>
        </div>

        <div class="card">
            <h2>Équipe du Projet</h2>
            <p>
                Le projet de gestion des mémoires pour les filières D2A et SRT est supervisé par une équipe dédiée d’enseignants-chercheurs et de techniciens. L’objectif est de fournir aux étudiants une plateforme intégrée facilitant la rédaction, la soumission, et l’évaluation de leurs mémoires de fin d’études.
            </p>
        </div>
    </div>
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70" style="background-color: transparent;">
            GDM v{{ Illuminate\Foundation\Application::VERSION }} (UADB {{ PHP_VERSION }} /2023-2024)
            <div class="flex justify-center">
                <img src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png" class="h-20 w-auto mt-6 mb-4" alt="Votre Logo">
            </div>
        </footer>
                </div>
            </div>
        </div>
    </body>
</html>
