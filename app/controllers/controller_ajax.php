<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.01.2017
 * Time: 13:48
 */
class Controller_Ajax extends Controller
{
    public function __construct() {
        require_once 'app/models/model_ajax.php';
        $this->model = new Model_Ajax();
        $this->view = new View();
    }
    public function action_add_api_profile(){
        echo $this->model->add_api_profile_id();
    }

    public function action_get_client_api_profile(){
        echo json_encode($this->model->get_api_profile_id());
    }

    public function action_remove_api_profile(){
        echo $this->model->remove_api_profile();
    }

    public function action_generate_pdf(){
        require_once 'app/models/model_report.php';
        $report = new Model_Report();
        echo $data = $report->generate_pdf($_POST['val']);
    }

    public function action_send_mail(){
        require_once 'app/models/model_report.php';
        $report = new Model_Report();
        echo $report->send_pdf_mail($_POST['val']['file'], $_POST['val']['email']);
    }

    public function action_get_pdf(){
        require_once 'app/models/model_report.php';
        $report = new Model_Report();
        echo $report->save_pdf();
    }

    public function action_gmetrix_account_save(){
        print_r( $this->model->gmetrix_account_save());
//        echo $this->model->gmetrix_account_save();
    }
}