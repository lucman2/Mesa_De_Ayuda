<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <form action="{{ route('login.store') }}" method="POST"
            enctype="multipart/form-data">
                @csrf
                <input type="text" name="email" id="email">
                <input type="text" name="password" id="password">
                <input type="submit" value="INICIAR SESION">
            </form>
        </div>
    </div>
</div>