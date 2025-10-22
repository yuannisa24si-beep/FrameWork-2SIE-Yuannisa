<!--

=========================================================
Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
Copyright 2021 Themesberg (https://www.themesberg.com)
License (https://themesberg.com/licensing)

Designed and coded by https://themesberg.com

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    @include('layouts.admin.css')

    {{-- Start CSS --}}
    <!-- Volt CSS -->

    {{-- End CSS --}}
</head>

<body>
    {{-- Start Sidebar --}}
    @include('layouts.admin.sidebar')

    {{-- End Sidebar --}}

    <main class="content">
    @include('layouts.admin.header')
        {{-- Start Header --}}

        {{-- End Header --}}

        {{-- Start Content --}}
         @yield('content')
        {{-- End Content --}}

        @include('layouts.admin.footer')
        {{-- Start Footer --}}

        {{-- End Footer --}}
    </main>

    @include('layouts.admin.js')
    {{-- Start JS --}}
    <!-- Core -->

    {{-- End JS --}}
</body>

</html>
