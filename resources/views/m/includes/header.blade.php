<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="theme-color" content="#FF8A0D">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>{{ $title }}</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset("/assets/logo-dark.png") }}">
  <link rel="apple-touch-icon" href="{{ asset("/assets/frontend/img/icons/icon-96x96.png") }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("/assets/frontend/img/icons/icon-152x152.png") }}">
  <link rel="apple-touch-icon" sizes="167x167" href="{{ asset("/assets/frontend/img/icons/icon-167x167.png") }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/frontend/img/icons/icon-180x180.png") }}">

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset("/assets/frontend/style.css") }}">

  <!-- Web App Manifest -->
  <link rel="manifest" href="{{ asset("/assets/frontend/manifest.json") }}">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>

  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <!-- Header Content -->
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper">
          <a href="{{ url("/") }}">
            <img src="{{ asset("/assets/logo.png") }}" alt="">
          </a>
        </div>

        <!-- Navbar Toggler -->
        <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
          aria-controls="affanOffcanvas">
          <span class="d-block"></span>
          <span class="d-block"></span>
          <span class="d-block"></span>
        </div>
      </div>
    </div>
  </div>