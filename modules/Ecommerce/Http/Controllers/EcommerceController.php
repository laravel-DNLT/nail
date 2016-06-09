<?php namespace Modules\Ecommerce\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class EcommerceController extends Controller {
	
	public function index()
	{
		return view('ecommerce::index');
	}
	
}