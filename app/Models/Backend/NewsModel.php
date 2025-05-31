<?php 
namespace App\Models\Backend;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = "news";
    protected $allowedFields = ['name', 'date', 'description', 'organiser', 'venue', 'img'];
    protected $primaryKey = 'id';

    public function addNews($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'description' => 'required',
                'date' => 'required',
                'organiser' => 'required',
                'venue' => 'required',
                
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
    public function updateNews($data)
    {
        try {
            //validation 
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]|max_length[50]',
                'description' => 'required',
                'date' => 'required',
                'organiser' => 'required',
                'venue' => 'required',
                
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
    public function getNews($id=null)
    {
        try {
             if ($id) {
            return $this->where('id', $id)->first();
        } else {
            return $this->orderBy('date','ASC')->findAll();
        }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>