<?php

namespace App\Http\Controllers\Register;

use App\User;
use App\Models\Interviewer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Exception;
use Response;

class RegistrationController extends Controller
{
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
         ]);        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);    
    }


    public function store(){
       // print_r("Here................");exit;
        $result = false;
        $errormsg = "";
        try{
        $result = Interviewer::create([
                'name' => request('name'),
                'email' => request('email'),
                'position' => request('position'),
                'experience'=> request('experience'),

            ]);
        }
        catch(Exception $exception){
             $errorCode = $exception->errorInfo[1];
             $errormsg = 'Database error! ' . $exception->getCode();
             if($errorCode == 1062){
                $errormsg = 'Dublicate Entry';
             }
             
        }
        return Response::json(['success'=>$result,'errormsg'=>$errormsg]);
    }

    public function index(){
        echo "hello";
        exit;
    }

    function show($id){
        $user = User::find($id);
      //  return User::All();
        return $user;
    }
}
