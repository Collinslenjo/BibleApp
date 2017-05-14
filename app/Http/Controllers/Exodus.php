<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exodus extends Controller
{
    public function index()
    {
	  $myrawdata = file_get_contents(__DIR__.'/data/books/2-exo.json',true);
	  $json_a=json_decode($myrawdata,true);
	  return view('exodus',['json_a'=>$json_a]);
    }
}
