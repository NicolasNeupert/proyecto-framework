<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/custom.css" rel="stylesheet">



</head>

<body>

    @section('header')
        <header class="header-main p-3">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
                    <ul class="navmain nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="/" class="nav-link">Inicio</a></li>
                        <li><a href="/productos" class="nav-link">Productos</a></li>
                        <li><a href="/productosconsucursales" class="nav-link">Sucursales</a></li>
                        <li><a href="/categorias" class="nav-link">Categorías</a></li>
                    </ul>
                    
                    <div class="text-end">
                        <form action="{{ url('buscar') }}" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                            <input type="submit" hidden>
                        </form>
                    </div>

                    <div class="text-end">
                        <a href="/user/login" class="btn btn-outline-light me-2">Login</a>
                    </div>
                </div>
            </div>
            <p></p>
        </header>
    @show



    @section('content')
    @show


    @section('footer')
        <footer class="footer-main py-3">
            <ul class="widget-menu nav justify-content-center pb-3 mb-3">                
                <li><a href="/" class="nav-link">Inicio</a></li>
                <li><a href="/productos" class="nav-link">Productos</a></li>
                <li><a href="/sucursales" class="nav-link">Sucursales</a></li>
                <li><a href="/categorias" class="nav-link">Categorías</a></li>
            </ul>
            <p class="copyright">© 2022 Proyecto de framework</p>
        </footer>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
