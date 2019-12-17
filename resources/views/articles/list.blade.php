@extends('layouts.index')
{{-- there are two way to set meta tags : push to stack meta and pass in array $meta
@push('meta')
        <title>{{($page->content->meta_title?$page->content->meta_title .' - ' : '') . config('app.name')}}</title>
        <meta name="description" content="{{ $page->content->meta_description}}">
        <meta name="keywords" content="{{ $page->content->meta_keywords}}">
@endpush
--}}
@section('content')
<h1>{{$page->content->name}}</h1>

<div class="heading">
    <span class="">@lang('articles.heading') :</span>
    <span>{{$page->content->name}}</span>
</div>

<div class="heading_list">
@foreach($items as $item)
@if($item->node == 1)
<div class="">
    <span class="">
    @if ($item->content->img || $item->img)
        "{{config('img.articles_preview')}}{{$item->content->img ? $item->content->img : $item->img}}"
    @endif
    </span>
    <span class="">{{$item->content->name}}</span>
</div>
@endif
@endforeach
</div>

<div class="articles_list">
@foreach($items as $item)
@if($item->node == 0)
<div class="">
    <div class="">
    </div>
    <div class="">
        <span class="name">{{$item->content->name}}</span>
        <span class="descr">{{$item->content->description}}</span>
    </div>
    <div class="">
        <a class="" href="{{route('articles')}}/{{$item->url}}">
            @lang('articles.more')
        </a>
    </div>
</div>
@endif
@endforeach
</div>
@endsection
