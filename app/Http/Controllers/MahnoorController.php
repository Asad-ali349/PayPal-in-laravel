<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahnoorModel;

class MahnoorController extends Controller
{
    //


    public function loginpage() {
        $Name="Mahnoor";
        $Name2="Zain";
        $Name3="Asad";

        return view('login',compact('Name','Name2','Name3'));
    }
}
