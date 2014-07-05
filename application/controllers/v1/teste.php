<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends REST_Controller {

	public function get() {
		$this->response('200', array(
			'response' => 'Method GET ok!'
		));
	}

	// public function post() {
	// 	$this->response('200', array(
	// 		'response' => 'Method POST ok!'
	// 	));
	// }

	// public function put() {
	// 	$this->response('200', array(
	// 		'response' => 'Method PUT ok!'
	// 	));
	// }

	// public function delete() {
	// 	$this->response('200', array(
	// 		'response' => 'Method DELETE ok!'
	// 	));
	// }

}

/* End of file teste.php */
/* Location: ./application/controllers/v1/teste.php */