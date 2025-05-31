<?php
namespace App\Models\Backend;

use CodeIgniter\Model;
class CoursesModel extends Model{
    protected $table ="courses";

    protected $allowedFields = ['name','short_name','eligibility','discription','intake','img','fee','dept_id'];
    protected $primaryKey = 'id';
    public function addCourses($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'short_name' => 'required|min_length[2]|max_length[50]',
                'eligibility' => 'required|min_length[5]|max_length[500]',
                'description' => 'required|min_length[5]|max_length[500]',
                'intake'=>'required',
                'fee'=>'required',
                'dept_id'=>'required',
                
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
                    'errors' => ['name' => 'Courses name already exists']
                ];
            }
            
            
            $this->insert($data);
             return ['status' => true, 'message' => $this->insertID()];
            
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function updateCourses($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'short_name' => 'required|min_length[2]|max_length[50]',
                'eligibility' => 'required|min_length[5]|max_length[500]',
                'description' => 'required|min_length[5]|max_length[500]',
                'intake'=>'required',
                'fee'=>'required',
                'dept_id'=>'required',
                
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

    public function getCourses($id = null)
    {
        $this->select('courses.*, department.name as dept_name');
        $this->join('department', 'department.id = courses.dept_id');
        if ($id) {
            return $this->where('courses.id', $id)->first();
        } else {
            return $this->findAll();
        }
    }
}

?>