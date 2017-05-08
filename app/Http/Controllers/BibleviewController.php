<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleviewController extends Controller
{
    public function index()
    {
    	$myrawdata = file_get_contents(__DIR__.'/data/books/1-gen.json',true);
    	$mydatas = json_decode($myrawdata, true);
    	$myhead = $mydatas['book']["name"];
    	$mychap = $mydatas['chapters'][0][0]['chapter'];
    	$myvers = $mydatas['chapters'][0][0]['verse'];
    	$mydata = $mydatas['chapters'][0][0]['text'];
    	return view('welcome',['mychap'=>$mychap,'myhead'=> $myhead,'mydata' => $mydata,'myvers'=>$myvers]);
    }
}