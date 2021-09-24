<form action="<?php echo base_url();?>diskon/updatediskon" class="formDiskon" method="POST">
    <div class="form-group mb-3">
        <label class="form-label">ID Diskon</label>  
        <input type="text" readonly value="<?php echo $diskon['id_diskon'] ?>" class="form-control" name="id_diskon" placeholder="ID Diskon">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Program Diskon</label>  
        <input type="text" value="<?php echo $diskon['nama'] ?>" class="form-control" name="nama" placeholder="Nama Program Diskon">
    </div>
    <div class="form-group mb-3">
        <select name="jenis" class="form-select">
            <option value="">Jenis Diskon</option>
            <option <?php if($diskon['jenis']=="potongan"){echo "selected";} ?> value="potongan">Potongan Langsung</option>
            <option <?php if($diskon['jenis']=="persen"){echo "selected";} ?> value="persen">Persentase</option>
            <option <?php if($diskon['jenis']=="admin"){echo "selected";} ?> value="admin">Bebas Biaya Admin</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Value</label>  
        <input type="text" value="<?php echo $diskon['value_dis'] ?>" class="form-control" name="value" placeholder="Value">
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
        Update</button>
    </div>
</form>
<script>
    $(function(){
        $('.formDiskon').bootstrapValidator({
            fields: {
                id_diskon: {
                    message: 'id program tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*ID Diskon tidak boleh kosong !'
                        }
                    }
                },
                nama: {
                    message: 'Nama tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama Program Diskon tidak boleh kosong !'
                        }
                    }
                },
                value: {
                    message: 'Harga tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Value tidak boleh kosong !'
                        }
                    }
                },
                jenis: {
                    message: 'Jenis tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Jenis tidak boleh kosong !'
                        }
                    }
                },
            }
        });
    });
</script>