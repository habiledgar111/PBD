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

    public function delete_view(){
        return view("delete_view");
    }

    public function delete_barang(){
        $model = new barang;
        $data = array(
            'nama_table' => $this->request->getPost('nama_table'),
            'id' =>$this->request->getPost('id')
        );
        
        $model->delete_data($data);
    }

    public function diskon_view(){
        return view("diskon_view");
    }

    public function diskon(){
        $connect = mysqli_connect("localhost","root","","tugaspbd");
        $sql = "select diskon(".(int)$this->request->getPost('jumlah').",".(double)$this->request->getPost('harga').") as diskon;";
        if($result = mysqli_query($connect, $sql)){
            if(mysqli_num_rows($result) > 0 ){
                while($row = mysqli_fetch_array($result)){
                    return $row['diskon']."</br>";
                }
            }
        }
    }

    public function get_allbarang(){
        $model = new barang;
        $model->get_allbarang();
    }
}
