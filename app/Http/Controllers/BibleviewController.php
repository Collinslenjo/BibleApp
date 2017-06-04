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
      $myrawdata = file_get_contents(__DIR__.'/data/books/3-lev.json',true);
      $json_a=json_decode($myrawdata,true);
      return view('leviticus',['json_a'=>$json_a]);
    }
    public function numbers(){
      $myrawdata = file_get_contents(__DIR__.'/data/books/4-num.json',true);
      $json_a=json_decode($myrawdata,true);
      return view('numbers',['json_a'=>$json_a]);
    }
    public function deutronomy(){
      $myrawdata = file_get_contents(__DIR__.'/data/books/5-deu.json',true);
      $json_a=json_decode($myrawdata,true);
      return view('deutronomy',['json_a'=>$json_a]);
    }
}
