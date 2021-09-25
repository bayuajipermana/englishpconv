<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan_Pembayaran.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");

 
 ?>
 
 
 <table class="table table-striped table-bordered" id="table-lappembayaran">
                    <thead>
                        <tr>
                            <th width="30px"><center>No</center></th>
                            <th><center>ID Pendaftaran</center></th>
                            <th><center>Nama Siswa</center></th>
                            <th><center>Program Belajar</center></th>
                            <th><center>Jatuh Tempo</center></th>
                            <th><center>Total Piutang</center></th>
                            <th><center>Jumlah Bayar</center></th>
                        </tr>
                    </thead>
                    <tbody id="tbody-lappembayaran">
                        <?php 
                            $no=1; 
                            $total_piutang=0; 
                            $total_bayar=0; 
                        
                            foreach($pendaftaran as $p){ ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $p->id_pendaftaran ?></td>
                                <td><?php echo $p->nama ?></td>
                                <td><?php echo $p->nama_program ?></td>
                                <td><?php echo $p->jt ?></td>
                                <td><?php echo $p->saldo ?></td>
                                <td><?php echo $p->total_bayar ?></td>
                            </tr>
                        <?php 
                                $total_piutang += $p->saldo;
                                $total_bayar += $p->total_bayar;
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="text-align:right"></td>
                            <td style="text-align:right"></td>
                            <td style="text-align:right"></td>
                            <td style="text-align:right"></td>
                            <td tyle="text-align:right">Total : </td>
                            <td style="text-align:right"><span id="total_piutang"><?php echo $total_piutang?></span></td>
                            <td style="text-align:right"><span id="total_bayar"><?php echo $total_bayar ?></span></td>
                        </tr>
                    </tfoot>
                </table>
