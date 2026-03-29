<?php

namespace App\Livewire\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;
    public $remember;

    public function login()
    {
        $request = new LoginRequest();
        $data = $this->validate($request->rules(), $request->messages());
        if( ! Auth::attempt($data, $this->remember) ) {
            $this->addError('email', 'El correo electrónico o la contraseña son incorrectas');
            return;
        }
        session()->regenerate();
        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
