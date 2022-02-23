<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PortFolio</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/projects.css">

</head>

<body>
    <div class="p-3" id="header">
        <div class="row pb-2" id="header-row">
            <div class="col ps-5 d-flex">
                <img src="{{asset('images/sk.png')}}" id="sk-image" class="d-flex" alt="sk">
                <p class="fs-2 ps-3 pt-3" id="subtitle"> Connections</p>
            </div>
            <div class="col pt-3">
                <section class="ms-1 me-1">
                    <a  href="/"><button class="btn btn-outline-dark ms-3 me-3" aria-current="page">Home</button></a>
                    <a  href="/about"><button class="btn btn-outline-dark ms-3 me-3" aria-current="page"> About me</button></a>
                    <a  href="/projects"><button class="btn btn-outline-dark ms-3 me-3" aria-current="page">Projects</button></a>
                    <a  href="/contact"><button class="btn btn-outline-dark ms-3 me-3" aria-current="page">Contact</button></a>
                </section>
            </div>
        </div>
    </div>

   
    @yield('content')



</body>


</html>