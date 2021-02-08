<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <!-- Formulario registro equipos -->
            <form action="{{ route('equipo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nserie">Numero de serie: </label>
                <input type="text" class="form-control" name="nserie">
                <select name="tipo_equipo" id="tipo_equipo" class="form-select">
                    <option value="Escritorio">Escritorio</option>
                    <option value="Portatil">Portatil</option>
                </select>

                <input type="submit" value="CREAR" class="btn btn-success">
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th class="scope">#</th>
                        <th class="scope">Numero de serie</th>
                        <th class="scope">Tipo de equipo</th>
                        <th class="scope">Fecha</th>
                        <th class="scope">&nbsp;</th>
                        <th class="scope">&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($equipos as $equipo)
                        <tr>
                           
                            <td>{{ $equipo->id }}</td>
                            <td>{{ $equipo->nserie }}</td>
                            <td>{{ $equipo->tipo_equipo }}</td>
                            <td>{{ $equipo->created_at }}</td>
                            
                            <td>
                                <form action="{{route('equipo.destroy', $equipo)}}" method="POST">
                                    @method('DELETE')
                                    @csrf 
                                    <input type="submit" value="ELIMINAR" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('equipo.edit', $equipo->id) }}"> 
                                    <input type="submit" value="EDITAR" class="btn btn-sm btn-success">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>