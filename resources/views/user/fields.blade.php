@csrf
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>rho_la</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
                <div class="row form-group">
                    <div class="col-12 ">
                       <a href="{{ route('user.index')}}" class="btn btn-primary btn-lg float-right">Atras</a>
                    </div>
                </div>

                <div class="row form-group">
                    <label for="first_name" class="col-4">Nombre</label>
                    <div class="col-8">
                        <input type="text" id="first_name" name="first_name" placeholder="Nombre" class="form-control @error('first_name') is-invalid @enderror"
                        @isset($item) value="{{ $item->first_name}}" @endisset>
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
                        <input type="text" id="last_name" name="last_name" placeholder="Apellido" class="form-control @error('last_name') is-invalid @enderror"
                        @isset($item) value="{{ $item->last_name}}" @endisset>
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
                        <input type="text" id="username" name="username" placeholder="Nombre de usuario" class="form-control @error('username') is-invalid @enderror"
                        @isset($item) value="{{ $item->username}}" @endisset>
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
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"
                        @isset($item) value="{{ $item->email}}" @endisset>
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
                            <option value="a" @isset($item) @if($item->role === 'a') selected @endif @endisset>Administador</option>
                            <option value="c" @isset($item) @if($item->role === 'c') selected @endif @endisset >Usuario</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-8 ">
                        <button class="btn btn-info float-right" type="submit" onclick="return confirm('Desea Guardar los cambios realisados ??')">
                            Guardar
                        </button>
                    </div>
                </div>