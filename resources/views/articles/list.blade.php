@extends('layouts.index')

@section('content')
<h1>{{$title}}</h1>

<div class="heading">
    <span class="">@lang('articles.heading') :</span>
    <span>{{$title}}</span>
</div>

<div class="heading_list">
List of articles sections<br>
list of articles without section
</div>

<div class="articlee_list">

</div>
@endsection
