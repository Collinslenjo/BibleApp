<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleviewController extends Controller
{
    public function index()
    {
    	$myrawdata = file_get_contents(__DIR__.'/data/books/1-gen.json',true);
    	$mydatas = json_decode($myrawdata, true);
    	$mydata = $mydatas['chapters'][0,'bookname'];
    	return view('welcome',['mydata' => $mydata]);
    }
}
