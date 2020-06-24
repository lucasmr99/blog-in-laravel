@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route("category.store") }}" method="POST">
      @csrf
         <div class="form-group">
            <label for="name">Nombre</label>
         <input readonly type="name" id="name" class="form-control" name="name" value="{{ $user->name }}">
         </div>
         <div class="form-group">
            <label for="email">Email</label>
         <input readonly type="email" id="email" class="form-control" name="email" value="{{ $user->email }}">
         </div>

    </form>
@endsection





