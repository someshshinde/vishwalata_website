<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class FacultyModel extends Model
{
    protected $table = "faculty";
    public function getFaculty(array $condition)
    {
        try {
            //code...
            return $this->where($condition)->first();
        } catch (\Throwable $th) {
            //throw $th;
            throw $th;
        }
    }
    public function getAllFaculty()
    {
        try {
            //code...
            $this->select('faculty.*, department.name as dept_name');
            $this->join('department', 'department.id = faculty.dept_id');
            return $this->findAll();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
