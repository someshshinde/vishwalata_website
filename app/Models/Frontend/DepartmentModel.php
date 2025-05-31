<?php
namespace App\Models\Frontend;
use CodeIgniter\Model;
class DepartmentModel extends Model
{
    protected $table="department";
    public function getDepartment(array $condition)
    {
        try {
            //code...
             return $this->where($condition)->first();
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
        }
           
         
    }
    public function getAllDepartments()
    {
        try {
            //code...
            return $this->findAll();
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
    
}
?>