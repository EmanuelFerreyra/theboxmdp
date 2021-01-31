<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="{{ route('dashboard')  }}">THEBOX</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <div class="dropdown bg-dark">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('product')  }}"><strong> <i class="fab fa-product-hunt"></i> Productos</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.message')  }}"><strong> <i class="fas fa-envelope-open-text"></i> Mensajes</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('update.password')  }}"><strong><i class="fas fa-user-edit"></i> Configurar</strong></a></li>
                        <li><a class="dropdown-item" href="http://thebox.autotramite.com/" target="_blank"><strong><i class="fas fa-globe"></i> Ir a Sitio</strong></a></li>
                    </ul>
                </div>
            </li>
        </ul>
            <a href="{{ route('close_session')  }}" class="btn btn-success" >Salir</a>
    </div>
</nav>
