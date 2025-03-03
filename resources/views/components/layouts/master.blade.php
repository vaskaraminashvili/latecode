@props([
    'header' => true,
    'footer' => true,
])
    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from .late.com/course-detail-adv.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 10:12:30 GMT -->
<head>
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark'
        }

        const setTheme = function (theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch').getAttribute('href')
                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })

    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/plyr/plyr.css')}}"/>
    @stack('vendor_style')

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @stack('styles')
    @commentsStyles
</head>

<body>
@if ($header)
    <x-header/>
@endif
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Page content START -->
    {{ $slot }}
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@if ($footer)
    <!-- =======================
Footer START -->
    <footer class="pt-5 bg-light">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a class="navbar-brand font-heading fs-1" href="{{route('home')}}">
                        <img class="navbar-brand-item main-logo w-50"
                             src="{{asset('assets/images/logo.png')}}"
                             alt="logo">
                        Late <br> Code
                    </a>
                </div>
                <!-- Widget 1 END -->


                <!-- Widget 3 START -->
                <div class="col-lg-3 ms-auto">
                    <div class="row g-2 mt-2">
                        <!-- Google play store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a href="#"> <img src="{{asset('assets/images/client/google-play.svg')}}" alt=""> </a>
                        </div>
                        <!-- App store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a href="#"> <img src="{{asset('assets/images/client/app-store.svg')}}" alt="app-store">
                            </a>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="py-3">
                <div class="container px-0">
                    <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-body text-primary-hover"> Copyrights ©{{ date("Y") }} Late. Build by <a
                                href="#" target="_blank" class="text-body">Late</a></div>
                        <!-- copyright links-->
                        <div class="justify-content-center mt-3 mt-lg-0">
                            <ul class="nav list-inline justify-content-center mb-0">
                                <li class="list-inline-item">
                                    <!-- Language selector -->
                                    <div class="dropup mt-0 text-center text-sm-end">
                                        <a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-globe me-2"></i>Language
                                        </a>
                                        <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                            <li>
                                                <a class="dropdown-item me-4" href="#">
                                                    English
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item me-4" href="#">
                                                    Georgian
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
    Footer END -->
@endif

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/vendor/sticky-js/sticky.min.js')}}"></script>
<script src="{{asset('assets/vendor/plyr/plyr.js')}}"></script>
<script src="{{asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
@stack('vendor_script')
@commentsScripts
<!-- Template Functions -->
<script src="{{asset('assets/js/functions.js')}}"></script>


</body>

<!-- Mirrored from .late.com/course-detail-adv.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2025 10:12:30 GMT -->
</html>
