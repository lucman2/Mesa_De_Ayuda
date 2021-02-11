<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <a href="{{ route('equipo.index') }}" class="btn btn-sm" style="background-color: black; border-color:black; color:white">Volver</a>
        <br>

        <h2>ACTUALIZAR</h2>

        <!-- Formulario editar -->
        <form action="{{ route('equipo.update', $equipo->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <label for="nserie">Numero de serie: </label>
                <input type="text" class="form-control" name="nserie" value="{{ $equipo->nserie }}">
                <select name="tipo_equipo" id="tipo_equipo" class="form-select">
                    @if($equipo->tipo_equipo == "Escritorio")
                        <option value="Escritorio" selected>Escritorio</option>
                        <option value="Portatil" >Portatil</option>
                    @else
                        <option value="Portatil" selected>Portatil</option>
                        <option value="Escritorio" >Escritorio</option>
                    @endif
                </select>

                <input type="submit" value="EDITAR" class="btn btn-success">
            </form>
        </div>
        </div>
    </div>
</div>