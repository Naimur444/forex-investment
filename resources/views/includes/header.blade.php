<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
  <link rel="icon" href="{{ asset("/assets/logo-dark.png") }}">
  <title>{{ $title }}</title>
  <style>
    @media only screen and (max-width: 1366px) and (max-height: 768px) {
.customnav {
  font-size: 12px;
}
}
</style>
</head>
<body class="flex flex-col h-screen">
<!--
Include Tailwind JIT CDN compiler
More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<!-- Custom style for toggle -->
<main class="flex-grow">

  <header class="flex items-center justify-between py-4 px-8" style="background-color:#FF8A0D;">
    <div class="flex items-center pl-10">
      <img src="{{asset('assets/logo-dark.png')}}" alt="Logo" class="h-24 w-auto">
      <span class="text-lg font-bold ml-2"></span>
    </div>
    <div class="hidden md:flex items-center">
      <a href="/" class="text-black-600 font-bold hover:text-gray-800 px-4 py-2 customnav"><i class="fa-solid fa-home"></i> HOME</a>
      <a href="/aboutus" class="text-black-600 font-bold hover:text-gray-800 px-4 py-2 customnav"><i class="fa fa-briefcase" aria-hidden="true"></i> ABOUT US</a>
      <a href="/offers" class="text-black-600 font-bold hover:text-gray-800 px-4 py-2 customnav"><i class="fa-solid fa-money-bill-trend-up"></i> OFFERS</a>
      <a href="/deposit" class="text-black-600 font-bold hover:text-gray-800 px-4 py-2 customnav"><i class="fa-solid fa-wallet"></i> DEPOSIT</a>
      <a href="/investment-plans" class="text-black-600 font-bold hover:text-gray-800 px-4 py-2 customnav"><i class="fa-solid fa-chart-simple"></i> INVESTMENT & INCOME</a>
      <a href="/free-income" class="text-black-600 font-bold hover:text-gray-800 px-4 py-2 customnav"><i class="fa fa-university" aria-hidden="true"></i> FREE INCOME</a>
    </div>
    <div class="flex items-center">
      @if (auth()->check())
        @if (auth()->check() && auth()->user()->admin)
        <button onClick="Javascript:window.location.href = '/forexadmin/dashboard';" class="bg-white hover:bg-yellow-400 text-gray-800 font-bold py-2 px-4 rounded mr-2"> <i class="fa fa-user"></i> Admin Dashboard</button>
        @else
          <button onClick="Javascript:window.location.href = '/profile';" class="bg-white hover:bg-yellow-400 text-gray-800 font-bold py-2 px-4 rounded mr-2"> <i class="fa fa-user"></i> PROFILE</button>
        @endif
      <form action="/logout" method="POST">
      <button type="submit" class="bg-white hover:bg-yellow-400 text-gray-800 font-bold py-2 px-4 rounded"> <i class="fa fa-power-off"></i> LOGOUT</button>
        @csrf
      </form>
      

      
      @else
      <a href="/login" class="bg-white hover:bg-yellow-400 text-gray-800 font-bold py-2 px-4 rounded"> <i class="fa fa-unlock"></i> LOGIN/REGISTER</a>
      @endif 
    </div>
  </header>