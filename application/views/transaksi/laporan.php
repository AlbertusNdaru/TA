                <div class="row">
                    <div class="col-md-12">
                    <img style="display: block;margin-left: auto;margin-right: auto; width: 200px;" src="<?php echo base_url()?>assets/img/lintang.png">
                        <h2 align="center" class="page-header">
                            Djono Silver <br>
                            Laporan Transaksi
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('transaksi/laporan', array('class'=>'form-inline')); ?>
                                <table>    
                                    <tr class="form-group" >
                                        <label for="exampleInputName2" style="margin-right: 10px;">Tanggal</label>
                                        <input type="date" name="tanggal1" class="form-control" placeholder="Tanggal Mulai" style="width:25%;">
                                    </tr>
                                    <tr class="form-group" >
                                        <label for="exampleInputEmail2" style="margin-right: 10px; margin-left : 10px;"> - </label>
                                        <input type="date" name="tanggal2" class="form-control" placeholder="Tanggal Selesai" style="width:25%;">
                                    </tr>
                                    <tr><button style="margin-left: 10px;" class="btn btn-primary btn-sm" type="submit" name="submit">Tampilkan</button>
                                    <button style="margin-left: 5px;" class="btn btn-primary btn-sm" type="submit" name="cetak">Cetak</button>
                                    <a style="margin-left: 5px; color:white" href="<?php echo base_url().'transaksi/allpdf'?>" target="_blank" class="btn btn-primary btn-sm" name="cetak">Cetak Semua</a>
                                </tr>
                                </table>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Id_Pembeli</th>
                                                <th>Total Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->tanggal ?></td>
                                                <td><?php echo $r->id_member ?></td>
                                                <td>Rp <?php echo number_format($r->jumlahtotal,2) ?></td>
                                            </tr>
                                        <?php $no++; $total=$total+$r->jumlahtotal; } ?>
                                            <tr>
                                                <td colspan="3" style="text-align: right;">Total</td>
                                                <td>Rp <?php echo  number_format($total,2);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->