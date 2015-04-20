<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

    public function index()
    {
    	// All method return a 404 - Not Found
		$this->load->library('webapi');
		$this->webapi->run();
    }

	public function test()
	{
		$this->load->library('webapi');

		// GET ~/api/test
		$this->webapi->method('get',function() {
			return array('msg' => 'Test REST response with GET method.');
		});

		// POST ~/api/test
		$this->webapi->method('post',function() {
			return array('msg' => 'Test REST response with POST method.');
		});

		// PUT ~/api/test
		$this->webapi->method('put',function() {
			return array('msg' => 'Test REST response with PUT method.');
		});

		// DELETE ~/api/test
		$this->webapi->method('delete',function() {
			return array('msg' => 'Test REST response with DELETE method.');
		});

		$this->webapi->run();
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */