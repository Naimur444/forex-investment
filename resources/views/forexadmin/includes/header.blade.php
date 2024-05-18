<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>

        <!-- vendor css -->
        <link href="{{ asset("/assets/admin/lib/font-awesome/css/font-awesome.css") }}" rel="stylesheet">
        <link href="{{ asset("/assets/admin/lib/Ionicons/css/ionicons.css") }}" rel="stylesheet">
        <link href="{{ asset("/assets/admin/lib/perfect-scrollbar/css/perfect-scrollbar.css") }}" rel="stylesheet">
        <link href="{{ asset("/assets/admin/lib/jquery-toggles/toggles-full.css") }}" rel="stylesheet">
        <link href="{{ asset("/assets/admin/lib/highlightjs/github.css") }}" rel="stylesheet">
        <link href="{{ asset("/assets/admin/lib/datatables/jquery.dataTables.css") }}" rel="stylesheet">
        <link href="{{ asset("/assets/admin/lib/select2/css/select2.min.css") }}" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{ asset("/assets/admin/css/amanda.css") }}">
  </head>
  <body>

    <div class="am-header">
      <div class="am-header-left">
        <a id="naviconLeft" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <a href="/" class="am-logo">Forexbd</a>
      </div><!-- am-header-left -->

      <div class="am-header-right">
        <form action="{{ route('forexadmin.logout') }}" method="POST">
            @csrf
            <button type="submit"><i class="icon ion-power"></i> Logout</button>
        </form>
      </div><!-- am-header-right -->
    </div><!-- am-header -->