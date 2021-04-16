<?php

class Laser extends \Phalcon\Mvc\Model{

    public $id;
    
    public $user_id;
    
    public $start_laser;
    
    public $stop_laser; 
    
    public static function CreateObject($data) {
        $object = new Laser;
        $object->assign($data);
        
        return $object;
    }
    
    public static function UpdateObject($object, $data) {
        $object->assign($data);
        
        return $object;
    }
}
