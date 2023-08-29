@extends('dashboard.header')

@section('content')
<div class="container mt-3">
    <h2>Registro de usuario</h2><br>
    @if (session()->has('message'))
        <div class="alert alert-success">
            <h3>¡Éxito!</h3>
            <p>{{ session()->get('message') }}</p>
        </div>
    @endif
    <form class="row g-3" action="/registrar" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombres del usuario</label>
            <div class="input-group">
                <span class="input-group-text @error('nombre') text-danger @enderror" title="@error('nombre') {{ $message }} @enderror">
                    <i class="fas fa-user-tie"></i>
                </span>
                <input type="text" class="form-control @error('nombre') border-danger @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" title="@error('nombre') {{ $message }} @enderror">
            </div>
        </div>

        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellidos del usuario</label>
            <div class="input-group">
                <span class="input-group-text @error('apellido') text-danger @enderror" title="@error('apellido') {{ $message }} @enderror">
                    <i class="fas fa-user-tie"></i>
                </span>
                <input type="text" class="form-control @error('apellido') border-danger @enderror" id="apellido" name="apellido" value="{{ old('apellido') }}" title="@error('apellido') {{ $message }} @enderror">
            </div>
        </div>

        <div class="col-md-6">
            <label for="username" class="form-label">Usuario</label>
            <div class="input-group">
                <span class="input-group-text @error('username') text-danger @enderror" title="@error('username') {{ $message }} @enderror">
                    <i class="fas fa-user"></i>
                </span>
                <input type="text" class="form-control @error('username') border-danger @enderror" id="username" name="username" value="{{ old('username') }}" title="@error('username') {{ $message }} @enderror">
            </div>
        </div>
        
        <div class="col-md-6">
            <label for="email" class="form-label">Correo</label>
            <div class="input-group">
                <span class="input-group-text @error('email') text-danger @enderror" title="@error('email') {{ $message }} @enderror">
                    <i class="fas fa-at"></i>
                </span>
                <input type="text" class="form-control @error('email') border-danger @enderror" id="email" name="email" value="{{ old('email') }}" title="@error('email') {{ $message }} @enderror">
            </div>
        </div>

        <div class="col-md-6">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
                <span class="input-group-text @error('password') text-danger @enderror" title="@error('password') {{ $message }} @enderror">
                    <i class="fas fa-lock"></i>
                </span>
                <input type="password" class="form-control @error('password') border-danger @enderror" id="password" name="password" title="@error('password') {{ $message }} @enderror">
            </div>
        </div>

        <div class="col-md-6">
            <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
            <div class="input-group">
                <span class="input-group-text @error('password_confirmation') text-danger @enderror" title="@error('password_confirmation') {{ $message }} @enderror">
                    <i class="fas fa-lock"></i>
                </span>
                <input type="password" class="form-control @error('password_confirmation') border-danger @enderror" id="password_confirmation" name="password_confirmation" title="@error('password_confirmation') {{ $message }} @enderror">
            </div>
        </div>

        <div class="col-md-6">
            <label for="rol" class="form-label">Rol</label>
            <div class="input-group">
                <span class="input-group-text @error('rol') text-danger @enderror" title="@error('rol') {{ $message }} @enderror">
                    <i class="fas fa-address-book"></i>
                </span>
                <select class="form-select @error('rol') border-danger @enderror" id="rol" name="rol" title="@error('rol') {{ $message }} @enderror">
                    @foreach ($roles as $rol)
                        <option value="{{$rol->id}}">{{$rol->rol}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-12">
          <button class="btn btn-primary" type="submit">Registrar Usuario</button>
        </div>
      </form>
</div>
@endsection
