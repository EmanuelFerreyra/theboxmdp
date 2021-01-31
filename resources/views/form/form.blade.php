
<main id="main-container">


    <div class="text-white" style="background-color: #f5a4bb;">
        <div class="content content-full overflow-hidden">
            <div class="mt-4 mb-4 text-center">
                <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Contacto</h1>
                <h2 class="h4 font-w400 text-white js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Escribenos un mensaje</h2>
            </div>
        </div>
    </div>

    @if(Session::has('message'))
        <div class="bg-white">
            <div class="mt-4">
            <div class="col-md-10 col-xl-5 m-auto">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div class="flex-00-auto">
                        <i class="fa fa-fw fa-check"></i>
                    </div>
                    <div class="flex-fill ml-3">
                        <p class="mb-0"><a class="alert-link">{{ session('message')  }}</a></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endif


        <div class="bg-white">
        <div class="content">
            <div class="row items-push justify-content-center">


                <div class="col-md-10 col-xl-5">
                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="frontend-contact-firstname">Nombre</label>
                                    <input type="text"
                                           class="form-control
                                           @error('name') is-invalid @enderror"
                                           id="frontend-contact-firstname"
                                           name="name"
                                           placeholder="Ingresa tu nombre"
                                           value="{{ old('name') }}"
                                    >
                                    @error('name')
                                         <small class="text-danger mt-1">Debes completar este campo</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="frontend-contact-firstname">Telefono</label>
                                    <input type="text"
                                           class="form-control
                                            @error('phone') is-invalid @enderror"
                                           maxlength="10"
                                           id="frontend-contact-firstname"
                                           name="phone"
                                           placeholder="(223) 444222"
                                           value="{{ old('phone') }}"
                                    >
                                    @error('phone')
                                    <small class="text-danger mt-1">Debes completar este campo</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="frontend-contact-email">Email</label>
                            <input  type="email"
                                    class="form-control
                                    @error('email') is-invalid @enderror"
                                    id="frontend-contact-email"
                                    name="email"
                                    placeholder="Ingresa tu email.."
                                    value="{{ old('email') }}"
                            >
                            @error('email')
                              <small class="text-danger mt-1">Debes completar este campo</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="frontend-contact-msg">Mensaje</label>
                            <textarea   class="form-control
                                        @error('message') is-invalid @enderror"
                                        id="frontend-contact-msg"
                                        name="message"
                                        rows="7"
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger mt-1">Debes completar este campo</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-alt-light">
                                <i class="fa fa-paper-plane mr-1"></i> Enviar Mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
