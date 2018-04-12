<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
    {
    	return view('index');
    }
	
	/**
	 * Show the application About screen to the user.
	 *
	 * @return Response
	 */
	public function getAbout()
    {
    	return view('about');
    }
	
	/**
	 * Show the application Shop screen to the user.
	 *
	 * @return Response
	 */
	public function getShop()
    {
    	return view('shop');
    }
	
	/**
	 * Show the application Product details screen to the user.
	 *
	 * @return Response
	 */
	public function getProduct($product="")
    {
		if($product == "") return redirect()->intended('shop');
    	return view('product_details');
    }
	
	/**
	 * Show the application Contact screen to the user.
	 *
	 * @return Response
	 */
	public function getContact()
    {
    	return view('contact');
    }
	
	/**
	 * Show the application Cart screen to the user.
	 *
	 * @return Response
	 */
	public function getCart()
    {
    	return view('cart');
    }

	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
	public function getCheckout()
    {
    	return view('checkout');
    }    

}
