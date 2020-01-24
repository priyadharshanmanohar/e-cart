<?php
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;
use App\Image;
use Illuminate\Support\Facades\DB;
use App\Jobs\ProcessCsv;
use Illuminate\Http\Request;
$adminControllers = "App\Modules\admin\Controllers";
$adminViews = "App\Modules\admin\View";


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'admin', 'namespace' => $adminControllers,'middleware' => ['web']], function () {
    Route::get('/', 'AuthController@homepage')->middleware('auth');
       // return view('admin::admin_homepage')
    
    Route::get('/login', function(){
        return view('admin::auth');
    })->name('login');
    // Route::get('/homepage', function () {
    //     // Only authenticated users may enter...
    // })->middleware('auth');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });

    Route::get('/addproductpage', function(Request $request)
    {
        $curPage = 'product';
        $info=$request->session()->get('info');
        $email =$info['email'];
        $usersList = User::select('name')->where('email',$email)->get();
        return view('admin::addproductpage')->with(['userList'=>$usersList,'curPage'=>$curPage]);
       
    });
    Route::get('/editproductpage', function(Request $request)
    {
        $product_list = Product::all();
        $curPage = 'product';
            $info=$request->session()->get('info');
            $email =$info['email'];
            $usersList = User::select('name')->where('email',$email)->get();
            return view('admin::editproductpage')->with(['userList'=>$usersList,'productList'=>$product_list, 'curPage' => $curPage]);
            
        
    });
    Route::post('/removeproduct','ProductController@removeproduct');
    Route::post('/viewproduct','ProductController@viewproduct');
    Route::get('/usermanager', 'AuthController@usermanager')->name('usermanager');
    Route::post('/edituser', 'UserController@edituser');
    Route::post('/store',function(Request $request)
    {
        
            $info=$request->session()->get('info');
            $useremail =$info['email'];
           
           
            $validatedData = $request->validate([
                'csv_file' => 'required|file'
            ]);
            $ctr=0;
            $file = $request->file('csv_file');
            $path = $file->storeAs('logos', 'csv_file.csv');
            // dd($path);
           
           
            $messages = [
                'message'  => ' The records are being processed. You will be informed once it is recorded'
            ];
            ProcessCsv::dispatch($useremail)->delay(now()->addSeconds(10));
            return redirect()->back()->with($messages);
             
            
    });
    Route::get('/datatable', [
     
        'uses' => function () {
            $products = App\Product::all();
            return Datatables::of($products)->make();
        }
    ]);

     Route::get('/ajaxtable',function(Request $request)
    {
        $table = 'products';
 
        $primaryKey = 'id';
         
        $columns = array(
            array( 'db' => 'title', 'dt' => 0 ),
            array( 'db' => 'description',  'dt' => 1 ),
            array( 'db' => 'product_price',   'dt' => 2 ),
            array( 'db' => 'barcode', 'dt' => 3,),
            array( 'db' => 'base_product_id', 'dt' => 4,),
            array( 'db' => 'product_type','dt' => 5)
            
           
        );
         
        $sql_details = array(
            'user' => 'Priyadharshan',
            'pass' => '123456',
            'db'   => 'ecart',
            'host' => '127.0.0.1'
        );
         
         
        require( 'vendor/yajra/laravel-datatables-oracle/src/DataTables.php' );
         
        echo json_encode(
            SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
        );
        
    });
    Route::get('/adddetailspage',function(Request $request)
    {
            $curPage = 'product';
            $info=$request->session()->get('info');
            $userid =$info['email'];
            $email =$info['email'];
            $usersList = User::select('name')->where('email',$email)->get();
            return view('admin::adddetailspage')->with(['userList'=>$usersList,'curPage'=>$curPage]);
        
    });
    Route::post('/adddetails','ProductController@adddetails');
    Route::get('/imagemaster',function(Request $request)
    {
        $curPage = 'image';
        $product_list = Product::all();
        $info=$request->session()->get('info');
        $email =$info['email'];
        $usersList = User::select('name')->where('email',$email)->get();
        return view('admin::imagemaster')->with(['userList'=>$usersList,'productList'=>$product_list,'curPage'=>$curPage]);
   
    });
    Route::post('/addimagepage',function(Request $request)
    {
        $product = Product::where('id', $request->addimage)->first();
        $info=$request->session()->get('info');
        $email =$info['email'];
        $usersList = User::select('name')->where('email',$email)->get();
        return view('admin::imagemaster')->with(['userList'=>$usersList,'product'=>$product]);
    
    });
    Route::post('/storeimage','ImageController@addimage');
    Route::get('/search','ImageController@search');
    Route::get('/adduserpage',function(Request $request){
        $curPage='user';
        $info=$request->session()->get('info');
        $email =$info['email'];
        $usersList = User::select('name')->where('email',$email)->get();
        return view('admin::adduserpage')->with(['userList'=>$usersList,'curPage'=>$curPage]);
    });
    Route::get('/removeimagepage',function(Request $request){
        
        $images = Image::where('base_product_id', $request->base_product_id)->get();
        $product = Product::where('id', $request->removeimage)->first();
        $info=$request->session()->get('info');
        $email =$info['email'];
        $usersList = User::select('name')->where('email',$email)->get();
        return view('admin::removeimagepage')->with(['userList'=>$usersList,'product'=>$product,'images'=>$images]);
    });
    Route::post('/removeimage','ImageController@deleteimage');
    Route::get('/dashboard',function(Request $request)
    {
        $curPage = 'dashboard';
        $users=User::all();
        $info=$request->session()->get('info');
        $email =$info['email'];
        $usersList = User::select('name')->where('email',$email)->get();
        return view('admin::dashboard')->with(['userList'=>$usersList,'users'=>$users,'curPage'=>$curPage]);
     
    });
    Route::post('/adduser','UserController@adduser');

//    Route::post('/useredit', function(Request $request){
//     $users = DB::table('users')->where('email', $email)->first();
//    };

    Route::post('/auth', 'AuthController@auth');
   
});
