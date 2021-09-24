<form action="<?php echo base_url();?>diskon/simpandiskon" class="formDiskon" method="POST">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="id_diskon" maxlength="5" placeholder="ID Diskon">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="nama" maxlength="50" placeholder="Nama Program Diskon">
    </div>
    <div class="form-group mb-3">
        <select name="jenis" class="form-select">
            <option value="">Jenis Diskon</option>
            <option value="potongan">Potongan Langsung</option>
            <option value="persen">Persentase</option>
            <option value="admin">Bebas Biaya Admin</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="value" maxlength="50" placeholder="Value Diskon">
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>Simpan</button>
    </div>
</form>
<script>
    $(function(){
        $('.formDiskon').bootstrapValidator({
            fields: {
                id_diskon: {
                    message: 'ID tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*ID tidak boleh kosong !'
                        }
                    }
                },
                nama: {
                    message: 'Nama diskon tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama diskon tidak boleh kosong !'
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
                value: {
                    message: 'Value tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Value tidak boleh kosong !'
                        }
                    }
                },
            }
        });
    });
</script>