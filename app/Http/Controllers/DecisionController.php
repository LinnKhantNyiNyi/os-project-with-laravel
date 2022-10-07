<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Validation\Rule;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;

class DecisionController extends Controller
{
   public function decision(Application $application){

  return view('form.admin_decision',[
    "application"=>$application
  ]);

}

public function accept(Application $application){

 $formData=request()->validate([
  "email"=>["required",'email',Rule::unique('admins','email')],
  "name"=>["required",'min:4',"max:225",Rule::unique('admins','name')],
  "ph_number"=>["required","min:11","max:11"],
   "password"=>["required",'min:8',"max:225"]
  
]);

$formData['is_admin']= true;
 $formData['password']=bcrypt($formData['password']);

Admin::create($formData);
User::create($formData);
$application->delete();
return redirect('/');
}


public function decline(Application $application){
  
 $application->delete();
return redirect('/');
 }
}
