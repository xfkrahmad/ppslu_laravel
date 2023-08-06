    <header class="main_menu  {{ request()->is('/') ? 'home_menu' : 'single_page_menu' }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('public.index') }}"> <img
                                src="{{ asset('storage/' . $systemConf->institute_photo_url) }}" class="w-16"
                                alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item ">
                                    <a class="{{ Route::currentRouteName() == 'public.index' ? 'active px-4' : 'nav-link' }}"
                                        href="{{ route('public.index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ Route::currentRouteName() == 'public.about' ? 'text-yellow-600 px-4' : 'nav-link' }}"
                                        href="{{ route('public.about') }}">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ Route::currentRouteName() == 'public.news' ? 'text-yellow-600 px-4' : 'nav-link' }}"
                                        href={{ route('public.news') }}>Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ Route::currentRouteName() == 'public.registration-application' ? 'text-yellow-600 px-4' : 'nav-link' }}"
                                        href="{{ route('public.registration-application') }}">Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ Route::currentRouteName() == 'public.contact' ? 'text-yellow-600 px-4' : 'nav-link' }}"
                                        href="{{ route('public.contact') }}">Hubungi</a>
                                </li>
                                <li class="d-none d-lg-block">

                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
