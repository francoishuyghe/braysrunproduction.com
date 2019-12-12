<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{

	public function data() {
		$data['trailer'] = get_field('trailer');
		
		return $data;
	}
}
