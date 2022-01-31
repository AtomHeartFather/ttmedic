
@extends('layout')

@section('page_title')Статья {{$article_number}}@endsection

@section('main_content')
    <h1>Статья {{ $article_number }}</h1>
    <p>● Навигационное меню. Активный пункт "Каталог статей".
● Обложка статьи
● Текст статьи
● Теги статьи
● Счетчик лайков статьи
● Форма комментария</p>
@endsection