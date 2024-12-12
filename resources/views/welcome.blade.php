<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RHPERFUMES</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body { 
            background-color: white;
            margin: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 1rem;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header img {
            height: 50px;
        }

        .header nav {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header nav a {
            margin-right: 15px;
            padding: 1rem 2rem;
            text-decoration: none;
            color: black;
            border: 1px solid transparent;
            border-radius: 4px;
            transition: color 0.3s, border-color 0.3s;
        }

        /* Estilos para el portafolio de productos */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
            width: 100%;
        }

        .product-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="container">
        <header class="header">
            <a href="#inicio"><img src="{{ asset('images/logo1.png') }}" alt="logo"></a>
            <nav>
                <a href="#quienes">CATEGORIAS</a>
                <a href="#servicios">PROMOCIONES</a>
                <a href="#carros">CONTACTENOS</a>
            </nav>
            <nav>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">ENTRAR</a>
                    @else
                        <a href="{{ route('login') }}">ENTRAR</a>
                    @endauth
                @endif

                @if (Route::has('register'))
                    @auth
                        <a href="{{ url('/dashboard') }}">REGISTRARSE</a>
                    @else
                        <a href="{{ route('register') }}">REGISTRARSE</a>
                    @endauth
                @endif
            </nav>
        </header>

        <!-- Sección de Portafolio de Productos -->
        <section>
            <h2>Nuestros productos</h2>
            <div class="product-grid">
                @foreach ($products as $product)
                    <div class="product-card">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="product-image">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p>Precio: ${{ number_format($product->price, 2) }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Paginación -->
            <div class="pagination">
                {{ $products->links() }}
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
