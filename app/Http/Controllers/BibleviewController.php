<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleviewController extends Controller
{
    public function index()
    {
	  $myrawdata = file_get_contents(__DIR__.'/data/books/1-gen.json',true);
	  $json_a=json_decode($myrawdata,true);
	  return view('welcome',['json_a'=>$json_a]);
    }
}
