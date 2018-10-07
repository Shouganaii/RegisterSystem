<?php
class homeController extends controller {

	private $user;

	public function __construct() {
		$this->user = new Users();

		if(!$this->user->verifyLogin()) {
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

	public function index() {
            $contatos = new Contatos();
		$data = array(
			'name' => $this->user->getName(),
                        'lista' =>$contatos->getAll()
		);
		$this->loadTemplate('home', $data);
	} 
	public function signup() {
            $contatos = new Contatos();
		$data = array(
			'name' => $this->user->getName(),
                        'lista' =>$contatos->getAll()
		);
		$this->loadTemplate('signup', $data);
	}         
       

}