<?php

use \Estartar\Core\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();  
    }

    public function index($params)
    {
        return $this->View("Home/Index", "Master");
    }  


}