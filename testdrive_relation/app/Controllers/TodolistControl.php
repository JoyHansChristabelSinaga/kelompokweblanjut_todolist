<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todolist;

//$username;

class TodolistControl extends BaseController
{
    public function index()
    {
      $TodolistModel = new Todolist();
      $Todolist = $TodolistModel->where('username' , session()->get('username'))->findall();

      $data = [
         'title' => 'Todolist',
         'Todolist' => $Todolist,
      ];

      return view('/list' , $data);
    }

    public function create(){
      $data = [
         'title' => 'Create Todolist'
        ];
        return view('/create' , $data);

    }
    public function store()
    {
      $TodolistModel = new Todolist();

      $data=[
         'username' => session()->get('username'),
         'kegiatan' => $this->request->getPost('kegiatan'),
         'waktu'=> $this->request->getPost('waktu'),
         'deskripsi'=>$this->request->getPost('deskripsi')
      ];

        $TodolistModel->save($data);
        return redirect()->to('/list');

    }
    public function delete($id)
    {
        $TodolistModel = new Todolist();
        $TodolistModel->delete($id);
    
        return redirect()->to('/list');
    
    }
    public function edit($id){
        $TodolistModel = new Todolist();
        $Todolist = $TodolistModel->find($id);

        $data = [
            'title' => ' Edit Todolist',
            'Todolist' => $Todolist
        ];
        return view('\edit', $data);
    }
    public function update($id)
    {
        $TodolistModel = new Todolist();
        $data=[
            'username' => session()->get('username'),
            'kegiatan' => $this->request->getVar('kegiatan'),
            'waktu'=> $this->request->getVar('waktu'),
            'deskripsi'=>$this->request->getVar('deskripsi')
        ];

        $TodolistModel->update($id, $data);
        return redirect()->to('/list');
    } 

}
