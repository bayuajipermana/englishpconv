<h2 class="page-title">
    Data Pendaftaran Siswa
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="<?php echo base_url(); ?>pendaftaran/inputpendaftaran" id="pendaftaransiswa" class="btn btn-info fa fa-plus mb-2"> Daftar</a>
            <div class="md-3"><?php echo $this->session->flashdata('msg'); ?></div>   
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="tablependaftaran">
                        <thead class>
                            <tr>
                                <th width="30px"><center>No</center></th>
                                <th><center>ID Pendaftaran</center></th>
                                <th><center>Tanggal Daftar</center></th>
                                <th><center>NIK</center></th>
                                <th><center>Nama Siswa</center></th>
                                <th><center>Program Belajar</center></th>
                                <th><center>Piutang</center></th>
                                <th><center>Status</center></th>
                                <th><center>Jatuh Tempo</center></th>
                                <th><center>User</center></th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tboody>
                            <?php
                                $no = 1;
                                foreach ($pendaftaran as $b){
                            ?>
                            <tr>
                                <td><center><?php echo $no; ?></center></td>
                                <td><center><?php echo $b->id_pendaftaran; ?></a></center></td>
                                <td><center><?php echo $b->tgl_pendaftaran; ?></a></center></td>
                                <td><center><?php echo $b->nik; ?></a></center></td>
                                <td><center><?php echo $b->nama; ?></center></td>    
                                <td><center><?php echo $b->nama_program; ?></center></td>
                                <td><center><?php echo angka($b->saldo); ?></center></td>
                                <td><center>
                                        <?php 
                                            if($b->status){
                                                echo "<span class='badge bg-success'>LUNAS</span>";
                                            }else{
                                                echo "<span class='badge bg-danger'>BELUM LUNAS</span>";
                                            }
                                        ?>
                                </center></td>
                                <td><center><?php echo $b->jt; ?></center></td>
                                <td><center><?php echo $b->id_user; ?></center></td>
                                <td width="60px"><center>
                                <?php if(!$b->status){ ?>
                                    <a href="<?php echo base_url(); ?>pembayaran/inputpembayaran/<?php echo $b->id_pendaftaran?>" class="btn btn-sm btn-primary">LUNASI</a>   
                                <?php }else{ ?>
                                    <a href="#" class="btn btn-sm btn-primary disabled">LUNASI</a>   
                                <?php } ?>
                                </center></td>    
                            </tr>
                            <?php
                                $no++;                
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#tablependaftaran").DataTable();
</script>