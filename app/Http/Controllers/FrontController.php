<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use View;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\FrontModel;
use Session;

class FrontController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function index()
	{
		$categories = DB::table('categories')->select('*')->get();
		$featureproducts = DB::table('products')->select('*')->where('is_featured', '1')->get();
		$allproducts = DB::table('products')->select('*')->where('is_featured', '0')->get();
		return View::make('index',compact('categories','featureproducts','allproducts'));
	}
}
