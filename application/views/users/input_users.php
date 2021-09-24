<form action="<?php echo base_url();?>users/simpanusers" class="formUsers" method="POST">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="no_hp" maxlength="13" placeholder="Nomor Hp">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group mb-3">
        <select name="level" class="form-select">
            <option value="">Privilege</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>Simpan</button>
    </div>
</form>
<script>
    $(function(){
        $('.formUsers').bootstrapValidator({
            fields: {
                id_user: {
                    message: 'ID tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*ID tidak boleh kosong !'
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
                no_hp: {
                    message: 'Nomor Hp tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nomor Hp tidak boleh kosong !'
                        }
                    }
                },
                username: {
                    message: 'username tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*username tidak boleh kosong !'
                        }
                    }
                },
                password: {
                    message: 'password tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*password tidak boleh kosong !'
                        }
                    }
                },
                level: {
                    message: 'level tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Level tidak boleh kosong'
                        }
                    }
                },
            }
        });
    });
</script>