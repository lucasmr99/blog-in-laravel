      @csrf
         <div class="form-group">
            <label for="title">Title</label>
         <input type="text" id="title" class="form-control" name="title" value="{{ old('title', $post->title) }}">
         </div>
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
             <input type="text" id="url_clean" class="form-control" name="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
        </div>

        <div class="form-group">
            <label for="ctegory_id">Categorias</label>
            <select class=" form-control" name="category_id" id="category_id" >
                @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }}  value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="posted">Posted</label>
            <select class=" form-control" name="posted" id="posted" >
                @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
            </select>
        </div>

        <div class="form-group">
             <label for="content">Contenido</label>
             <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>




