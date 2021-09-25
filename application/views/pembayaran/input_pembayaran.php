<h2 class="page-title mb-3"> Pembayaran </h2>
<div><?php echo $this->session->flashdata('msg');?></div>
<?php $tagihan = $pendaftaran[0]->saldo - $totalbayar[0]->saldo?>
<form id="formpembayaran" method="POST" action="<?php echo base_url(); ?>pembayaran/insertpembayaran">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7v-1a2 2 0 0 1 2 -2h2" /><path d="M4 17v1a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v1" /><path d="M16 20h2a2 2 0 0 0 2 -2v-1" /><rect x="5" y="11" width="1" height="2" /><line x1="10" y1="11" x2="10" y2="13" /><rect x="14" y="11" width="1" height="2" /><line x1="19" y1="11" x2="19" y2="13" /></svg>
                        </span>
                        <input type="text" name="id_pendaftaran" readonly value="<?php echo $pendaftaran[0]->id_pendaftaran; ?>" id="id_pendaftaran" class="form-control" placeholder="ID Pendaftaran">
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                        </span>
                        <input type="hidden" name="nik" id="nik">
                        <input type="text" name="nama_siswa" id="nama_siswa" readonly value="<?php echo $pendaftaran[0]->nama ?>" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5H7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2V7a2 2 0 0 0 -2 -2h-2" /><rect x="9" y="3" width="6" height="4" rx="2" /><path d="M9 14l2 2l4 -4" /></svg>
                        </span>
                        <input type="hidden" name="id_program" id="id_program" value="<?php echo $pendaftaran[0]->id_program ?>">
                        <input type="text" name="nama_program" readonly value="<?php echo $pendaftaran[0]->nama_program ?>" id="nama_program" class="form-control" placeholder="Nama Program">
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="4" width="18" height="4" rx="2" /><path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" /><line x1="10" y1="12" x2="14" y2="12" /></svg>                        </span>
                        <input type="text" name="saldo" id="saldo" class="form-control" readonly value="<?php echo angka($pendaftaran[0]->saldo) ?>" placeholder="Payment">
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="4" width="18" height="4" rx="2" /><path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" /><line x1="10" y1="12" x2="14" y2="12" /></svg>                        </span>
                        <input type="text" name="tagihan" id="tagihan" class="form-control" readonly value="<?php echo angka($tagihan) ?>" placeholder="Payment">
                    </div>
                    <div class="form-group mb-3">
                    <label class="form-label">Tanggal Jatuh Tempo</label>  
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                            </span>  
                            <input type="text" name="jatuhtempo" readonly id="jatuhtempo" class="form-control" value="<?php echo $pendaftaran[0]->jt?>" placeholder="Jatuh Tempo">
                        </div>
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                        </span>
                        <input type="hidden" value="<?php echo $this->session->userdata('id_user'); ?>" name="id_user" id="id_user">
                        <input type="text" readonly value="<?php echo $this->session->userdata('id_user')." - ".$this->session->userdata('nama'); ?>" name="id_user" id="user" class="form-control" placeholder="ID User">
                    </div>
                </div>        
            </div>
        </div>
        <div class="col-md-7">
            <div class="card card-sm mb-3">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-blue text-white avatar mr-3" style="height: 5rem; width:5rem;">
                    <i class="fa fa-dollar" style="font-size:3rem"></i>
                    </span>
                    <div class="mr-3" style="width:100%">
                        <div class="form-group">
                            <label class="form-label" for="bayar">Bayar :</label>
                            <input class="form-control" type="number" name="bayar" id="bayar" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-icon mb-3">
                <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>Simpan</button>
            </div>
        </div>
    </div>
</form>
<!-- modal input siswa -->
<div class="modal modal-blur fade" id="modalsiswa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Siswa</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered" id="tablesiswa" style="width: 100%;">
                <colgroup>
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 5%;">
                </colgroup>
                    <thead class>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Siswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tboody>
                        <?php
                            $no = 1;
                            foreach ($siswa as $b){
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><a href="#" data-detail="<?php echo $b->nik; ?>" class="btn btn-ghost-info detail"><?php echo $b->nik; ?></a></td>
                            <td><?php echo $b->nama; ?></td>    
                            <td width="60px">
                                <a href="#" class="btn btn-sm btn-primary pilih" data-id="<?php echo $b->nik; ?>" data-nama= "<?php echo $b->nama; ?>">Pilih</a> 
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
<!-- modal input program -->
<div class="modal modal-blur fade" id="modalprogram" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Program</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table table-striped table-bordered" id="tableprogram" style="width:100%;">
                <colgroup>
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 5%;">
                </colgroup>
                    <thead class>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>ID Program</center></th>
                            <th><center>Nama Program</center></th>
                            <th><center>Harga</center></th>
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
                            <a href="#" class="btn btn-sm btn-primary pilihprog" data-harga="<?php echo $b->harga; ?>" data-idprog="<?php echo $b->id_program; ?>" data-namaprog= "<?php echo $b->nama_program; ?>">Pilih</a>
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
<!-- load modal diskon -->
<div class="modal modal-blur fade" id="modaldiskon" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Diskon</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table table-striped table-bordered" id="tablediskon" style="width:100%;">
                <colgroup>
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 35%;">
                    <col span="1" style="width: 5%;">
                </colgroup>
                    <thead class>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>ID Diskon</center></th>
                            <th><center>Nama Diskon</center></th>
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
                            <td align="right"><?php echo number_format($b->value_dis,'0','','.'); ?></td>
                            <td width="60px">
                            <a href="#" class="btn btn-sm btn-primary pilihdiskon" data-jenis="<?php echo $b->jenis; ?> " data-diskon="<?php echo $b->value_dis; ?>" data-iddis="<?php echo $b->id_diskon; ?>" data-namadis= "<?php echo $b->nama; ?>">Pilih</a>
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
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('tgl_pendaftaran'), {
  	});
  });
</script>
<script>
    $(function(){
        function getJatuhtempo(){
            var tgl_pendaftaran = $("#tgl_pendaftaran").val();
            $.ajax({
                type : 'POST',
                url  : '<?php echo base_url(); ?>pendaftaran/getJatuhtempo',
                data : {
                    tgl_pendaftaran: tgl_pendaftaran
                },
                cache : false,
                success:function(respond){
                    $("#jatuhtempo").val(respond);
                }
            });
        }

        getJatuhtempo();

        
    });
    $("#formpendaftaran").submit(function(){
        var id_pendaftaran = $("#id_pendaftaran").val();
        var nama_siswa = $("#nama_siswa").val();
        var nama_program = $("#nama_program").val();
        var diskon = $("#diskon").val();
        var dp = $("#dp").val();

        if(id_pendaftaran == ""){
            swal("Opps", "ID Pendaftaran Kosong", "warning");
            return false;
        }else if(nama_siswa == ""){
            swal("Opps", "Nama Siswa Kosong", "warning");
            return false;
        }else if(nama_program == ""){
            swal("Opps", "Program Kosong", "warning");
            return false;
        }else if(diskon == ""){
            swal("Opps", "Diskon Kosong", "warning");
            return false;
        }else if(dp == ""){
            swal("Opps", "Down Payment Kosong", "warning");
            return false;
        }else{
            location.replace("<?php echo base_url(); ?>pendaftaran/insertpendaftaran");
        }
    });
    //load modal siswa
    // $("#nama_siswa").click(function(){
    //     $("#modalsiswa").modal("show");
    // });
    // $("#tablesiswa").DataTable();

    $(".pilih").click(function(){
        var nik = $(this).attr("data-id");
        var nama= $(this).attr("data-nama");

        $("#nik").val(nik);
        $("#nama_siswa").val(nama);
        $("#modalsiswa").modal("hide"); 
    });
    //load modal program
    // $("#nama_program").click(function(){
    //     $("#modalprogram").modal("show");
    // });
    // $("#tableprogram").DataTable();

    $(".pilihprog").click(function(){
        var id_program = $(this).attr("data-idprog");
        var nama_program= $(this).attr("data-namaprog");
        var harga = $(this).attr("data-harga");

        var formatnumber = numeral(harga).format('0,0');
        $("#id_program").val(id_program);
        $("#nama_program").val(nama_program);
        $("#harga-diskon").val(harga);
        $("#total").text(formatnumber);
        
        $("#modalprogram").modal("hide"); 
    });
    //load modal diskon
    // $("#diskon").click(function(){
    //     $("#modaldiskon").modal("show");
    // });
    // $("#tablediskon").DataTable();

    $(".pilihdiskon").click(function(){
        var id_diskon = $(this).attr("data-iddis");
        var nama_diskon= $(this).attr("data-namadis");
        var value = $(this).attr("data-diskon");
        var harga = document.getElementById("harga-diskon").value;
        var jenis = $(this).attr("data-jenis");
        
        var total = harga - value;
        
        var formatnumber = numeral(total).format('0,0');
        $("#id_diskon").val(id_diskon);
        $("#diskon").val(nama_diskon);
        $("#total").text(formatnumber);
        $("#value-dp").val(total);
        
        $("#modaldiskon").modal("hide"); 
        
    });

    function down(){
        var dp = document.getElementById("dp").value;
        var value = document.getElementById("value-dp").value;

        var total = value-dp;
        $("#total-value").val(total);

        var formatnumber = numeral(total).format('0,0');
        $("#total").text(formatnumber);
    }

</script>