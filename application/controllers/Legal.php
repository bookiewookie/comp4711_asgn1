<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'legal';
		$this->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */