<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

     

</head>
<body>

    @section('header')
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-secondary"> Inicio </a></li>
                    <li><a href="/nuevo-producto" class="nav-link px-2 text-secondary"> Nuevo Producto </a></li>
                    <li><a href="/create-user" class="nav-link px-2 text-secondary"> Nuevo Usuario </a></li>
                    <li><a href="/asignar-producto" class="nav-link px-2 text-secondary"> Asignar Productos </a></li>
                    <li><a href="/consultar-producto" class="nav-link px-2 text-secondary"> Consultar Productos </a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    
                </form>

                <div class="text-end">
                    <a href="/login" class="btn btn-outline-light me-2">Login</a>
                </div>
            </div>
        </div>
        <p></p>
    </header>
    @show

   
    @section('content')
    @show

    @section('footer')
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="/nuevo-producto" class="nav-link px-2 text-secondary">Nuevo Producto</a></li>
                    <li><a href="/create-user" class="nav-link px-2 text-secondary">Nuevo Usuario</a></li>
                    <li><a href="/asignar-producto" class="nav-link px-2 text-secondary">Asignar Productos</a></li>
                    <li><a href="/consultar-producto" class="nav-link px-2 text-secondary">Consultar Productos</a></li>
        </ul>
        <p class="text-center text-muted">© 2022 Proyecto de framework</p>
    </footer>
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>