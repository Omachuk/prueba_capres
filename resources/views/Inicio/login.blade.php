@extends('dashboard.header')

@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-9 col-lg-6 col-xl-5">
                    <!--<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">-->
                    <img src="https://img.freepik.com/premium-vector/technology-abstract-security-lock-circle-background_34679-781.jpg?w=2000"
                        class="img-fluid" alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="/login" method="post">
                      @method('post');
                      @csrf
                        <div class="row align-items-start">
                            <div class="col-2"></div>
                            <div class="col-8 text-center">
                                <h2>Productos MM</h2>
                            </div>
                            <div class="col-2"></div>
                        </div><br>

                        <div class="d-flex flex-row text-center">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <button type="button" class="btn btn-outline-info btn-floating mx-1">
                                    <i class="fas fa-user-tag"></i>
                                </button>

                                <button type="button" class="btn btn-outline-info btn-floating mx-1">
                                    <i class="fas fa-tshirt"></i>
                                </button>

                                <button type="button" class="btn btn-outline-info btn-floating mx-1">
                                    <i class="fas fa-shopping-basket"></i>
                                </button>

                                <button type="button" class="btn btn-outline-info btn-floating mx-1">
                                    <i class="fas fa-laugh-wink"></i>
                                </button>
                            </div>

                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control form-control-lg"
                                placeholder="Ingrese su usuario" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                placeholder="Ingrese su contraseña" />
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg">Ingresar</button>
                            </div>


                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                ¿No tienes una cuenta?
                                <a href="{{ route('registrar') }}" class="link-danger">Registrarse</a>
                            </p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
