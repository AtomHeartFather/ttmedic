
@extends('layout')

@section('page_title')Список статей@endsection

@section('main_content')
    @foreach ($articles as $article)
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                {{ $article->title }}
              </h3>
              
              <p class="card-text mb-auto">{{ Str::limit($article->text, 100) }}</p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x100?theme=thumb" alt="Thumbnail [200x50]" style="width: 200px; height: 100px;" src="https://via.placeholder.com/200x100.png" data-holder-rendered="true">
          </div>
    @endforeach
    {{ $articles->links() }}
@endsection