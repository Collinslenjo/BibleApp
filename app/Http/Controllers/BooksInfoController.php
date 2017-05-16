<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksInfoController extends Controller
{
	public function index()
	{
    $myrawdata = file_get_contents(__DIR__.'/data/books-chapter-info.json',true);
	$json_a=json_decode($myrawdata,true);
	return view('welcome',['json_a'=>$json_a]);
}
}
