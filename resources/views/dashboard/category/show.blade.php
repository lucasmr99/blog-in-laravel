@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route("post.store") }}" method="POST">
      @csrf
         <div class="form-group">
            <label for="title">Title</label>
         <input readonly type="text" id="title" class="form-control" name="title" value="{{ $post->title }}">
         </div>
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
             <input readonly type="text" id="url_clean" class="form-control" name="url_clean" value="{{ $post->url_clean }}">
        </div>
        <div class="form-group">
             <label for="content">Contenido</label>
             <textarea readonly class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
        </div>
    </form>
@endsection





