<?php

/**
* Author : Ved Patel
**/

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller {
	
	public function signUp(Request $request) {

		$this->validate($request, [
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8'
		]);

		$first_name = $request['first_name'];
		$last_name = $request['last_name'];
		$email = $request['email'];
		$password = bcrypt($request['password']);

		$user = new User();

		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->email = $email;
		$user->password = $password;

		$user->save();

		Auth::login($user);

		return redirect()->route('postRide');

	}

	public function signIn(Request $request) {

		$this->validate($request, [
			'email' => 'required',
			'password' => 'required'
		]);

		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return redirect()->route('postRide');
		}

		return redirect()->back();
	}

	public function postRides() {
		return view('pages.postride', ['user' => Auth::user()]);
	}

	public function logout() {
		Auth::logout();

		return redirect()->route('welcome');
	}

	public function getAccount() {
		return view('pages.account', ['user' => Auth::user()]);
	}

	public function postSaveAccount(Request $request) {
		$this->validate($request, [
			'first_name' => 'required|max:120'
		]);
				
		$user = Auth::user();
		$user->first_name = $request['first_name'];
		$user->update();

		$file = $request->file('image');
		$filename = $request['first_name'] . '-' . $user->id . '.jpg';

		if($file) {
			Storage::disk('local')->put($filename, File::get($file));
		}
	
		return redirect()->route('account');
			
	}

	public function getUserImage($filename) {
		$file = Storage::disk('local')->get($filename);
		return new Response($file, 200);
	}
}