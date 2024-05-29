<?php
class ProductModel extends dbProduct
{
    public function getRecords($tablename)
    {
        $qr ="SELECT * FROM $tablename";
        return mysqli_query($this->con,$qr);
    }
    public function getRecordsbyField($tblname,$field,$keyword){
        $sql ="SELECT * FROM $tblname where $field = '$keyword'";
        return mysqli_query($this->con,$sql);
    }
    public function getRecordsbyField1($tblname,$field1,$keyword1,$field2,$keyword2){
        $sql ="SELECT * FROM $tblname where $field1 = '$keyword1' AND $field2 = '$keyword2'";
        return mysqli_query($this->con,$sql);
    }
    public function insertProduct($id,$pname,$company,$year,$band,$image){
        $result = false;
        $sql = "insert into tblProduct(pid,pname,company,year,band,pImage) values('$id','$pname','$company','$year','$band','$image')";
        if(mysqli_query($this->con,$sql)){
            $result = true;
        }
        return json_decode($result);
    }
}
?>