<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('dashboard');
	}

	public function categories() {
		$contents = file_get_contents('https://64cc65872eafdcdc8519cbdf.mockapi.io/products');
		$data = json_decode($contents, TRUE);
		$categories = [];

		foreach ($data as $key => $value) {
			if (!in_array($value['category'], $categories)) {
				$categories[] = $value['category'];
			}
		}

		echo json_encode($categories);
	}

	public function products(){
		// $input = $this->input->post();
		$contents = file_get_contents('https://64cc65872eafdcdc8519cbdf.mockapi.io/products');
		$data = json_decode($contents, TRUE);

		$categoryToFilter = $this->input->post('category');
		$keywordToFilter = $this->input->post('keyword');

		$filteredData = array_filter($data, function($item) use ($categoryToFilter, $keywordToFilter) {
			$categoryMatches = $categoryToFilter === 'all' || $item['category'] === $categoryToFilter;
			$nameContainsKeyword = $keywordToFilter === '' || stripos($item['name'], $keywordToFilter) !== false;
			
			return $categoryMatches && $nameContainsKeyword;
		});

		echo json_encode($filteredData);
	}
}
