<form action="<?php echo base_url();?>siswa/updatesiswa" class="formSiswa" method="POST">
    <div class="form-group mb-3">
        <label class="form-label">NIK</label>
        <input type="text" readonly value="<?php echo $siswa['nik'] ?>" class="form-control" name="nik" placeholder="NIK">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" readonly value="<?php echo $siswa['nama'] ?>" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
    <div class="form-group mb-3">
        <?php
            $tgl = substr($siswa['tgl_lahir'], -2);
            $bln = substr($siswa['tgl_lahir'], -5,2);
            $thn = substr($siswa['tgl_lahir'], 0,4);
        ?>
        <label class="form-label">Alamat</label>
        <input type="text" readonly value="<?php echo $siswa['alamat'] ?>" class="form-control" name="alamat" placeholder="Alamat">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nomor Hp Siswa</label>
        <input type="text" readonly value="<?php echo $siswa['no_hp'] ?>" class="form-control" name="no_hp" maxlength="13" placeholder="No HP">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Asal sekolah</label>
        <input type="text" readonly value="<?php echo $siswa['asal_sekolah'] ?>" class="form-control" name="asal" placeholder="Asal Sekolah">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" readonly value="<?php echo $siswa['kelas'] ?>" class="form-control" name="kelas" placeholder="Kelas">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="text" readonly value="<?php echo $tgl."-".$bln."-".$thn; ?>" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Wali</label>
        <input type="text" readonly value="<?php echo $siswa['nama_wali'] ?>" class="form-control" name="nama_wali" placeholder="Nama Wali">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nomor Hp Wali</label>
        <input type="text" readonly value="<?php echo $siswa['hp_wali'] ?>" class="form-control" name="hp_wali" maxlength="13" placeholder="No Hp Wali">
    </div>
</form>
<script>
    $(function(){
        $('.formBarang').bootstrapValidator({
            fields: {
                nik: {
                    message: 'NIK tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*NIK tidak boleh kosong !'
                        }
                    }
                },
                nama: {
                    message: 'Nama tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama tidak boleh kosong !'
                        }
                    }
                },
                alamat: {
                    message: 'alamat tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Alamat tidak boleh kosong !'
                        }
                    }
                },
                no_hp: {
                    message: 'Nomor Hp tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nomor Hp tidak boleh kosong !'
                        }
                    }
                },
                asal: {
                    message: 'Asal sekolah tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Asal sekolah tidak boleh kosong !'
                        }
                    }
                },
                kelas: {
                    message: 'Kelas tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Kelas tidak boleh kosong !'
                        }
                    }
                },
                hari: {
                    message: 'tanggal tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Tanggal'
                        }
                    }
                },
                bulan: {
                    message: 'bulan tidak valid !',
                    validators: {
                        notEmpty: {
                            message: ', Bulan'
                        }
                    }
                },
                tahun: {
                    message: 'tahun tidak valid !',
                    validators: {
                        notEmpty: {
                            message: ', dan Tahun tidak boleh kosong !'
                        }
                    }
                },
                nama_wali: {
                    message: 'nama wali tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama Wali tidak boleh kosong !'
                        }
                    }
                },
                hp_wali: {
                    message: 'No Hp wali tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nomor Hp Wali tidak boleh kosong !'
                        }
                    }
                },
            }
        });
    });
</script>