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
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->posted }}</td>
            <td>{{ $post->created_at->format('d-m-y') }}</td>
            <td>{{ $post->updated_at->format('d-m-y')}}</td>
            <td>
                <a href="{{ route('post.show',$post->id) }}" class=" btn btn-primary">Ver</a>
                <a href="{{ route('post.edit',$post->id) }}" class=" btn btn-success">Editar</a>
                <button class="btn btn-danger " data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    {{ $posts->links() }}
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Deseas borrar el Post?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          <form id="formDelete" data-action="{{ route('post.destroy', 0) }}" method="POST" action="{{ route('post.destroy', 0) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var action = $('#formDelete').attr('data-action').slice(0,-1)

            action = action +  id

            $('#formDelete').attr('action', action);

            var modal = $(this)
            modal.find('.modal-title').text('Borrar el post con ID: ' + id)

        })
    }
  </script>
@endsection

