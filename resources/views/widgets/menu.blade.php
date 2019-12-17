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
