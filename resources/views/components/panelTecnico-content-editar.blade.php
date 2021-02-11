<div class="container">
        <a href="{{ route('tecnico.index') }}" class="btn btn-sm" style="background-color: black; border-color:black; color:white">Volver</a>
        <br>
        <br>
    <div class="row">
    <form action="{{ route('solicitud.update', $solicitud->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="ACTUALIZAR" class="btn btn-md btn-success">
    </form>
    </div>
</div>