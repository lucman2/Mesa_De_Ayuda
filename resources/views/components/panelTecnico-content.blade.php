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
                        <th class="scope">Motivo</th>
                        <th class="scope">Descripcion</th>
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
                            <td>{{ $solicitud->motivo }}</td>
                            <td>{{ $solicitud->descripcion }}</td>
                            <td>
                                <form action="{{ route('tecnico.edit', $solicitud->id) }}">
                                    <input type="submit" value="SOLUCIONAR" class="btn btn-md btn-primary">
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