
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(isset($meta['title']))
        <title>{{(isset($meta['title']) ? $meta['title'] .' - ' : '') . config('app.name')}}</title>
        <meta name="description" content="{{isset($meta['description']) ? $meta['description'] : ''}}">
        <meta name="keywords" content="{{isset($meta['keywords']) ? $meta['keywords'] : ''}}">
    @endif
<link rel="stylesheet" href="/css/bootstrap-min.css">
<link rel="stylesheet" href="/css/index.css">
    @stack('meta')
    @stack('css')
    @stack('js')
    </head>
