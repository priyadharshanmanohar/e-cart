<?php
namespace App\Repositories;
use App\Product;
use App\User;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Get's a user by it's ID
     *
     * @param int
     * @return collection
     */
    
    public function get($baseProductId)
    {
       
    }

    /**
     * Get's all users.
     *
     * @return mixed
     */
    public function all()
    {
        
    }

    /**
     * Deletes a user.
     *
     * @param int
     */
    public function delete($baseProductId)
    {
        
        Product::destroy($baseProductId);
    }

    /**
     * Updates a user.
     *
     * @param int
     * @param array
     */
    public function update($baseProductId)
    {
        
    }
}