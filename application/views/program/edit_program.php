<form action="<?php echo base_url();?>program/updateprogram" class="formProgram" method="POST">
    <div class="form-group mb-3">
        <label class="form-label">ID Program</label>  
        <input type="text" readonly value="<?php echo $program['id_program'] ?>" class="form-control" name="id_program" placeholder="ID Program">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Program</label>  
        <input type="text" value="<?php echo $program['nama_program'] ?>" class="form-control" name="nama_program" placeholder="Nama Program">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Harga</label>  
        <input type="text" value="<?php echo $program['harga'] ?>" class="form-control" name="harga" placeholder="Harga">
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
        Update</button>
    </div>
</form>
<script>
    $(function(){
        $('.formProgram').bootstrapValidator({
            fields: {
                id_program: {
                    message: 'id program tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*ID Program tidak boleh kosong !'
                        }
                    }
                },
                nama_program: {
                    message: 'Nama tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama Program tidak boleh kosong !'
                        }
                    }
                },
                harga: {
                    message: 'Harga tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Harga tidak boleh kosong !'
                        }
                    }
                },
            }
        });
    });
</script>