<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'faq';
		$this->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */