<h2 class="page-title">
    Data Users
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="#" id="tambahusers" class="btn btn-info fa fa-plus mb-2"> TAMBAH</a>
            <div class="md-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tableusers">
                    <thead class>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th><center>ID User</center></th>
                            <th><center>Nama User</center></th>
                            <th><center>Nomor Hp User</center></th>
                            <th><center>Username</center></th>
                            <th><center>Level</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tboody>
                        <?php
                            $no = 1;
                            foreach ($users as $b){
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            <td><center><?php echo $b->id_user; ?></center></td>
                            <td><center><?php echo $b->nama; ?></center></td>    
                            <td><center><?php echo $b->no_hp; ?></center></td>
                            <td><center><?php echo $b->username; ?></center></td>
                            <td><center><?php echo $b->level; ?></center></td>
                            <td width="60px">
                                <a href="#" data-id="<?php echo $b->id_user; ?>" class="btn btn-primary btn-pill fa fa-pencil edit"></a>   
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
<div class="modal modal-blur fade" id="modalusers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data User</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputusers">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal edit users -->
<div class="modal modal-blur fade" id="modaleditusers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data User</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditusers">
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
        $("#tambahusers").click(function(){
            $("#modalusers").modal("show");
            $("#loadforminputusers").load("<?php echo base_url();?>users/inputusers");
        });

        $(".edit").click(function(){
            var id_user = $(this).attr("data-id");
            $("#modaleditusers").modal("show");
            $("#loadformeditusers").load("<?php echo base_url();?>users/editusers/"+id_user);
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

        $('#tableusers').DataTable();

    });
</script>