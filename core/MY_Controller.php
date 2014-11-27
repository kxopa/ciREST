<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	private $resource;

    public function __construct()
    {
            parent::__construct();
    }

    public function _remap() {

    	$method = strtolower($this->input->server('REQUEST_METHOD'));
    	$this->resource = $this->uri->segment(1);

		if (!method_exists($this->resource, $method)) {
			$this->response('404', array( 'error' => 'Method ' . strtoupper($method) . " is not exist." ));
		} else {
			$this->$method();
		}


    }

    public function response($http_code, $array) {

    	$headers = $this->input->request_headers();

    	$this->output->set_status_header($http_code);

    	switch ($headers['Accept']) {
    		
    		case 'application/xml':
				$this->output->set_content_type('application/xml');
		    	$output = $this->xml_encode($array, new SimpleXMLElement('<' . $this->resource . '/>'))->asXML();
    			break;
    		
    		default:
				$this->output->set_content_type('application/json');
		    	$output = json_encode($array);
    			break;
    	}

		$this->output->set_output($output);

    }

	private function xml_encode($array, $xml) {
	    foreach ($array as $k => $v) {
	        is_array($v)
	            ? array_to_xml($v, $xml->addChild($k))
	            : $xml->addChild($k, $v);
	    }
	    return $xml;
	}

}

/* End of file REST_Controller.php */
/* Location: ./application/core/MY_Controller.php */