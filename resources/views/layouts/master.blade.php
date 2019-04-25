<!DOCTYPE html>
<html>

<head>
    @include('layouts.moduls.head')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    @include('layouts.moduls.loader')
    <!-- #END# Page Loader -->

    {{-- header --}}
    @include('layouts.moduls.header')
    {{-- end header --}}
    
    <section>
        <!-- Left Sidebar -->
        @include('layouts.moduls.sidebar-left')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('layouts.moduls.sidebar-right')
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        @yield('content')
    </section>

    @include('layouts.moduls.script')
</body>

</html>
