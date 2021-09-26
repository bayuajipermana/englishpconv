<h2 class="page-title">
Laporan Pembayaran
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3 col-xs-12">
                        <div class="input-icon">
                            <label class="form-label">Tgl Awal:</label>
                            <input id="tglawal" class="form-control" type="date" name="tglawal" value="<?php echo date('Y-m-01') ?>"/>  
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="input-icon">
                            <label class="form-label">Tgl Akhir:</label>
                            <input id="tglakhir" class="form-control" type="date" name="tglakhir" value="<?php echo date('Y-m-d') ?>"/>  
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="input-icon">
                            <label class="form-label">Program:</label>
                            <select id="program" class="form-control" name="program">
                                <option value="All"> Show All</option>
                                <?php foreach ($program as $p) { ?>
                                <option value="<?php echo $p->id_program ?>"><?php echo $p->nama_program ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="input-icon">
                            <label class="form-label">Export</label>
                            <a id="export_excel" href="getDataLapPembayaran_Excel?" class="btn btn-block btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg> Excel</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table-lappembayaran">
                    <thead>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th><center>ID Pendaftaran</center></th>
                            <th><center>Nama Siswa</center></th>
                            <th><center>Program Belajar</center></th>
                            <th><center>Jatuh Tempo</center></th>
                            <th><center>Tanggal Bayar</center></th>
                            <th><center>Sisa Piutang</center></th>
                            <th><center>Jumlah Bayar</center></th>
                        </tr>
                    </thead>
                    <tbody id="tbody-lappembayaran">
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" style="text-align:right">Total : </td>
                            <td style="text-align:right"><span id="total_piutang"></span></td>
                            <td style="text-align:right"><span id="total_bayar"></span></td>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="tex"></script>
<script>
    $(function(){
          getData();
    });

    $("#tglawal").change(function(){
        getData();
    })


    $("#tglakhir").change(function(){
        getData();
    })


    $("#program").change(function(){
        getData();
    })


    function formatRupiah(angka, prefix){
			var number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}

    function getData(){
        var tglawal = $('#tglawal').val();
        var tglakhir = $('#tglakhir').val();
        var program = $('#program').val();
        var href = "getDataLapPembayaran_Excel?tglawal="+tglawal+"&tglakhir="+tglakhir+"&program="+program;
        $("#export_excel").attr('href',href);

        $.ajax({
            url : "getDataLapPembayaran",
            type : "POST",
            data : {
                tglawal : tglawal,
                tglakhir : tglakhir,
                program : program
            },
            dataType : "JSON",
            success : function(result){
                if (result.length !== 0) {
                    no = 1;
                    var html = "";
                    var totalPiutang = 0;
                    var totalBayar = 0;
                    for (let i = 0; i < result.length; i++) {
                        var piutang = (result[i].saldo*1) - (result[i].total_bayar*1);

                        html += "<tr>"
                        html += "<td>"+no+"</td>"
                        html += "<td>"+result[i].id_pendaftaran+"</td>"
                        html += "<td>"+result[i].nama+"</td>"
                        html += "<td>"+result[i].nama_program+"</td>"
                        html += "<td>"+result[i].jt+"</td>"
                        html += "<td>"+result[i].tgl_bayar+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(piutang)+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].jml_bayar)+"</td>"
                        html += "</tr>"

                        totalPiutang = (totalPiutang*1) + (piutang*1);
                        totalBayar = (totalBayar*1) + (result[i].jml_bayar*1);
                        no++;
                    }

                    var totalPiutangFormated = formatRupiah(totalPiutang);
                    var totalBayarFormated = formatRupiah(totalBayar);
                    $("#tbody-lappembayaran").html(html);
                    $("#total_piutang").html(totalPiutangFormated);
                    $("#total_bayar").html(totalBayarFormated);

                }else{
                    var html = "<tr><td class='bg-light text-muted' colspan=7 style='text-align:center'>Tidak ada data</td></tr>";
                    $("#tbody-lappembayaran").html(html);
                    $("#total_piutang").html("0");
                    $("#total_bayar").html("0");
                }


            }
        })   
    }
</script>