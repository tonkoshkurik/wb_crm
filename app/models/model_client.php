<?php
class Model_Client extends Model {

	public function get_profile(){
		$sql = ' SELECT `email`, `password`, `level`, `full_name`';
		$sql.= ' FROM `users`';
		$sql.= ' WHERE id = '.$_COOKIE['user_id'];
		$con = $this->db();
		$res = $con->query($sql);
		if($res){
			return $res->fetch_assoc();
		} else {
			return FALSE;
		}

	}

	public function update_profile(){
		$p  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		session_start();
		if(empty($p['password']) && empty($p['password'])){
			$id = $_SESSION['user_id'];
			$email = $p["email"];
			$name = $p["name"];
			$address = $p["address"];
			$phone = $p["phone"];
			$url = $p["url"];
			$notes = $p["notes"];
		      // $_COOKIE['user_name'] = $full_name;

			$sql = "UPDATE `clients`";
			$sql.= " SET email='$email',name='$name',address='$address',phone='$phone',url='$url',notes='$notes'";
			$sql.= " WHERE id_user='$id'";
			$con = $this->db();
			$res = $con->query($sql);
			if($res){
				header('Location:/client/dashboard');
			}else{
				return "Db error";
			}

		}else{

			$id = $_SESSION['user_id'];
			$email = $p["email"];
			$password = md5($p["password"]);
			$name = $p["name"];
			$address = $p["address"];
			$phone = $p["phone"];
			$url = $p["url"];
			$notes = $p["notes"];

		      	// $_COOKIE['user_name'] = $full_name;

			$sql = "UPDATE `clients`";
			$sql.= " SET email='$email',name='$name',password='$password',address='$address',phone='$phone',url='$url',notes='$notes'";
			$sql.= " WHERE id_user='$id'";
			$con = $this->db();
			$res = $con->query($sql);
			if($res){
				header('Location:/client/dashboard');
			}else{
				return "Db error";
			}
		}
	}
// начало функционала для клиентов на стороне агенства
	public function clientinfo()
  {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `clients`";
    $sql .="WHERE id='$id'";
    $con = $this->db();
    $res = $con->query($sql);

    $inf = $res->fetch_assoc();

    return $inf;
   
  }

  public function updateclient()
  {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];
    $note = $_POST['note'];
    if(!empty($password)){

    $sql = "UPDATE `clients`";
    $sql.= " SET name='$name',email='$email',password='$password',address='$address',phone='$phone',url='$url',notes='$note'";
    $sql.= " WHERE id='$id'";
			//var_dump($sql);
			//die();
    $con = $this->db();
    $res = $con->query($sql);
  }else{
    $sql = "UPDATE `clients`";
    $sql.= " SET name='$name', email='$email', address = '$address', phone='$phone', url='$url', notes=$note";
    $sql.= " WHERE id='$id'";

    $con = $this->db();
    $res = $con->query($sql);
    
  }

    if($res){
        return 'Success';
    }else{
        return "Db error";
        }
  }

  public function updateimg()
  {
    $id = $_POST['id'];
    // $val = $_POST['val'];
    $uploaddir = 'images/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    $img = 'images/'.$_FILES['userfile']['name'];


    $sql = "UPDATE `clients`";
    $sql.= " SET img='$img'";
    $sql.= " WHERE id='$id'";

    $con = $this->db();
    $res = $con->query($sql);
    if($res){
        return 'Success';
    }else{
        return "Db error";
        }
  }

  // конец функционала для клиентов на стороне агенства

  public function prof()
  {
    session_start();

    $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `agency`";
    $sql .= "WHERE id_user = '$id'";
    $con = $this->db();
    $res = $con->query($sql);
    $inf = $res->fetch_assoc();
    
    return $inf;
  }

  public function getinform()
    {    
        session_start();
        $id_user = $_SESSION['user_id'];

        $sql = "SELECT * FROM `clients`";
        $sql .= "WHERE id_user = '$id_user'";
        $con = $this->db();
        $res = $con->query($sql);

        $row = $res->fetch_assoc();

        return $row;
    }

    public function updateimgclient()
  {
    session_start();

    $id = $_SESSION['user_id'];
    // $val = $_POST['val'];
    $uploaddir = 'images/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    $img = 'images/'.$_FILES['image']['name'];

    $sql = "UPDATE `clients`";
    $sql.= " SET img='$img'";
    $sql.= " WHERE id_user='$id'";
    $con = $this->db();
    $res = $con->query($sql);
    if($res){
        return 'Success';
    }else{
        return "Db error";
        }
  }

   public function analitics()
  {
    $analitics = 'Google Analitics';
    return $analitics;
  }

    public function analitics2()
  {
    $analitics2 = 'Google Analitics2';
    return $analitics2;
  }


	
	
}