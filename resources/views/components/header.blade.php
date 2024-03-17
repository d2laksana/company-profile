<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">Arsha</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt=""
                class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link   {{ $type_menu === 'home' ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link  {{ $type_menu === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li><a class="nav-link  {{ $type_menu === 'contact' ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
