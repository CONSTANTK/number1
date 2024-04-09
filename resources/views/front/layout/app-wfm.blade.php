<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>West 97.5 FM</title>
    @include('front.common.meta')
</head>

<body>
@include('front.layout.loader')
<!-- ======= Header ======= -->
@include('front.layout.header')

<!-- ======= Banner ======= -->

<!-- ======= Hero Section ======= -->
@include('front.layout.banner')

<!-- ======= Main Content ======= -->
<main>
    @yield('content')
</main>

<!-- ======= Footer ======= -->
@include('front.layout.footer')
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
@include('front.common.scripts')

</body>

</html>
