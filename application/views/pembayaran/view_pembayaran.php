<h2 class="page-title">
    Data Pembayaran Siswa
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="tablependaftaran">
                    <thead class>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th><center>ID Pendaftaran</center></th>
                            <th><center>Nama Siswa</center></th>
                            <th><center>Program Belajar</center></th>
                            <th><center>Tanggal Bayar</center></th>
                            <th><center>Jumlah Bayar</center></th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tboody>
                        <?php
                            $no = 1;
                            foreach ($pembayaran as $b){
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><?php echo $b->id_pendaftaran; ?></a></center></td>
                            <td><center><?php echo $b->nama; ?></center></td>    
                            <td><center><?php echo $b->nama_program; ?></center></td>
                            <td><center><?php echo $b->tgl_bayar; ?></center></td>
                            <td><center><?php echo angka($b->saldo); ?></center></td>
                            <td width="60px">
                                <a href="#" data-nik="<?php echo $b->id_pembayaran; ?>" class="btn btn-sm btn-primary">Edit</a>   
                            </td>    
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
<script>
    $("#tablependaftaran").DataTable();
</script>