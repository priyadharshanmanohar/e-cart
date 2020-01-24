<?php
namespace App\Repositories;
use App\User;
use App\Product;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Get's a user by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($email)
    {
        return User::select('name')->where('email',$email)->get();
    }

    /**
     * Get's all users.
     *
     * @return mixed
     */
    public function all()
    {
        return User::all();
    }

    /**
     * Deletes a user.
     *
     * @param int
     */
    public function delete($user_id)
    {
        
        User::destroy($user_id);
    }

    /**
     * Updates a user.
     *
     * @param int
     * @param array
     */
    public function update($user_id, $status)
    {
        $user=User::find($user_id);
        if($status=='on')
        $user->active='1';
        else
        $user->active='0';
        $user->save();
    }
}