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
    	return view('index',compact(['cart_details']));
    }
	
	
	/**
	 * Show the application Shop screen to the user.
	 *
	 * @return Response
	 */
	public function getShop()
    {
    	$ret = $this->helpers->getProducts();
		return view('shop',compact(['ret']));
    }
	
	/**
	 * Show the application Product details screen to the user.
	 *
	 * @return Response
	 */
	public function getProducts($id="")
    {
		if($id != "")
		{
			return redirect()->intended('shop');
		}

        else
		{
			$ret = $this->helpers->getProduct($id);
			return view('product_details',compact(['ret']));
		}
		
    	
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

    /**
	 * Show the application Add Product screen to the user.
	 *
	 * @return Response
	 */
	public function getAddProduct()
    {
    	return view('a_p');
    }    /**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
    public function postAddProduct(Request $request)
    {
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'price' => 'required|numeric'
                             'brand' => 'required',
                             'category' => 'required|not_in:none',
                             'description' => 'required',
                             'colors' => 'required',
                             'images' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	//create product
            $product = $this->helpers->createProduct($req);
			$req['product_id'] = $product->id;
			
			//create product data
			$productData = $this->helpers->createProductData($req);
			
			//create product images
			$strings = $req['images'];
			$imagesArr = explode(',',$strings);
			
			if(count($imagesArr) > 0)
			{
				foreach($imagesArr as $img)
				{
					$ret = ['id' => $product->id,"url" => $img];
					$productImages = $this->helpers->createProductImages($req);
				}
			}
			
			Session::flash("create-product-status","success");
			return redirect()->intended('a-p');
         }
                 
    }    

}
