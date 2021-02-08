<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $email = $request->email;
        $email_format = explode('@', $email);
        
        

        if($email_format[1] != 'unicartagena.edu.co') {
            return redirect()->route('register')->with('status','No se pueden ingresar correos electronicos ajenos a la institucion');
        } 

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
        
        // Añadida la llave 'rol' para la creacion de un usuario
        Auth::login($user = User::create([
            'name' => $request->name,
            'rol' => $request->rol,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        /*
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
        */

        $user = Auth::user();

        switch($request->rol){
            case 1: {
                return redirect()->route('tecnico.index');

            }
            case 2: {
                return redirect()->route('coordinador.index');
                
            }
            case 3: {
                return redirect()->route('encargado.index');
            }
            default: {
                return redirect()->route('encargado.index');
            }
        }
    }
}
