<div class="">
@foreach($phones as $phone)
<div class="">
  <div class="icons icon_{{$phone->code}}"></div>
  <div class="">{{$phone->number}}</div>
</div>
@endforeach
</div>
