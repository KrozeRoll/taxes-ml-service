<?php

class User extends \Phalcon\Mvc\Model{

    public $id; 
    
    public $login; 
    
    public $password;

    public $uid;

    public $name;
    
    public $money;
    
    public $status;

    public function initialize() {
		$this->setSource("users");
	}
    
    public static function UpdateObject($object, $data) {
        $object->assign($data);
        
        return $object;
    }

}
