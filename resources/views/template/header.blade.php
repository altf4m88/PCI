<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">
        <img class="brand-image" src="{{ asset('assets/images/logo.png') }}" alt="logo" />
      </a>
      <div id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'landing' ? ' nav-active' : '' }}" id="nav-home" aria-current="page" href="{{ route('landing') }}">HOME</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" id="nav-about" href="#about">ABOUT US</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'list-product' ? ' nav-active' : '' }}" id="nav-product" href="{{ route('list-product') }}">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-article" href="#article">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-contact" href="#contact">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link cart" href="#">
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="35" height="35" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_46_188" transform="scale(0.00444444)"/>
                    </pattern>
                    <image id="image0_46_188" width="225" height="225" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
