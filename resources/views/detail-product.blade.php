@extends('layout')
@section('container')
    @include('components.menu')
    <div class="content container">
        <div class="row">
            <div class="col-xl-12  order-xl-0">
                <div class="block block-rounded shadow-lg">
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="col-md-6">
                                <div class="row gutters-tiny js-gallery img-fluid-100">
                                    <div class="col-12 mb-3">
                                        <a class="img-link img-link-zoom-in img-lightbox img-fluid" data-toggle="modal" data-target="#staticBackdrop">
                                            <img class="img-fluid" src="{{ asset('../storage/app/'. $product->img1)  }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="img-link img-link-zoom-in img-lightbox" data-toggle="modal" data-target="#staticBackdrop">
                                            <img class="img-fluid" src="{{ asset('../storage/app/'. $product->img2)  }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="img-link img-link-zoom-in img-lightbox" data-toggle="modal" data-target="#staticBackdrop">
                                            <img class="img-fluid" src="{{ asset('../storage/app/'. $product->img3)  }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="img-link img-link-zoom-in img-lightbox" data-toggle="modal" data-target="#staticBackdrop">
                                            <img class="img-fluid" src="{{ asset('../storage/app/'. $product->img4)  }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="font-size-h2 font-w700">
                                            {{ $product->name_product  }}                                    </div>
                                    </div>
                                    <div class="font-size-h2 font-w700" style="font-size: 3rem;">
                                        $2199                                </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        @if( $product->stock > 0 )
                                        <div class="font-size-h6 font-w700 bg-success text-white p-1">
                                            DISPONIBLE
                                        </div>
                                        @else
                                            <div class="font-size-h6 font-w700 bg-danger text-white p-1">
                                                AGOTADAS
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <p class="mt-4" style="font-size: 1.2rem;"> {{  $product->description  }} </p>
                                <form class="d-flex flex-column text-center border-top border-bottom" action="#" method="post" onsubmit="return false;">
                                    <div class="py-3 bd-highlight">
                                        <a href="#" class="btn btn-rounded" data-toggle="modal" data-target="#modal-block-fadein" style="background-color:#fc85a5; color:#fff;"><strong style="font-weight: 700;">CONSULTAR</strong> STOCK</a>
                                    </div>
                                    <div class="py-3 bd-highlight">
                                        <a href="https://www.instagram.com/theboxmdp/" target="_blank" class="btn btn-rounded" style="background-color:#fc85a5; color:#fff;"><strong style="font-weight: 700;">CHAT</strong> INSTAGRAM </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="block block-rounded block-bordered">
                            <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="mb-2">
                                        Contactar - <a class="font-w600" href="https://www.instagram.com/theboxmdp/">TheBox</a>
                                    </div>
                                    <div>
                                        <a class="btn btn-sm btn-light" href="{{ route('best-seller')  }}">
                                            <i class="fa fa-long-arrow-alt-left text-muted" aria-hidden="true"></i> Volver
                                        </a>
                                    </div>
                                </div>
                                <img class="img-fluid" width="100px" src="{{ asset('img/logothebox.jpg')  }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:99999">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">
                <!-- Boton de Cierre       -->
                <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('../storage/app/'.$product->img1) }}" class="d-block w-100 img-fluid"  alt="theBox">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('../storage/app/'.$product->img2) }}" class="d-block w-100 img-fluid"  alt="theBox">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('../storage/app/'.$product->img3) }}" class="d-block w-100 img-fluid"  alt="theBox">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('../storage/app/'.$product->img4) }}" class="d-block w-100 img-fluid"  alt="theBox">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Ventana Modal para Realizar Consulta de stock -->

    <div class="modal fade show" id="modal-block-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-modal="true" style="z-index: 99999;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header text-white" style="background: #fc85a5;">
                        <h3 class="block-title font-w700">Consultar Stock</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content font-size-sm">
                        <div class="bg-white">
                            <div class="content">
                                <div class="row items-push justify-content-center">
                                    <div class="col-12">
                                        <form action="{{ route('contact')  }}" method="POST">
                                            @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="frontend-contact-firstname">Nombre</label>
                                                    <input type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           required
                                                           id="frontend-contact-firstname"
                                                           name="name"
                                                           value="{{ old('name')  }}"
                                                           placeholder="Ingresa tu nombre">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="frontend-contact-email">Email</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   required id="frontend-contact-email"
                                                   name="email"
                                                   value="{{ old('email')  }}"
                                                   placeholder="Ingresa tu email..">
                                        </div>

                                        <div class="form-group">
                                            <label for="frontend-contact-email">Telefono</label>
                                            <input type="text"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   required id="frontend-contact-email"
                                                   maxlength="10"
                                                   name="phone"
                                                   value="{{ old('phone')  }}"
                                                   placeholder="ej: (223) 5999992">
                                        </div>

                                        <div class="form-group">
                                            <label for="frontend-contact-msg">Consulta</label>
                                            <textarea class="form-control @error('message') is-invalid @enderror"
                                                      required
                                                      id="frontend-contact-msg"
                                                      name="message"
                                                      rows="7"
                                                      placeholder="Escribe tu mensaje">{{ old('message')  }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-alt-light">
                                                <i class="fa fa-paper-plane mr-1"></i> Realizar Consulta
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @include('components.footer')
@endsection
