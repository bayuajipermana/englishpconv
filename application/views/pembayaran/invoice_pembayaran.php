<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">
                  Invoice
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ml-auto d-print-none">
                <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><rect x="7" y="13" width="10" height="8" rx="2" /></svg>
                Print Invoice
                </button>
            </div>
        </div>
    </div>
    <div class="card card-lg" >
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                  <p class="h3">English Plus Conversation</p>
                  <address>
                    Perum Jatisari Indah Blok A1 No. 16<br>
                    Mijen, Semarang<br>
                    0823-2923-2167 / 0857-1200-3037<br>
                    <?php echo "Authorize - Miss. ".$user[0]->nama; ?>
                  </address>
                </div>
                <div class="col-6 text-right">
                  <p class="h3"><?php echo $pendaftaran[0]->nama ?></p>
                  <address>
                    <?php echo "ID ".$pendaftaran[0]->nik ?><br>
                    <?php echo "Tanggal ".date('d-m-Y',strtotime($pendaftaran[0]->tgl_pendaftaran)); ?><br>
                    <?php echo "Jatuh Tempo ".date('d-m-Y',strtotime($pendaftaran[0]->jt)); ?><br>
                    <?php if($pembayaran[0]->metode_bayar == 'cash'){ echo "Cash";}else if($pembayaran[0]->metode_bayar == 'trfbca'){ echo "Transfer BCA";}else if($pembayaran[0]->metode_bayar == 'trfbri'){ echo "Transfer BRI";}; ?>
                  </address>
                </div>
                <div class="col-12 my-1">
                  <h1>Invoice <?php echo $pendaftaran[0]->id_pendaftaran.'/'.$pembayaran[0]->id_pembayaran?></h1>
                </div>
            </div>
            <table class="table table-transparent table-responsive">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 1%"></th>
                        <th>Program Belajar</th>
                        <th class="text-right" style="width: 1%">Harga</th>
                        <th class="text-right" style="width: 1%">Diskon</th>
                        <th class="text-right" style="width: 1%">Total</th>
                  </tr>
                </thead>
                <tr>
                  <td class="text-center"><?php $no=1; echo $no ?></td>
                  <td>
                    <p class="strong mb-1"><?php echo $pendaftaran[0]->nama_program ?></p>
                  </td>
                  <td class="text-right"><?php echo angka($pendaftaran[0]->price) ?></td>
                  <td class="text-right"><?php echo angka($pendaftaran[0]->diskon) ?></td>
                  <?php
                  
                  $subtotal = $pendaftaran[0]->price - $pendaftaran[0]->diskon;
                  
                  ?>
                  <td class="text-right"><?php echo angka($subtotal) ?></td>
                </tr>
                <?php
                  if (count($biaya)>0) { 
                     foreach($biaya as $b){
                    
                    ?>

                <tr>
                  <td class="text-center"><?php echo ++$no ?></td>
                  <td>
                    <p class="strong mb-1"><?php echo $b->keterangan ?></p>
                  </td>
                  <td class="text-right"><?php echo angka($b->nominal) ?></td>
                  <td class="text-right"><?php echo angka(0) ?></td>
                  <td class="text-right"><?php echo angka($subtotal += $b->nominal) ?></td>
                </tr>
                    
                <?php }
                }
                
                ?>
                <tr>
                  <td colspan="4" class="font-weight-bold text-right">Terbayarkan</td>
                  <td class="font-weight-bold text-right"><?php echo angka($pembayaran[0]->saldo) ?></td>
                </tr>
                <tr>
                  <td colspan="4" class="font-weight-bold text-right">Sisa Piutang</td>
                  <td class="font-weight-bold text-right"><?php echo angka($pendaftaran[0]->saldo - $totalbayar[0]->saldo - $pembayaran[0]->saldo) ?></td>
                </tr>
              </table>
              <p class="text-muted text-center mt-2"><?php date_default_timezone_set("Asia/Jakarta"); echo "Tercetak Tanggal ".date("d-m-Y")." Pukul ".date("H:i:s");  ?></p>
            </div>
          </div>
</div>