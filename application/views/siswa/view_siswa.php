<h2 class="page-title">
    Data Siswa
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="#" id="tambahsiswa" class="btn btn-info fa fa-plus mb-2"> TAMBAH</a>
            <div class="md-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tablesiswa">
                    <thead class>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th><center>NIK</center></th>
                            <th><center>Nama Siswa</center></th>
                            <th><center>Nomor Hp</center></th>
                            <th><center>Nama Wali</center></th>
                            <th><center>Nomor Hp Wali</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tboody>
                        <?php
                            $no = 1;
                            foreach ($siswa as $b){
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><a href="#" data-detail="<?php echo $b->nik; ?>" class="btn btn-ghost-info detail"><?php echo $b->nik; ?></a></center></td>
                            <td><center><?php echo $b->nama; ?></center></td>    
                            <td><center><?php echo $b->no_hp; ?></center></td>
                            <td><center><?php echo $b->nama_wali; ?></center></td>
                            <td><center><?php echo $b->hp_wali; ?></center></td>
                            <td width="60px">
                                <a href="#" data-nik="<?php echo $b->nik; ?>" class="btn btn-primary btn-pill fa fa-pencil edit"></a>   
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
<!-- modal input siswa -->
<div class="modal modal-blur fade" id="modalsiswa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data Siswa</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputsiswa">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal edit siswa -->
<div class="modal modal-blur fade" id="modaleditsiswa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data Siswa</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditsiswa">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal detail siswa -->
<div class="modal modal-blur fade" id="modaldetailsiswa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Siswa</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformdetailsiswa">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#tambahsiswa").click(function(){
            $("#modalsiswa").modal("show");
            $("#loadforminputsiswa").load("<?php echo base_url();?>siswa/inputsiswa");
        });

        $(".edit").click(function(){
            var nik = $(this).attr("data-nik");
            $("#modaleditsiswa").modal("show");
            $("#loadformeditsiswa").load("<?php echo base_url();?>siswa/editsiswa/"+nik);
        });

        $(".detail").click(function(){
            var nik = $(this).attr("data-detail");
            $("#modaldetailsiswa").modal("show");
            $("#loadformdetailsiswa").load("<?php echo base_url();?>siswa/detailsiswa/"+nik);
        });

        $(".hapus").click(function(){
            var href = $(this).attr("data-href");
            $("#modalhapussiswa").modal("show");
            $("#hapussiswa").attr("href",href);
        });

        $('#tablesiswa').DataTable();

    });
</script>