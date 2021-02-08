<div class="container">
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
                        <th class="scope">ID Técnico</th>
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
                            <td>{{ $solicitud->id_tecnico }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>