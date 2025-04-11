<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<main class="site-content" id="main">
    <div class="container py-4">
        <nav class="glossary__nav mb-4">
            <ul class="list-inline d-flex">
                <li class="glossary__nav__item me-2 active">
                    <a class="card card__content" data-nav="#" data-toggle="glossary" href="#">#</a>
                </li>
                <li class="glossary__nav__item me-2">
                    <a class="card card__content" data-nav="A" data-toggle="glossary" href="#">A</a>
                </li>
                <li class="glossary__nav__item me-2">
                    <a class="card card__content" data-nav="B" data-toggle="glossary" href="#">B</a>
                </li>
                <li class="glossary__nav__item me-2">
                    <a class="card card__content" data-nav="C" data-toggle="glossary" href="#">C</a>
                </li>
                <li class="glossary__nav__item me-2">
                    <a class="card card__content" data-nav="D" data-toggle="glossary" href="#">D</a>
                </li>
            </ul>
        </nav>
        <!--END Glossary Nav-->

        <div class="glossary__search mb-4">
            <form action="#" class="glossary__search__form">
                <input class="form-control" id="glossarySearchInput" placeholder="Search Keywords" type="search">
            </form>
        </div>
        <!--END Glossary Search-->

        <div class="glossary__results mb-6">
            <div class="glossary__results__row" data-term="#">
                <h3 class="glossary__results__term title-style--three mb-3">#</h3>
                <div class="row">
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="3G">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">3G</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="4G">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">4G</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                </div>
            </div>
            <!--END Glossary Results Row-->

            <div class="glossary__results__row" data-term="A">
                <h3 class="glossary__results__term title-style--three mb-3">A</h3>
                <div class="row">
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Application Cycle Management">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Application Cycle Management</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="API">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">API</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="AVR">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">AVR</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="ARP">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">ARP</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                </div>
            </div>
            <!--END Glossary Results Row-->

            <div class="glossary__results__row" data-term="B">
                <h3 class="glossary__results__term title-style--three mb-3">B</h3>
                <div class="row">
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Bandwidth">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Bandwidth</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Back Office">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Back Office</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Bluetooth">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Bluetooth</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Backbone Network">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Backbone Network</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                </div>
            </div>
            <!--END Glossary Results Row-->

            <div class="glossary__results__row" data-term="C">
                <h3 class="glossary__results__term title-style--three mb-3">C</h3>
                <div class="row">
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Cable">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Cable</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Citizen">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Citizen</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Coat">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Coat</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Cynagenmod">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Cynagenmod</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                </div>
            </div>
            <!--END Glossary Results Row-->

            <div class="glossary__results__row" data-term="D">
                <h3 class="glossary__results__term title-style--three mb-3">D</h3>
                <div class="row">
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Data">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Data</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Delta">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Delta</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Dragon">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Dragon</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                    <div class="glossary__results__item col-md-3 col-sm-6" data-item="Dynasty">
                        <a class="card card__content" href="#">
                            <h4 class="card__title">Dynasty</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste vel, magnam
                                incidunt obcaecati.</p></a>
                    </div>
                    <!--END Glossary Result item-->
                </div>
            </div>
            <!--END Glossary Results Row-->
        </div>
        <!--END Glossary Results-->
    </div>
</main>
<!-- END Main content -->
<script src="{{asset('assets/vendor/glossary/glossary.min.js')}}"></script>
</body>
</html>
