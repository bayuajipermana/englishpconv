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
    <div class="card card-lg">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                  <p class="h3">Company</p>
                  <address>
                    Street Address<br>
                    State, City<br>
                    Region, Postal Code<br>
                    ltd@example.com
                  </address>
                </div>
                <div class="col-6 text-right">
                  <p class="h3"><?php echo $pendaftaran[0]->nama ?></p>
                  <address>
                    <?php echo $pendaftaran[0]->nik ?>
                  </address>
                </div>
                <div class="col-12 my-5">
                  <h1>Invoice <?php echo $pendaftaran[0]->id_pendaftaran.'/'.$pembayaran[0]->id_pembayaran?></h1>
                </div>
            </div>
            <table class="table table-transparent table-responsive">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 1%"></th>
                        <th>Program Belajar</th>
                        <th class="text-right" style="width: 1%">Price</th>
                        <th class="text-right" style="width: 1%">Amount</th>
                  </tr>
                </thead>
                <tr>
                  <td class="text-center">1</td>
                  <td>
                    <p class="strong mb-1"><?php echo $pendaftaran[0]->nama_program ?></p>
                  </td>
                  <td class="text-right"><?php echo angka($pendaftaran[0]->saldo) ?></td>
                  <td class="text-right"><?php echo angka($pendaftaran[0]->saldo) ?></td>
                </tr>
                <tr>
                  <td colspan="3" class="font-weight-bold text-uppercase text-right">Total</td>
                  <td class="font-weight-bold text-right"><?php echo angka($pendaftaran[0]->saldo) ?></td>
                </tr>
                <tr>
                  <td colspan="3" class="font-weight-bold text-uppercase text-right">Paid off</td>
                  <td class="font-weight-bold text-right"><?php echo angka($totalbayar[0]->saldo) ?></td>
                </tr>
                <tr>
                  <td colspan="3" class="font-weight-bold text-uppercase text-right">Remaining</td>
                  <td class="font-weight-bold text-right"><?php echo angka($pendaftaran[0]->saldo - $totalbayar[0]->saldo) ?></td>
                </tr>
              </table>
              <p class="text-muted text-center mt-5">Thank you very much for doing business with us. We look forward to working with
                you again!</p>
            </div>
          </div>
</div>