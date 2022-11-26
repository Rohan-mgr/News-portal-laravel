<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Article App</title>
    <style>
    .active {
        background: #5cb85c !important;
        border-radius: .58rem;
        color: #fff !important;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">TajaKharbar.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0; text-align: center">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item mx-2">
                        <form action="{{route('logout')}}" method="get">
                            <button type="submit" class="btn btn-danger">Log out</button>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signup')}}">Sign Up</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
    const activePage = window.location.pathname;
    console.log(activePage);
    const navLinks = document.querySelectorAll('.navbar-nav .nav-item a').forEach(link => {
        if (link.href.includes(`${activePage}`)) {
            link.classList.add("active");
        }
    })
    console.log(navLinks);
    </script>
</body>

</html>