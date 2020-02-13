@extends('layouts.index')
@section('content')
<h1>{{$title}}</h1>

<div class="">
@include('forms.consult')
</div>

<div class="">
 <div class="address">
   <div class="cnt_icon, icon_address"></div>
   <div class="cnt_text">
    {{$address}}
   </div>
 </div>

 <div class="phones">
   <div class="cnt_icon, icon_phones"></div>
   <div class="cnt_text">
    @foreach($phones as $phone)
    <span class="">{{$phone->number}}</span><br/>
    @endforeach
   </div>
 </div>

 <div class="email">
   <div class="cnt_icon, icon_email"></div>
   <div class="cnt_text">
    {{$email}}
   </div>
 </div>
</div>

<div class="">
<br/>map<br/>
</div>

@endsection
