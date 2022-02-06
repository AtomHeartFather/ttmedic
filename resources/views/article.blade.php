
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
                      <button type="button" id="ajaxLike" class="btn btn-sm btn-outline-secondary">{{ $article->likes }}</button>
                      {{ url('/article/like') }}
                    </div>
                  </div>
                </div>
            </div>
            @foreach ($tags as $tag)
                <a href="{{ $tag->url }}" class="btn btn-secondary my-2">{{ $tag->lable }}</a>
            @endforeach

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
        </script>
        <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxLike').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/article/like') }}",
                  method: 'post',
                  data: {
                     article_id: {{ $article->id }}
                  },
                  success: function(result){
                     $("#ajaxLike").text(result);
                  }});
               });
            });
        </script>
@endsection