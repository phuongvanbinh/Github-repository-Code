<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function index()
    {
      $examples = Example::all();
      
        return view('example_welcome', [
            'examples' => $examples
        ]);
    }

}
