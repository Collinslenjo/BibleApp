<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleviewController extends Controller
{
    public function index()
    {
	  return view('welcome');
    }
    public function genesis()
    {
	  $myrawdata = file_get_contents(__DIR__.'/data/books/1-gen.json',true);
	  $json_a=json_decode($myrawdata,true);
	  return view('genesis',['json_a'=>$json_a]);
    }

    public function leviticus()
    {
      $myrawdata = file_get_contents(__DIR__.'/data/books/1-lev.json',true);
      $json_a=json_decode($myrawdata,true);
      return view('leviticus',['json_a'=>$json_a]);
    }
}
