<div class="container">
<div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th class="scope">#</th>
                        <th class="scope">Mensaje</th>
                        <th class="scope">ID Solicitud</th>
                        <th class="scope">Fecha</th>
                        <th class="scope">&nbsp;</th>
                        <th class="scope">&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($notificaciones as $notificacion)
                        <tr>
                           
                            <td>{{ $notificacion->id }}</td>
                            <td>{{ $notificacion->mensaje }}</td>
                            <td>{{ $notificacion->id_solicitud }}</td>
                            <td>{{ $notificacion->created_at }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>