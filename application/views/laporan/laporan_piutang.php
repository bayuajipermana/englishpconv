<h2 class="page-title">
Laporan Piutang
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3 col-xs-12">
                        <div class="input-icon">
                            <label class="form-label">Status:</label>
                            <select id="program" class="form-control" name="program">
                                <option value="0">Belum Lunas</option>
                                <option value="1">Lunas</option>    
                                <option value="All"> Show All</option>    
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="input-icon">
                            <label class="form-label">Export</label>
                            <a id="export_excel" href="getDataLapPiutang_Excel?" class="btn btn-block btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg> Excel</a>
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
                            <th><center>Harga Program</center></th>
                            <th><center>Diskon</center></th>
                            <th><center>Biaya Lain-Lain</center></th>
                            <th><center>Harga Jadi</center></th>
                            <th><center>Telah Terbayarkan</center></th>
                            <th><center>Sisa Piutang</center></th>
                        </tr>
                    </thead>
                    <tbody id="tbody-lappembayaran">
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10" style="text-align:right">Total : </td>
                            <td style="text-align:right"><span id="total_piutang"></span></td>
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
            if (angka == null) {
                angka = 0;
            }
            var number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
            split           = number_string.split(','),
            sisa            = split[0].length % 3,
            rupiah          = split[0].substr(0, sisa),
            ribuan          = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

    function getData(){
        var program = $('#program').val();
        var href = "getDataLapPiutang_Excel?program="+program;
        $("#export_excel").attr('href',href);

        $.ajax({
            url : "getDataLapPiutang",
            type : "POST",
            data : {
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
                        //var piutang = (result[i].saldo*1) - (result[i].total_bayar*1);
                        console.log("price : "+result[i].price);
                        console.log("diskon : "+result[i].diskon);
                        console.log("biayalain : "+result[i].biayalain);
                        console.log("saldo : "+result[i].saldo);
                        console.log("terbayarkan : "+result[i].terbayarkan);
                        console.log("piutang : "+result[i].piutang);

                        html += "<tr>"
                        html += "<td>"+no+"</td>"
                        html += "<td>"+result[i].id_pendaftaran+"</td>"
                        html += "<td>"+result[i].nama+"</td>"
                        html += "<td>"+result[i].nama_program+"</td>"
                        html += "<td>"+result[i].jt+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].price)+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].diskon)+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].biayalain)+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].saldo)+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].terbayarkan)+"</td>"
                        html += "<td style='text-align:right'>"+formatRupiah(result[i].piutang)+"</td>"
                        html += "</tr>"

                        totalPiutang = (totalPiutang*1) + (result[i].piutang*1);
                        no++;
                    }

                    var totalPiutangFormated = formatRupiah(totalPiutang);
                    $("#tbody-lappembayaran").html(html);
                    $("#total_piutang").html(totalPiutangFormated);
                    
                }else{
                    var html = "<tr><td class='bg-light text-muted' colspan=7 style='text-align:center'>Tidak ada data</td></tr>";
                    $("#tbody-lappembayaran").html(html);
                    $("#total_piutang").html("0");
                }


            }
        })   
    }
</script>