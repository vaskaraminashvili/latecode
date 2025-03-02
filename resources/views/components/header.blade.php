<!-- Header START -->
<header class="navbar-light navbar-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand font-heading fs-1" href="{{route('home')}}">
                <img class="navbar-brand-item main-logo" src="{{asset('assets/images/logo.png')}}"
                     alt="logo">
                Late <br> Code
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll mx-auto">
                    @foreach($categories as $category)
                        <li class="nav-item"><a class="nav-link"
                                                href="{{route('item.index')}}">{{__($category->title)}}</a></li>
                    @endforeach
                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                   aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->
            @auth()
                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                       data-bs-auto-close="outside"
                       data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/01.jpg')}}"
                             alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow"
                                         src="{{asset('assets/images/avatar/01.jpg')}}"
                                         alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">{{auth()->user()->name}}</a>
                                    <p class="small m-0">{{auth()->user()->email}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="{{route('profile.index')}}"><i
                                    class="bi bi-person fa-fw me-2"></i>Edit Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('profile.index')}}"><i
                                    class="bi bi-gear fa-fw me-2"></i>Account Settings</a>
                        </li>
                        <li>
                            <form action="{{ route('login.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item bg-danger-soft-hover" type="submit">
                                    <i
                                        class="bi bi-power fa-fw me-2"></i>
                                    Sign Out
                                </button>
                            </form>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode options START -->
                        <li>
                            <div
                                class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Light
                                </button>
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Dark
                                </button>
                                <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Auto
                                </button>
                            </div>
                        </li>
                        <!-- Dark mode options END-->
                    </ul>
                </div>
                <!-- Profile START -->
            @endauth
            @guest
                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                       data-bs-auto-close="outside"
                       data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-user me-1 avatar-icon"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Links -->
                        <li>
                            <a class="dropdown-item" href="{{route('login.form')}}">
                                <i class="bi bi-person fa-fw me-2"></i>
                                Login
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode options START -->
                        <li>
                            <div
                                class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Light
                                </button>
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Dark
                                </button>
                                <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Auto
                                </button>
                            </div>
                        </li>
                        <!-- Dark mode options END-->
                    </ul>
                </div>
                <!-- Profile START -->
            @endguest
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->

<style>
    .navbar-expand-xl .navbar-brand .main-logo {
        width: 100px;
        height: auto;
    }

    .navbar-brand {
        padding: 5px 0;
    }

    .avatar-icon {
        color: #747579;
        font-size: 22px;
        padding: 8px 10px;
        border: 1px #747579 solid;
        border-radius: 190px;
    }
</style>
