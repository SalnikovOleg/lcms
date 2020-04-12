@extends('index')

@section('content')
<h1>{{$page->content->name}}</h1>

<div class="">
{{$page->content->text}}
</div>
@endsection
