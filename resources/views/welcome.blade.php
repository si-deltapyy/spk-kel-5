<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="antialiased">
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    @if (Route::has('login'))
        <div class="position-fixed top-0 end-0 p-3">
            @auth
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-dark">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-dark">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-dark ms-2">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <main class="container">
        <div class="d-flex flex-column align-items-center">
            <h1 class="h3 mb-3 fw-normal">Welcome!</h1>
            <p class="text-muted">Choose what you want to do:</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                @auth
                    <a href="{{ url('/admin') }}" class="btn btn-primary">Admin</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-primary ms-md-2 mt-2 mt-md-0">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </main>
</div>
</body>
</html>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
