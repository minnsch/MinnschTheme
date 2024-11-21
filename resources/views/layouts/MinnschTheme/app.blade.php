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
  {{-- End the required lines block --}}

  <link rel="shortcut icon" type="image/png" href="{{ public_asset('/assets/img/favicon.png') }}"/>
  <!-- GOOGLE FONT -->
  <link href="{{ public_asset('/assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <link href="{{ public_mix('/assets/frontend/css/now-ui-kit.css') }}" rel="stylesheet"/>
  <link href="{{ public_asset('/assets/frontend/css/styles.css') }}" rel="stylesheet"/>

  {{-- Start of the required files in the head block --}}
  <link href="{{ public_mix('/assets/global/css/vendor.css') }}" rel="stylesheet"/>
  @yield('css')
  @yield('scripts_head')
  {{-- End of the required stuff in the head block --}}

</head>
  <body>
<!-- NAVBAR -->
    @include('nav')
<!-- NAVBAR -->
  </body>
</html>
