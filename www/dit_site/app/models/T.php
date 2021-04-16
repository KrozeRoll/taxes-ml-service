<?php

class T extends \Phalcon\Mvc\Model{

    public $FULL_ADDRESS;
    
    public $OBJECT_TYPE;
    
    public $OBJECT_CLASS;
    
    public $CADASTRAL_COST_GKN;
    
    public $UNOM; 
    
    public static function CreateObject($data) {
        $object = new T;
        $object->assign($data);
        
        return $object;
    }
    
    public static function UpdateObject($object, $data) {
        $object->assign($data);
        
        return $object;
    }
}
