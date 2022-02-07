
@extends('layout')

@section('page_title'){{ $article->title }}@endsection

@section('main_content')
    <h1>{{ $article->title }}</h1>

            <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height: 225px; width: 600px; display: block;" src="{{ $article->cover }}" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">{{ $article->text }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" id="ajaxLike" class="btn btn-sm btn-outline-secondary">{{ $article->likes }}</button>
                    </div>
                  </div>
                </div>
            </div>
            @foreach ($tags as $tag)
                <a href="{{ $tag->url }}" class="btn btn-secondary">{{ $tag->lable }}</a>
            @endforeach


            <div id="CommentOk" class="mt-5 d-flex align-items-center justify-content-center border" style="display: none !important; height:200px">
                <h3>Ваше сообщение успешно отправлено!</h3>
            </div>
            <div id="CommentForm" class="container mt-5">
                 <h3>Комментарий</h3>
                 <form id="myForm">
                    <div class="form-group">
                      <label for="subject">Тема сообщения</label>
                      <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group mb-3">
                      <label for="body">Текст сообщения</label>
                      <input type="text" class="form-control" id="body">
                    </div>
                    <button class="btn btn-primary" id="ajaxComment">Отправить</button>
                  </form>
            </div>


            <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                   crossorigin="anonymous">
            </script>
            <script>
             jQuery(document).ready(function(){



                jQuery('#ajaxLike').click(function(e){
                   e.preventDefault();
                   $.ajaxSetup({
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                                });
                   jQuery.ajax({
                                url: "{{ url('/article/like') }}",
                                method: 'post',
                                data: {
                                        article_id: {{ $article->id }}
                                        },
                                success: function(result){
                                                            $("#ajaxLike").text(result);
                                                        }
                                });
                   });



                jQuery('#ajaxComment').click(function(e){
                   e.preventDefault();
                   $.ajaxSetup({
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                                });
                   jQuery.ajax({
                                url: "{{ url('/article/comment') }}",
                                method: 'post',
                                data: {
                                        article_id: {{ $article->id }},
                                        subject: jQuery('#subject').val(),
                                        body: jQuery('#body').val()
                                        },
                                success: function(result){
                                                            $("#CommentForm").hide();
                                                            $("#CommentOk").show();
                                                            
                                                        }
                                });
                   });



                });
            </script>
@endsection