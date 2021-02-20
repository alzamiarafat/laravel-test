<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function index(Request $req){

        $users = userModel::all();
        return $users;

    	// return view('buyer.dashboard',[
        //     'posts'=>$posts,
        //     'available_post'=>$available_post->count(),
        //     'unavailable_post'=>$unavailable_post->count(),
        //     'sellers'=>$sellers->count(),
        //     'own_post'=>$own_post->count()

        // ]);
    }
}
