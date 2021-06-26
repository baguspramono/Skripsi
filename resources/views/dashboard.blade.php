<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- navbar -->
            @include('layouts.navbar')
             <!-- sidebar -->
            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Blank Page</h1>
                    </div>

                    <div class="section-body">
                    </div>
                </section>
            </div>
             <!-- footer -->
            @include('layouts.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    @include('layouts.script')
</body>

</html>