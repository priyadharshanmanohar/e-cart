<?php
namespace App\Repositories;

interface ProductRepositoryInterface
{
    /**
     * Get's a user by it's ID
     *
     * @param int
     */
    public function get($baseProductId);

    /**
     * Get's all users.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes a user.
     *
     * @param int
     */
    public function delete($baseProductId);

    /**
     * Updates a user.
     *
     * @param int
     * @param array
     */
    public function update($baseProductId);
}
