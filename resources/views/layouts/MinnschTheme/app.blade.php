<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'/>

  <title>@yield('title') - {{ config('app.name') }}</title>

  {{-- Start of required lines block. DON'T REMOVE THESE LINES! They're required or might break things --}}
  <meta name="base-url" content="{!! url('') !!}">
  <meta name="api-key" content="{!! Auth::check() ? Auth::user()->api_key: '' !!}">
  <meta name="csrf-token" content="{!! csrf_token() !!}">

  <link rel="shortcut icon" type="image/png" href="{{ public_asset('/assets/img/favicon.png') }}"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link href="{{ public_mix('/assets/frontend/css/now-ui-kit.css') }}" rel="stylesheet"/>
  <link href="{{ public_asset('/assets/frontend/css/styles.css') }}" rel="stylesheet"/>
  <link href="{{ public_asset('/minnsch/css/style.css')}}" rel="stylesheet"/>
  <link href="{{ public_mix('/assets/global/css/vendor.css') }}" rel="stylesheet"/>
  @yield('css')
  @yield('scripts_head')
  {{-- End of the required stuff in the head block --}}

</head>
<body>
{{-- NAVBAR --}}
  <nav id="Navbar" class=navbar fixed-top navbar-expand-lg bg-light>
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="<!--LINK HERE-->" alt="ANA Virtual Group Logo" style="max-height: 250px;">
      </a>
      @include('nav_upper')
    </div>
    <div class="container-fluid">
      @include('nav_bottom')
    </div>
  </nav>
{{-- NAVBAR END --}}

{{-- PAGE CONTENTS --}}
  <div id="page-contents" class="container-fluid">

    {{-- These should go where you want your content to show up --}}
    @include('flash.message')
    @yield('content')
    {{-- End the above block--}}


    {{-- FOOTER --}}
    <footer class="py-4">
      <div class="container">
        <div class="row align-items-center">
          <!-- Logo Section -->
          <div class="col-md-4 text-center text-md-left mb-3 mb-md-0">
          <a href="/">
              <img src="/assets/logo.png" style="max-width: 150px;" alt="Logo">
          </a>
          </div>
      
          <!-- Links Section -->
          <div class="col-md-4 text-center p-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="/resources/downloads/policy/" class="text-muted" style="text-decoration: none;">Privacy Policy</a></li>
              <li class="list-inline-item"><a href="/news/" class="text-muted" style="text-decoration: none;">News</a></li>
              <li class="list-inline-item"><a href="/resources/" class="text-muted" style="text-decoration: none;">Resources</a></li>
            </ul>
          </div>
    
          <!-- Social Media Icons Section -->
          <div class="col-md-4 text-center text-md-right">
            <a href="https://www.instagram.com/ana_virtualgroup/" class="text-muted me-3"><i class="bi bi-instagram"></i></a>
            <a href="https://x.com/nh_virtualgroup/" class="text-muted me-3"><i class="bi bi-twitter"></i></a>
            <a href="https://discord.gg/Bkd2eUfBn4" class="text-muted me-3"><i class="bi bi-discord"></i></a>
              
            </div>
          </div>
        </div>

        <div class="container mt-4">
            <div class="col text-center">
              <hr>
              <p class="text-muted"><strong>Powered by <a href="https://phpvms.net"> phpVMS</a> <i class="bi bi-c-circle"></i>  All Rights Reserved. ANA Virtual Group. We're a virtual airlines group, the real airlines can be found <a href="https://ana.co.jp">here.</a></strong></p>
            </div>
        </div>
      </div>
    </footer>
    {{-- FOOTER END --}}
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
{{-- Start of the required tags block. Don't remove these or things will break!! --}}
<script src="{{ public_mix('/assets/global/js/vendor.js') }}"></script>
<script src="{{ public_mix('/assets/frontend/js/vendor.js') }}"></script>
<script src="{{ public_mix('/assets/frontend/js/app.js') }}"></script>
@yield('scripts')

{{--
It's probably safe to keep this to ensure you're in compliance
with the EU Cookie Law https://privacypolicies.com/blog/eu-cookie-law
--}}
<script>
  window.addEventListener("load", function () {
    window.cookieconsent.initialise({
      palette: {
        popup: {
          background: "#edeff5",
          text: "#838391"
        },
        button: {
          "background": "#067ec1"
        }
      },
      position: "top",
    })
  });
</script>
{{-- End the required tags block --}}
</html>
