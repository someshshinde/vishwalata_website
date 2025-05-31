<?php
namespace App\Models\Frontend;
use CodeIgniter\Model;
class AchivementModel extends Model
{
    protected $table="achivement";
    public function getAchivement(array $condition)
    {
        try {
            //code...
             return $this->where($condition)->first();
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
        }
           
        
    }
    public function getAllAchivement()
    {
        try {
             $this->select('achivement.*, department.name as dept_name');
            $this->join('department', 'department.id = achivement.dept_id');
            return $this->findAll();
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
   
}

?>