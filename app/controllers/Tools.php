<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tools extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function message($to = 'World')
	{
			echo "Hello {$to}!".PHP_EOL;
	}
	
}