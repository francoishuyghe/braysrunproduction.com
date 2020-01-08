<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageAbout extends Controller
{

	public function data() {
		$data['intro_text'] = get_field('intro_text');
		$data['team'] = get_field('team');
		$data['contact'] = get_field('contact');
		
		return $data;
	}
}
