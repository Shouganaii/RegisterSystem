<?php

class userController extends model{
    private $user;
    public function __construct() {
            $this->user = new Users();

            if(!$this->user->verifyLogin()) {
                    header("Location: ".BASE_URL."login");
                    exit;
            }
    } 
	public function add() {
            $users = new Users();
		$data = array(
                        'nome' => $this->user->getName()
                        );

		$this->loadTemplate('add', $data);

	}  
         
    
    
    
}

