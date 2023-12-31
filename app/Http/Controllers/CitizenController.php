<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;

class CitizenController extends Controller
{
    public function store(Request $request){
        $citizen=new Citizen();

        $citizen->nic=$request->nic;
        $citizen->fullname=$request->fullname;
        $citizen->dob=$request->dob;
        $citizen->district=$request->district;
        $citizen->contact=$request->contact;
        $citizen->email=$request->email;
        $citizen->gender=$request->gender;
        $citizen->address=$request->address;
        $citizen->password1=$request->password1;
        $citizen->password2=$request->password2;

        $citizen->save();

    }
}

