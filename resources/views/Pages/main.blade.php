<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Laravel First App</title>
    <style>
        section
        {
            padding: 60px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-md">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold text-muted">
                    Laravel First Application
                </span>
            </a>
            {{-- Button Toggler --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-dev" aria-controls="main-dev" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- List Of Nav Items --}}
            <div class="collapse navbar-collapse justify-content-start" id="main-dev">
                <ul class="navbar-nav">
                    <x-link routeName="home" >Home</x-link>
                    <x-link routeName="produits" >Produits</x-link>
                    <x-link routeName='about' >About</x-link>
                    <x-link routeName='services' >Services</x-link>
                    <x-link routeName='contact' >Contact</x-link>
                </ul>
            </div>
        </div>
    </nav>

    @yield('title-page')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>