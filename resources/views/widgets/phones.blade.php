@foreach($phones as $phone)
<div class="phones">
  <div class="code code_{{$phone['code']}}"></div>
  <div><a href="tel:+38{{$phone['clear_number']}}">{{$phone['number']}}</a></div>
</div>
@endforeach
