<?php


class AuthController extends \Phalcon\Mvc\Controller{
    
    public function indexAction(){
        if ($this->session->has("auth")) {
            $this->response->redirect();
            return;
        }
        $this->view->pick('pages/auth');
    }
    
    public function regAction(){
        if ($this->session->has("auth")) {
            $this->response->redirect();
            return;
        }
        
        $this->view->pick('pages/reg');
    }     
    
    public function loginAction(){
        if ($this->session->has("auth")) {
            $this->response->redirect();
            return;
        }
        
        $login    = $this->request->getPost('login');
        $password = $this->request->getPost('password');
                
        $user = User::findFirstByLogin($login);
        
        if ($user) {
            if ($this->security->checkHash($password, $user->password)) {
                $user = User::UpdateObject($user, ["auth_key" => md5(lcg_value() . $user->id)]);
                setcookie("auth_key", $user->auth_key);
                $success = $user->save();
                if (!$success) {
                    return $this->response->redirect("auth");
                }
                $this->session->set("id", $user->id);
                $this->session->set("auth", true);
                    
                $this->response->redirect("/");
            }
        } else {
            $this->security->hash(rand());
        }
        $this->response->redirect("auth");
    }
    
    public function registerAction(){
        if ($this->session->has("auth")) {
            $this->response->redirect();
            return;
        }
        
        $name    = $this->request->getPost('name');
        $login    = $this->request->getPost('login');
        $password = $this->request->getPost('password');
        $confirm_Password = $this->request->getPost('confirm_Password');
        
        if ($confirm_Password != $password) return $this->response->redirect("reg");
        
        $user = new User();
        
        $user->login = $login;
        $user->password = $this->security->hash($password);
        $user->name = $name;
        $user->auth_key = md5(lcg_value());

        $success = $user->save();
        if (!$success) {
            return $this->response->redirect("reg");
        }
        
        $this->session->set("id", $user->id);
        $this->session->set("auth", true);

        $this->response->redirect("/");
    }
    
    public function logoutAction() {
        if (!$this->session->has("auth")) {
            $this->response->redirect();
        }

        setcookie("auth_key", "");

        $user = User::FindFirst($this->session->get("id"));
        $user->auth_key = md5(lcg_value() . $user->id);
        $user->save();

        $this->session->destroy();
        $this->response->redirect();
    }
    
    
}