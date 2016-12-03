<?php

namespace App\Http\Controllers ;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class visitsApiController extends Controller
{
    //
    public function index()
  	{
  		//$tweets = Tweet::orderBy('id', 'desc')->paginate(10);
      return response()->json([
          'name' => 'Abigail',
          'state' => 'CA'
      ]);

      //echo "inside api controller" ;
  		//return view('tweets.index', compact('tweets'));
  	}
}
