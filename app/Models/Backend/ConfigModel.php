<?php

namespace App\Models\Backend;

use CodeIgniter\Model;
use PhpParser\Node\Stmt\TryCatch;

class ConfigModel extends Model
{
    protected $table = 'config';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'address', 'logo', 'facebook', 'twitter', 'instagram', 'youtube', 'linkedin', 'whatsapp', 'google_map'];
    public function getConfig()
    {
        try {
            //code...


            return $this->where('id', 1)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function updateConfig($data)
    {
        try {
            //code...
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required',
                'email' => 'required|valid_email',
                'phone' => 'required',
                'address' => 'required',
                //'logo' => 'required',
                'facebook' => 'required|valid_url',
                //'twitter' => 'required|valid_url',
                'instagram' => 'required|valid_url',
                'youtube' => 'required|valid_url',
                //'linkedin' => 'required|valid_url',
                //'whatsapp' => 'required|valid_url',
                //'google_map' => 'required|valid_url',
            ]);
            if (!$validation->run($data)) {
                return [
                    'status' => false,
                    'errors' => $validation->getErrors()
                ];
            } else {
                $this->where('id', 1)->set($data)->update();
                return ['status' => true, 'message' => $this->insertID()];
            }
        } catch (\Throwable $th) {
            //throw $th;
            return false;
        }
    }
}
