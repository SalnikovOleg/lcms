@include('layouts.header')

<body>

@include('layouts.top')

<div class="container">
    <div class="row" id="contentBlock">
        <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
            @yield('content')
        </div>

        <div class="col-sm-5 col-md-3 col-lg-3 hidden-xs">
            {!!$LEFT_COL!!}
        </div>
    </div><!-- /row contentBlock -->

    <div class="row programm">
        {!!$BOTTOM!!}
    </div>
</div><!--/container-->

@include('layouts.footer')

</body>
</html>
