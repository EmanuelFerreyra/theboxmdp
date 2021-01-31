@extends('admin.layout')
@include('admin.dashboard.navbar')
@section('admin')
    <div class="content container mt-2">

        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Complete los Datos para Agregar un Nuevo Producto</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form action="{{ route('dashboard.new_product')  }}" method="POST" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group">
                                <label for="one-ecom-product-name">Nombre de Producto</label>
                                <input type="text" class="form-control @error('name_product') is-invalid @enderror" id="one-ecom-product-name" name="name_product" value="{{ old('name_product') }}">
                            </div>
                            <div class="form-group">
                                <label for="one-ecom-product-description-short">Descripcion de Producto</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="one-ecom-product-description-short" name="description" rows="4">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-price">Precio ($) de Producto</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="one-ecom-product-price" name="price" value="{{ old('price') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Stock</label>
                                    <input type="text" class="form-control @error('stock') is-invalid @enderror" id="one-ecom-product-stock" name="stock" value="{{ old('stock') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Posición de Producto</label>
                                    <input type="text" class="form-control @error('position') is-invalid @enderror" id="one-ecom-product-stock" name="position" value="{{ old('position') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Imagen 1</label>
                                    <input type="file" class="form-control mt-3 @error('img1') is-invalid @enderror" require id="one-ecom-product-stock" name="img1" value="{{ old('img1') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Imagen 2</label>
                                    <input type="file" id="img" class="form-control mt-3 @error('img2') is-invalid @enderror" require id="one-ecom-product-stock" name="img2" value="{{ old('img2') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Imagen 3</label>
                                    <input type="file" id="img" class="form-control mt-3 @error('img3') is-invalid @enderror" require id="one-ecom-product-stock" name="img3" value="{{ old('img3') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Imagen 4</label>
                                    <input type="file" id="img" class="form-control mt-3 @error('img4') is-invalid @enderror" require id="one-ecom-product-stock" name="img4" value="{{ old('img4') }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Crear Producto</button>

                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>

@endsection
