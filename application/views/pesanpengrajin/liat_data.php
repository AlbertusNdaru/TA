<div class="row">
                    <div class="col-md-12">
                    <h3 align="center" class="page-header">
                         Data Pesan Pengrajin
                        </h3>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('pesanpengrajin/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                      
                                                <th>No. Pemesanan</th>
                                                <th>Nama Pengrajin</th>
                                                <th>Banyak</th>
                                                <th>Ongkos Bikin</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                             
                                                <td><?php echo $r->nama_jasa_layanan_kirim?></td>
                                                <td class="center">
                                                   <?php echo anchor('pesanpengrajin/edit/'.$r->id_jasa_layanan_kirim,'Edit','class="btn btn-primary"'); ?>
                                                   <?php echo anchor('jasakirim/delete/'.$r->id_jasa_layanan_kirim,'Delete','class="btn btn-danger"'); ?>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                        </tbody>
                                    </table>
                                   
                                </div>
                                <?php
                                        echo $this->pagination->create_links();
                                    ?>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->