<?php
class model_pemesanan extends ci_model{
    
    function tampilpemesanan() 
    {
        $query = "SELECT * from pemesanan where status='waiting' AND bukti_pembayaran is not null";
        $pesan = $this->db->query($query)->result();
        return $pesan;
    }

    function updatestatuspemesanan($id)
    {
        $query = "UPDATE pemesanan SET status='Proses' where id_pemesanan='".$id."'";
        $update = $this->db->query($query);
    }
   
    
}