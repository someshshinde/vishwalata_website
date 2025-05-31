<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class AchivementModel extends Model
{
    protected $table = " achivement";

    protected $allowedFields = ['name', 'percentage', 'class', 'acadamic_year', 'dept_id'];
    protected $primaryKey = 'id';
    public function addAchivement($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'class' => 'required|min_length[2]|max_length[50]',
                'percentage' => 'required|min_length[2]|max_length[10]',
                'academic_year' => 'required|min_length[5]|max_length[20]',
                'dept_id' => 'required',

            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            }
            //check if department name already exists
            $existingCoursest = $this->where('name', $data['name'])->first();
            if ($existingCoursest) {
                return [
                    'status' => false,
                    'errors' => ['name' => 'Student name already exists']
                ];
            }


            $this->insert($data);
            return ['status' => true, 'message' => $this->insertID()];
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function updateAchivement($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'class' => 'required|min_length[2]|max_length[50]',
                'percentage' => 'required|min_length[2]|max_length[10]',
                'academic_year' => 'required|min_length[2]|max_length[20]',
                'dept_id' => 'required',

            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            }

            $this->update($data['id'], $data);
            return ['status' => true, 'message' => $this->insertID()];
        } catch (\Throwable $th) {
            throw $th;
        }
    }
     public function getAchivements($id = null)
    {
        $this->select('achivement.*, department.name as dept_name');
        $this->join('department', 'department.id = achivement.dept_id');
        if ($id) {
            return $this->where('achivement.id', $id)->first();
        } else {
            return $this->findAll();
        }
    }
}
