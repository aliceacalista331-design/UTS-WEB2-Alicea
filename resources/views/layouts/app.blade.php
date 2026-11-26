<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Alicea Store')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #fff8fb;
            color: #51434a;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #f5dce8;
        }

        .brand-logo {
            display: inline-flex;
            width: 38px;
            height: 38px;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #e9a9c4;
            color: white;
            font-weight: bold;
        }

        .brand-name {
            color: #9b5574;
            font-weight: bold;
        }

        .hero {
            background: linear-gradient(135deg, #fbe5ef, #fff8fb);
            border-radius: 24px;
            padding: 50px 30px;
        }

        .btn-pink {
            background: #d98bad;
            color: white;
            border: none;
        }

        .btn-pink:hover {
            background: #c9789c;
            color: white;
        }

        .product-card {
            border: 1px solid #f3dce7;
            border-radius: 18px;
            overflow: hidden;
            transition: .2s;
        }

        .product-card:hover {
            transform: translateY(-4px);
        }

        .product-image {
            width: 100%;
            height: 210px;
            object-fit: cover;
            background: #fceaf2;
        }

        footer {
            background: white;
            border-top: 1px solid #f3dce7;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <span class="brand-logo">A</span>
            <span class="brand-name">Alicea Store</span>
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                <a class="nav-link" href="{{ route('admin.produk.index') }}">Admin Produk</a>
            </div>
        </div>
    </div>
</nav>

<main class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

<footer class="py-4 mt-5">
    <div class="container text-center">
        <strong class="brand-name">Alicea Store</strong>
        <p class="small mb-0 mt-2">
            A little touch of sweetness for your everyday.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>