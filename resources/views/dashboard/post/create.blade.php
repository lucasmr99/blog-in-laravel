@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route("post.store") }}" method="POST">
      @csrf
         <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" name="title">
         </div>
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
             <input type="text" id="url_clean" class="form-control" name="url_clean">
        </div>
        <div class="form-group">
             <label for="content">Contenido</label>
             <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection





