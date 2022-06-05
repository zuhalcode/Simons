<!--
Fixed Navigation
==================================== -->
<header class="navigation {{ Request::is('new-applicant*') ? '' : 'fixed-top' }} ">
    <div class="container">
      <!-- main nav -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <!-- logo -->
        <a class="navbar-brand logo" href="/">
          <img class="logo-default" src="{{ asset("images/logo.png") }}" alt="logo"/>
          <img class="logo-white" src="{{ asset("images/logo-white.png") }}" alt="logo"/>
        </a>
        <!-- /logo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item ">
              <a class="nav-link" href="/">Home</a>
            </li>
            
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Layanan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/new-applicant">Pengajuan SIM Baru</a>
                <a class="dropdown-item" href="/perpanjangan-sim">Perpanjangan SIM</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="about.html">Tentang Kami</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="contact.html">Kontak</a>
            </li>
            @auth
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/dashboard">Dashboard</a>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Logout</button>
                  </form>
                </div>
              </li>
            @else
              <li class="nav-item ">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/register">Register</a>
              </li>
            @endauth
           
          </ul>
        </div>
      </nav>
      <!-- /main nav -->
    </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->