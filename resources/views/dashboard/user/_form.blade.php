      @csrf
         <div class="form-group">
            <label for="name">Nombre</label>
         <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $user->name) }}">
         </div>
         <div class="form-group">
            <label for="email">Email</label>
         <input type="text" id="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
         </div>

         @if ($pasw)
            <div class="form-group">
               <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" value="{{ old('password', $user->password) }}">
            </div>
         @endif

        <button type="submit" class="btn btn-primary">Enviar</button>




