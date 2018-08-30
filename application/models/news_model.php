<?php
class News_model extends CI_Model {

         public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
				$this->load->database();
        }
		
		public function get_news($id= FALSE)
		{
        if ($id === FALSE)
        {
                $query = $this->db->get('innovative_section');
                return $query->result_array();
        }

			$query = $this->db->get_where('innovative_section', array('innovative_section_id' => $id));
			return $query->row_array();
		}
}
?>