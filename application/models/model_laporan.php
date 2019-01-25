<?php
class model_laporan extends CI_Model{
    
    function tampillaporanpenjualan()
    {
        $query = "SELECT * from penjualan join jasa_layanan_kirim where penjualan.id_jasa_layanan_kirim=jasa_layanan_kirim.id_jasa_layanan_kirim";
        $penjualan = $this->db->query($query);
        return $penjualan;
    }

}