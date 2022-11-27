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
        $sql = "CALL insert_barang(".$data['nama_table'].",".$data['id'].",".$data['nama_barang'].",".$data['jumlah'].",".$data['harga'].")";
        $db->query($sql);

        // $sql = 'insert into :table: values( :id: , :nama_barang: , :jumlah: , :harga: );';
        // $db->query($sql, [
        //     'table' => $data['nama_table'],
        //     'id' => $data['id'],
        //     'nama_barang' => $data['nama_barang'],
        //     'jumlah' => $data['jumlah'],
        //     'harga' => floatval($data['harga'])
        // ]);
        return view('insert_barang');
    }

    public function update_data($data){
        $db = db_connect();
        $sql = "CALL update_barang(".$data['nama_table'].",".$data['id'].",".$data['nama_barang'].",".$data['jumlah'].",".$data['harga'].")";
        $db->query($sql);
    }

}