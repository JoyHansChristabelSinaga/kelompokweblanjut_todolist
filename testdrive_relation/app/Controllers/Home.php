<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $dataModel = new UserModel();
        $data = $dataModel->findAll();

        $data = [
            'data' => $data
        ];

        return view('welcome_message',$data);
    }
}
