@include('layouts.header')
<!-- Main Page -->

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>
    @extends('layouts.footer')

<!-- JS Scripts -->
<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>
{{-- Add your JS files here --}}
</body>

</html>