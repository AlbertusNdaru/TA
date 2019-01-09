               <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-6" style="border-radius: 12px;  ">
                       <h2 align="center" class="page-header" style="margin-top: 0px;">
                           Pemesanan Barang
                        </h2>
                        <div class="panel panel-default" style=" background:brown; color:white;border-radius: 12px; ">
                            <div class="panel-body">
                            <?php echo form_open_multipart('transaksi/postpemesanan'); ?>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select id="inputkategori" name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="deskripsi" style="height: 100px; width:100%; border-radius:5px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Foto</label>
                                    <input required id="inputfoto" accept="image/x-png,image/gif,image/jpeg" type="file" class="form-control" name="berkas" placeholder="upload">
                                </div>
                                <div class="form-group">
                                    <label>Berat</label>
                                    <input  id="brtpesan" type="number" class="form-control" name="brtpesan" placeholder="Keterangan" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Pesanan</label>
                                    <input  id="jmlpesan" type="number" class="form-control" name="jmlpesan" placeholder="Keterangan" value="1" min="1" max="10">
                                </div>
                                <button type="submit" id="btnsimpanpemesanan" name="submit" class="btn btn-primary btn-sm" >Simpan</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                    <div class="col-md-6" style="border-radius: 12px;">
                    <h2 align="center" class="page-header" style="margin-top: 0px;">
                           Cek Pemesanan
                        </h2>
                        <div class="panel panel-default" style=" background:brown; color:white; border-radius: 12px;">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>No Pesanan</label>
                                    <select id="pilidpesanan" name="pilpemesanan" class="form-control" onchange="cekpesanan()">
                                        <?php foreach ($pemesanan as $k) {
                                            echo "<option value='$k->id_pemesanan'>$k->id_pemesanan</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Berat</label>
                                    <input  id="brtpesan" type="number" class="form-control" name="brtpesan" placeholder="Keterangan" value="1" min="1">
                                </div>
                                <div class="form-group">
                                    <label>Berat</label>
                                    <input  id="brtpesan" type="number" class="form-control" name="brtpesan" placeholder="Keterangan" value="1" min="1">
                                </div>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->

<script>
$("#jmlpesan").keydown(function(e) {
    //prevent both backspace and delete keys
    if ((e.keyCode === 8 || e.keyCode === 46)) {
        return false;
    };
});

function cekpesanan()
{

}
</script>
