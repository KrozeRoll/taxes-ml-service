<?php


class PagesController extends \Phalcon\Mvc\Controller{
    
    public function onConstruct(){
        $data = [];
        
        if ($this->session->has("auth")) {
            $data['auth'] = true;
            
            $user = User::findFirstById($this->session->get("id"));
            
            $this->view->setVar("user", $user);
        } else {
            $data['auth'] = false;
        }
        
        $this->view->setVar("data", $data);
    }

    public function indexAction(){
        if (!$this->session->has("auth")) {
            $this->response->redirect("auth");
        }

        $this->view->pick('pages/index');
    }
    
    public function tableAction(){
        $user = User::findFirstById($this->session->get("id"));
        
        if (!$this->session->has("auth")) $this->response->redirect("auth");
        
        if (!$user->group) $this->response->redirect("/");
        
        $this->view->pick('pages/laser');
    }      
        
    public function gettableAction(){
        $laser_info = Laser::Find("id > 0 ORDER BY id DESC");
        
        return json_encode([
            "items" => $laser_info,
           "success" => true
        ]); 
    }     
    
    public function tableuserAction(){
        $user = User::findFirstById($this->session->get("id"));
        
        if (!$this->session->has("auth")) $this->response->redirect("auth");
        
        if (!$user->group) $this->response->redirect("/");
        
        if ($this->request->isPost()){
            $users = User::Find("id > 0 ORDER BY status DESC");
            return json_encode([
                "items" => $users,
               "success" => true
            ]);
        }
        
        $this->view->pick('pages/users');
    } 
    
    public function adduserAction(){
        if (!$this->session->has("auth")) {
            $this->response->redirect("auth");
        }
        
        $this->view->pick('pages/adduser');
    }    
    

    
    public function getuserAction(){
        $uid = $this->request->get("uid");
        if($user = User::findFirstByUid($uid)){
            $user->save(['status' => "1"]);
            $laser = Laser::CreateObject([
                "user_id" => $user->uid,
                "name" => $user->name,
                "date" => date('d-m-Y', time()),
                "start_laser" => date('H:i:s', time()  + 3600 * 5)
            ]);
            $laser->save();
            return json_encode([
                "access" => "access",
                "name" => $user->name,
                "money" => $user->money
            ], JSON_UNESCAPED_UNICODE);
        }else{
           return json_encode([
                "access" => "access denied"
            ]);
        }
        
    }
    
    public function laserOffAction(){        
        $laser_info = Laser::Find("id > 0 ORDER BY id DESC LIMIT 1");
            
        $laser = [];
        foreach($laser_info as $key => $laser) {
            $laser->stop_laser = date('H:i:s', time()  + 3600 * 5);
        }
        $laser->save();
        $user = User::findFirstByUid($this->request->get("uid"))->save(["status" => "0"]);
        
        
    }
    
    public function testAction(){        
        return $this->security->hash("lol");
    }
    
    public function usersettingsAction(){
        
        $user = User::findFirstById($this->session->get("id"));
        
        if (!$this->session->has("auth")) $this->response->redirect("auth");
        
        if ($this->request->isPost()){
            $laser = Laser::findByUser_id($user->uid);
            return json_encode([
                "items" => $laser,
                "success" => true
            ]);
        }
        
        $this->view->pick('pages/settings');
         
    }        
    
    public function route404Action(){
        $this->response->setStatusCode(404, 'Not Found');
        $this->view->pick('errors/404');
    }
    
}
