<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <header class="row">
            @include('includes.header')
        </header><br>
        
        

        <div id="main" class="row">
            <div class="content">
                @yield('content')
            </div>
        </div>
    
        <footer class="row">
            @include('includes.footer')
        </footer>
    
    </div>
    
</body>
</html>