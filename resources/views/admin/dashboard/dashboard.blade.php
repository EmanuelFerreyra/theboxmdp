@extends('admin.layout')
    @include('admin.dashboard.navbar')
@section('admin')

    <div class="container mt-4">
        <div class="row">

            <div class="col-md-4 mt-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Productos</h5>
                        <div class="card-body text-center">
                            <i class="fab fa-product-hunt" style="font-size: 6rem;"></i>
                        </div>
                            <a href="{{ route('product')  }}" class="btn btn-primary text-center">ir a Productos</a>
                    </div>
                 </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Mensajes</h5>
                        <div class="card-body text-center">
                            <i class="fas fa-envelope-open-text" style="font-size: 6rem;"></i>
                        </div>
                        <a href="{{ route('admin.message')  }}" class="btn btn-primary">ir a Mensajes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">THEBOX</h5>
                        <div class="card-body text-center">
                            <i class="fas fa-globe" style="font-size: 6rem;"></i>
                        </div>
                        <a href="https://theboxmdp.000webhostapp.com/" target="_blank" class="btn btn-primary">ir a Sitio Web</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Mi cuenta</h5>
                        <div class="card-body text-center">
                            <i class="fas fa-user-edit" style="font-size: 6rem;"></i>
                        </div>
                        <a href="actualizar/" target="_blank" class="btn btn-primary">Actualizar</a>
                    </div>
                </div>
            </div>

            <!--            fin del row -->
        </div>
    </div>

@endsection

