<?php
class model_laporan extends CI_Model{
    
    function tampillaporanpenjualan()
    {
        $query = "SELECT * from penjualan";
        $penjualan = $this->db->query($query)->result();
        return $penjualan;
    }

}