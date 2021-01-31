@extends('admin.layout')
@include('admin.dashboard.navbar')
@section('admin')



<div class="content  container">

    @if( @session('update_img'))
        <div class="alert alert-success">
            <strong>  {{ @session('update_img')  }} </strong>
        </div>
    @endif


    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Detalle de Producto</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="one-ecom-product-id">Posicion en la Tienda</label>
                            <input type="text" class="form-control" id="one-ecom-product-name" name="position" value="{{ $product->position }}">
                        </div>
                        <div class="form-group">
                            <label for="one-ecom-product-name">Nombre</label>
                            <input type="text" class="form-control" id="one-ecom-product-name" name="name_product" value="{{ $product->name_product  }}">
                        </div>
                        <div class="form-group">
                            <label for="one-ecom-product-description-short">Descripcion</label>
                            <textarea class="form-control" id="one-ecom-product-description-short" name="description" rows="4">{{ $product->description  }}</textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="one-ecom-product-price">Precio ($)</label>
                                <input type="text" class="form-control" id="one-ecom-product-price" name="price" value="{{ $product->price }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="one-ecom-product-stock">Stock</label>
                                <input type="text" class="form-control" id="one-ecom-product-stock" name="stock" value="{{ $product->stock  }}">
                            </div>
                        </div>

                        <style>
                            #img{
                                transform: scale(1);
                                transition: all 0.3s;
                            }
                            #img:hover{
                                transform: scale(0.9);
                            }
                        </style>
                        <!-- SOLUCIONAR DELETE DE IMAGENES -->
                        <div class="form-group row">
                            <label for="one-ecom-product-stock">Imagenes de Producto</label>
                            <label for="one-ecom-product-stock">
                                <hr></label>

                            <div class="col-lg-4 js-appear-enabled animated fadeIn mt-3" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id  }}">
                                    <img class="img-fluid" id="img" src="{{ asset('../storage/app/'.$product->img1)  }}" alt="">
                                    <!-- <a href="delete-product.php?id_product=assets/img/productos/tokio/tokio1.jpg" class="btn btn-danger btn-block">Eliminar</a> -->
                                </a>
                            </div>

                            <div class="col-lg-4 js-appear-enabled animated fadeIn mt-3" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id+1  }}">
                                    <img class="img-fluid" id="img" src="{{ asset('../storage/app/'.$product->img2)  }}" alt="">
                                    <!-- <a href="delete-product.php?id_product=assets/img/productos/tokio/tokio1.jpg" class="btn btn-danger btn-block">Eliminar</a> -->
                                </a>
                            </div>

                            <div class="col-lg-4 js-appear-enabled animated fadeIn mt-3" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id+2  }}">
                                    <img class="img-fluid" id="img" src="{{ asset('../storage/app/'.$product->img3)  }}" alt="">
                                    <!-- <a href="delete-product.php?id_product=assets/img/productos/tokio/tokio1.jpg" class="btn btn-danger btn-block">Eliminar</a> -->
                                </a>
                            </div>

                            <div class="col-lg-4 js-appear-enabled animated fadeIn mt-3" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id+3  }}">
                                    <img class="img-fluid" id="img" src="{{ asset('../storage/app/'.$product->img4)  }}" alt="">
                                    <!-- <a href="delete-product.php?id_product=assets/img/productos/tokio/tokio1.jpg" class="btn btn-danger btn-block">Eliminar</a> -->
                                </a>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-success">Actualizar</button>
                        </div>
                    </form>


                    {{-- ventanas modals --}}
                    <div class="modal fade" id="exampleModal{{ $product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Estas por modificar la Imagen 1:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('product.img.update1',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="file" class=" @error('img1') is-invalid @enderror " name="img1" id="img1">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Modificar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal{{ $product->id+1}}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Estas por modificar la Imagen 2:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('product.img.update2',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="file" name="img2" id="img1">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Modificar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal{{ $product->id+2}}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Estas por modificar la Imagen 3:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('product.img.update3',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="file" name="img3" id="img1">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Modificar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal{{ $product->id+3}}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Estas por modificar la Imagen 4:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('product.img.update4',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="file" name="img4" id="img1">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Modificar</button>
                                        </div>
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
