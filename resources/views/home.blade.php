@extends('layout')

@section('page_title')Главная страница@endsection

@section('main_content')
    <p>Последние добавленные статьи. 6 миниатюр статей в сортировке LIFO</p>
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                Featured post
              </h3>
              
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="https://via.placeholder.com/200x250.png" data-holder-rendered="true">
          </div>
@endsection