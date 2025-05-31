<?php

namespace App\Models\Backend;

use CodeIgniter\Model;
class DepartmentModel extends Model{
    protected $table ="department";

    protected $allowedFields = ['name','about','hod','img'];
    protected $primaryKey = 'id';
    public function addDepartment($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'about' => 'required|min_length[10]|max_length[500]',
                'hod'=>'required',
            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            }
            //check if department name already exists
            $existingDepartment = $this->where('name', $data['name'])->first();
            if ($existingDepartment) {
                return [
                    'status' => false,
                    'errors' => ['name' => 'Department name already exists']
                ];
            }
            
            
            $this->insert($data);
             return ['status' => true, 'message' => $this->insertID()];
            
        } catch (\Throwable $th) {
            throw $th;
        } 
    }
       public function updateDepartment($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'about' => 'required|min_length[10]|max_length[500]',
                'hod'=>'required',
            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            }
           
            
            //update department
            $existingDepartment = $this->where('id', $data['id'])->first();
            if (!$existingDepartment) {
                return [
                    'status' => false,
                    'errors' => ['id' => 'Department not found']
                ];
            }

            
            $this->update($data['id'], $data);
            return ['status' => true, 'message' => $this->affectedRows()];
            

            
        } catch (\Throwable $th) {
            throw $th;
        } 
    }
    public function getDepartment($id = null)
    {
        try {
        $this->select('department.*, faculty.name as faculty_name');
        $this->join('faculty', 'faculty.id = department.hod');
       
        $this->orderBy('department.id', 'DESC');
            if ($id) {
                return $this->where('department.id', $id)->first();
            } else {
                return $this->findAll();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>