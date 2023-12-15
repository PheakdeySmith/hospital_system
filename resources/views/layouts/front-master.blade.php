<!DOCTYPE html>
<html>

<head>
  @include('components.front.head')
</head>

<body>

  @yield('content')
  <!-- info section -->
        @include('components.front.info')
  <!-- end info_section -->


  <!-- footer section -->
        @include('components.front.footer')
  <!-- footer section -->

  <!-- Javascript section -->
        @include('components.front.javascript')
  <!-- Javascript section -->
</body>

</html>
