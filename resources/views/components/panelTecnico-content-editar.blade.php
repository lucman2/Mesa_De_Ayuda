<div class="container">
    <div class="row">
    <form action="{{ route('solicitud.update', $solicitud->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            <input type="submit" value="ACTUALIZAR" class="btn btn-md btn-success">
    </form>
    </div>
</div>