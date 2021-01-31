<style>
    #owl-item{
        transform: scale(1);
        transition: all 0.3s;
    }
    #owl-item:hover{
        transform: scale(0.95);
    }
</style>
<div class="content content-full">
    <div class="owl-carousel owl-theme owl-loaded">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                @foreach( $products as $product )
                    <div class="owl-item" id="owl-item">
                        <a href="{{ route('detail',$product->id) }}">
                        <div class="block block-rounded">
                            <div class="block-content block-content-full ribbon ribbon-left ribbon-bookmark ribbon-dark">
                                <img src="{{ asset('../storage/app/'.$product->img1) }}" alt="{{ $product->name_prodcut }}" class="img-fluid">
                                <div class="ribbon-box">
                                    Mas vendidas
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="mb-0">{{ $product->name_product  }}</h4>
                                    <a href="{{ route('detail',$product->id) }}">ver detalle</a>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
