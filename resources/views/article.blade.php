
@extends('layout')

@section('page_title'){{ $article->title }}@endsection

@section('main_content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $tags }}</p>

    Компоненты:
    ● Навигационное меню. Активный пункт "Каталог статей".
    ● Обложка статьи
    ● Текст статьи
    ● Теги статьи
    ● Счетчик лайков статьи
    ● Форма комментария


            <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height: 225px; width: 600px; display: block;" src="{{ $article->cover }}" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">{{ $article->text }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                  </div>
                </div>
            </div>
            @foreach ($tags as $tag)
                <a href="{{ $tag->url }}" class="btn btn-secondary my-2">{{ $tag->lable }}</a>
            @endforeach


@endsection