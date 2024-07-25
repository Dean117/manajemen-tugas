@include('template.header')
@include('template.sidebar')
<main class="main" id="main">
    <div class="pagetitle">
        <h1></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        @yield('content')
    </section>
</main>
@include('template.footer')
