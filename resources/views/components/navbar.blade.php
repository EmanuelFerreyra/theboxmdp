<div class="text-center p-1" style="background-color: #f8e2e3;">
    <a href="https://www.facebook.com/Thebox-MDQ-100572868151184"><i class="fab fa-facebook p-1 btn  m-0 js-redes-enabled animated fadeInDown" data-toggle="redes" data-class="animated fadeInDown" style="color: #000;font-size: 2.5rem;"></i></a>
    <a href="https://www.instagram.com/theboxmdp/"><i class="fab fa-instagram p-1 btn  m-0 js-redes-enabled animated fadeInDown" data-toggle="redes" data-class="animated fadeInDown" style="color: #000; font-size: 2.5rem;"></i></a>
</div>



<nav class="navbar navbar-light bg-white">


    <div class="container d-none d-md-none d-lg-block">
    <div class="row">
        <div class="col-6 d-none d-md-none d-lg-block  ">
                <a class="navbar-brand" href="./">
                    <img src="{{ asset('img/logothebox.jpg') }}" width="180" class="d-inline-block align-top" alt="thebox" loading="lazy">
                </a>
            </div>
            <div class="col-6 d-none d-md-none d-lg-block  text-right">
                <form class="d-none d-md-inline-block mt-5 @error('word') is-invalid @enderror" action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="input-group input-group-lg" style="width: 400px;">
                        <input type="text" name="word" class="form-control form-control-alt" placeholder="Buscar en nuestro catálogo...">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text bg-body border-0">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
        </div>
        </div>
     </div>
        <!-- HEADER MOVIL  -->
        <div class="col-12 text-center d-lg-none">
            <a class="navbar-brand" href="./">
                <img src="{{ asset('img/logothebox.jpg') }}"  width="250" class="d-inline-block align-top m-auto" alt="thebox" loading="lazy">
            </a>
        </div>
        <div class="col-12 d-lg-none mb-3">
            <form method="POST" action="{{ route('search') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="word" value="" data-all-text="Show all results" placeholder="Buscar en nuestro catalogo" class="form-control form-search-control p-4" autocomplete="off">
                    <button type="submit" class="btn btn-white" style="border:1px solid #666">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </nav>
