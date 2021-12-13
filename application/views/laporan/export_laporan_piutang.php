
<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan_Piutang.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");

 
 ?>
<table class="table table-striped table-bordered" id="table-lappembayaran">
    <thead>
        <tr><th width="30px"><center>No</center></th>
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
        <?php
            $no = 1;
            $total_piutang=0; 
            foreach($x as $y){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $y->id_pendaftaran; ?></td>
            <td><?php echo $y->nama; ?></td>
            <td><?php echo $y->nama_program; ?></td>
            <td><?php echo $y->jt; ?></td>
            <td><?php echo $y->price; ?></td>
            <td><?php echo $y->diskon; ?></td>
            <td><?php echo $y->biayalain; ?></td>
            <td><?php echo $y->saldo; ?></td>
            <td><?php echo $y->terbayarkan; ?></td>
            <td><?php echo $y->piutang; ?></td>
        </tr>
        <?php
            $total_piutang += $y->piutang;        
            }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="10" style="text-align:right">Total :  </td>
            <td style="text-align:right"><span id="total_bayar"><?php echo $total_piutang ?></span></td>
        </tr>
    </tfoot>
</table>