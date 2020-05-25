@csrf
                <div class="row form-group">
                    <div class="col-12 ">
                       <a href="{{ route('user.index')}}" class="btn btn-primary btn-lg float-right">Atras</a>
                    </div>
                </div>

                <div class="row form-group">
                    <label for="muscic_name" class="col-4">Nombre</label>
                    <div class="col-8">
                        <input type="text" id="muscic_name" name="muscic_name" placeholder="Nombre" class="form-control @error('muscic_name') is-invalid @enderror"
                        @isset($item) value="{{ $item->muscic_name}}" @endisset>
                        @error('muscic_name')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <label for="avatar" class="col-4">Avatar</label>
                    <div class="col-8">

                        <input type="file" name="avatar">
    
                        @isset($item) value="{{ $item->avatar}}" @endisset>
                        @error('avatar')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <label for="song" class="col-4">Tema musical</label>
                    <div class="col-8">
                    
                        <input type="file" name="song">
                        
                        @isset($item) value="{{ $item->song}}" @endisset>
                        @error('song')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-8 ">
                        <button class="btn btn-info float-right" type="submit" onclick="return confirm('Desea Guardar los cambios realisados ??')">
                            Guardar
                        </button>
                    </div>
                </div>