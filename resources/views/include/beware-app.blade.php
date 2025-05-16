@include('include.beware-header')
<!-- Main Page -->

    <!-- Sidebar -->
    @include('include.beware-sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>
    @extends('include.beware-footer')

<!-- JS Scripts -->
<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>
{{-- Add your JS files here --}}
</body>

</html>