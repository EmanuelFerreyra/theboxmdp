@extends('layout')

@section('container')

@include('components.menu')
@include('components.banners')



<div class="container mt-4">
    <div class="row">

        @foreach($products as $product)

        <a href="{{ route('detail',$product->id) }}">
        </a>
        <div class=" col-sm-6 col-xl-4 animated fadeIn">
            <a href="{{ route('detail',$product->id) }}">
            </a>
            <div class="ribbon ribbon-dark ribbon-left ribbon-bookmark">
                <a href="{{ route('detail',$product->id)  }}">
                    <div class="ribbon-box" style="font-size: 1.5rem;">
                        {{ $product->price  }}
                    </div>
                </a>
                <div class="block block-rounded d-flex flex-column shadow">
                    <a href="{{ route('detail',$product->id)  }}">
                        <!--                        <img src="assets/img/banner-movil/AA.jpg" width="100" alt="" class="d-block w-100">-->
                    </a>
                    <div class="options-container fx-item-rotate-r">
                        <a href="{{ route('detail',$product->id) }}">
                            <img class="img-fluid options-item" width="100%" src="{{ asset('../storage/app/'.$product->img1) }}" alt="">
                        </a>
                        <div class="block-rounded options-overlay bg-black-75">
                            <a href="{{ route('detail',$product->id)  }}">
                            </a>
                            <div class=" ">
                                <a href="{{ route('detail',$product->id)  }}">
                                    <h3 class=" h4 font-w600 text-white text-center mb-1">{{ $product->name_product }}</h3>
                                    <!--             <h3 class=" h4 font-w400 text-white text-center mb-1"> $</h3> -->
                                </a>
                                <a class=" btn btn-sm btn-primary img-lightbox" href="{{ route('detail',$product->id)  }}">
                                    <i class="fa fa-search-plus mr-1" aria-hidden="true"></i>Ver Detalle
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('components.footer')
@endsection
