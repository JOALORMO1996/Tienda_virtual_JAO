<?php

class Home extends Controllers{
    public function __construct()
    {
    parent::__construct();
    }


   public function home(){
    $data['page_id'] = 1;
    $data['tag_page'] = "Home";
    $data['page_title'] = "Tienda Virtual JAO";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, 
    accusantium. Reprehenderit sit nam illo sapiente laudantium saepe, maxime doloremque 
    expedita corrupti, voluptates blanditiis reiciendis officiis molestias, nobis nihil accusamus a";
   $this->views->getView($this, "home", $data);
   }

   public function insertar(){
    $data = $this->model->setUser("Alejandro",18);
    print_r($data);
   }
   public function verUsuario($id){
    $data = $this->model->getUser($id);
    print_r($data);
   }

   public function actualizar(){
    $data = $this->model->updateUser(1,"Jose",28);
    print_r($data);
   }

   public function verUsuarios(){
    $data = $this->model->getUsers();
    print_r($data);
   }

   public function eliminarUsuario($id){
    $data = $this->model->delUser($id);
    print_r($data);
   }

}

?>