<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	
  function Welcome() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
  }
	
  public function index() {
    //$path = base_url().'js/ckfinder';
    $path = 'js/ckfinder';
    $width = '850px';
    $this->editor($path, $width);
    //echo $description;
    $this->form_validation->set_rules('description', 'Page Description', 'trim|required|xss_clean');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('welcome_message');
    }
    else {
      // do your stuff with post data.
      $data['description'] =$this->input->post('description', false);
      //echo $data['description'];
      $this->load->view('welcome_result', $data);
    }
  }

  function editor($path,$width) {
    //Loading Library For Ckeditor
    $this->load->library('ckeditor');
    $this->load->library('ckFinder');
    //configure base path of ckeditor folder 
    //echo 'baseUrl='.base_url();
    $this->ckeditor->basePath = base_url().'js/ckeditor/';
    $this->ckeditor-> config['toolbar'] = 'Full';
    $this->ckeditor->config['language'] = 'en';
    $this->ckeditor-> config['width'] = $width;
    //configure ckfinder with ckeditor config 
    $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
  }
}