@foreach($items as $item)
    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 text-center">
        <a href="{{$item['url']}}">
            <img src="{{$item['img']}}" alt="" class="img-responsive" />
            <br/>{{$item['name']}}
        </a>
    </div>
@endforeach
