<!DOCTYPE html>
<html lang="en">


@include('call_attendant.callattendantcommon.head')

<body>
    <div class="container-scroller">
        <div class="horizontal-menu">
            @include('call_attendant.callattendantcommon.header')

            {{-- <div class="container-fluid page-body-wrapper"> --}}
            <!-- partial hearder -->
            @include('call_attendant.callattendantcommon.loader')
            @include('call_attendant.callattendantcommon.sidebar')

            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->

            {{-- @include('common.footer') --}}
            {{-- </div> --}}
        </div>

        <!-- Footer -->
        @include('call_attendant.callattendantcommon.footerjs')
    </div>


</body>

</html>
