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
        
        $chart = T2::find();
        
        $data1 = [];
        $data2 = [];
        foreach($chart as $ch){
            $data1[] = $ch->real;
            $data2[] = $ch->model;
        }
        
        $returnValue = [
            "data1" => json_encode($data1),
            "data2" => json_encode($data2)
        ];
                
        $this->view->setVar("returnValue", $returnValue);
        $this->view->setVar("count_chart", count($chart));
        $this->view->pick('pages/index');
    }
                      
    public function testAction(){
        $chart = T2::find();
        
        $data1 = [];
        $data2 = [];
        foreach($chart as $ch){
            $data1[] = $ch->real;
            $data2[] = $ch->model;
        }
        
        $returnValue = [
            "data1" => $data1,
            "data2" => $data2
        ];
    
//        return $di;
        return json_encode($returnValue["data1"]);
    }    
    
    public function teamAction(){
        if (!$this->session->has("auth")) {
            $this->response->redirect("auth");
        }
        $this->view->pick('pages/team');
    }   
    
    public function tableAction(){
        if (!$this->session->has("auth")) {
            $this->response->redirect("auth");
        }
        $table = T::find([
            'limit' => 6000,
            'order' => 'goalnum DESC'
        ]);
        
        $this->view->setVar("table", $table);
        $this->view->pick('pages/table');
    }   
    
    public function zdaniaAction(){
        if (!$this->session->has("auth")) {
            $this->response->redirect("auth");
        }
        $zdania = T::findFirstById($this->request->get("id"));
        
        $this->view->setVar("zdania", $zdania);
        $this->view->pick('pages/zdania');
    }
    
    public function route404Action(){
        $this->response->setStatusCode(404, 'Not Found');
        $this->view->pick('errors/404');
    }
    
}
