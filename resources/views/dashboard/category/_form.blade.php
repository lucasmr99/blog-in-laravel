      @csrf
         <div class="form-group">
            <label for="title">Title</label>
         <input type="text" id="title" class="form-control" name="title" value="{{ old('title', $category->title) }}">
         </div>
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
             <input type="text" id="url_clean" class="form-control" name="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>




