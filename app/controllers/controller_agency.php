<?php

class Controller_Agency extends Controller
{
  function __construct()
  {
    $this->model = new Model_Agency();
    $this->view = new View();
  }
  function action_index() {
    return $this->action_dashboard();
  }

  function action_dashboard()
  {

    session_start();
    if ($_SESSION['user_role'] == 2) {

      $data["title"] = "Dashboard";
      $res = $this->model->prof();
      $result = $this->model->allclient();
      $data['all'] = $result;
      $data['prof'] = $res;
      $this->view->generate('dashboard_admin_view.php', 'template_view.php', $data);

    }elseif($_SESSION['user_role'] == 3){

      $data["title"] = "Dashboard";
      $res = $this->model->profclient();
      // $result = $this->model->allclient();
      // $data['all'] = $result;
      $data['prof'] = $res;
      $this->view->generate('dashboard_client_view.php', 'template_view.php', $data);
    
    } else {
      session_destroy();
      $this->view->generate('danied_view.php', 'template_view.php', '');
    }
  }

  function action_addclients() 
  {
    $res = $this->model->saveclient();
    if($res != 'Sorry, but the email is not available'){
     echo 'Success';
    }else{
      $error = 'Sorry, but the email is not available';
      echo 'Error';
    }
  }

  function action_allclients()
  {
    $res = $this->model->allclient();
    $data['all'] = $res;

    $this->view->generate('dashboard_clients_view.php', 'template_view.php', $data);


  }

  function action_checkemail(){
    $res = $this->model->checkemail();
    if($res == 'Success'){
      echo "Success";
      exit();
    }else{
      echo "Sorry, but the email is not available";
      exit();
    }

  }

  function action_updateimg()
  {
    $res = $this->model->updateimg();
      header('Location:/agency/infagency');
  }

  function action_logout()
  {
    session_start();
    session_destroy();
    header('Location:/login');
  }

  public function action_infagency()
  {
    $res = $this->model->infagency();
    if($res == 'null'){
      $this->view->generate('edit_profile_view.php', 'template_view.php', $data);   
    }else{
      $data['inf'] = $res;
      $this->view->generate('profile_view.php', 'template_view.php', $data);   
    }
  }

  public function action_saveinform()
  {
    $res = $this->model->saveinform();
    header('Location:/agency/infagency');
  }

  public function action_updateprof()
  {
    $res = $this->model->updateprof();

    if($res){
       header('Location:/agency/infagency');
    }else{
      echo "Error";
    }

  }


    public function action_clear_session(){
        session_start();
        unset($_SESSION['access_token']);
        header('Location: /agency/gapi');
    }

    public function action_gapi_auth(){
//        require_once dirname(__FILE__).'/../libs/g-api/Api.php';
        include dirname(__FILE__).'/../libs/google-api-php-client/gapi.php';
//        require_once dirname(__FILE__).'/../libs/g-api/test.php';
//        require_once dirname(__FILE__).'/../models/model_api_data.php';
//        $api = new Api();
//        $api->apiAuth();
//        var_dump($api->client);
//        echo $api->analytics();
    }



}
