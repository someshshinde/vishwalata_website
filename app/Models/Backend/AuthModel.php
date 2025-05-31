<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class AuthModel extends Model
{
    
    protected $table = 'user'; // Or your actual table
    protected $allowedFields = ['username', 'password'];

    public function getUser($conditions)
    {
        try {
            //code...
            return $this->where($conditions)->first();
        } catch (\Throwable $th) {
             throw $th;
        }
        
    }
}
