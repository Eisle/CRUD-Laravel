<!DOCTYPE html>
<html lang="en">
<head>
    @include('master.headMaster')
</head>
<body>
    <!-- wrapper -->
    <div id="wrapper">
        
        <!-- content -->
        <div id="content">
            @include('master.navbarMaster')

            <!-- container -->
            <div class="container">
                @yield('content')
            </div>
            <!-- end container -->
        </div>
        <!-- end content -->

    </div>
    <!--end wrapper  -->
    
    @include('master.jsMaster')
</body>
</html>