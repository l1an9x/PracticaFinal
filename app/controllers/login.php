<?php

/*
 * Author: Liang Shan Ji
 */

class Login extends Controller {

    function __construct() {
        parent::__construct();
        echo "dsadjksabdksajbdoaf";
    }

    function login() {
        $this->model->login();
    }
    
    function logout(){
        $this->model->logout();
    }

}
