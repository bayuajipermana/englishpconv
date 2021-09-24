<form action="<?php echo base_url();?>users/updateusers" class="formUsers" method="POST">
    <div class="form-group mb-3">
        <label class="form-label">ID USER</label>  
        <input type="text" readonly value="<?php echo $users['id_user'] ?>" class="form-control" name="id_user" placeholder="NIK">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama User</label>  
        <input type="text" value="<?php echo $users['nama'] ?>" class="form-control" name="nama" placeholder="Nama">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nomor Hp</label>  
        <input type="text" value="<?php echo $users['no_hp'] ?>" class="form-control" name="no_hp" placeholder="Nomor HP">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Username</label>  
        <input type="text" value="<?php echo $users['username'] ?>" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Password</label>  
        <input type="password" value="<?php echo $users['password'] ?>" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Level</label>
        <select name="level" class="form-select">
            <option value="">Level</option>
            <option <?php if($users['level']=="admin"){echo "selected";} ?> value="admin">Admin</option>
            <option <?php if($users['level']=="user"){echo "selected";} ?> value="user">User</option>
        </select>
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
        Update</button>
    </div>
</form>
<script>
    $(function(){
        $('.formUsers').bootstrapValidator({
            fields: {
                id_user: {
                    message: 'id_user tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*ID User tidak boleh kosong !'
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
                    message: 'Username tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Username tidak boleh kosong !'
                        }
                    }
                },
                password: {
                    message: 'Password tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Password tidak boleh kosong !'
                        }
                    }
                },
                level: {
                    message: 'Level tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Level tidak boleh kosong !'
                        }
                    }
                },
            }
        });
    });
</script>