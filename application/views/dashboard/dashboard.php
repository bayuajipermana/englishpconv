<h2 class="page-title">
    Dashboard
</h2>
<div class="alert alert-success" role="alert">
  <!-- SVG icon code with class="mr-1" -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon mr-1" width="24" height="24" viewBox="0 0 24 24" 
  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" />
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 11l2 2l4 -4" /></svg>
  Selamat datang <b><?php echo ucwords($this->session->userdata('level'))." "; echo $this->session->userdata('nama'); ?></b> 
</div>
<div class="row">
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-blue text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            Jumlah Siswa
          </div>
          <div class="text-muted">90 Siswa</div>
        </div>
      </div>
      </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-green text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="7" y1="21" x2="7" y2="3" /><path d="M20 18l-3 3l-3 -3" /><path d="M4 18l3 3l3 -3" /><line x1="17" y1="21" x2="17" y2="3" /></svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            Pembayaran hari ini
          </div>
          <div class="text-muted">Rp1.000.000</div>
        </div>
      </div>
      </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-yellow text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            Pembayaran bulan ini
          </div>
          <div class="text-muted">Rp20.0000.0000</div>
        </div>
      </div>
      </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-cyan text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 11h6m-3 -3v6" /></svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            Siswa yang akan lulus
          </div>
          <div class="text-muted">40</div>
        </div>
      </div>
      </div>
  </div>
</div>
<div class="row mt-3">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Grafik Penjualan</h3>
      </div>
      <div class="card-body">
        <p></p>
      </div>
    </div>
  </div>
</div>  