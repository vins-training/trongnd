<?php

namespace Devdojo\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Devdojo\Calculator\News;
class NewsController extends Controller
{
    //
    public function index()
    {
        $data= News::all();
        return view('calculator::news',compact('data'));
    }
    
}