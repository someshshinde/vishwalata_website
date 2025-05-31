<?php
namespace App\Models\Frontend;
use CodeIgniter\Model;
class EventsModel extends Model{
    protected $table="events";
    public function getAllEvents($limit="")
    {
        try {
            
            
            if($limit!=""){
                
                $data= $this->orderBy('date', 'ASC')->limit((int)$limit)->findAll();
                           
                //echo $this->getLastQuery()->getQuery(); die();
                return $data;
            }
            return $this->orderBy('date', 'DESC')->findAll();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function getEvent($condition)
    {
        try {
            return $this->where($condition)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>