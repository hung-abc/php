<?php

class Home extends Controllers {
    public $productModel;
    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
    }
    function displayIntroduction(){
        $this->view("master",["Page" => "home"]);
    }
}   
?>