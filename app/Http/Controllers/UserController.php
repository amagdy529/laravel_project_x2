<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use Image;


class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::orderBy('id', 'desc')->paginate(10);

		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new tweet.
	 *
	 * @return Response
	 */
	public function create()
	{
			return view('users.create');
	}

	/**
	 * Store a newly created tweet in storage.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */

	public function store(Request $request)
	{
		$user = new User;

		$user->name = $request->input("name");
		$user->email =  $request->input("email");
		$user->password =  $request->input("password");
		$user->birthdate =  $request->input("birthdate");
		$user->phone =  $request->input("phone");
		$user->address =  $request->input("address");
		$user->gender =  $request->input("gender");
		$user->city =  $request->input("city");
		$user->role =  $request->input("role");

		$user->save();

		return redirect()->route('users.index')->with('message', 'User created successfully.');
	}

	/**
	 * Display the specified user .
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */


	public function show($id)
	{
		$user = User::findOrFail($id);

		return view('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified tweet.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	 public function edit($id)
 	{
 		$user = User::findOrFail($id);

 		return view('users.edit', compact('user'));
 	}

 	/**
 	 * Update the specified resource in storage.
 	 *
 	 * @param  int  $id
 	 * @param Request $request
 	 * @return Response
 	 */
 	public function update(Request $request, $id)
 	{
 		$user = User::findOrFail($id);

		$user->name = $request->input("name");
		$user->email =  $request->input("email");
		$user->password =  $request->input("password");
		$user->birthdate =  $request->input("birthdate");
		$user->phone =  $request->input("phone");
		$user->address =  $request->input("address");
		$user->gender =  $request->input("gender");
		$user->city =  $request->input("city");
		$user->role =  $request->input("role");


 		$user->save();

 		return redirect()->route('users.index')->with('message', 'User updated successfully.');
 	}

	/**
	 * Remove the specified tweet from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	 public function destroy($id)
 	{
 		$user = User::findOrFail($id);
 		$user->delete();

 		return redirect()->route('users.index')->with('message', 'User deleted successfully.');
 	}

}
