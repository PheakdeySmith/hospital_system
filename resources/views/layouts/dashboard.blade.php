<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.dashboard.head')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
            @include('components.dashboard.header_mobile')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
            @include('components.dashboard.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
                @include('components.dashboard.header_desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
                @yield('content')
            <!-- END MAIN CONTENT-->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    {{-- Javascript Start--}}
        @include('components.dashboard.javascript')
        @yield('additional-scripts')
    {{-- Javaseript End --}}

</body>

</html>
<!-- end document-->
