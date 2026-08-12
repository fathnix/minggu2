<?php

require_once '../app/models/User_model.php';

class Home extends Controller {
    public function index() {
        $userModel = new User_model();
        $data = [
            'title' => 'Home - MVC Sederhana',
            'user' => $userModel->getUser()
        ];

        $this->view('home/index', $data);
    }
}