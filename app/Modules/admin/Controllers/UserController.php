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

class UserController extends Controller
{ protected $user;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(UserRepositoryInterface $user)
    {//App::bind('App\Repositories\PostRepositoryInterface','App\Repositories\PostRepository');
        $this->user = $user;
    }
    public function adduser(Request $request)
    {
        $curPage='user';
        $product = new User;
        $product->name = $request->name;
        $product->email = $request->email;
        $product->password = Hash::make($request->password);
        $product->active = '1';
        $product->user_type = $request->user_type;
        
        $product->save();
        return redirect()->route('usermanager')->with(['curPage'=>$curPage]);
    }
    
    public function edituser(Request $request)
    {
        $usersList=User::all();
        foreach($usersList as $users)
        {   $id=$users->id;
            $status=$request->get($id);
             $this->user->update($id,$status);
            
        }
        return redirect('/admin/usermanager');
    }
}
