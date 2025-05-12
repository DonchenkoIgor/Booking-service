<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.su/docs/5.0/examples/carousel/ -->
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Марк Отто, Джейкоб Торнтон и контрибьюторы Bootstrap">
    <meta name="generator" content="Hugo 0.80.0">
    <title>{{env('APP_NAME')}}</title>

    <link rel="canonical" href="https://getbootstrap.su/docs/5.0/examples/carousel/">


    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.su/docs/5.0/assets/img/favicons/apple-touch-icon.png"
          sizes="180x180">
    <link rel="icon" href="https://getbootstrap.su/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32"
          type="image/png">
    <link rel="icon" href="https://getbootstrap.su/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16"
          type="image/png">
    <link rel="manifest" href="https://getbootstrap.su/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.su/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
          color="#7952b3">
    <link rel="icon" href="https://getbootstrap.su/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('carousel.css')}}" rel="stylesheet">
</head>
<body>

@include('components.header')

<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                    aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Пример заголовка.</h1>
                        <p>Некоторое репрезентативное содержимое-заполнитель для первого слайда карусели.</p>
                        <p><a class="btn btn-lg btn-primary"
                              href="https://getbootstrap.su/docs/5.0/examples/carousel/#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Другой пример заголовка.</h1>
                        <p>Некоторое репрезентативное содержимое-заполнитель для второго слайда карусели.</p>
                        <p><a class="btn btn-lg btn-primary"
                              href="https://getbootstrap.su/docs/5.0/examples/carousel/#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Еще один для хорошей меры.</h1>
                        <p>Некоторые репрезентативные материалы-заполнители для третьего слайда этой карусели.</p>
                        <p><a class="btn btn-lg btn-primary"
                              href="https://getbootstrap.su/docs/5.0/examples/carousel/#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>


    <!-- Маркетинговые сообщения и короткометражки
    ================================================== -->
    <!-- Оберните остальную часть страницы в другой контейнер, чтобы центрировать все содержимое. -->

    <div class="container marketing">
        @yield('content')
    </div><!-- /.row -->


    <!-- START ОСОБЕННОСТИ -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Заголовок первой короткометражки. <span class="text-muted">Это взорвет твой разум.</span>
            </h2>
            <p class="lead">Здесь есть отличный заполнитель для первой короткометражки. Представьте себе какую-нибудь
                увлекательную прозу.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect>
                <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Ах да, это так хорошо. <span class="text-muted">Убедитесь сами.</span></h2>
            <p class="lead">Еще одна короткометражка? Конечно. Здесь больше содержимого-заполнителя, чтобы дать вам
                представление о том, как этот макет будет работать с некоторым реальным контентом из реального мира.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect>
                <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">И, наконец, этот. <span class="text-muted">Шах и мат.</span></h2>
            <p class="lead">И да, это последний блок репрезентативного содержимого заполнителя. Опять же, на самом деле
                не предназначено для чтения, просто здесь, чтобы дать вам лучшее представление о том, как это будет
                выглядеть с некоторым фактическим содержанием. Ваш контент.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                 height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect>
                <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END ОСОБЕННОСТИ -->


    @include('components.footer')
</main>


<script src="{{asset('bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>


</body>
</html>
