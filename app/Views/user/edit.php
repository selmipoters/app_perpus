<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Tambah Data User
        </h3>
    </div>
    <!--begin::Form-->
    <?php echo form_open(base_url('user/edit_simpan/' . $user['kd_user']), ' class="form-horizontal"') ?>
    <div class="card-body">
        <div class="form-group row">
            <label class="col-2 col-form-label">Kode User</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $user['kd_user'] ?>" id="example-text-input" name="kd_user" readonly />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Nama</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $user['nama'] ?>" id="example-text-input" name="nama" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Username</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $user['username'] ?>" id="example-text-input" name="username" />
            </div>
        </div>
        <div class="form-group row">
            <label for="example-email-input" class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input class="form-control" type="email" value="<?php echo $user['email'] ?>" id="example-email-input" name="email" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tentang Anda</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $user['tentang'] ?>" id="example-text-input" name="tentang" />
            </div>
        </div>
        <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" type="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" id="example-password-input" name="password" />
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>