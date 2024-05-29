<?php

use LDAP\Result;

class ProductManager extends Controllers{
    public $producModel;
    public function __construct(){
        $this->producModel = $this->model("ProductModel");
    }
    function displayIntroduction(){
        $this->view("master",["Page"=>"home"]);
    }
    function getProductsbyBand(){
        $this->view("master",["Page"=>"getProductsbyBand"]);
    }

    public function displayProductByBand(){
        if(isset($_POST["btSearch"])){
            $band = $_POST["selectBand"];
            $tblname ="tblproduct";
            $_field = "band";
            $products = $this->producModel->getRecordsbyField($tblname,$_field,$band);
            $this->view("master",["Page"=>"getProductsbyBand","Products"=>$products]);
        }
    }
    function getProductsbyYear(){
        $this->view("master",["Page"=>"getProductsbyYear"]);
    }

    public function displayProductByYear(){
        if(isset($_POST["btSearchYear"])){
            $year = $_POST["selectYear"];
            $tblname ="tblproduct";
            $_field = "year";
            $products = $this->producModel->getRecordsbyField($tblname,$_field,$year);
            $this->view("master",["Page"=>"getProductsbyYear","Products"=>$products]);
        }
    }
    function getProductsbyYearAndBand(){
        $this->view("master",["Page"=>"getProductsbyYearAndBand"]);
    }

    public function displayProductByYearAndBand(){
        if(isset($_POST["btSearchYear"])){
            $year = $_POST["selectYear"];
            $band = $_POST["selectBand"];
            $tblname ="tblproduct";
            $_field1 = "year";
            $_field2 = "band";
            $products = $this->producModel->getRecordsbyField1($tblname,$_field1,$year,$_field2,$band);
            $this->view("master",["Page"=>"getProductsbyYearAndBand","Products"=>$products]);
        }
    }
    function impinsertProduct(){
        $this->view("master",["Page"=>"insertProduct"]);
    }
    public function insertProduct(){
        if(isset($_POST["btnInsert"])){
            $id = $_POST["id"];
            $pname = $_POST["pname"];
            $company = $_POST["company"];
            $year = $_POST["year"];
            $band = $_POST["band"];
            if(isset($_FILES['image'])&&$_FILES['image']['error'] === UPLOAD_ERR_OK){
                $image = 'data:image/png;base64,'.base64_encode(file_get_contents($_FILES['image']['tmp_name']));
            }
            $result = $this->producModel->insertProduct($id,$pname,$company,$year,$band,$image);
            $this->view("master",["Page"=>"insertProduct","result"=>$result]);
        }
    }
}
?>