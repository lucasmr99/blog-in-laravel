@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route("category.store") }}" method="POST">
      @csrf
         <div class="form-group">
            <label for="title">Title</label>
         <input readonly type="text" id="title" class="form-control" name="title" value="{{ $category->title }}">
         </div>
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
             <input readonly type="text" id="url_clean" class="form-control" name="url_clean" value="{{ $category->url_clean }}">
        </div>
    </form>
@endsection





