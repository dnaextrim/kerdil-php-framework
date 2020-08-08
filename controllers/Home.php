<?php

namespace Controllers;

use Core\Controller;
use Core\Request;
use Core\Response;

class Home extends Controller {
    
    private $request;
    private $response;

    public function __construct() {
    
        parent::__construct();
        
        $this->request = new Request;
        $this->response = new Response;
    }

    public function index() {
        echo 'Oke';    
    }
}