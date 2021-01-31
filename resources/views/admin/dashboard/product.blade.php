@extends('admin.layout')
@include('admin.dashboard.navbar')
@section('admin')

    <div class="container">
        <div class="p-4">
            <div class="container">

                @if(@session('update_product'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div class="flex-00-auto">
                            <i class="fa fa-fw fa-check"></i>
                        </div>
                        <div class="flex-fill ml-3">
                            <p class="alert-link mb-0">{{ @session('update_product')  }}</p>
                        </div>
                    </div>
                @endif

                @if(@session('delete_product'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <i class="fa fa-fw fa-check"></i>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="alert-link mb-0">{{ @session('delete_product') }}</p>
                            </div>
                        </div>
                @endif
                @if( @session('add_product'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <i class="fa fa-fw fa-check"></i>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="alert-link mb-0">{{ @session('add_product') }}</p>
                            </div>
                        </div>
                @endif

                <div class="col-md-12 mb-2 mt-2">
                    <a href="{{ route('dashboard.new_product')  }}" class="btn btn-success stretched-link">Nuevo Producto</a>
                </div>
            </div>
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th scope="col" >Posición</th>
                    <th scope="col" >Nombre</th>
                    <th scope="col" >Descripción</th>
                    <th scope="col" >Precio</th>
                    <th scope="col" >Referencia</th>
                    <th scope="col" >stock</th>
                    <th scope="col" >Editar</th>
                    <th scope="col" >Eliminar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->position }}</td>
                            <td>{{ $product->name_product  }}</td>
                            <td>{{ $product->description  }}</td>
                            <td style="font-size: 1rem">$ {{ $product->price }}</td>
                            <td><img src="{{ asset('../storage/app/'.$product->img1 )  }}" alt="img1" width="100px"></td>
                            <td><span style="font-size: 1rem" class="badge badge-pill badge-danger">{{ $product->stock  }}</span></td>
                            <td>
                                <a href="{{  route('product.byId',$product->id ) }}" class="btn btn-secondary">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Seguro que quieres Borrar el Producto:</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h5 class="modal-title">{{ $product->name_product  }}</h5>
                                            </div>
                                            <div class="modal-footer">
                                                    <a href="{{ route('product.destroy',$product->id)  }}" type="button" class="btn btn-danger">Si Borrar</a>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div> <!--End col-md-8-->

    </div> <!--End row-->
@endsection

