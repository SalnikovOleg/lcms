@extends('index')
@section('content')
<h1>{{$page->content->title}}</h1>

<div class="">
there will be include view for programs list
{{--include  programs --}}
<div>

<div class="">
{!!$page->content->text!!}
</div>

<div class="">
{!!$form!!}
</div>
@endsection
