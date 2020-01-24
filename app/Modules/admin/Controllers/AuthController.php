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
use App\Repositories\UserRepositoryInterface;

class AuthController extends Controller
{
    protected $user;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(UserRepositoryInterface $user)
    {//App::bind('App\Repositories\PostRepositoryInterface','App\Repositories\PostRepository');
        $this->user = $user;
    }
    public function login()
    {$curPage = '';
        return view('admin::admin_homepage');   
    }
  
    
    public function usermanager(Request $request)
    {   $curPage = 'user';
        $users=User::all();
        $info=$request->session()->get('info');
        $userid =$info['email'];
        $usersList = $this->user->get($userid);
        return view('admin::user_management')->with(['users'=>$users,'userList'=>$usersList,'curPage'=>$curPage]);
      
    }

    public function homepage(Request $request){
        $info=$request->session()->get('info');
        $userid =$info['email'];
        $curPage='';
        $usersList = $this->user->get($userid);

        //dd($usersList);
        return view('admin::admin_homepage')->with(['userList'=>$usersList,'curPage'=>$curPage]);
    }
    public function auth(Request $request)
    {
        DB::connection()->enableQueryLog();
        DB::enableQueryLog();
        $curPage = 'user';
        $email = $request->get('email');
        $password = $request->get('password');
        $users = DB::table('users')->where('email', $email)->first();
        // Auth::attempt($credentials);
        $validatedData = $request->validate([
            'email' => 'required',
            'password'=>'required'
            
        ]);
 $request->session()->put('info',$request->input());
 $info=$request->session()->get('info');
    //  dd(Auth::attempt(['email' => $email, 'password' => $password]));
     
       if(Auth::attempt((['email' => $email, 
                        'password' => $password]
                        )) 
                        ) {
                            if(($users->active==1)){
           // Authentication passed...
                             return redirect('/admin')->with(['curPage'=>$curPage]);
                            }
                            else if($users->active==0){
                                echo "Inactive User";
                            }
       }
      
       else{
        return redirect()->back()->with(['message'=>'Wrong Credentials!','email'=>$email]);
       }
       
        
         Log::info(DB::getQueryLog());
    }
}

