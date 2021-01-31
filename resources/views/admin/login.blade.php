@extends('admin.layout')

@section('admin')
<div id="page-container" class="side-trans-enabled">
    <main id="main-container">
        <div class="hero-static d-flex align-items-center">
            <div class="w-100">
                <div class="bg-white">
                    <div class="content content-full">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                <div class="text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-2x fas fa-bolt text-primary"></i>
                                    </p>
                                    <h1 class="h4 mb-1">
                                        THEBOX
                                    </h1>
                                    <h2 class="h6 font-w400 text-muted mb-3">
                                        Panel de Administracion
                                    </h2>
                                </div>
                                <form class="js-validation-signin" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">

                                                <input type="text"
                                                       name="name"
                                                       class="form-control form-control-lg form-control-alt"
                                                       required id="login-username"
                                                       placeholder="Usuario"
                                                       value="{{ old('name')  }}"
                                                >

                                        </div>
                                        <div class="form-group">

                                                <input type="password"
                                                       name="password"
                                                       class="form-control form-control-lg form-control-alt"
                                                       required
                                                       id="login-password"
                                                       placeholder="Clave"
                                                       value="{{ old('password')  }}"
                                                >

                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center mb-0">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Entrar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="font-size-sm text-center text-muted py-3">
                    <strong>THEBOX</strong> © <span data-toggle="year-copy" class="js-year-copy-enabled">2020</span>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

