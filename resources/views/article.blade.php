
@extends('layout')

@section('page_title')Статья @endsection

@section('main_content')
    <h1>Статья {{ $article->id }}</h1>
    <p>{{ $article}}</p>
@endsection