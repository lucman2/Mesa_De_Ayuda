<div class="container">
    <!-- Seccion crear solicitudes-->
    <div class="row">

        <div class="col-sm-12">
            <h2>CREAR SOLICITUD</h2>
            <br>
            <!--Formulario creacion de solicitudes -->
            <form action="{{ route('solicitud.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <!--Asunto de la solicitud-->
                    <label for="asunto"><strong>ASUNTO:&nbsp;</strong></label>
                    <input type="text" name="asunto" id="asunto" class="form-control">
                </div>

                <div class="form-group">

                    <!-- Trabajo a realizar -->
                    <select class="form-select" id="trabajo" name="trabajo">
                        <option selected>Elija el trabajo a realizar</option>
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                    </select>
                    
                </div>

                <div class="form-group">
                    <!-- Motivo de la solicitud !-->
                    <textarea name="motivo" id="motivo" cols="30" rows="10" class="form-control" required>

                    </textarea>
                </div>

                <div class="form-group">
                    <!-- Tipo de equipo -->
                    <select class="form-select" name="equipo" id="equipo">
                        <option selected>Tipo de equipo</option>
                        <option value="Escritorio">Escritorio</option>
                        <option value="Portatil">Portatil</option>
                    </select>

                </div>

                <input type="submit" value="CREAR" class="btn btn-sm btn-success">

            </form>
        </div>
    </div>

    <!-- Seccion ver solicitudes-->
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th class="scope">#</th>
                        <th class="scope">Nombre</th>
                        <th class="scope">Tipo</th>
                        <th class="scope">Fecha</th>
                        <th class="scope">Estado</th>
                        <th class="scope">Descripcion</th>
                        <th class="scope">&nbsp;</th>
                        <th class="scope">&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($solicitudes as $solicitud)
                        <tr>
                           
                            <td>{{ $solicitud->id }}</td>
                            <td>{{ $solicitud->asunto }}</td>
                            <td>{{ $solicitud->trabajo }}</td>
                            <td>{{ $solicitud->created_at }}</td>
                            <td>{{ $solicitud->estado }}</td>
                            <td>{{ $solicitud->descripcion }}</td>
                            
                            <td>
                                <form action="{{route('solicitud.destroy', $solicitud)}}" method="POST">
                                    @method('DELETE')
                                    @csrf 
                                    <input type="submit" value="ELIMINAR" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('solicitud.edit', $solicitud->id) }}"> 
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
