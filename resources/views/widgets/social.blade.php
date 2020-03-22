<div class="social">
@foreach($items as $item)
    <a class="{{$item['name']}}" href="{{$item['url']}}" target="_blank">&nbsp{{$item['name']}}</a>
@endforeach
</div>
