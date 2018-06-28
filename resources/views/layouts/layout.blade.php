<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
@include('layouts.head')

<!-- BEGIN BODY -->
<body>

@include('layouts.header')

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    @include('layouts.sidebar')
    <!-- BEGIN CONTAINER -->
    <div class="container">
        @yield('content')

    </div>
    <!-- END CONTAINER -->
</div>
<!-- END PAGE CONTAINER -->

@include('layouts.footer')

@include('layouts.copyright')


@yield('custom_css_js')

<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>