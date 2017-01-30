<?php
class Controller_searchconsole extends Controller
{
  function __construct() {
    $this->model = new Model_Searchconsole();
    $this->view = new View();
  }

  function action_index() {
    require_once("vendor/autoload.php");
    $data = $this->model->searchconsole();
    $this->view->generate('search_console.php', 'clean_template_view.php', $data);

  }

  function action_oauth2callback() {

  }
}
