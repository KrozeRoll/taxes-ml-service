<?php

class T2 extends \Phalcon\Mvc\Model{

    public $goalnum;
    
    public $PR_GOALNUM;
    
    public $goalnum_1;
    
    public $model;
    
    public $real;
    
    public $TIME; 
    
    public static function CreateObject($data) {
        $object = new T2;
        $object->assign($data);
        
        return $object;
    }
    
    public static function UpdateObject($object, $data) {
        $object->assign($data);
        
        return $object;
    }
}
