<?php
class Model_Admin extends Model {

public function upload()
{
	$uploaddir = 'video/';
	$name = $_FILES['userfile']['name'];
	
    $uploadfile = $uploaddir . basename($name);
	 	if(!empty($name)){
	      $video = 'video/'.$name;
	    }else{
	      $video = '';
	    }
	    if(!empty($_POST['text'])){
	    	$text = trim($_POST['text']);
	    }else{
	    	$text = "";
	    }
	// проверка на наличие чего нибудь и 
	$sql = "SELECT * FROM `admin`";
	$con = $this->db();
    $res = $con->query($sql);
    $del = $res->fetch_assoc();
    if($res->num_rows>0){
    	$querydel = "SELECT `video` FROM `admin`";
    	$con = $this->db();
    	$res = $con->query($sql);
    	$delete = $res->fetch_assoc();

	    $query = "UPDATE `admin` SET ";
	    	if(!empty($video) && !empty($text)){
	    			unlink($delete['video']);
    			move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
		    $query .= " video='$video', text='$text'";
			}elseif(empty($video)){
			$query .= "text='$text'";
			}else{
				unlink($delete['video']);
    			move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
			$query .= " video='$video'";
			}
			$con = $this->db();
    		$results = $con->query($query);
    }else{
    	$que = "INSERT INTO `admin`";
	    $que .= "(video, text)";
	    $que .= "VALUES ('$video', '$text')";
	    $con = $this->db();
    	$result = $con->query($que);
    }
}





}
