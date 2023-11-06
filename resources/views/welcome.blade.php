@include('layouts.header')
@include('layouts.style')



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">




    <header>
        <nav>
            <!-- Add your navigation menu here -->
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Welcome to Your Application here</h1>
                <p>This is the main content of your homepage.</p>
                <a href="{{ route('login') }}">Please Login to Learn more</a>
            </div>
        </section>
    </main>

    </div>

     <!-- Footer -->
     @include('layouts.footer')
            <!-- End of Footer -->

</body>
</html>
