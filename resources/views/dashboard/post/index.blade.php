@extends('dashboard.master')

@section('content')

<a class=" btn btn-success my-2" href="{{ route('post.create') }}">Crear</a>
<table class=" table ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Posteado</th>
            <th scope="col">creacion</th>
            <th scope="col">Actualizacion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->posted }}</td>
            <td>{{ $post->created_at->format('d-m-y') }}</td>
            <td>{{ $post->updated_at->format('d-m-y')}}</td>
            <td>-</td>
        @endforeach
    </tbody>
</table>

@endsection

