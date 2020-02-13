@include('layouts.header') 
<body>
<div class="container">
	<div class="row" id="topHeadLine">
        <div class="col-md-12"> 
            headContainer's blocks columns<br>
        </div>  
    </div><!--/row headContainer-->

    <div class="row" id="menuRow">
        <div class="col-md-12">
            {!!$MAIN_MENU!!}
        </div>
    </div><!-- /row menuRow--> 

    <div class="row" id="contentBlock">
        <div class="col-md-9 col-md-push-3" id="contentContainer">
            @yield('content')
        </div>

        <div class="col-md-3 col-md-pull-9" id="leftContainer">
            {!!$LEFT_COL!!}
        </div>
    </div><!-- /row contentBlock -->

    <div clase="row" id="footContainer">
        <div class="col-md-12">
           footContainer's blocks loop by footer's columns
        </div>
    </div><!-- /row footerContainer -->

</div><!--/container-->
</body>
</html>

