<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{

//----------------------------------------------Admin User Get------------------------------------//


    public function getUser(){

        $data = User::all();
        return response()->json([
            'data' => $data
        ]);

    }

    //----------------------------------------------------------------------------------//
}
