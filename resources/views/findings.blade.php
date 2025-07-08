<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSPM Findings</title>

    {{-- Bootstrap CSS (via CDN) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Pas besoin de @vite(['resources/css/app.css', 'resources/js/app.js']) si vous utilisez Bootstrap via CDN --}}
    {{-- Vous pouvez garder un app.css vide si vous avez du CSS personnalisé, mais il ne sera pas compilé par Vite pour Bootstrap --}}
</head>
<body class="bg-light p-4"> {{-- bg-light pour bg-gray-100, p-4 pour p-6 --}}
    <div class="container mt-4"> {{-- container pour max-w-4xl mx-auto, mt-4 pour marge top --}}
        <h1 class="display-5 fw-bold text-dark mb-4">CSPM Findings List</h1> {{-- display-5 pour text-3xl, fw-bold pour font-bold, text-dark pour text-gray-800, mb-4 pour mb-6 --}}
        
        {{-- Le composant filter-bar (déjà converti en Bootstrap) --}}
        <x-filter-bar />
        

        <div class="findings-list space-y-3"> {{-- space-y-3 pour space-y-4 (Bootstrap utilise des espacements légèrement différents) --}}
            @forelse ($findings as $finding)
                {{-- Le composant finding-row (déjà converti en Bootstrap) --}}
                <x-finding-row :finding="$finding" />
            @empty
                <p class="text-muted text-center">No findings to display</p> {{-- text-muted pour text-gray-600 --}}
            @endforelse
        </div>
    </div>

    {{-- Bootstrap JS (via CDN) - requis pour certaines fonctionnalités interactives de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
