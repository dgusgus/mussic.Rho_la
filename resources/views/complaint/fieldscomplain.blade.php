@csrf
                <div class="row form-group">
                    <div class="col-12 ">
                       <a href="{{ route('complaint.indexcomplain')}}" class="btn btn-primary btn-lg float-right">Atras</a>
                    </div>
                </div>

                <div class="row form-group">
                    <label for="name" class="col-4">Nombre</label>
                    <div class="col-8">
                        <input type="text" id="name" name="name" placeholder="Nombre" class="form-control ">@error('name') is-invalid @enderror
                        @isset($item) value="{{ $item->name}}" @endisset
                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <label for="complain_text" class="col-4">Denuncia</label>
                    <div class="col-8">
                        <textarea type="text" id="complain_text" name="complain_text"></textarea>
    
                        @isset($item) value="{{ $item->complain_text }}" @endisset
                        @error('complain_text')
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