<style>
    .menu{
        background-color: black;
    }
    .menu a{
        text-decoration: none;
        border-top: 3px solid #000;
    }
    .menu-nav{
        color: #fff;
        transition: all 0.2s;
    }
    .menu-nav:hover{
        color: #000;
        background-color: #fff;
        border-top: 3px solid #000;;
    }
</style>






<section class="menu text-center sticky-top d-none d-md-none d-lg-block">
    <div class="col-12">
            <div class=" d-flex justify-content-center">
                <a href="{{ route('shop') }}" class="menu-nav p-2"><strong>SHOP ALL</strong></a>
                <span class="text-white p-2">&#124</span>
                <a href="{{ route('best-seller') }}" class="menu-nav p-2"><strong>MAS VENDIDOS</strong></a>
                <span class="text-white p-2">&#124</span>
                <a href="{{ route('about') }}" class="menu-nav p-2"> <strong>NOSOTROS</strong></a>
                <span class="text-white p-2">&#124</span>
                <a href="{{ route('contact') }}" class="menu-nav p-2"> <strong>CONTACTO</strong></a>
            </div>
    </div>
</section>

<!--MENU MOVIL-->
<section class="mt-2 sticky-top d-sm-block d-md-block d-lg-none" style="z-index: 9999;">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #000">
        <div class="container">
            <a class="navbar-brand" href="./"><i class="fa fa-heart"></i></a>
            <a class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('shop') }}">SHOP ALL <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('best-seller') }}">MAS VENDIDOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}" aria-disabled="true">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}" aria-disabled="true">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>