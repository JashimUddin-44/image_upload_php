<?php
class high{
    public function light(){
        $connect=mysqli_connect('localhost','root','','picture');

        $select="SELECT * FROM image";

        $data=mysqli_query($connect,$select);

        return $data;
    }
}
?>