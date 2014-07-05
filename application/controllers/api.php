<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()	{
		redirect('/v' . $this->config->item('api_version') . '/help/');
	}

}

/* End of file api.php */
/* Location: ./application/controllers/api.php */