<!DOCTYPE html>
<html lang="en">

@include('admin.common.head')

<body>
    @include('admin.common.loader')
    <div class="container-scroller">
        <!-- Siderbar -->
        @include('admin.common.sidebar')

        <div class="container-fluid page-body-wrapper">
            <!-- partial hearder -->
            @include('admin.common.header')

            <div class="main-panel">
                <!-- Begin Page Content -->
                @yield('content')
                @include('admin.common.footer')
            </div>
            <!-- /.container-fluid -->

        </div>
    </div>

    <!-- Footer -->
    @include('admin.common.footerjs')

    @yield('script')

</body>

</html>
