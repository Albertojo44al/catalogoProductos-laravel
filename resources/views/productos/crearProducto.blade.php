@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h3>Registrar nuevo producto</h3>
        <form action="" method="post" ectype="multipart/form-data" class="col-lg-7">
            <div class="form-group">
                <label for="nombre">
                    Nombre
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre" >
            </div>

            <div class="form-group">
                <label for="precio">
                    Precio
                </label>
                <input type="text" class="form-control" id="precio" name="precio" >
            </div>

            <div class="form-group">
                <label for="nombre">
                    Nombre
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre" >
            </div>

            <div class="form-group">
                <label for="nombre">
                    Nombre
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre" >
            </div>
        </form>
    </div>
</div>

@endsection
