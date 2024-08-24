<?php

class Home extends Controllers{
    public function __construct()
    {
    parent::__construct();
    }


   public function home(){
    $data['page_id'] = 1;
    $data['page_tag'] = "Home";
    $data['page_title'] = "Tienda Virtual JAO";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, 
    accusantium. Reprehenderit sit nam illo sapiente laudantium saepe, maxime doloremque 
    expedita corrupti, voluptates blanditiis reiciendis officiis molestias, nobis nihil accusamus a";
   $this->views->getView($this, "home", $data);
   }


}

?>