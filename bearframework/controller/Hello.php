<?php


class Hello extends Controller
{
	public function index()
	{
		$this->view->name = 'Sharlyn';
		$this->view->render('home.html');
	}

	public function greet() {
		$this->view->name = 'Jomil';
		$this->view->render('home.html');
	}
}