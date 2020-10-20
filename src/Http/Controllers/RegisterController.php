<?php

namespace Azamjon99\Register\Http\Controllers;
use Azamjon99\Register\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class RegisterController extends Controller
{
    public function index(){
        return view ('register::show');
    }



    public function showRegister(){
        return view ('register::register');
    }


 


    public function showSuccess(){
        return view ('register::afterRegister');
    }





    public function register(Request $request){
        $this->validate($request, ['name' => 'required|min:4|max:10|alpha_dash']);
        $name=$request->input('name');
        
        $this->validate($request, ['email' => 'required|email|unique:registrations,email']);
        $email=$request->input('email');
        
        $this->validate($request, ['parol' => 'required|min:4|max:10|alpha_dash']);
        $parole=$request->input('parol');

        $insert= new Registration;
        
            $insert->name =$name;
            $insert->email =$email;
            $insert->password =$parole;
          
        $insert->save();
           
        return redirect(route('success'));
    }






}
