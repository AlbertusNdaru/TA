<div class="row">
                    <div class="col-md-12">
                        <h2 align="center" class="page-header" style="margin-top: 0px; margin-bottom: 40px;">
                            TOKO LINTANG<br>Input Pemesanan
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open_multipart('barang/edit'); ?>
                                <div class="form-group">
                                    <label>ID Pemesanan</label>
                                    <input class="form-control" name="nama_barang" value="<?php echo $record->id_pemesanan?>">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->id_kategori'";
                                            echo $record->nama_kategori==$k->nama_kategori?'selected':'';
                                            echo">$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bahan</label>
                                    <select name="bahan" class="form-control">
                                        <?php foreach ($bahan as $k) {
                                            echo "<option value='$k->id_bahan'";
                                            echo $record->nama_bahan==$k->id_bahan?'selected':'';
                                            echo">$k->nama_bahan</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo base_foto().$record->foto?>" width="100" height="150p">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input onkeypress='validate(event)' class="form-control" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Dp Minimal</label>
                                    <input readonly onkeypress='validate(event)' class="form-control" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Kekurangan</label>
                                    <input readonly onkeypress='validate(event)' class="form-control" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Selesai</label>
                                    <input type="date" onkeypress='validate(event)' class="form-control" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pelunasan</label>
                                    <input type="date" onkeypress='validate(event)' class="form-control" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Bahan</label>
                                    <select id="<?php echo $record->id_pemesanan ?>pengrajin" name="id_pengrajin" class="form-control" style="margin-bottom: 15px;">
                                                <?php foreach ($pengrajin->result() as $k) {
                                                        echo "<option value='$k->id_pengrajin'";
                                                        echo">$k->nama_pengrajin</option>";
                                                    } ?>
                                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input readonly class="form-control" name="harga" value="<?php echo $record->deskripsi?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->