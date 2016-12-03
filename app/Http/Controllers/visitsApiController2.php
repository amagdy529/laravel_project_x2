<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitsApiController2 extends Controller
{
    //
    public function index()
    {
      //$tweets = Tweet::orderBy('id', 'desc')->paginate(10);
      return response()->json([
          'name' => 'Abigail',
          'state' => 'CA'
      ]);
}
