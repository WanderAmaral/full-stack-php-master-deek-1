<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <title>Celke</title>
</head>

<body class="d-flex flex-column h-100">

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Celke</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <h1>{{ $home->title }}</h1>
        <p>{{ $home->subtitle }}</p>
        <a href="{{ $home->link_btn }}" class="btn btn-light btn-lg mt-3">{{ $home->text_btn }}</a>
    </header>

    <main class="container my-5">
        <section class="text-center">
            <h2 class="mb-5">{{ $home->title_topics }}</h2>
            <p class="mb-5">{{ $home->subtitle_topics }}</p>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card shadow border-light">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $home->title_topic_one }}</h5>
                            <p class="card-text">{{ $home->description_topic_one }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-light">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $home->title_topic_two }}</h5>
                            <p class="card-text">{{ $home->description_topic_two }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-light">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $home->title_topic_three }}</h5>
                            <p class="card-text">{{ $home->description_topic_three }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center mt-auto py-4">
        <div class="container">
            <p class="mb-0">@ {{ date('Y') }} Celke - Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>
