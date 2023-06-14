

@include('includes/head')
<body>
    <div class="containerxl mx-auto">

        <header class="row">

            @include('includes/header')
        
        </header>

        <div id="main" class="row">
            <div class="w-full px-4">
                <div class="overflow-x-auto">
                    @yield('content')
                </div>
            </div>
        </div>
       
<div>

    @include('includes.footer')

</div>
        
        



    </div>
    <script src="app.js"></script>
</body>
</html>