@extends('admin.layout')
@include('admin.dashboard.navbar')
@section('admin')
    <div class="container mt-4">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Configuracion de mi Cuenta</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Luego de modificar los datos presiona el boton actualizar para guardar los cambios.
                    </p>
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Modificar</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav nav-pills flex-column font-size-sm push" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#administrador" role="tab" aria-controls="administrador" aria-selected="true">
                        <span>
                        <i class="fa fa-fw fa-inbox mr-1"></i> Administrador
                        </span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#clave" role="tab" aria-controls="clave" aria-selected="false">
                        <span>
                        <i class="fa fa-fw fa-star mr-1"></i> Contraseña
                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="myTabContent">
                        <!--                        Actualizar Datos de admin-->
                        <div class="tab-pane fade show active" id="administrador" role="tabpanel" aria-labelledby="home-tab">
                            <form action="updateUsuario.php"  method="POST" class="tab-content" id="myTabContent">
                                <div class="form-group text-center">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Modificar Usuario</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-ltf-email">Administrador </label>
                                    <input type="text" class="form-control" id="example-ltf-email" name="usuario" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="example-ltf-password">Email</label>
                                    <input type="text" class="form-control" id="example-ltf-password" name="email" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <!--                        Actualizar Claves-->
                        <div class="tab-pane fade" id="clave" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="updatePassword.php"  method="POST" class="tab-content" id="myTabContent">
                                <div class="form-group text-center">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Cambiar Clave</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-ltf-password">Clave Actual</label>
                                    <input type="text" class="form-control" id="example-ltf-password" name="claveActual">
                                </div>
                                <div class="form-group">
                                    <label for="example-ltf-password">Nueva Clave</label>
                                    <input type="text" class="form-control" id="example-ltf-password" name="nuevaClave">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
