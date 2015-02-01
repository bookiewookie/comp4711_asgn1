<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bookexchange extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'ads';

		$source = $this->adverts->all();
		$ads = array();

		foreach ( $source as $ad )
		{
			$ads[] = array('name' => $ad['name'], 'title' => $ad['title'], 'price' => $ad['price'],
            'condition' => $ad['condition'], 'contact' => $ad['contact']);
		}

		$this->data['adverts'] = $ads;

		$this->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */