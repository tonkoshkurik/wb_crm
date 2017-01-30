<?php
class Controller_Client extends Controller
{
  function __construct() {
    $this->model = new Model_Client();
    $this->view = new View();
  }

  function action_index() {
    return $this->action_dashboard();
  }

  
  function action_dashboard() {
    $data["body_class"] = "page-header-fixed";
    session_start();
    $data["title"] = "Client Dashboard";
    $data['inf'] = $this->model->getinform();
      // $this->view->generate('dashboard_view.php', 'template_user_view.php', $data);
    if ($_SESSION['user'] == md5('user')) {
        $this->view->generate('dashboard_client_view.php', 'template_view.php', $data);
      // $this->view->generate('client_dashboard_view.php', 'client_template_view.php', $data);
    } else {
      session_destroy();
      $this->view->generate('danied_view.php', 'template_view.php', $data);
    }
  }

  function action_logout()
  {
    session_start();
    session_destroy();
    header('Location:/login');
  }


  function action_profile(){
    $data["body_class"] = "page-header-fixed";
    session_start();
    $data["title"] = "Client Profile";
    $data["profile"] = $this->model->get_profile();
    if ($_SESSION['user'] == md5('user')) {
      $this->view->generate('profile_view.php', 'template_user_view.php', $data);
    } else {
      session_destroy();
      $this->view->generate('danied_view.php', 'template_view.php', $data);
    }

  }

  function action_UpdateProfile(){
    $respons = $this->model->update_profile();
    echo $respons;
  }

  function action_updateimgclient()
  {
    $res = $this->model->updateimgclient();
      header('Location:/client/dashboard');
  }

  public function action_add_google_analitics()
  {
    $googanlitics = $this->model->add_google_analitics();
  }

 public function action_analitics()
  {
    $data["body_class"] = "page-header-fixed";
    session_start();
    $data["title"] = "Client Dashboard";
    $data['analitics'] = $this->model->analitics();
    $data['inf'] = $this->model->getinform();
      // $this->view->generate('dashboard_view.php', 'template_user_view.php', $data);
    if ($_SESSION['user'] == md5('user')) {
        $this->view->generate('analitics.php', 'template_view.php', $data);
      // $this->view->generate('client_dashboard_view.php', 'client_template_view.php', $data);
    } else {
      session_destroy();
      $this->view->generate('danied_view.php', 'template_view.php', $data);
    }
}

public function action_analitics2()
  {
    $data["body_class"] = "page-header-fixed";
    session_start();
    $data["title"] = "Client Dashboard";
    $data['analitics2'] = $this->model->analitics2();
    $data['inf'] = $this->model->getinform();
      // $this->view->generate('dashboard_view.php', 'template_user_view.php', $data);
    if ($_SESSION['user'] == md5('user')) {
        $this->view->generate('analitics2.php', 'template_view.php', $data);
    } else {
      session_destroy();
      $this->view->generate('danied_view.php', 'template_view.php', $data);
    }
}

 function action_clientinfo()
  {
    $res = $this->model->clientinfo();
    $data['inf'] = $res;
    $result = $this->model->prof();
    $data['info'] = $result;
    // var_dump($data);
    // exit();
    $this->view->generate('edit_clients_view.php', 'template_view.php', $data);
    
  }

  function action_clientanalytics()
    {
        require_once 'app/models/model_ajax.php';
        $this->model = new Model_Ajax();
        $api_profile_id = $this->model->get_api_profile_id();
        $this->view->generate('clients_analytics_view.php', 'template_view.php', $api_profile_id);

    }

    function action_clientanalyticspdf()
    {
//        require_once 'app/models/model_ajax.php';
//        $this->model = new Model_Ajax();
//        $api_profile_id = $this->model->get_api_profile_id();
        $res = $this->model->clientinfo();
        $data['client_info'] = $res;
//        $data = '1234';
        $this->view->generate('clients_analytics_pdf_view.php', 'template_view.php', $data);
//        $this->view->generate('clients_analytics_pdf_view.php', 'template_view.php', $api_profile_id);

    }

  function action_updateclient()
  {
    $res = $this->model->updateclient();
    
    header('Location:/agency/dashboard');
  }

  function action_updateimg()
  {
    $res = $this->model->updateimg();
      header('Location:/agency/dashboard');
  }

    public function action_api(){
        $data = '';
        $this->view->generate('api_view.php', 'template_view.php', $data);
    }

    public function action_view_only_mode(){
        $permission = $_GET['permission'];
        $data = $permission;
        $this->view->generate('view_only_mode_view.php', 'template_view.php', $data);
    }

    public function action_gtmetrix(){
//        require_once str_replace('\\', '/', _MAIN_DOC_ROOT_.'/app/libs/gmetrix1.php');
//        gmetrix_view.php
        require_once str_replace('\\', '/', _MAIN_DOC_ROOT_.'/app/models/model_gmetrix.php');
        $gmetrix = new Model_Gmetrix();

        if ($_POST['gmetrix_url']){
            $gmetrix->url_to_test = $_POST['gmetrix_url'];
            $gmetrix->run();
            $data['test_result'] = $gmetrix->data;

        }

        $res = $this->model->clientinfo();
        $data['api_key'] = $gmetrix->api_key;
        $data['acount_email'] = $gmetrix->account_email;
        $data['client_info'] = $res;
        if ($client_id = $_GET['id']) $data['saved_tests'] = $gmetrix->get_client_tests_by_client_id($client_id);
        $this->view->generate('gmetrix_view.php', 'template_view.php', $data);
    }


}
