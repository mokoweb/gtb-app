<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
		
	public	function __construct()
		{
			parent::__construct();
			/*Additional code which you want to run automatically in every function call */
			$this->load->database();
			$this->load->model('news_model');
		}

	 public function view($page = 'home')
	{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
			}

			$data['title'] = ucfirst('Guaranty Trust Bank PLC'); // Capitalize the first letter
			$data['news'] = $this->news_model->get_news();
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
	}
	 public function login($page = 'login')
	{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
			}
			
			$data['results'] = $this->news_model->get_news();

			$data['title'] = ucfirst(' Edit Guaranty Trust Bank PLC'); // Capitalize the first letter
			//$data['news'] = $this->news_model->get_news();
			$this->load->view('pages/'.$page, $data);
			
	}
	 public function update()
	{
		//var_dump($_POST); exit;
		$sections = $this->news_model->get_news();
		foreach($sections as $i){
			$id = $i['innovative_section_id'];
			$data['body'] = $this->input->post('body_'.$id);
			$data['heading'] = $this->input->post('head_'.$id);
			$this->db->where('innovative_section_id', $id);
			$this->db->update('innovative_section' , $data);
				
			
		}
		
         redirect(base_url(), 'refresh');
		
	}
}
