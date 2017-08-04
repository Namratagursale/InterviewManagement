<?php

namespace App\Http\Controllers\Register;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Exception;
use Response;

class EmployeeLoginController extends Controller
{
    
    

    public function doLogin(Request $request){
            $result = false;
            $errormsg = "";

             try{
                     $employee=Employee::where('email',$request->email)->firstOrfail();
                     if(($employee->password)  ==  ($request->password)){
                        $result = $employee;
                     }
                     else{
                        $errormsg = 'UserId or password incorrect'; 
                     }
                }
                catch (Exception $exception) {
                     $errormsg = 'UserId or password incorrect';    
                }

                 return Response::json(['success'=>$result,'errormsg'=>$errormsg]);

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
