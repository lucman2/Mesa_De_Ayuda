<div class="container">
    <div class="row">
        <div class="col-sm-12">

        <a href="{{ route('encargado.index') }}">Volver</a>
        <br>

        <h2>ACTUALIZAR</h2>

        <form action="{{ route('encargado.update', $solicitud->id) }}" method="POST" 
            enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <!--Asunto de la solicitud-->
                    <label for="asunto"><strong>ASUNTO:&nbsp;</strong></label>
                    <input type="text" name="asunto" id="asunto" class="form-control" value="{{ $solicitud->asunto }}" required> 
                </div>

                <div class="form-group">

                    <!-- Trabajo a realizar -->
                    <select class="form-select" id="trabajo" name="trabajo">
                        <!--<option selected>Elija el trabajo a realizar</option>
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>-->

                        @if($solicitud->trabajo == "Software")
                            <option value="Software" selected>Software</option>
                            <option value="Hardware">Hardware</option>
                        @else
                            <option value="Hardware" selected>Hardware</option>
                            <option value="Software">Software</option>
                        @endif

                    </select>
                    
                </div>

                <div class="form-group">
                    <!-- Motivo de la solicitud !-->
                    <textarea name="motivo" id="motivo" cols="30" rows="10" class="form-control" required>
                    {{ $solicitud->motivo }}
                    </textarea>
                </div>

                <div class="form-group">
                    <!-- Tipo de equipo -->
                    <select class="form-select" name="equipo" id="equipo">
                        <!--<option selected>Tipo de equipo</option>
                        <option value="Escritorio">Escritorio</option>
                        <option value="Portatil">Portatil</option>-->
                        @if($solicitud->equipo == "Escritorio")
                            <option value="Escritorio" selected>Escritorio</option>
                            <option value="Portatil">Portatil</option>
                        @else
                            <option value="Portatil" selected>Portatil</option>
                            <option value="Escritorio">Escritorio</option>
                        @endif
                    </select>

                </div>

                <input type="submit" value="ACTUALIZAR" class="btn btn-sm btn-success">

            </form>
        </div>
    </div>
</div>