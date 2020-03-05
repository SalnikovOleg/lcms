{{-- widget menu, method list . view link list --}}
@foreach($items as $item)
<div><a href="/{{$item['url']}}">{{$item['name']}}</a></div>
@endforeach
