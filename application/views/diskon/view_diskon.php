<h2 class="page-title">
    Data Diskon
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="#" id="tambahdiskon" class="btn btn-info fa fa-plus mb-2"> TAMBAH</a>
            <div class="md-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tablediskon">
                    <thead class>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th><center>ID Diskon</center></th>
                            <th><center>Nama Program Diskon</center></th>
                            <th><center>Jenis Diskon</center></th>
                            <th><center>Value</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tboody>
                        <?php
                            $no = 1;
                            foreach ($diskon as $b){
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><?php echo $b->id_diskon; ?></center></td>
                            <td><center><?php echo $b->nama; ?></center></td>    
                            <td><center><?php echo $b->jenis; ?></center></td>
                            <td><center><?php echo $b->value_dis; ?></center></td>
                            <td width="60px">
                                <a href="#" data-id="<?php echo $b->id_diskon; ?>" class="btn btn-primary btn-pill fa fa-pencil edit"></a>   
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
<!-- modal input diskon -->
<div class="modal modal-blur fade" id="modaldiskon" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data Diskon</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputdiskon">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal edit diskon -->
<div class="modal modal-blur fade" id="modaleditdiskon" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data Diskon</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditdiskon">
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
        $("#tambahdiskon").click(function(){
            $("#modaldiskon").modal("show");
            $("#loadforminputdiskon").load("<?php echo base_url();?>diskon/inputdiskon");
        });

        $(".edit").click(function(){
            var id_diskon = $(this).attr("data-id");
            $("#modaleditdiskon").modal("show");
            $("#loadformeditdiskon").load("<?php echo base_url();?>diskon/editdiskon/"+id_diskon);
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

        $('#tablediskon').DataTable();

    });
</script>