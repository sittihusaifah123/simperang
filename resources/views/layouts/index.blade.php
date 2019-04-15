<!DOCTYPE html>
<html>

<head>
  @include("layouts.header")
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    @include("layouts.topbar")
    <!-- #Top Bar -->
    @include("layouts.sidebar")

    @yield("content")
@include("layouts.footer")
</body>

</html>
