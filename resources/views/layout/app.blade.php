<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>

<body>
    @include('layout.partials.header')
    @include('layout.partials.nav')
  
    <main role="main">
        @include('layout.partials.modal-login')
  
        <div class="content">
            @yield('content')
        </div>

    </main>
  
    @include('layout.partials.footer')
    <!-- JavaScript -->
    @include('layout.partials.footer-scripts')
</body>
</html> 