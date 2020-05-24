@csrf
                <div class="row form-group">
                    <label for="username" class="col-4">Nombre</label>
                    <div class="col-8">
                        <input type="text" id="first_name" name="first_name" placeholder="Nombre" class="form-control @error('first_name') is-invalid @enderror">
                        @error('first_name')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <label for="last_name" class="col-4">Apellido</label>
                    <div class="col-8">
                        <input type="text" id="last_name" name="last_name" placeholder="Apellido" class="form-control @error('last_name') is-invalid @enderror">
                        @error('last_name')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <label for="username" class="col-4">Nombre de Usuario</label>
                    <div class="col-8">
                        <input type="text" id="username" name="username" placeholder="Nombre de usuario" class="form-control @error('username') is-invalid @enderror">
                        @error('username')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <label for="email" class="col-4">Email</label>
                    <div class="col-8">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <label for="password" class="col-4">Contraseña</label>
                    <div class="col-8">
                        <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
               
                <div class="row form-group">
                    <label for="role" class="col-4">rol de Usuario</label>
                    <div class="col-8">
                        <select id="role" name="role" class="form-control">
                            <option value="a">Administador</option>
                            <option value="c">Usuario</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-8 ">
                        <button class="btn btn-info float-right" type="submit">
                            Guardar
                        </button>
                    </div>
                </div>