<?php

class Dashboard extends Abstract_controller{
  public function __construct(){

  }

  public function index(){

      //Load New Css And JS
      $datatemplate['title'] = "Testing  - " . $this->config->item('appName');
      $datatemplate["loadCSS"] = $this->loadassets->loadVendorsCSS(array("bootstrap-fileupload/bootstrap-fileupload.css"));
      $datatemplate["loadJS"] = $this->loadassets->loadVendorsJS(array("parsleyjs/dist/parsley.min.js","bootstrap-fileupload/bootstrap-fileupload.js"));

      $datatemplate['body'] = 'create';
      $this->load->view($this->config->item('vtemplate') . 'myheader', $datatemplate);

  }

}
