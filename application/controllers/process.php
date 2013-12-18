<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$userip = $this->input->ip_address();
		
		$filename = "num.txt"; // Default for handsome;
		$type = true;
		if ($this->input->post('action')) {
			if ($this->input->post('action') == 'sfsoifhosijfowihwhtiuhg9whwr8g93884hg9wh9w8h9wr8gh9s8hg9shg9s8hg9sehg9w8eht9w8erhw9') {
				$filename = 'numno.txt';
				$type = false;
			} else if ($this->input->post('action') == 'oijsdjoieohfaoYgyuUYGufyUTFufGYUiybgIGgyGYgyGYkigbyIYBGbkyIYGbkyiIBbiuIBUbiuieufhsodufhbdjvbsdf') {
				$filename = 'num.txt';
			} else {
				redirect('http://nguyenngocthanhhai.net');
			}
		} else {
			redirect('http://nguyenngocthanhhai.net');
		}

		
		if ($this->session->userdata($userip) != '1') {
			$this->session->set_userdata($userip, '1');


			$num = (int) @file_get_contents('application/file/' . $filename);
  			$num++;
			@file_put_contents('application/file/' . $filename, $num);
		}


		$data['num'] = @file_get_contents('application/file/num.txt');
		$data['numno'] = @file_get_contents('application/file/numno.txt');
		$data['type']= $type;
		$this->load->view('thanks_message', $data);
	}
}

/* End of file process.php */
/* Location: ./application/controllers/process.php */