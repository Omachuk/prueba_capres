@extends('dashboard.header')

@section('content')
<style type="text/css">
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-9 col-lg-6 col-xl-5">
                    <!--<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">-->
                    <img src="https://img.freepik.com/premium-vector/technology-abstract-security-lock-circle-background_34679-781.jpg?w=2000"
                        class="img-fluid" alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
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
                            <input type="text" id="usuario" class="form-control form-control-lg"
                                placeholder="Ingrese su usuario" />
                            <label class="form-label" for="usuario">Usuario</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Ingrese su contraseña" />
                            <label class="form-label" for="password">Contraseña</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary btn-lg">Ingresar</button>
                            </div>


                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                Don't have an account?
                                <a href="#!" class="link-danger">Register</a>
                            </p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
