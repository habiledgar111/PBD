<?php

namespace App\Controllers;

use App\Models\barang;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function insert_view(){
        return view('insert_barang');
    }
    public function insert_barang(){
        $model = new barang;
        $data = array(
            'nama_table' => $this->request->getPost('nama_table'),
            'id' => $this->request->getPost('id'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga')
        );
        $model->insert_data($data);
    }

    public function update_view(){
        return view('update_barang');
    }

    public function update_barang(){
        $model = new barang;
        $data = array(
            'nama_table' => $this->request->getPost('nama_table'),
            'id' => $this->request->getPost('id'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga')
        );
        $model->update_data($data);
    }
}
