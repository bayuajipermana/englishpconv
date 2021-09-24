<h2 class="page-title">
    Data Program
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="#" id="tambahprogram" class="btn btn-info fa fa-plus mb-2"> TAMBAH</a>
            <div class="md-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tableprogram">
                    <thead class>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th width="80px"><center>ID Program</center></th>
                            <th><center>Nama Program</center></th>
                            <th width="100px"><center>Harga</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tboody>
                        <?php
                            $no = 1;
                            foreach ($program as $b){
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><?php echo $b->id_program; ?></center></td>
                            <td><center><?php echo $b->nama_program; ?></center></td>    
                            <td align="right"><?php echo number_format($b->harga,'0','','.'); ?></td>
                            <td width="60px">
                                <a href="#" data-id="<?php echo $b->id_program; ?>" class="btn btn-primary btn-pill fa fa-pencil edit"></a>   
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
<!-- modal input users -->
<div class="modal modal-blur fade" id="modalprogram" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data Program</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputprogram">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal edit program -->
<div class="modal modal-blur fade" id="modaleditprogram" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data Program</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditprogram">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal detail users -->
<div class="modal modal-blur fade" id="modaldetailusers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Users</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformdetailusers">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#tambahprogram").click(function(){
            $("#modalprogram").modal("show");
            $("#loadforminputprogram").load("<?php echo base_url();?>program/inputprogram");
        });

        $(".edit").click(function(){
            var id_program = $(this).attr("data-id");
            $("#modaleditprogram").modal("show");
            $("#loadformeditprogram").load("<?php echo base_url();?>program/editprogram/"+id_program);
        });

        $(".detail").click(function(){
            var id_user = $(this).attr("data-detail");
            $("#modaldetailusers").modal("show");
            $("#loadformdetailusers").load("<?php echo base_url();?>users/detailusers/"+id_user);
        });

        $(".hapus").click(function(){
            var href = $(this).attr("data-href");
            $("#modalhapussiswa").modal("show");
            $("#hapussiswa").attr("href",href);
        });

        $('#tableprogram').DataTable();

    });
</script>