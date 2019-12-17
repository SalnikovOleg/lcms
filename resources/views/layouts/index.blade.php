@include('layouts.header') 
    <body>
	    <div id="headaContainer" class="">
            headContainer's blocks columns<br>
      
            <div id="menuRow" class="">
            {!!$MAIN_MENU!!}
            </div> 
        </div>

        <div id="contentacContainer" class="">
            @yield('content')
        </div>

        <div id="footContainer" class="">
            footContainer's blocks loop by footer's columns 
        
        </div>
    </body>
</html>

