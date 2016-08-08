<?php

/**
* 
**/

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {
	
	public function post(Request $request) {
		$this->validate($request, [
			'source' => 'required',
			'destination' => 'required',
			'date' => 'required',
			'time' => 'required',
			'seats' => 'required',
			'car_model' => 'required',
			'car_regno' => 'required',
			'driver_name' => 'required',
			'driver_license' => 'required'
		]);

		$post = new Post();

		$post->source = $request['source'];
		$post->destination = $request['destination'];
		$post->date = $request['date'];
		$post->time = $request['time'];
		$post->seats = $request['seats'];
		$post->car_model = $request['car_model'];
		$post->car_regno = $request['car_regno'];
		$post->driver_name = $request['driver_name'];
		$post->driver_license = $request['driver_license'];
		
		$request->user()->post()->save($post);

		return redirect()->route('postRide');

	}

	public function findRide() {

		$post = Post::orderBy('created_at', 'desc')->get();
		return view('pages.findride', ['posts' => $post]);
	}
}