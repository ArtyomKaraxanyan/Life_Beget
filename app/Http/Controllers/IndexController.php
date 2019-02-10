<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class IndexController extends Controller
{

    public function index(){
        $portfolios=Portfolio::all();

			return view('web.index',compact('portfolios'));
		}
}
