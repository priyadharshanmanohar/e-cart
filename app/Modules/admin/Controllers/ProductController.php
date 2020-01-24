<?php

namespace App\Modules\admin\Controllers;
use App\User;
use App\Product;
use App\Image;
use App\Jobs\ProcessCsv;
use Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
class ProductController extends Controller
{
    protected $product;
    protected $user;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(ProductRepositoryInterface $product,UserRepositoryInterface $user)
    {//App::bind('App\Repositories\PostRepositoryInterface','App\Repositories\PostRepository');
        $this->product = $product;
        $this->user = $user;
    }
    public function adddetails(Request $request)
    { 
        $flag=1;
        if(Product::find($request->baseproductid))
        {
            $flag=0;
           
       
        }
        else
        {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->product_price = $request->price;
        $product->barcode = $request->barcode;
        $product->base_product_id = $request->baseproductid;
        $product->product_type = $request->producttype;
        $product->save();
        }
        if($flag==1)
        return redirect('admin/editproductpage')->with('message',"The product is added succesfully");
        else{
            return redirect('admin/adddetailspage')->with('message',"The base product id already exists");

        }
    }

    public function removeproduct(Request $request)
    {
        
        $baseProductId=$request->get('remove');
        $this->product->delete($baseProductId);
        $deletedImages=Image::where('base_product_id', $request->base_product_id)->delete();
        return redirect()->back();
    }
    public function viewproduct(Request $request)
    {   $curPage='product';
        $images = Image::where('base_product_id', $request->base_product_id)->get();
        $product = Product::where('base_product_id', $request->view)->first();
        $usersList = $this->user->all();
        //echo $image->directory;
       
        //$path=$images->directory;
       // dd($path);
    
      return view('admin::productdetailspage')->with(['userList'=>$usersList,'product'=>$product,'images'=>$images,'curPage'=>$curPage]);
       
    }
   
}
