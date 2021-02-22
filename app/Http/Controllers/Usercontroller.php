<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Dotenv\Validator as DotenvValidator;
use Validator;

class UserController extends Controller
{
    public function store(Request $req){

    	$validation = Validator::make($req->all(), [
    		'fname'=>'required',
    		'oname'=>'required',
    		'email'=>'required',
    		'password'=>'required',
    		'confirm-password'=>'required_with:password|same:password',
    	 	'contact' => 'required|numeric',
		]);

    	if ($validation->fails())
    	{
    		return redirect()->route('registration')->withErrors($validation)->withInput();
    	}
    	else{

    	$user = new UserModel();

		$user->first_name = $req->fname;
		$user->last_name = $req->lname;
		$user->organization_name = $req->oname;
		$user->street = $req->street;
		$user->city = $req->city;
		$user->email = $req->email;
		$user->mobile_number = $req->contact;
		$user->password = $req->password;
		/*$pool = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$user->license_key = substr(str_shuffle(str_repeat($pool, 5)), 0,16);*/

		$user->save();}



       /* $users = userModel::all();
        return $users;*/

    	// return view('buyer.dashboard',[
        //     'posts'=>$posts,
        //     'available_post'=>$available_post->count(),
        //     'unavailable_post'=>$unavailable_post->count(),
        //     'sellers'=>$sellers->count(),
        //     'own_post'=>$own_post->count()

        // ]);
    }

    

    public function login(Request $req){
    	$validation = Validator::make($req->all(), [
    	 	'mobile_number' => 'required',
    		'password' => 'required'
		]);

    	if ($validation->fails())
    	{
    		return redirect()->route('login')->withErrors($validation)->withInput();
    	}
    	else{

    		$user = UserModel::where(['mobile_number'=>$req->mobile_number,'password'=>$req->password])->first();
       		$req->session()->put('user', $user);
       		if (count((array)$user) > 0){

       			return view('Home');
       		}
       		else{
       			$req->session()->flash('msg', 'Invalid Mobile Number/Password');
       			return redirect()->route('login');
       		}
       	}


    }
    public function licenesKeySet(Request $req){
    	$validation = Validator::make($req->all(), [
    	 	'license_key' => 'required|min:16',
		]);

    	if ($validation->fails())
    	{
    		return redirect()->route('CreateLicense')->withErrors($validation)->withInput();
    	}
    	else{
       		$result = UserModel::where(['id'=>$req->client_ID])->first();

       		$user = new UserModel();
			$user->where('id', $result->id)->update(['license_key' => $req->license_key]);
		}

    }
    
    public function keyIndex(Request $req){
       	return redirect()->route('CreateLicense');
    }
    public function key(Request $req){
    	$pool = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$result = substr(str_shuffle(str_repeat($pool, 5)), 0,16);
    	return response()->json(['key'=>$result]);

    }
    public function index(Request $req){
    	return redirect()->route('CreateLicense');

    }
    public function show(Request $req){

    	$client_ID = $req['client_ID'];
    	$result = UserModel::where(['id'=>$client_ID])->first();
    	return response()->json(['data'=>$result]);
    }
}
