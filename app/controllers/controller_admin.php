<?php
class Controller_Admin extends Controller {

 function __construct()
  {
    $this->model = new Model_Admin();
    $this->view = new View();
  }

  function action_index()
  {

  }

  function action_dashboard()
  {
    $inform = $this->model->getinform();
    $data['inf'] = $inform;
    $data['title'] = "Admin Panel";
    $this->view->generate("admin_view.php", "template_view.php", $data);

  }

  function action_upload()
  {
    $res = $this->model->upload();
    header('Location: /admin/dashboard');
  }




  
}
?>