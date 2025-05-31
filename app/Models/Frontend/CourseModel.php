<?php
namespace App\Models\Frontend;
use CodeIgniter\Model;
class CourseModel extends Model
{
    protected $table="courses";
    public function getCourse(array $condition)
    {
        try {
            //code...
             return $this->where($condition)->first();
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
        }
           
        
    }
    public function getAllCourses()
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