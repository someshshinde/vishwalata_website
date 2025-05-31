<?php
namespace App\Models\Frontend;
use CodeIgniter\Model;
class NewsModel extends Model{
    protected $table="news";
    public function getAllNews($limit="")
    {
        try {
            
            
            if($limit!=""){
                
                $data= $this->orderBy('date', 'DESC')->limit((int)$limit)->findAll();
                           
                //echo $this->getLastQuery()->getQuery(); die();
                return $data;
            }
            return $this->orderBy('date', 'DESC')->findAll();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function getNews($condition)
    {
        try {
            return $this->where($condition)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>