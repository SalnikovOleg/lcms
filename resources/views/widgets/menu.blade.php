<nav class="navbar navbar-default" role="navigation">
    <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
          <button type="button" class="navbar-toggle"i
                data-toggle="collapse" data-target="#menu">
				<span class="sr-only">Навигация по сайту</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
		</div>

		<!--Collect the nav links, forms, and other content for toggling-->
        <div id="menu" class="collapse navbar-collapse">

@foreach($items as $item)
<div class="" id="m{{$item['id']}}" node="{{$item['node']}}">
{{$item['name']}} ({{$item['id']}})
</div>
@if($item['node'])
<div class="" parent="$item['id']">
    @foreach($item['items'] as  $subitem)
    <div class="" id="{{$subitem['id']}}" node="{{$subitem['node']}}">
    {{$subitem['name']}} ({{$subitem['id']}})
    </div>
    @endforeach
</div>
@endif
@endforeach

        </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-->
</nav>
