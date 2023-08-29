<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\InicioRequest;
use App\Models\User;
use App\Models\rol;

class InicioController extends Controller
{
    public function registrarProccess(){
        $roles = rol::where('estado', '=', 1)->get();

        return view('Inicio.registrar', ['roles' => $roles]);
    }

    public function registrarPersonal(Request $request){
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'username' => 'required|min:8|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
            'rol' => 'required',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'username.required' => 'El usuario es obligatorio.',
            'username.unique' => 'El usuario ya está registrado.',
            'username.min' => 'El usuario debe de tener al menos :min caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password_confirmation.required' => 'La confirmación de su contraseña es obligatoria.',
            'password_confirmation.same' => 'Su contraseña no son iguales',
            'rol.required' => 'El rol es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::create([
            'nombre'                => $request->input('nombre'),
            'apellido'              => $request->input('apellido'),
            'username'              => $request->input('username'),
            'email'                 => $request->input('email'),
            'password'              => $request->input('password'),
            'id_rol'                => $request->input('rol'),
            'activo'                => 1,
        ]);

        session()->flash('message', 'El usuario se ha registrado correctamente.');
        return redirect()->route('registrar');
    }

    public function loginProccess(Request $request){
        // Obtener el valor del campo 'usuario' del formulario
        $usuario = $request->input('usuario');

        // Obtener el valor del campo 'password' del formulario
        $password = $request->input('password');
        

        echo 'Usuario: '.$usuario.'<br>Contraseña: '.Hash::make($password);

    }
}
