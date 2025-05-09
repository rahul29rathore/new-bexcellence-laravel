@include('include.13sqft-header')
<!-- Main Page -->

    <!-- Sidebar -->
    @include('include.13sqft-sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>
    @extends('include.13sqft-footer')

<!-- JS Scripts -->
<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>
{{-- Add your JS files here --}}
</body>

</html>