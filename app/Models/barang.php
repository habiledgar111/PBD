<?php
namespace App\Models;
use CodeIgniter\Model;
 
class barang extends Model{
    protected $table = 'barang';

    public function getProduct(){
        return $this->findAll();
    }

    public function insert_data($data){
        $db = db_connect();
        $sql = "CALL insert_barang('".$data['nama_table']."',".$data['id'].",'".$data['nama_barang']."',".$data['jumlah'].",".$data['harga'].")";
        $db->query($sql);
        echo "berhasil";
        return view('insert_view');
    }

    public function update_data($data){
        $db = db_connect();
        $sql = "CALL update_barang(''".$data['nama_table']."'',".$data['id'].",''".$data['nama_barang']."'',".$data['jumlah'].",".$data['harga'].")";
        $db->query($sql);
        echo "berhasil";
    }

    public function delete_data($data){
        $db = db_connect();
        $sql = "CALL delete_barang('".$data['nama_table']."',".$data['id'].")";
        $db->query($sql);
        echo "berhasil";
    }

    public function get_allbarang(){
        $db = db_connect();
        $query = $this->findAll();
        return $query;
        
        //cara menampilkannya
        // foreach($query as $data){
        //     echo $data['id_barang'].'</br>';
        //     echo $data['nama_barang'].'</br>';
        //     echo $data['jumlah'].'</br>';
        //     echo $data['harga'].'</br>';
        //     echo '</br>';
        // }
    }   
}
