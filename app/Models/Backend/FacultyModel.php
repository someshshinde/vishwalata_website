<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class FacultyModel extends Model
{
    protected $table = "faculty";
    protected $allowedFields = ['name', 'email', 'designation','education', 'dept_id', 'mobile', 'img'];
    protected $primaryKey = 'id';

    public function addFaculty($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email',
                'designation' => 'required',
                'dept_id' => 'required',
                'mobile' => 'required|numeric|min_length[10]|max_length[10]',
                'education' => 'required',
            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            }



            $this->insert($data);
            return ['status' => true, 'message' => $this->insertID()];
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateFaculty($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email',
                'designation' => 'required',
                'dept_id' => 'required',
                'mobile' => 'required|numeric|min_length[10]|max_length[10]',
                'education' => 'required',
            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            }



            $this->update($data['id'], $data);
            // Print the last executed query
            // $db = \Config\Database::connect();
            // echo $db->getLastQuery(); die();
            return ['status' => true, 'message' => $this->insertID()];
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getFaculty($id = null)
    {

        $this->select('faculty.*, department.name as dept_name');
        $this->join('department', 'department.id = faculty.dept_id');
        $this->orderBy('faculty.id', 'DESC');
        if ($id) {
            return $this->where('faculty.id', $id)->first();
        } else {
            return $this->findAll();
        }
    }
}
