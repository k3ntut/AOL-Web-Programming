<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>

        .navbar-brand.colors {
            color: #57544D !important;
            font-weight: bold;
        }

        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #EDEBDF;
        }

        nav.navcolor{
            background: #DAD8CD;
        }

        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            height: 85vh; /* Full viewport height */
            text-align: left;
            padding-left: 100px;
        }

        nav.login{
            background: #24483A;
        }

        h1{
            font-family: Inter;
            color: #57544D;
        }

        h5{
            font-family: Inter;
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg navcolor ps-4 pe-4">
        <a class="navbar-brand colors" href="#">TreckEco</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tips & Resource</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <form class="d-flex">
            <a href="{{ route('dashboard') }}" class="btn btn-success">Login</a>
            </form>
        </div>
    </nav>

    <div class="center-content">
        <h1 class="font-weight-bold" style="font-size: 5rem">Track Your Impact,</h1>
        <h1 class="font-weight-bold" style="font-size: 5rem;">Shape a Greener Tomorrow!</h1>
        <h5 class="font-weight-light ps-2 pb-2" style="font-size: 1.2rem;">Log your habits, see your progress, and make sustainable living second nature.</h5>
        <a href="{{ route('register') }}" class="btn btn-success">Get Started</a>
    </div>

</body>
</html>