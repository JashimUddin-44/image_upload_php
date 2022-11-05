<?php 

class image{
    public function load(){
        $connect=mysqli_connect('localhost','root','','picture');
        $file_name=$_FILES['image']['name'];
	    $file_type=$_FILES['image']['type'];
	    $file_error=$_FILES['image']['error'];
	    $tmp_name=$_FILES['image']['tmp_name'];
	    $file_size=$_FILES['image']['size'];
         // echo $file_name;
        // echo $file_type;
        // echo $file_error;
        // echo $tmp_name;
        // echo $file_size;
        $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        if(move_uploaded_file($tmp_name,'../phpfile/upload/'.$file_name)){
            if($ext==='ping' or $ext==='jpg'){
                if($file_size<1500000){
                    $insert="INSERT INTO image(image) VALUES('$file_name')";

                    $data=mysqli_query($connect,$insert);

                    if($data){
                        echo "image";
                    }
                    else{
                        echo "Not image";
                    }
                }

            }
        }
       
    }
}



?>