@foreach($items as $item)
    <a href="{{$item['url']}}"><img src="{{$item['img']}}" alt="{{$item['name']}}"></a>
@endforeach

